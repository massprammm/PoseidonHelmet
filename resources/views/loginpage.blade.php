<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Page</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="flex items-center justify-center h-screen bg-gray-900">
    <div class="bg-gray-800 shadow-lg rounded-lg p-10 w-full max-w-md">
        <!-- Logo -->
        <div class="flex justify-center mb-10">
            <img src="{{ asset('logo.png') }}" alt="PoseidonHelmet Logo" class="w-64 h-auto">
        </div>
        <div class="flex flex-col gap-6">
            <!-- Button untuk pengguna -->
            <form action="{{ route('user.dashboard') }}" method="GET" class="flex justify-center">
                <button type="submit" class="px-6 py-3 text-white bg-blue-800 rounded-full hover:bg-blue-900 text-lg font-semibold w-full">
                    Explore Katalog kami!
                </button>
            </form>

            <!-- Button untuk admin -->
            <a href="/admin/login" class="bg-blue-800 text-white text-center py-3 rounded-full hover:bg-blue-900 text-lg font-semibold w-full">
                Masuk Sebagai Admin
            </a>
        </div>
    </div>
</body>
</html>