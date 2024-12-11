<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    @vite('resources/css/app.css')
    <title>KATALOG</title>
    <style>
        /* Transisi fade-in */
        .fade-in {
            animation: fadeIn 2s ease-out;
        }

        @keyframes fadeIn {
            0% {
                opacity: 0;
            }
            100% {
                opacity: 1;
            }
        }
    </style>
</head>
<body class="bg-gray-0">
    <div class="min-h-full">
        <nav class="bg-transparent">
            <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
                <div class="flex h-16 items-center justify-between">
                    <div class="flex-shrink-0">
                        <img class="w-32 h-auto" src="{{ asset('logo.png') }}" alt="Your Company">
                    </div>

                    <div class="flex-grow justify-center">
                        <div class="bg-gray-800 rounded-full flex space-x-6 px-4 py-2">
                            <a href="#" class="text-gray-300 hover:text-white px-3 py-2 text-sm font-medium">FULLFACE</a>
                            <a href="#" class="text-gray-300 hover:text-white px-3 py-2 text-sm font-medium">HALF FACE</a>
                            <a href="#" class="text-gray-300 hover:text-white px-3 py-2 text-sm font-medium">About Us</a>
                        </div>
                    </div>
                </div>
            </div>
        </nav>

        <header class="bg-transparent">
            <div class="mx-auto max-w-7xl px-4 py-6 sm:px-6 lg:px-8">
                <!-- Card dengan gambar dan teks di dalamnya -->
                <div class="card-container fade-in flex items-center space-x-12 p-10 rounded-lg bg-white/50 p-6 ">
                    <!-- Gambar sebelah kiri -->
                    <img src="{{ asset('araispacedblue.png') }}" alt="Arai Spaced Blue" class="w-[400px] h-auto object-contain rounded-md">

                    <!-- Teks di sebelah kanan -->
                    <div class="card-text">
                    <h1 class="text-2xl font-bold tracking-tight text-gray-900">New Arrival!</h1>
                      <h1 class="text-6xl font-bold tracking-tight text-gray-900">Arai Quantic Space Blue</h1>
                      <br>
                      <hr class="my-4">
                        <div class="flex items-center space-x-8 justify-between">
                        <h3 class="text-6xxl font-bold tracking-tight text-gray-900">Get Yours Now!</h3>
                          <h3 class="text-2xl font-bold tracking-tight text-yellow-500 ">Available at offline store</h3>
                      </div>
                        </div>


                    </div>
                </div>
            </div>
        </header>

        <main>
            <div class="mx-auto max-w-7xl px-4 py-6 sm:px-6 lg:px-8">
            <div class="card-text">
                      <hr class="my-4">
                        <div class="flex items-center space-x-8 justify-between">
                        <h3 class="text-6xxl font-bold tracking-tight text-gray-900">Instagram : @PoseidonHelmetID</h3>
                          <h3 class="text-6xxl font-bold tracking-tight text-yellow-500 ">Offline Store : <br> PoseidonHelmetBdg</h3>
                      </div>
                        </div>
                 
            </div>
        </main>
    </div>
</body>
</html>