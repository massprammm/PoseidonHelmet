<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Login</title>
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="flex items-center justify-center h-screen bg-gradient-to-r from-blue-600 to-purple-700">
    <div class="w-full max-w-md p-6 bg-white rounded-lg shadow-lg">
        <!-- Header -->
        <div class="text-center mb-6">
            <img src="{{ asset('logo.png') }}" alt="Logo" class="w-24 h-24 mx-auto">
            <h2 class="text-3xl font-bold text-gray-800 mt-4">Admin Login</h2>
            <p class="text-gray-600 text-sm">Masukkan Email Dan Password</p>
        </div>
        <!-- Form -->
        @if ($errors->any())
            <div class="mb-4 text-red-600">
            <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
            </ul>
            </div>
        @endif
        <form action="{{ url('/admin/login') }}" method="POST">
            @csrf
            <div class="mb-4">
                <label for="email" class="block text-sm font-medium text-gray-700">Email</label>
                <input type="email" name="email" id="email" 
                    class="w-full px-4 py-2 mt-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500" 
                    placeholder="Enter your email" required>
            </div>
            <div class="mb-4">
                <label for="password" class="block text-sm font-medium text-gray-700">Password</label>
                <input type="password" name="password" id="password" 
                    class="w-full px-4 py-2 mt-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500" 
                    placeholder="Enter your password" required>
            </div>
            <button type="submit" 
                class="w-full bg-blue-600 text-white py-2 px-4 rounded-lg hover:bg-blue-700 focus:ring-2 focus:ring-blue-500">
                Login
            </button>
        </form>
    </div>
</body>
</html>
