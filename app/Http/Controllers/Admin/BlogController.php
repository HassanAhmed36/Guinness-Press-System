<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Blog;
use App\Models\Tag;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class BlogController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $blogs = Blog::all();
        return view('admin.blogs.index', compact('blogs'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.blogs.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required',
            'body' => 'required',
        ]);

        try {
            $tags = json_decode($request->input('tags'), true);
            $tagIds = [];

            foreach ($tags as $tag) {
                $existingTag = Tag::where('name', $tag['value'])->first();

                if ($existingTag) {
                    $tagIds[] = $existingTag->id;
                } else {
                    $newTag = Tag::create([
                        'name' => $tag['value']
                    ]);

                    $tagIds[] = $newTag->id;
                }
            }
            $blog = new Blog();

            if ($request->hasFile('thumbnail')) {
                $name = uniqid() . '.' . $request->thumbnail->getClientOriginalExtension();
                $request->thumbnail->move(public_path('thumbnail/'), $name);
                $path = 'thumbnail/' . $name;
                $blog->thumbnail = $path;
            }

            $blog->title = $request->input('title');
            $blog->slug = Str::slug($request->input('title'));
            $blog->keywords = $request->input('keywords');
            $blog->category = $request->input('category');
            $blog->body = $request->input('body');
            $blog->published_at = $request->input('published_at');
            $blog->is_active = $request->has('is_active');
            $blog->save();

            $blog->tags()->sync($tagIds);
            return redirect()->route('admin.blog.index')->with('success', 'Blog added successfully');

        } catch (\Exception $e) {
            dd($e->getMessage());
            return back()->with('error', 'Blog Added Failed');
        }
    }


    /**
     * Display the specified resource.
     */
    public function show(Blog $blog)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Request $request, $id)
    {
        return view('admin.blogs.edit', [
            'blog' => Blog::with('tags')->find($id)
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'title' => 'required',
            'body' => 'required',
        ]);

        try {
            $blog = Blog::findOrFail($id);

            $tags = json_decode($request->input('tags'), true);
            $tagIds = [];

            foreach ($tags as $tag) {
                $existingTag = Tag::where('name', $tag['value'])->first();

                if ($existingTag) {
                    $tagIds[] = $existingTag->id;
                } else {
                    $newTag = Tag::create([
                        'name' => $tag['value']
                    ]);

                    $tagIds[] = $newTag->id;
                }
            }

            if ($request->hasFile('thumbnail')) {
                $name = uniqid() . '.' . $request->thumbnail->getClientOriginalExtension();
                $request->thumbnail->move(public_path('thumbnail/'), $name);
                $path = 'thumbnail/' . $name;
                if ($blog->thumbnail && file_exists(public_path($blog->thumbnail))) {
                    unlink(public_path($blog->thumbnail));
                }
                $blog->thumbnail = $path;
            }

            $blog->title = $request->input('title');
            $blog->slug = Str::slug($request->input('title'));
            $blog->keywords = $request->input('keywords');
            $blog->body = $request->input('body');
            $blog->category = $request->input('category');
            $blog->published_at = $request->input('published_at');
            $blog->is_active = $request->has('is_active');
            $blog->save();

            $blog->tags()->sync($tagIds);

            return redirect()->route('admin.blog.index')->with('success', 'Blog updated successfully');
        } catch (\Exception $e) {
            dd($e->getMessage());
            return back()->with('error', 'Blog update failed');
        }
    }


    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        try {
            Blog::destroy($id);
            return back()->with('success', 'blog deleted successfully');
        } catch (\Exception $e) {
            dd($e->getMessage());
            return back()->with('error', 'blog deleted successfully');
        }
    }
}
