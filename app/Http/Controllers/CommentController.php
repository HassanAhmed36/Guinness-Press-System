<?php

namespace App\Http\Controllers;

use App\Models\Thread;
use App\Models\ThreadComment;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CommentController extends Controller
{
    public function index(Request $request)
    {
        $lastCommentId = $request->last_comment_id;
        $query = ThreadComment::with('replies')->whereNull('parent_id')->where('thread_id', $request->threadId);
        if ($lastCommentId) {
            $query->where('id', '>', $lastCommentId);
        }
        $thread_comments = $query->orderBy('id')->get();
        return view('user.partials.comments', compact('thread_comments'))->render();
    }

    public function store(Request $request)
    {
        try {
            ThreadComment::create([
                'body' => $request->body,
                'thread_id' => $request->thread_id,
                'user_id' => Auth::id() ?? null
            ]);
            return response()->json(['status' => 'success']);
        } catch (\Exception $exception) {
            dd($exception->getMessage());
            return response()->json(['status' => 'failed', 'error' => $exception->getMessage()]);
        }
    }

    public function replyStore(Request $request)
    {
        try {
            ThreadComment::create([
                'body' => $request->body,
                'thread_id' => $request->threadId,
                'parent_id' => $request->parentId,
                'user_id' => Auth::id() ?? null
            ]);
            return response()->json(['status' => 'success']);
        } catch (\Exception $exception) {
            dd($exception->getMessage());
            return response()->json(['status' => 'failed', 'error' => $exception->getMessage()]);
        }
    }
}
