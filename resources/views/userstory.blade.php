@extends('layouts.app')

@section('content')
    <div class="container mx-auto px-4">
        <h1 class="text-3xl font-bold text-center mb-8">User Stories untuk Aplikasi Inventory Management</h1>

        <!-- User Story 1 -->
        <div class="bg-white rounded-lg shadow-md mb-6">
            <div class="bg-blue-600 text-white p-4 rounded-t-lg">
                <h5 class="text-lg font-semibold">User Story 1: Melihat Daftar Produk</h5>
            </div>
            <div class="p-4">
                <p><strong>Deskripsi:</strong> Sebagai pengguna, saya ingin dapat melihat daftar produk yang ada di dalam sistem sehingga saya dapat memantau stok dan harga produk.</p>
                <p><strong>Kriteria Penerimaan:</strong></p>
                <ul class="list-disc pl-5 space-y-1">
                    <li>Pengguna dapat melihat tabel yang menampilkan semua produk yang tersedia.</li>
                    <li>Tabel menampilkan nama produk, deskripsi, kuantitas, harga, dan tombol aksi (edit, hapus).</li>
                    <li>Setiap produk memiliki ID yang unik.</li>
                    <li>Terdapat tombol untuk mengarahkan pengguna ke halaman tambah produk.</li>
                </ul>
            </div>
        </div>

        <!-- User Story 2 -->
        <div class="bg-white rounded-lg shadow-md mb-6">
            <div class="bg-blue-600 text-white p-4 rounded-t-lg">
                <h5 class="text-lg font-semibold">User Story 2: Menambahkan Produk Baru</h5>
            </div>
            <div class="p-4">
                <p><strong>Deskripsi:</strong> Sebagai pengguna, saya ingin dapat menambahkan produk baru ke dalam sistem sehingga saya bisa memperbarui inventaris produk.</p>
                <p><strong>Kriteria Penerimaan:</strong></p>
                <ul class="list-disc pl-5 space-y-1">
                    <li>Pengguna dapat mengakses halaman formulir untuk menambahkan produk baru.</li>
                    <li>Formulir meminta informasi produk seperti nama produk, deskripsi, kuantitas, dan harga.</li>
                    <li>Setelah data dimasukkan dan disubmit, produk baru ditambahkan ke dalam daftar produk.</li>
                    <li>Pengguna diarahkan kembali ke halaman daftar produk setelah berhasil menambahkan produk.</li>
                </ul>
            </div>
        </div>

        <!-- User Story 3 -->
        <div class="bg-white rounded-lg shadow-md mb-6">
            <div class="bg-blue-600 text-white p-4 rounded-t-lg">
                <h5 class="text-lg font-semibold">User Story 3: Mengedit Produk</h5>
            </div>
            <div class="p-4">
                <p><strong>Deskripsi:</strong> Sebagai pengguna, saya ingin dapat mengedit informasi produk yang sudah ada untuk memperbarui stok atau harga produk.</p>
                <p><strong>Kriteria Penerimaan:</strong></p>
                <ul class="list-disc pl-5 space-y-1">
                    <li>Pengguna dapat mengakses halaman formulir edit untuk produk yang dipilih.</li>
                    <li>Formulir edit menampilkan informasi yang sudah ada (nama produk, deskripsi, kuantitas, dan harga).</li>
                    <li>Pengguna dapat memperbarui data dan menyimpannya.</li>
                    <li>Setelah perubahan disimpan, data produk yang diperbarui muncul di halaman daftar produk.</li>
                </ul>
            </div>
        </div>
    </div>
@endsection
