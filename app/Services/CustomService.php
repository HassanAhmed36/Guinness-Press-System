<?php

namespace App\Services;

use App\Models\Article;
use App\Models\Journal;
use App\Models\JournalVolume;
use App\Models\VolumeIssue;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Response;
use Illuminate\Support\Facades\URL;


class CustomService
{
    public function fetchVolumes(Request $request)
    {
        $journalId = $request->get('journal_id');
        $volumes = JournalVolume::where('journal_id', $journalId)->get();
        session()->forget('fetch_volume');
        session()->put('fetch_volume', $volumes);
        return view('admin.partials.volume-selectbox', compact('volumes'))->render();
    }

    public function fetchIssue(Request $request)
    {
        $volume_id = $request->volume_id;
        $issues = VolumeIssue::where('volume_id', $request->volume_id)->get();
        session()->forget('issue_id');
        session()->put('fetch_issue', $issues);
        return view('admin.partials.issue-selectbox', compact('issues'))->render();
    }
    public function fetchVolumesdoi(Request $request)
    {
        $journalId = $request->get('journal_id');
        $volumes = JournalVolume::where('journal_id', $journalId)->get();
        return view('admin.partials.doi.volume-selectbox', compact('volumes'))->render();
    }

    public function fetchIssuedoi(Request $request)
    {
        $volume_id = $request->volume_id;
        $issues = VolumeIssue::where('volume_id', $request->volume_id)->get();
        return view('admin.partials.doi.issue-selectbox', compact('issues'))->render();
    }
    public function getDownloadCount()
    {
        $article = Article::find(request('id'));
        return $article->download_count;
    }

    public function increaseDownloadCount()
    {
        $article = Article::find(request('id'));
        $article->increment('download_count');
        return $article->download_count;
    }
    public static function getAdminStatus(int $status)
    {
        switch ($status) {
            case 0:
                return 'Submitted';
                break;
            case 1:
                return 'Initial Q/A Approved';
                break;
            case 2:
                return 'Initial Q/A Rejected';
                break;
            case 3:
                return 'Pending (Paid)';
                break;
            case 4:
                return 'Pending (Un Paid)';
                break;
            case 5:
                return 'Peer Review';
                break;
            case 6:
                return 'Peer Review Accepted';
                break;
            case 7:
                return 'Peer Review Rejected';
                break;
            case 8:
                return 'Approved (Not Published)';
                break;
            case 9:
                return 'Published';
                break;

            default:
                return "";
                break;
        }
    }
}
