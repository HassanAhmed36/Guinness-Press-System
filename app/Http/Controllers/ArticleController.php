<?php

namespace App\Http\Controllers;

use App\Mail\LandingPage;
use App\Models\IndexBody;
use App\Models\Journal;
use App\Models\Submission;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use League\ISO3166\ISO3166;
use App\Models\Article;

class ArticleController extends Controller
{
    public function submitArticle()
    {
        $countries = $this->getCountries();
        $journals = Journal::all();
        return view('user.pages.submit_articles', compact('journals', 'countries'));
    }

    public function lpView()
    {
        $indexing_bodies = IndexBody::all();
        $journals = Journal::with('journal_matrix')->where('issn_no', '!=', '')->get();
        $countries = $this->getCountries();
        return view('user.lp.index', compact('indexing_bodies', 'journals', 'countries'));
    }

    public function getCountries()
    {
        $iso3166 = new ISO3166();
        return  $iso3166->all();
    }

    public function submitLp(Request $request)
    {
        $name = uniqid() . '.' . $request->attachement->getClientOriginalExtension();
        $manuscript_name = $request->attachement->getClientOriginalName();
        $request->attachement->move(public_path('lp-files/'), $name);
        $manuscript_path = 'lp-files/' . $name;

        $data = [
            'name' => $request->first_name,
            'email' => $request->email_address,
            'number' => $request->phone_number,
            'country' => $request->country
        ];

        Mail::to('hassanahmed3652@gmail.com')->send(new LandingPage($manuscript_name, $manuscript_path, $data));

        return redirect('/thank-you');
    }

    private function create_manuscript_id()
    {
        $lastSubmission = Submission::orderByDesc('id')->first();
        $id = $lastSubmission ? $lastSubmission->id + 1 : 1;
        return 'MS-' . str_pad($id, 4, '0', STR_PAD_LEFT);
    }

    public function incrementView(Request $request, $id)
    {
        $article = Article::findOrFail($id);
        $article->increment('views_count');
        return response()->json(['success' => true]);
    }
}
