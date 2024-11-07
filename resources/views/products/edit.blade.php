@extends('layouts.app')

@section('content')
    <h2 class="text-2xl font-bold mb-4">Edit Produk</h2>

    <form action="{{ route('products.update', $product->id) }}" method="POST" class="bg-white p-6 rounded-md shadow-md">
        @csrf
        @method('PUT')
        <div class="mb-4">
            <label for="name" class="block text-gray-700 font-medium mb-2">Nama Produk:</label>
            <input type="text" name="name" id="name" value="{{ $product->name }}" required class="w-full px-4 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500">
        </div>
        <div class="mb-4">
            <label for="description" class="block text-gray-700 font-medium mb-2">Deskripsi:</label>
            <textarea name="description" id="description" rows="4" required class="w-full px-4 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500">{{ $product->description }}</textarea>
        </div>
        <div class="mb-4">
            <label for="quantity" class="block text-gray-700 font-medium mb-2">Kuantitas:</label>
            <input type="number" name="quantity" id="quantity" value="{{ $product->quantity }}" required class="w-full px-4 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500">
        </div>
        <div class="mb-4">
            <label for="price" class="block text-gray-700 font-medium mb-2">Harga:</label>
            <input type="text" name="price" id="price" value="{{ $product->price }}" required class="w-full px-4 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500">
        </div>
        <div>
            <button type="submit" class="w-full bg-green-500 text-white py-2 rounded-md hover:bg-green-600">Update Produk</button>
        </div>
    </form>
@endsection
