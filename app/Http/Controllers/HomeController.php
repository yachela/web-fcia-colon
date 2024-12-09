<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        return view('home');
    }

    public function home(Request $request)
    {
        $search = $request->input('search');
    
        if (!$search) {
            return redirect()->back()->with('error', 'Por favor ingresa un valor.');
        }
    
        $product = Product::where('name', 'LIKE', "%$search%")->first();
    
        if (!$product) {
            return redirect()->back()->with('error', 'Producto no encontrado.');
        }
    
        return redirect()->route('products.show', ['product' => $product->id]);
    }
}