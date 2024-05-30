<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\JournalRequest;
use App\Http\Requests\UpdateJournalRequest;
use App\Models\Journal;
use App\Models\JournalMatrix;
use App\Models\JournalOverview;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class JournalController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $journals = Journal::all();
        return view('admin.journals.index', compact('journals'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.journals.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(JournalRequest $request)
    {
        // dd($request->toArray());
        DB::beginTransaction();
        try {

            if ($request->hasFile('image')) {
                $name = uniqid() . '.' . $request->image->getClientOriginalName();
                $request->image->move(public_path('journal-images/'), $name);
                $image_path = 'journal-images/' . $name;
            }

            $journal =  Journal::create([
                'name' => $request->name,
                'acronym' => $request->acronym,
                'issn_no' => $request->issn_no,
                'image' => $image_path,
                'description' => $request->description,
                'is_active' => $request->is_active ? true : false,
            ]);

            JournalMatrix::create([
                'acceptance_rate' => $request->acceptance_rate,
                'submission_to_final_decision' => $request->submission_to_final_decision,
                'acceptance_to_publication' => $request->acceptance_to_publication,
                'dio_prefix' => $request->dio_prefix,
                'publication_type' => $request->publication_type,
                'publishing_model' => $request->publishing_model,
                'journal_category' => $request->journal_category,
                'acp' => $request->acp,
                'journal_id' => $journal->id,
            ]);

            JournalOverview::create([
                'manuscript_prepation_guideline' => $request->manuscript_prepation_guideline,
                'aims_and_scope' => $request->aims_and_scope,
                'editorial_polices' => $request->editorial_polices,
                'author_guideline' => $request->author_guideline,
                'role_of_eic' => $request->role_of_eic,
                'role_of_ebm' => $request->role_of_ebm,
                'journal_id' =>  $journal->id,
            ]);

            DB::commit();
            return redirect()->route('admin.journal.index')->with('success', 'Journal Added Successfully!');
        } catch (\Exception $e) {
            DB::rollBack();
            dd($e->getMessage());
            return back()->with('error', 'Journal Added Failed!');
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(Journal $journal)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        try {
            $journal = Journal::with(['journal_overview', 'journal_matrix'])->find($id);
            return view('admin.journals.edit', compact('journal'));
        } catch (\Exception $e) {
            dd($e->getMessage());
            return back()->with('error', 'Something Wents Wrong!');
        }
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateJournalRequest $request, $id)
    {
        DB::beginTransaction();
        try {
            if ($request->hasFile('image')) {
                $name = uniqid() . '.' . $request->image->getClientOriginalName();
                $request->image->move(public_path('journal-images/'), $name);
                $image_path = 'journal-images/' . $name;
            }
            $journal =  Journal::find($id);

            $journal->update([
                'name' => $request->name,
                'acronym' => $request->acronym,
                'issn_no' => $request->issn_no,
                'description' => $request->description,
                'is_active' => $request->is_active ? true : false,
            ]);
            if ($request->hasFile('image')) {
                $journal->image = $image_path;
                $journal->save();
            }
            $journal->journal_matrix()->update([
                'acceptance_rate' => $request->acceptance_rate,
                'submission_to_final_decision' => $request->submission_to_final_decision,
                'acceptance_to_publication' => $request->acceptance_to_publication,
                'dio_prefix' => $request->dio_prefix,
                'publication_type' => $request->publication_type,
                'publishing_model' => $request->publishing_model,
                'journal_category' => $request->journal_category,
                'acp' => $request->acp,
            ]);

            $journal->journal_overview()->update([
                'manuscript_prepation_guideline' => $request->manuscript_prepation_guideline,
                'aims_and_scope' => $request->aims_and_scope,
                'editorial_polices' => $request->editorial_polices,
                'author_guideline' => $request->author_guideline,
                'role_of_eic' => $request->role_of_eic,
                'role_of_ebm' => $request->role_of_ebm,
            ]);

            DB::commit();
            return redirect()->route('admin.journal.index')->with('success', 'Journal Updated Successfully!');
        } catch (\Exception $e) {
            DB::rollBack();
            dd($e->getMessage());
            return back()->with('error', 'Journal Updated Failed!');
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        try {
            Journal::find($id)->delete();
            return redirect()->route('admin.journal.index')->with('success', 'Journal Deleted Successfully!');
        } catch (\Exception $e) {
            dd($e->getMessage());
            return back()->with('error', 'Journal Delete Failed!');
        }
    }

    private function get_abbreviation($name)
    {
        $words = explode(' ', $name);
        $abbreviation = '';
        foreach ($words as $word) {
            $abbreviation .= strtoupper(substr($word, 0, 1));
        }
        return $abbreviation;
    }
}
