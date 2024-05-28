<?php

namespace App\Http\Controllers;

use App\Models\Journal;
use App\Models\JournalVolume;
use Carbon\Carbon;
use Illuminate\Http\Request;

class JournalVolumeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $journals = Journal::all();
        $volums = JournalVolume::with('journal')->get();
        return view('admin.volume.index', compact('journals', 'volums'));
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
            'journal_id' => 'required',
        ]);
        $journal_volume = JournalVolume::orderByDesc('id')->where('journal_id', $request->journal_id)->first();
        if ($journal_volume && $journal_volume->created_at->format('Y') == Carbon::now()->year) {
            return back()->with('error', 'Volume addition failed! Only one volume can be added per year.');
        }
        try {
            JournalVolume::create([
                'name' => $request->name,
                'journal_id' => $request->journal_id,
                'is_active' => $request->filled('is_active') ? true : false,
            ]);
            return back()->with('success', 'Volume Added Successfully!');
        } catch (\Exception $e) {
            dd($e->getMessage());
            return back()->with('error', 'Volume Added Failed!');
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(JournalVolume $journalVolume)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Request $request)
    {
        $journals = Journal::all();
        $volums = JournalVolume::with('journal')->find($request->id);
        return view('modals.edit-volume', compact('journals', 'volums'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'name' => 'required',
            'journal_id' => 'required',
        ]);
        $journal_volume = JournalVolume::orderByDesc('id')->whereNot('id', $id)->where('journal_id', $request->journal_id)->first();
        if ($journal_volume && $journal_volume->created_at->format('Y') == Carbon::now()->year) {
            return back()->with('error', 'Volume addition failed! Only one volume can be added per year.');
        }
        try {
            JournalVolume::find($id)->update([
                'name' => $request->name,
                'journal_id' => $request->journal_id,
                'is_active' => $request->filled('is_active') ? true : false,
            ]);
            return back()->with('success', 'Volume Updated Successfully!');
        } catch (\Exception $e) {
            dd($e->getMessage());
            return back()->with('error', 'Volume Updated Failed!');
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        try {
            JournalVolume::find($id)->delete();
            return back()->with('success', 'Volume Deleted Successfully!');
        } catch (\Exception $e) {
            dd($e->getMessage());
            return back()->with('error', 'Volume Delete Failed!');
        }
    }
}