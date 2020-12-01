<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Book;

class BookController extends Controller
{
    public function index()
    {
        $all = Book::all();
        $nomor = 0;
        return view('books.index',compact('all','nomor'));
    }

    public function formPut($id){
        $search = Book::find($id);
        return view('books.update',compact('search'));
    }

    public function put(Request $request, $id){
        $search = Book::find($id);
        $search->name = $request->name;
        $search->category = $request->category;
        $search->pengarang = $request->pengarang;
        $search->update();

        return redirect()->route('books.index')->with('pesan','Data Berhasil di Update');
    }

    public function store(Request $request)
    {
        $database_buku = new Book;
        $database_buku->name = $request->name;
        $database_buku->category = $request->category;
        $database_buku->pengarang = $request->pengarang;
        $database_buku->save();
        return redirect()->route('books.index')->with('pesan','Data berhasil ditambahkan');
    }

    public function destroy($id){
        $search = Book::find($id);
        $search->delete();

        return redirect()->route('books.index')->with('pesan','Data berhasil di hapus');
    }

    public function detail($id){
        $search = Book::find($id);
        return view('books.detail',compact('search'));
    }

    public function formStore(){
        return view('books.add');
    }
}
