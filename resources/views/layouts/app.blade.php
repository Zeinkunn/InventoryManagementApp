<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inventory Management</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
</head>
<body class="font-sans bg-gray-100 container mx-auto p-6">

    <!-- Header -->
    <header>
        <nav class="flex justify-between items-center mb-12">
            <!-- Logo and App Title -->
            <div class="flex items-center">
                <div class="bg-blue-500 p-2 rounded">
                    <i class="fas fa-cube text-white"></i>
                </div>
                <span class="ml-2 text-xl font-bold">Inventory Management</span>
            </div>
            <!-- Navigation Links -->
            <ul class="flex space-x-8">
                <li>
                    <a href="{{ route('welcome') }}" class="text-blue-500 font-bold hover:text-blue-700 transition">Home</a>
                </li>
                <li>
                    <a href="{{ route('products.index') }}" class="text-gray-700 hover:text-gray-900 transition">Product</a>
                </li>
                <li>
                    <a href="{{ route('about') }}" class="text-gray-700 hover:text-gray-900 transition">About</a>
                </li>
                <li>
                    <a href="{{ route('userstory') }}" class="text-gray-700 hover:text-gray-900 transition">User Story</a>
                </li>
            </ul>
        </nav>
    </header>

    <!-- Main Content Area -->
    <main>
        @yield('content')
    </main>

    <!-- Footer -->
    <footer class="mt-8">
        <hr class="my-4 border-gray-300">
        <p class="text-center text-gray-600">&copy; 2024 Inventory Management</p>
    </footer>

</body>
</html>
