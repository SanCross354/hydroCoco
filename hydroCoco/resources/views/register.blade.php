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
        <div class="flex w-full max-w-md mx-auto lg:w-2/6">
            <div class="flex-1">
                <h1 class="font-bold text-white text-2xl">REGISTRASI</h1>
            </div>
        </div>
    </div>
</div>
</body>
</html>