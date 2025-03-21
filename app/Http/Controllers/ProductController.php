<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class ProductController extends Controller
{
    public function index(Request $request) {
        $query = $request->input('search');
        $products = Product::when($query, function($queryBuilder) use ($query) {
            return $queryBuilder->where('name', 'LIKE', "%{$query}%")
                                 ->orWhere('description', 'LIKE', "%{$query}%");
        })->get();
    
        return view('products.index', compact('products'));
    }

    public function create() {
        return view('products.create');
    }

    public function store(Request $request) {
        Product::create($request->all());
        return redirect()->route('products.index')->with('success', 'Product added successfully!');
    }

    public function update(Request $request, $id) {
        $product = Product::findOrFail($id);
        $product->update($request->all());
        return redirect()->route('products.index')->with('success', 'Product updated successfully!');
    }
}
