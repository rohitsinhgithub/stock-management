<!-- resources/views/products/create.blade.php -->
@extends('layouts.app')

@section('title', 'Add Product')

@section('content')
    <h2>Add New Product</h2>
    <form action="{{ route('products.store') }}" method="POST">
        @csrf
        <div>
            <label for="name">Product Name:</label>
            <input type="text" name="name" required>
        </div>
        <div>
            <label for="description">Description:</label>
            <textarea name="description" required></textarea>
        </div>
        <div>
            <label for="quantity">Quantity:</label>
            <input type="number" name="quantity" required>
        </div>
        <div>
            <label for="price">Price:</label>
            <input type="text" name="price" required>
        </div>
        <button type="submit">Add Product</button>
    </form>
@endsection