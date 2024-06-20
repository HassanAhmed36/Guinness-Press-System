<?php

namespace App\Http\Controllers;

use App\Models\IndexBody;
use App\Models\Journal;
use Illuminate\Http\Request;

class IndexBodyController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $index_bodies = IndexBody::all();
        return view('admin.index-body.index', compact('index_bodies'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'link' => 'required',
            'image' => 'required'
        ]);

        try {
            if ($request->hasFile('image')) {
                $name = uniqid() . '.' . $request->image->getClientOriginalName();
                $request->image->move(public_path('indexing-bodies/'), $name);
                $image_path = 'indexing-bodies/' . $name;
            }
            IndexBody::create([
                'name' => $request->name,
                'link' => $request->link,
                'image' => $image_path
            ]);
            return back()->with('success', 'Indexing Bodies added Successfully');
        } catch (\Exception $e) {
            return back()->with('success', 'Indexing Bodies added Failed');
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(IndexBody $indexBody)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Request $request)
    {
        $indexBody =  IndexBody::find(request('id'));
        return view('admin.modals.edit-index-bodies', compact('indexBody'))->render();
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'name' => 'required',
            'link' => 'required',
        ]);
        try {
            $indexBody = IndexBody::find($id);
            $indexBody->update([
                'name' => $request->name,
                'link' => $request->link,
            ]);
            if ($request->hasFile('image')) {
                $name = uniqid() . '.' . $request->image->getClientOriginalName();
                $request->image->move(public_path('indexing-bodies/'), $name);
                $image_path = 'indexing-bodies/' . $name;
                $indexBody->image = $image_path;
                $indexBody->save();
            }
            return back()->with('success', 'Index Body Updated Successfully');
        } catch (\Exception $e) {
            return back()->with('success', 'Failed to update');
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        try {
            IndexBody::find($id)->delete();
            return back()->with('success', 'Indexing bodies Delete successfully');
        } catch (\Exception $e) {
            return back()->with('error', 'Indexing bodies Delete Failed');
        }
    }
}
