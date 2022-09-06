<?php

namespace App\Http\Controllers;

use App\Models\Book;
use Illuminate\Http\Request;

class BookController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $books = Book::latest()->paginate();
        return view('books.index',compact('books'));
    }

    /**
     * Show the form for creating a new resource.
     *
     *    @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('books.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $valid =$request->validate([
            'name'=>['required','string','max:255','min:3'],
            'writer'=>['required','string','max:255','min:3'],
            'publication'=>['required','string','max:255','min:3'],
            'published'=>['required'],
            'image'=>['required','image','max:2048']
        ]);

        if ($request->hasFile('image'))
        $valid['image']=$request->file('image')->store('BookImage','public');


        Book::create($valid);
        return redirect(route('books.index'));

        // $request->only('name','writer','publication','published')
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Book  $book
     * @return \Illuminate\Http\Response
     */
    public function show(Book $book)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Book  $book
     * @return \Illuminate\Http\Response
     */
    public function edit(Book $book)
    {
        $book = Book::find($book->id);
        return view('books.edit', compact('book'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Book  $book
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Book $book)
    {
        $valid =$request->validate([
            'name'=>['required','string','max:255','min:2'],
            'writer'=>['required','string','max:255','min:3'],
            'publication'=>['required','string','max:255','min:3'],
            'published'=>['required'],
            'image'=>['required','image','max:4088']
        ]);

        if ($request->hasFile('image'))
        $valid['image']=$request->file('image')->store('BookImage','public');


        $book->update($valid);
        return redirect(route('books.index'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Book  $book
     * @return \Illuminate\Http\Response
     */
    public function destroy(Book $book)
    {
        $book = Book::find($book->id);
        $book->delete();
        return back();
    }
}
