<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\ArticleRequest;
use App\Http\Requests\UpdateArticle;
use App\Models\Affiliation;
use App\Models\Article;
use App\Models\ArticleDetail;
use App\Models\ArticleKeyword;
use App\Models\Author;
use App\Models\Journal;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use League\ISO3166\ISO3166;

class ArticleController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $articles = Article::with(['journal', 'issue'])
            ->latest()
            ->get();
        return view('admin.article.index', compact('articles'));
    }


    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $iso3166 = new ISO3166();
        $countries = $iso3166->all();
        $journals = Journal::select('id', 'name')->get();
        return view('admin.article.create', compact('journals', 'countries'));
    }

    private function create_article_code()
    {
        $latestArticle = Article::latest()->first();
        $articleCode = optional($latestArticle)->article_code + 1 ?? 1;
        return $articleCode;
    }


    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $affiliation_array = [];
        foreach ($request->affiliation as $affiliation) {
            if (!empty($affiliation['name']) && !empty($affiliation['country'])) {
                $affiliation_array[] = [
                    'name' => $affiliation['name'],
                    'country' => $affiliation['country']
                ];
            }
        }
        $author_array = [];
        foreach ($request->authors as $author) {
            if (
                !empty($author['firstname']) &&
                !empty($author['middlename']) &&
                !empty($author['lastname']) &&
                !empty($author['affiliation']) &&
                !empty($author['email']) &&
                !empty($author['orchid_id'])
            ) {

                $author_array[] = [
                    "firstname" => $author['firstname'],
                    "middlename" => $author['middlename'],
                    "lastname" => $author['lastname'],
                    "affiliation" => $author['affiliation'],
                    "email" => $author['email'],
                    "orchid_id" => $author['orchid_id'],
                ];
            }
        }
        DB::beginTransaction();
        try {
            if ($request->hasFile('file')) {
                $file_name = $request->file->getClientOriginalName();
                $name = uniqid() . '.' . $request->file->getClientOriginalName();
                $request->file->move(public_path('articles/'), $file_name);
                $file_path = 'articles/' . $file_name;
            }

            $article = Article::create([
                'article_code' => $this->create_article_code(),
                'title' => $request->title,
                'first_page' => $request->first_page,
                'last_page' => $request->last_page,
                'article_type' => $request->article_type,
                'recived_date' => $request->recived_date,
                'revised_date' => $request->revised_date,
                'accepted_date' => $request->accepted_date,
                'published_date' => $request->published_date,
                'dio' => $request->dio,
                'views_count' => 0,
                'download_count' => 0,
                'is_active' => $request->has('is_active') ? true : false,
                'file_name' => $name,
                'file_path' => $file_path,
                'issue_id' => $request->issue_id,
                'volume_id' => $request->volume_id,
                'journal_id' => $request->journal_id,
            ]);

            ArticleDetail::create([
                'abstract' => $request->input('abstract'),
                'references' => $request->input('references'),
                'extra_meta_tag' => $request->input('extra_meta_tag'),
                'authors' => $author_array,
                'affiliation' => $affiliation_array,
                'article_id' => $article->id,
            ]);

            $keywords = explode(',', $request->input('keywords'));
            foreach ($keywords as $keyword) {
                ArticleKeyword::create([
                    'keyword' => $keyword,
                    'article_id' => $article->id,
                ]);
            }

            DB::commit();
            return redirect()->route('admin.article.index');
        } catch (\Exception $e) {
            DB::rollBack();
            dd($e->getMessage());
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(Article $article)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        // dd($id);
        $iso3166 = new ISO3166();
        $countries = $iso3166->all();
        $journals = Journal::select('id', 'name')->get();
        $article = Article::with(['journal', 'issue', 'volume', 'article_details', 'affiliation', 'author' => function ($q) {
            $q->with('affiliations');
        }])->find($id);

        return view('admin.article.edit', compact('journals', 'countries', 'article'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateArticle $request, $id)
    {
        $authors = json_decode($request->input('author_array'), true);
        $affiliations = json_decode($request->input('affiliation_array'), true);

        DB::beginTransaction();
        try {
            $article = Article::findOrFail($id);

            if ($request->hasFile('file')) {
                if ($article->file_path && file_exists(public_path($article->file_path))) {
                    unlink(public_path($article->file_path));
                }

                $file_name = $request->file->getClientOriginalName();
                $name = uniqid() . '.' . $request->file->getClientOriginalName();
                $request->file->move(public_path('articles/'), $file_name);
                $file_path = 'articles/' . $file_name;

                $article->file_path = $file_path;
                $article->file_name = $file_name;
            }

            $article->update([
                'title' => $request->input('title'),
                'first_page' => $request->input('first_page'),
                'last_page' => $request->input('last_page'),
                'article_type' => $request->input('article_type'),
                'published_date' => $request->input('published_date'),
                'dio' => $request->input('dio'),
                'is_active' => $request->has('is_active'),
                'issue_id' => $request->input('issue_id'),
                'volume_id' => $request->input('volume_id'),
                'journal_id' => $request->input('journal_id'),
            ]);

            $article->article_details()->updateOrCreate(
                ['article_id' => $article->id],
                [
                    'abstract' => $request->input('abstract'),
                    'references' => $request->input('references'),
                    'extra_meta_tag' => $request->input('extra_meta_tag'),
                ]
            );

            $article->keywords()->delete();
            $keywords = explode(',', $request->input('keywords'));
            foreach ($keywords as $keyword) {
                ArticleKeyword::create([
                    'keyword' => $keyword,
                    'article_id' => $article->id,
                ]);
            }
            $article->affiliation()->delete();
            $affiliations_id = [];
            foreach ($affiliations as $affiliation) {
                $createdAffiliation = Affiliation::create([
                    'name' => $affiliation['name'],
                    'country' => $affiliation['country'],
                    'full_affiliation' => json_encode([$affiliation['name'], $affiliation['country']]),
                    'article_id' => $article->id,
                ]);
                $affiliations_id[] = $createdAffiliation->id;
            }

            $article->author()->delete();
            foreach ($authors as $authorData) {
                $author = Author::create([
                    'first_name' => $authorData['firstname'],
                    'middle_name' => $authorData['middlename'],
                    'last_name' => $authorData['lastname'],
                    'author_affiliation' => json_encode($authorData['affiliations']),
                    'email' => $authorData['email'],
                    'orchid_id' => $authorData['orchid_id'],
                    'article_id' => $article->id
                ]);
                $author->affiliations()->attach($affiliations_id);
            }

            DB::commit();
            return redirect()->route('admin.article.index');
        } catch (\Exception $e) {
            DB::rollBack();
            dd($e->getMessage());
        }
    }


    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        try {
            Article::find($id)->delete();
            return redirect()->back();
        } catch (\Exception $e) {
            dd($e->getMessage());
        }
    }
}
