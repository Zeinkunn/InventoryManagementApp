@extends('layouts.app')

@section('content')
    <h2 class="text-2xl font-bold mb-4">Tambah Produk Baru</h2>

    <form action="{{ route('products.store') }}" method="POST" class="bg-white p-6 rounded-md shadow-md">
        @csrf
        <div class="mb-4">
            <label for="name" class="block text-gray-700 font-medium mb-2">Nama Produk:</label>
            <input type="text" name="name" id="name" required class="w-full px-4 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500">
        </div>
        <div class="mb-4">
            <label for="description" class="block text-gray-700 font-medium mb-2">Deskripsi:</label>
            <textarea name="description" id="description" rows="4" required class="w-full px-4 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500"></textarea>
        </div>
        <div class="mb-4">
            <label for="quantity" class="block text-gray-700 font-medium mb-2">Kuantitas:</label>
            <input type="number" name="quantity" id="quantity" required class="w-full px-4 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500">
        </div>
        <div class="mb-4">
            <label for="price" class="block text-gray-700 font-medium mb-2">Harga:</label>
            <input type="text" name="price" id="price" required class="w-full px-4 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500">
        </div>
        <div>
            <button type="submit" class="w-full bg-green-500 text-white py-2 rounded-md hover:bg-green-600">Simpan Produk</button>
        </div>
    </form>
@endsection
