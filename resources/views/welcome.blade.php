<!DOCTYPE html>
<html>
 <head>
  <script src="https://cdn.tailwindcss.com">
  </script>
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" rel="stylesheet"/>
  <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&amp;display=swap" rel="stylesheet"/>
 </head>
 <body class="bg-gray-100 font-roboto">
  <div class="container mx-auto p-6">
   <nav class="flex justify-between items-center mb-12">
    <div class="flex items-center">
     <div class="bg-blue-500 p-2 rounded">
      <i class="fas fa-cube text-white">
      </i>
     </div>
     <span class="ml-2 text-xl font-bold">
      Inventory Management
     </span>
    </div>
    <ul class="flex space-x-8">
     <li>
      <a class="text-blue-500 font-bold" href="#">
       Home
      </a>
     </li>
     <li>
      <a class="text-gray-700" href="{{ route('products.index') }}">
       Product
      </a>
     </li>
     <li>
      <a class="text-gray-700" href="{{ route('about')}}">
       About
      </a>
     </li>
     <li>
      <a class="text-gray-700" href="{{ route('userstory') }}">
       User Story
      </a>
     </li>
    </ul>
   </nav>
   <div class="flex items-center">
    <div class="w-1/2">
     <h1 class="text-5xl font-bold text-blue-500 mb-4">
      Inventory Management App
     </h1>
     <p class="text-gray-700 mb-6">
        Aplikasi Inventory Management ini dirancang untuk membantu bisnis dalam mengelola stok produk mereka dengan efisien. Aplikasi ini memungkinkan pengguna untuk melihat, menambahkan, memperbarui, dan menghapus produk dalam inventaris. Selain itu, aplikasi juga memberikan notifikasi stok rendah, membantu pengguna dalam mengelola jumlah produk agar tidak terjadi kekurangan atau kelebihan stok.
     </p>
     <button class="bg-white text-gray-700 font-bold py-2 px-4 rounded shadow">
      Learn more
     </button>
    </div>
   </div>
  </div>
 </body>
</html>
