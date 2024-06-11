<?php

namespace App\Services;

use App\Models\Journal;
use App\Models\JournalVolume;
use App\Models\VolumeIssue;
use Illuminate\Http\Request;

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

    public function doiIndex()
    {
    }
    public function doiStore()
    {
    }
}
