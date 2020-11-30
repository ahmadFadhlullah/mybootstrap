<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Book;

class BookController extends Controller
{
    public function index()
    {
        $all = Book::all();
        return view('books.index',compact('all'));
    }
    public function store(Request $request)
    {
        $database_buku = new Book;
        $database_buku->name = $request->name;
        $database_buku->category = $request->category;
        $database_buku->pengarang = $request->pengarang;
        $database_buku->save();
        return redirect()-route('books.index');
    }

    public function formStore(){
        return view('books.add');
    }
}
