<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Blog;

class BlogController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $blogs = Blog::all();
        return view('admin.blogs.index', compact('blogs'));
        //fetch garda compact use garne

    }
    // public function index()
    // {
    //     $blogs = Blog::all();
    //     dd($blogs->first()); // Dump the first blog to check its structure
    //     return view('admin.blogs.index', compact('blogs'));
    // }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.blogs.create');
    }


    //  * Store a newly created resource in storage.

    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required',
            'content' => 'required',
            'author' => 'required',
        ]);
        Blog::create($request->all()); //stored at backend
        return redirect()->route('admin.blogs.index')->with('success', 'Blog created successfully.');//redirect to index (frontend)
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Blog $blog)
    {
        return view('admin.blogs.edit', compact('blog'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Blog $blog)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'content' => 'required',
            'author' => 'required|string|max:255',
        ]);
        $data = $request->all();
        $blog->update($data);
        return redirect()->route('admin.blogs.index')->with('success', 'Blog updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Blog $blog)
    {
        $blog->delete();
        return redirect()->route('admin.blogs.index')->with('danger', 'Blog deleted successfully');
    }
}
