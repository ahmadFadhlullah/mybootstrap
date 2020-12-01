<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Cart;
use App\Product;

class CartController extends Controller
{
    public function index()
    {
        $all = Cart::all();
        $no = 0;
        return view('cart.index',compact('all','no'));
    }
    public function put(Request $request, $id){
        $search = Cart::find($id);
        $search->jumlah_barang = $request->jumlah;
        $search->update();

        return redirect()->route('carts.index');
    }
    public function formPut($id){
        $search = Cart::find($id);
        return view('cart.update',compact('search'));
    }

    public function store(Request $request, $id)
    {
        $database = new Cart;
        $database->id_barang = $id;
        $database->jumlah_barang = $request->jumlah;
        $database->save();
        return redirect()->route('products.detail',$id)->with('pesan','Berhasil menambahkan barang ke keranjang');
    }


    public function destroy($id)
    {
        $item = Cart::find($id);
        $item->delete();
        return redirect()->route('carts.index')->with('pesan','Data berhasil dihapus');
    }
}
