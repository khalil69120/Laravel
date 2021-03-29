<?php

namespace App\Http\Controllers;

use App\Models\Book;
use Illuminate\Http\Request;

class ActionController extends Controller
{
    public function addBook(Request $request){
        $book = new Book;
        $book->title = $request->title;
        $book->author = $request->author;
        $book->genre = $request->genre;
        $book->synopsis = $request->synopsis;
        $book->publication_year = $request->publication_year;
        $book->save();
    }
}
