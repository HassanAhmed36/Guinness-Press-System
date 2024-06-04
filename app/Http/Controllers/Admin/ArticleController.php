<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\ArticleRequest;
use App\Http\Requests\ArticleSeeder;
use App\Models\Article;
use App\Models\Journal;
use Illuminate\Http\Request;
use League\ISO3166\ISO3166;

class ArticleController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('admin.article.index');
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

    /**
     * Store a newly created resource in storage.
     */
    public function store(ArticleRequest $request)
    {

        $authors = json_decode($request->input('author_array'), true);
        $affiliations = json_decode($request->input('affiliation_array'), true);
        dd($authors);
        dd($affiliations);
        dd($request->toArray());
        dd($request->toArray());

        
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
    public function destroy(Article $article)
    {
        //
    }
}
