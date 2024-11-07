@extends('layouts.app')

@section('content')
    <h2 class="font-bold text-2xl mb-4">Daftar Produk</h2>

    @if(session('success'))
        <p class="text-green-500">{{ session('success') }}</p>
    @endif

    <a href="{{ route('products.create') }}" class="inline-block px-4 py-2 bg-green-500 text-white rounded-md mb-4 hover:bg-green-600">Tambah Produk</a>

    <div class="overflow-x-auto">
        <table class="min-w-full bg-white border border-gray-300 rounded-md">
            <thead>
                <tr class="bg-gray-100">
                    <th class="px-4 py-2 border-b border-gray-300 text-left font-semibold">ID</th>
                    <th class="px-4 py-2 border-b border-gray-300 text-left font-semibold">Nama Produk</th>
                    <th class="px-4 py-2 border-b border-gray-300 text-left font-semibold">Deskripsi</th>
                    <th class="px-4 py-2 border-b border-gray-300 text-left font-semibold">Kuantitas</th>
                    <th class="px-4 py-2 border-b border-gray-300 text-left font-semibold">Harga</th>
                    <th class="px-4 py-2 border-b border-gray-300 text-left font-semibold">Aksi</th>
                </tr>
            </thead>
            <tbody>
                @foreach($products as $product)
                    <tr class="hover:bg-gray-50">
                        <td class="px-4 py-2 border-b border-gray-300">{{ $product->id }}</td>
                        <td class="px-4 py-2 border-b border-gray-300">{{ $product->name }}</td>
                        <td class="px-4 py-2 border-b border-gray-300">{{ $product->description }}</td>
                        <td class="px-4 py-2 border-b border-gray-300">{{ $product->quantity }}</td>
                        <td class="px-4 py-2 border-b border-gray-300">{{ number_format($product->price, 2) }}</td>
                        <td class="px-4 py-2 border-b border-gray-300">
                            <a href="{{ route('products.edit', $product->id) }}" class="text-blue-500 hover:underline">Edit</a>
                            |
                            <form action="{{ route('products.destroy', $product->id) }}" method="POST" class="inline">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="bg-red-500 text-white px-2 py-1 rounded hover:bg-red-600">Hapus</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
