<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;
class ProductController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }
    public function index(){
        $products = Product::all();
        $no = 0;
        return view('products.index',compact('products','no'));
    }

    public function createView(){
        return view('products.create');
    }

    public function create(Request $request)
    {
        $database = new Product;
        $database->name = $request->name;
        $database->category = $request->category;
        $database->price = $request->price;
        $database->save();

        return redirect('/products');
    }

    public function destroy($id){
        $search = Product::find($id);
        $search->delete();

        return redirect()->route('index');
    }

    public function put(Request $request, $id){
        $search = Product::find($id);
        $search->name = $request->name;
        $search->category = $request->category;
        $search->price = $request->price;
        $search->update();

        return redirect()->route('index');
    }

    public function formPut($id){
        $search = Product::find($id);
        return view('products.update',compact('search'));
    }

    public function detail($id){
        $search = Product::find($id);
        return view('products.detail',compact('search'));
    }
}
