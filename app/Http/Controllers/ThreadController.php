<?php

namespace App\Http\Controllers;

use App\Models\Thread;
use App\Models\ThreadComment;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class ThreadController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $threads = Thread::withCount('thread_comments')->latest()->paginate(10);
        return view('user.pages.forum', compact('threads'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('threads.create'); // Create view for creating new thread
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'body' => 'required|string',
        ]);

        Thread::create([
            'title' => $request->title,
            'body' => $request->body,
            'user_id' => auth()->id() ?? null,
        ]);

        return back()->with('success', 'Thread created successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show(Thread $thread)
    {
        $thread->increment('views');
        $thread->loadCount('thread_comments');
        return view('user.pages.thread_detail', compact('thread'));
    }

}
