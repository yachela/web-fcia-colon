<?php

namespace App\Http\Controllers;
use App\Models\Product;
use Illuminate\Http\Request;

class ProductsController extends Controller
{
    public function index(){
        $products = Product::all();
        return view('products.index', compact('products'));
    }

    public function create(){
        return view('products.create');
    }

    public function show($product){

        $product = Product::find($product);
        return view('products.show', compact('product'));
}

public function store(Request $request){
        $product = new Product();
        $product->name = $request->name;
        $product->description = $request->description;
        $product->category = $request->category;
        $product->price = $request->price;
        $product->stock = $request->stock;
        $product->image_url = $request->image_url;
        $product->is_prescription = $request->is_prescription;
        $product->expiration_date = $request->expiration_date;
        $product->manufacturer = $request->manufacturer;
        $product->save();
        return redirect('/products');
}

public function edit($product){
        $product = Product::find($product);
        return view('products.edit', compact('product'));
}

public function update(Request $request, $product){
        $product = Product::find($product);
        $product->name = $request->name;
        $product->description = $request->description;
        $product->category = $request->category;
        $product->price = $request->price;
        $product->stock = $request->stock;
        $product->image_url = $request->image_url;
        $product->is_prescription = $request->is_prescription;
        $product->expiration_date = $request->expiration_date;
        $product->manufacturer = $request->manufacturer;
        $product->save();
        return redirect("/products/{$product->id}");

}

public function destroy($product){
    $product = Product::find($product);
    $product->delete();
    return redirect('/products');
}
}