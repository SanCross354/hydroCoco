<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/css/style.css">
    <link rel="icon" type="image/x-icon" href="img/logo.png">
    @vite('resources/css/app.css', 'resources/js/app.js')
</head>
<body class="bg-gray-950 font-poppins">
    <!-- component -->
<div class="bg-[radial-gradient(ellipse_at_top,_var(--tw-gradient-stops))] from-zinc-600 to-zinc-800 h-screen">
    <div class="flex justify-center h-screen">

        {{-- Sisi Kiri --}}
        <div class="hidden bg-cover lg:block lg:w-2/3" style="background-image: url(img/ngalir.jpg)">
            <div class="flex items-center h-full px-20 bg-gray-900 bg-opacity-40">
                <div>
                    <h2 class="text-4xl font-bold text-white">HydroCoco</h2>
                    
                    <p class="max-w-xl mt-3 text-gray-300">"Air itu cair, lembut dan menghasilkan. Namun, air akan mengikis batu, yang kaku dan tidak bisa menghasilkan. Sebagai aturan, apa pun yang cair, lunak, dan luluh akan mengalahkan apa pun yang kaku dan keras. Ini adalah paradoks lain: apa yang lembut itu kuat." - Lao Tzu</p>
                </div>
            </div>
        </div>
        
        {{-- Bagian Login Akun --}}
        <div class="flex items-start mt-16 w-full max-w-md px-6 mx-auto lg:w-2/6">
            <div class="flex-1">
                <span class="">
                    <img src="img/logo2.png" alt="" class="w-96 pl-12" />
                  </span>
                
                <div class="text-center">
                    <p class="mt-3 text-white font-extrabold text-4xl">LOGIN</p>
                </div>

                {{-- Masukkan Akun --}}
                <div class="mt-3">
                    <form>
                        <div>
                            <label for="email" class="block mb-2 text-sm text-white">Email</label>
                            <input type="email" name="email" id="email" placeholder="Masukkan email" class="block w-full px-4 py-2 mt-2 text-gray-700 placeholder-gray-400 bg-white border border-gray-200 rounded-md dark:placeholder-gray-600 dark:bg-gray-900 dark:text-gray-300 dark:border-gray-700 focus:border-blue-400 dark:focus:border-blue-400 focus:ring-blue-400 focus:outline-none focus:ring focus:ring-opacity-40" />
                        </div>

                        <div class="mt-3">
                            <div class="flex justify-between mb-2">
                                <label for="password" class="text-sm text-white">Password</label>
                            </div>

                            <input type="password" name="password" id="password" placeholder="Masukkan password anda" class="block w-full px-4 py-2 mt-2 text-gray-700 placeholder-gray-400 bg-white border border-gray-200 rounded-md dark:placeholder-gray-600 dark:bg-gray-900 dark:text-gray-300 dark:border-gray-700 focus:border-blue-400 dark:focus:border-blue-400 focus:ring-blue-400 focus:outline-none focus:ring focus:ring-opacity-40" />
                        </div>
                        <p class="mt-1 text-sm text-gray-400">Lupa password? <a href="#" class="text-lime-400 focus:outline-none focus:underline hover:underline">Atur Ulang</a></p>

                        <div class="mt-6">
                            <button
                                class="w-full px-4 py-2 tracking-wide font-extrabold text-black transition-colors duration-200 transform bg-lime-400 rounded-md hover:bg-sky-100 focus:outline-none focus:bg-blue-400 focus:ring focus:ring-blue-300 focus:ring-opacity-50">
                                Masuk
                            </button>
                        </div>

                    </form>

                    {{-- <p class="mt-6 text-sm text-center text-gray-400">Belum punya akun? <a href="#" class="text-lime-400 focus:outline-none focus:underline hover:underline">Registrasi</a></p> --}}
                </div>
            </div>
        </div>
    </div>
</div>
</body>
</html>