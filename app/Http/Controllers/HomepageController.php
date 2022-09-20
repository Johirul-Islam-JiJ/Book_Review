<?php

namespace App\Http\Controllers;

use App\Models\Book;
use Illuminate\Http\Request;

class HomepageController extends Controller
{
    public function index()
    {
        $books = Book::get();
        return view('home', compact('books'));
    }


}
