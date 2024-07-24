<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Journal;
use App\Models\JournalBoardMember;
use App\Models\JournalMatrix;
use Illuminate\Http\Request;
use League\ISO3166\ISO3166;


class JournalBoardMemberController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $iso3166 = new ISO3166();
        $countries = $iso3166->all();
        if (request()->has('journal')) {
            $members = JournalBoardMember::OrderBy('order_id', 'ASC')->withWhereHas('journal', function ($q) {
                $q->where('acronym', request('journal'));
            })->get();
        } else {
            $members = JournalBoardMember::with('journal')->get();
        }
        $journals = Journal::select('id', 'name', 'acronym')->get();
        return view('admin.member.index', compact('countries', 'journals', 'members'));
    }


    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'image' => 'required',
            'affiliation' => 'required',
            'country' => 'required',
            'biography' => 'required',
            'journal_id' => 'required'
        ]);
        try {
            $lastOrderID =  JournalBoardMember::OrderByDesc('order_id')->where('journal_id', request('journal_id'))->first();
            $newOrderId = $lastOrderID->order_id += 1;
            $journal =  Journal::find($request->journal_id);
            if ($request->hasFile('image')) {
                $name = uniqid() . '.' . $request->image->getClientOriginalName();
                $request->image->move(public_path('board-member-image/' . $journal->acronym . '/'), $name);
                $image_path = 'board-member-image/' . $journal->acronym . '/' . $name;
            }
            JournalBoardMember::create([
                'name' => $request->name,
                'email' => $request->email,
                'image' => $image_path,
                'affliation' => $request->affiliation,
                'biography' => $request->biography,
                'country' => $request->country,
                'journal_id' => $request->journal_id,
                'google_scholar' => $request->google_scholar,
                'scopus' => $request->scopus,
                'orcid' => $request->orcid,
                'order_id' => $newOrderId
            ]);
            return back()->with('success', 'Editorial Board Member Added Successfully!');
        } catch (\Exception $e) {
            dd($e->getMessage());
            return back()->with('error', 'Editorial Board Member Added Failed!');
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(JournalBoardMember $journalBoardMember)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Request $request)
    {
        $iso3166 = new ISO3166();
        $countries = $iso3166->all();
        return view('admin.modals.edit-board-member', [
            'countries' => $countries,
            'journals' => Journal::select('id', 'name')->get(),
            'm' => JournalBoardMember::find($request->id)
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'name' => 'required',
            'affiliation' => 'required',
            'country' => 'required',
            'biography' => 'required',
            'journal_id' => 'required'
        ]);
        try {
            $member = JournalBoardMember::find($id);
            $member->update([
                'name' => $request->name,
                'email' => $request->email,
                'affliation' => $request->affiliation,
                'biography' => $request->biography,
                'country' => $request->country,
                'journal_id' => $request->journal_id,
                'google_scholar' => $request->google_scholar,
                'scopus' => $request->scopus,
                'orcid' => $request->orcid,
            ]);
            if ($request->hasFile('image')) {
                $name = uniqid() . '.' . $request->image->getClientOriginalName();
                $request->image->move(public_path('board-member-image/'), $name);
                $image_path = 'board-member-image/' . $name;
                $member->image = $image_path;
                $member->save();
            }
            return back()->with('success', 'Editorial Board Member Updated Successfully!');
        } catch (\Exception $e) {
            dd($e->getMessage());
            return back()->with('error', 'Editorial Board Member Upadted Failed!');
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        try {
            JournalBoardMember::find($id)->delete();
            return back()->with('success', 'Editorail board member Deleted Successfully!');
        } catch (\Exception $e) {
            dd($e->getMessage());
            return back()->with('error', 'Journal Editorial Board member Delete Failed!');
        }
    }

    public function updateOrder(Request $request)
    {
        foreach ($request->data as $data) {
            JournalBoardMember::find($data['id'])->update([
                'order_id' => $data['order_id']
            ]);
        }
        return response()->json(['status' => 'success']);
    }
}
