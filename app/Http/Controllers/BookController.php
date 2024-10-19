<?php

namespace App\Http\Controllers;

use App\Models\Book;
use Illuminate\Http\Request;

class BookController extends Controller
{
    public function index()
    {
        $books = Book::all();
        return view('admin.books.index', compact('books'));
        //fetch garda compact use garne

    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.books.create');
    }


    //  * Store a newly created resource in storage.

    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required',
            'author' => 'required',
            'isbn'=>'required|string|max:20',
            'description' => 'required',
        ]);
        Book::create($request->all()); //stored at backend
        return redirect()->route('admin.books.index')->with('success', 'Blog created successfully.');//redirect to index (frontend)
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
    public function edit(Book $book)
    {
        return view('admin.books.edit', compact('book'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Book $book)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'author' => 'required|string|max:255',
            'isbn'=>'required|string|max:10',
            'description' => 'required',
        ]);
        $data = $request->all();
        $book->update($data);
        return redirect()->route('admin.books.index')->with('success', 'Book updated successfully');
    }
    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Book $book)
    {
        $book->delete();
        return redirect()->route('admin.books.index')->with('danger', 'Book deleted successfully');
    }
}
