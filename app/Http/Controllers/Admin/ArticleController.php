<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\ArticleRequest;
use App\Http\Requests\UpdateArticle;
use App\Http\Requests\UpdateArticlRequest;
use App\Models\Affiliation;
use App\Models\Article;
use App\Models\ArticleDetail;
use App\Models\ArticleKeyword;
use App\Models\Author;
use App\Models\Journal;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use League\ISO3166\ISO3166;
use Illuminate\Support\Str;


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
        $formattedArticleCode = str_pad($articleCode, 5, '0', STR_PAD_LEFT);
        return $formattedArticleCode;
    }


    /**
     * Store a newly created resource in storage.
     */
    public function store(ArticleRequest $request)
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
                !empty($author['affiliation'])

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
            if ($request->has('file')) {
                $original_name = $request->file->getClientOriginalName();
                $file_name = pathinfo($original_name, PATHINFO_FILENAME); // Extract filename without extension
                $file_extension = $request->file->getClientOriginalExtension();
                $slug = Str::slug($file_name);

                $name = uniqid() . '-' . $slug . '.' . $file_extension;
                $request->file->move(public_path('articles/'), $name);
                $file_path = 'articles/' . $name;
            }

            $article = Article::create([
                'article_code' => $request->article_number,
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
            if ($request->hasFile('supplementary_file')) {
                $file_name = $request->supplementary_file->getClientOriginalName();
                $supplementary_file_name = uniqid() . '.' . $request->supplementary_file->getClientOriginalName();
                $request->supplementary_file->move(public_path('supplementary_file/'), $file_name);
                $supplementary_file_path = 'articles/' . $file_name;
                $article->supplementary_file_name = $supplementary_file_name;
                $article->supplementary_file_path = $supplementary_file_path;
                $article->save();
            }
            ArticleDetail::create([
                'abstract' => $request->input('abstract'),
                'references' => $request->input('references'),
                'extra_meta_tag' => $request->input('extra_meta_tag') ?? '',
                'authors' =>  $author_array,
                'affiliations' => $affiliation_array,
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
    public function show($id)
    {
        try {
            return view('admin.article.show', [
                'article' => Article::with('article_details', 'keywords')->find($id)
            ]);
        } catch (\Exception $e) {
            dd($e->getMessage());
            return back()->with('error', 'Something Wants Wrong');
        }
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
        $article = Article::with('journal', 'volume', 'issue', 'keywords', 'article_details')->find($id);
        return view('admin.article.edit', compact('journals', 'countries', 'article'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateArticlRequest $request, $id)
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
            $article = Article::findOrFail($id);

            if ($request->hasFile('file')) {
                $file_name = $request->file->getClientOriginalName();
                $name = uniqid() . '.' . $request->file->getClientOriginalName();
                $request->file->move(public_path('articles/'), $file_name);
                $file_path = 'articles/' . $file_name;

                // Update file details
                $article->file_name = $name;
                $article->file_path = $file_path;
            }

            if ($request->hasFile('supplementary_file')) {
                $file_name = $request->supplementary_file->getClientOriginalName();
                $supplementary_file_name = uniqid() . '.' . $request->supplementary_file->getClientOriginalName();
                $request->supplementary_file->move(public_path('supplementary_file/'), $file_name);
                $supplementary_file_path = 'articles/' . $file_name;
                $article->supplementary_file_name = $supplementary_file_name;
                $article->supplementary_file_path = $supplementary_file_path;
            }

            $article->title = $request->title;
            $article->first_page = $request->first_page;
            $article->last_page = $request->last_page;
            $article->article_type = $request->article_type;
            $article->recived_date = $request->recived_date;
            $article->revised_date = $request->revised_date;
            $article->accepted_date = $request->accepted_date;
            $article->published_date = $request->published_date;
            $article->dio = $request->dio;
            $article->is_active = $request->has('is_active') ? true : false;
            $article->issue_id = $request->issue_id;
            $article->volume_id = $request->volume_id;
            $article->journal_id = $request->journal_id;

            $article->save();

            $articleDetail = ArticleDetail::where('article_id', $id)->firstOrFail();
            $articleDetail->delete();
            $articlenewDetail = new ArticleDetail();
            $articlenewDetail->abstract = $request->input('abstract');
            $articlenewDetail->references = $request->input('references');
            $articlenewDetail->extra_meta_tag = $request->input('extra_meta_tag') ?? '';
            $articlenewDetail->authors = $author_array;
            $articlenewDetail->affiliations = $affiliation_array;
            $articlenewDetail->article_id = $article->id;
            $articlenewDetail->save();

            // Update keywords
            $keywords = explode(',', $request->input('keywords'));
            ArticleKeyword::where('article_id', $id)->delete();
            foreach ($keywords as $keyword) {
                ArticleKeyword::create([
                    'keyword' => $keyword,
                    'article_id' => $id,
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
