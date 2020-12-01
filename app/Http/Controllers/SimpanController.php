<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Simpan;

class SimpanController extends Controller
{
    public function index()
    {
        $all = Simpan::all();
        $no = 0;
        return view('simpan.index',compact('all','no'));
    }
    public function store(Request $request, $id)
    {
        $database = new Simpan;
        $database->id_buku = $id;
        $database->peminjam = $request->peminjam;
        $database->tgl_pinjam = date('Y-m-d');
        $database->save();

        return redirect()->route('books.detail',$id)->with('pesan','Buku berhasil di simpan');
    }

    public function destroy($id)
    {
        $find = Simpan::find($id);
        $find->delete();
        return redirect()->route('simpan.index');
    }
}
