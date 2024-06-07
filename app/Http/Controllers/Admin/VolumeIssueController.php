<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Journal;
use App\Models\JournalVolume;
use App\Models\VolumeIssue;
use Illuminate\Http\Request;

class VolumeIssueController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $journals = Journal::all();
        $issues = VolumeIssue::with(['volume' => function ($q) {
            $q->select('id', 'name');
        }, 'journal' => function ($q) {
            $q->select('id', 'name');
        }])->get();
        return view('admin.issues.index', compact('journals', 'issues'));
    }

    public function fetchVolumes(Request $request)
    {
        $journalId = $request->get('journal_id');
        $volumes = JournalVolume::where('journal_id', $journalId)->get();
        return view('admin.partials.volume-selectbox', compact('volumes'))->render();
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'volume_id' => 'required',
            'journal_id' => 'required',
        ]);

        try {
            $lastIssue = VolumeIssue::with('volume')
                ->where('volume_id', $request->volume_id)
                ->where('journal_id', $request->journal_id)
                ->orderByDesc('id')
                ->first();

            if ($lastIssue) {
                $volumeNumber = $lastIssue->volume->name;
                $lastIssueNumber = intval($lastIssue->name);
                $newIssueNumber = $lastIssueNumber + 1;
            } else {
                $volumeNumber = JournalVolume::find($request->volume_id)->name;
                $newIssueNumber = 1;
            }

            $newIssueId = intval($volumeNumber . str_pad($newIssueNumber, 3, '0', STR_PAD_LEFT));

            VolumeIssue::create([
                'name' => $request->name,
                'volume_id' => $request->volume_id,
                'issue_id' => $newIssueId,
                'journal_id' => $request->journal_id,
                'is_active' => $request->filled('is_active') ? true : false,
            ]);

            return back()->with('success', 'Issue Added Successfully!');
        } catch (\Exception $e) {
            return back()->with('error', 'Issue Addition Failed!')->with('errorMessage', $e->getMessage());
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(Request $request)
    {
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Request $request)
    {
        $journals = Journal::all();
        $issue = VolumeIssue::with('volume')->find($request->id);
        return view('admin.modals.edit-issue', compact('journals', 'issue'))->render();
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'name' => 'required',
            'volume_id' => 'required',
            'journal_id' => 'required',
        ]);

        try {
            VolumeIssue::find($id)->update([
                'name' => $request->name,
                'volume_id' => $request->volume_id,
                'journal_id' => $request->journal_id,
                'is_active' => $request->filled('is_active') ? true : false,
            ]);
            return back()->with('success', 'Issue Updated Successfully!');
        } catch (\Exception $e) {
            dd($e->getMessage());
            return back()->with('error', 'Issue Updated Failed!');
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        try {
            VolumeIssue::find($id)->delete();
            return back()->with('success', 'Issue Deleted Successfully!');
        } catch (\Exception $e) {
            dd($e->getMessage());
            return back()->with('error', 'Issue Delete Failed!');
        }
    }
}
