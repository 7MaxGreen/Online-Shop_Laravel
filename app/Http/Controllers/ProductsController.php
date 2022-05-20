<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;


class ProductsController extends Controller
{
    //
    public function index() {
        $products = Product::all();

        return view('catalog', ['products' => $products]);
    }

    public function showDetails($product_id){
        // return $product_id;
        // $product_details = Product -> ('title', $product_id);
        // return view('details', ['product_id' => $product_id, 'product' => $product_details]);

        $item = Product::findOrFail($product_id);
        return view('details', ['item' => $item]);
    }

    public function create() {
        return view('create');
    }

    public function save() {
        $item = new Product();

        $item -> title = request('title');
        $item -> description = request('description');
        $item -> price = request('price');
        $item -> brand = request('brand');

        $item -> save();

        return redirect('/catalog');
    }

    public function showUpdate($id) {
        $item = Product::findOrFail($id);
        return view('update', ['item' => $item]);
    }

    public function update(Request $req) {
        Product::where('id', $req->id) -> update([
                                    'title' => $req -> title,
                                    'description' => $req -> description,
                                    'brand' => $req -> brand,
                                    'price' => $req -> price
                                ]);
        return redirect('/catalog');
    }

    public function showDelete($id) {
        return view('/delete', ['id' => $id]);
    }

    
    public function destroy(Request $req) {
        $item = Product::findOrFail($req-> id);

        $item -> delete();

        return redirect('/catalog');
    }
}
