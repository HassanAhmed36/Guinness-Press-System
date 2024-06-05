<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\ArticleRequest;
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
    public function store(ArticleRequest $request)
    {
        $authors = json_decode($request->input('author_array'), true);
        $affiliations = json_decode($request->input('affiliation_array'), true);

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
                'title' => $request->input('title'),
                'first_page' => $request->input('first_page'),
                'last_page' => $request->input('last_page'),
                'article_type' => $request->input('article_type'),
                'published_date' => $request->input('published_date'),
                'dio' => $request->input('dio'),
                'views_count' => 0,
                'download_count' => 0,
                'is_active' => $request->has('is_active'),
                'file_path' => $file_path ?? null,
                'file_name' => $file_name ?? null,
                'issue_id' => $request->input('issue_id'),
                'volume_id' => $request->input('volume_id'),
                'journal_id' => $request->input('journal_id'),
            ]);

            ArticleDetail::create([
                'abstract' => $request->input('abstract'),
                'references' => $request->input('references'),
                'extra_meta_tag' => $request->input('extra_meta_tag'),
                'article_id' => $article->id,
            ]);

            $keywords = explode(',', $request->input('keywords'));
            foreach ($keywords as $keyword) {
                ArticleKeyword::create([
                    'keyword' => $keyword,
                    'article_id' => $article->id,
                ]);
            }

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
     * Display the specified resource.
     */
    public function show(Article $article)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Article $article)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Article $article)
    {
        //
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
