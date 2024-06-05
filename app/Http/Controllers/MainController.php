<?php


namespace App\Http\Controllers;

use App\Mail\ArticleMail;
use App\Mail\ContactMail;
use App\Mail\JoinMail;
use App\Models\Article;
use App\Models\Journal;
use App\Models\Journal_settings;
use App\Models\VolumeIssue;
use DB;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class MainController extends Controller
{

    public function index()
    {
        $journals = Journal::all();
        return view('user.pages.index', compact('journals'));
    }

    public function journal()
    {
        $journals = Journal::all();
        return view('user.pages.journal', compact('journals'));
    }

    public function journal_details($journal_name)
    {
        $journal = Journal::with(['journal_overview', 'journal_matrix', 'volume' => function ($q) {
            $q->OrderByDesc('id');
        }, 'volume.issue' => function ($q) {
            $q->OrderByDesc('id');
        }])->where('acronym', $journal_name)->first();
        return view('user.pages.journal-details', compact('journal'));
    }

    public function editorial_board($journal_name)
    {
        $journal =  Journal::with('board_member')->where('acronym', $journal_name)->first();
        return view('user.pages.editorial-board', compact('journal'));
    }

    public function article_details()
    {
        return view('front-end/article-details', compact('data', 'subcategories'));
    }


    public function journal_issue($id, $issue, $issue_no)
    {
        $journal = Journal::with('volume')->where('acronym', $id)->first();
        $issue = VolumeIssue::where('issue_id', $issue_no)->first();
        $articles = Article::with('author')->where('journal_id', $journal->id)->where('issue_id', $issue->id)->get();
        // dd($articles->toArray());
        return view('user.pages.issue', compact('journal', 'articles', 'issue'));
    }


    public function article($id, $code)
    {
        $journal = Journal::where('acronym', $id)->first();
        $article = Article::with('author', 'keywords', 'journal', 'issue', 'article_details')->where('article_code', $code)->first();
        $article->views_count + 1;
        $article->save();
        return view('user.pages.article', compact('journal', 'article'));
    }

    public function join_board($journal_name)
    {
        $journal = Journal::where('acronym', $journal_name)->first();
        $journals = Journal::all();
        return view('user.pages.join-board', compact('journal', 'journals'));
    }
}
