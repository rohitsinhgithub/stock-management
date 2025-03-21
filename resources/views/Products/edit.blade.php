<!-- resources/views/products/edit.blade.php -->
@extends('layouts.app')

@section('title', 'Edit Product')

@section('content')
    <h2>Edit Product</h2>
    <form action="{{ route('products.update', $product->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div>
            <label for="name">Product Name:</label>
            <input type="text" name="name" value="{{ $product->name }}" required>
        </div>
        <div>
            <label for="description">Description:</label>
            <textarea name="description" required>{{ $product->description }}</textarea>
        </div>
        <div>
            <label for="quantity">Quantity:</label>
            <input type="number" name="quantity" value="{{ $product->quantity }}" required>
        </div>
        <div>
            <label for="price">Price:</label>
            <input type="text" name="price" value="{{ $product->price }}" required>
        </div>
        <button type="submit">Update Product</button>
    </form>
@endsection