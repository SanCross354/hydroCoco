<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/css/style.css">
    <title>HydroCoco | {{$nama}}</title>
    <link rel="icon" type="image/x-icon" href="img/logo.png">
    @vite('resources/css/app.css', 'resources/js/app.js')
</head>
<body class="bg-gray-950 font-poppins">
<div class="grid grid-cols-12 items-start gap-0.5">

    @yield('container')
</div>
</body>
</html>