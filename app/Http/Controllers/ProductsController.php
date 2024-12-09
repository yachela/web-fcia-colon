<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;


class ProductsController extends Controller
{

    public function index()
    {
        $products = Product::with('category')->get();
        return view('products.index', compact('products'));
    }


    public function create()
    {
        $categories = Category::all();
        return view('products.create', compact('categories'));
    }


    public function show($id)
    {
        $product = Product::with('category')->findOrFail($id);
        return view('products.show', compact('product'));
    }


    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'description' => 'required|string',
            'category_id' => 'required|exists:categories,id',
            'price' => 'required|numeric|min:0',
            'stock' => 'required|integer|min:0',
            'image_url' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
            'is_prescription' => 'required|boolean',
            'expiration_date' => 'required|date',
            'manufacturer' => 'required|string|max:255',
        ]);

        $imagePath = null;


        if ($request->hasFile('image_url')) {
            $image = $request->file('image_url');


            $imageName = Str::slug($request->name) . '.' . $image->getClientOriginalExtension();


            $imagePath = $image->storeAs('products', $imageName, 'public');
        }


        $product = Product::create([
            'name' => $request->name,
            'description' => $request->description,
            'category_id' => $request->category_id,
            'price' => $request->price,
            'stock' => $request->stock,
            'image_url' => 'storage/' . $imagePath,
            'is_prescription' => $request->is_prescription,
            'expiration_date' => $request->expiration_date,
            'manufacturer' => $request->manufacturer,
        ]);

        return redirect()->route('products.index')->with('success', 'Producto creado exitosamente.');
    }
    public function edit($id)
    {
        $product = Product::findOrFail($id);
        $categories = Category::all();
        return view('products.edit', compact('product', 'categories'));
    }

    public function update(Request $request, $id)
    {
        $product = Product::findOrFail($id);

        $request->validate([
            'name' => 'required|string|max:255',
            'description' => 'required|string',
            'category_id' => 'required|exists:categories,id',
            'price' => 'required|numeric|min:0',
            'stock' => 'required|integer|min:0',
            'image_url' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            'is_prescription' => 'required|boolean',
            'expiration_date' => 'required|date',
            'manufacturer' => 'required|string|max:255',
        ]);

        if ($request->hasFile('image_url')) {

            if ($product->image_url) {
                Storage::disk('public')->delete($product->image_url);
            }


            $image = $request->file('image_url');
            $imageName = Str::slug($request->name) . '-' . time() . '.' . $image->getClientOriginalExtension();
            $imagePath = $image->storeAs('products', $imageName, 'public');
            $product->image_url = $imagePath;
        }


        $product->update($request->except('image_url'));

        return redirect()->route('products.index')->with('success', 'Producto actualizado exitosamente.');
    }


    public function destroy($id)
    {
        $product = Product::findOrFail($id);
        $product->delete();
        return redirect('/products')->with('success', 'Producto eliminado correctamente.');
    }
}
