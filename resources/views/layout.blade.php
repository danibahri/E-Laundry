<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite(['resources/css/app.css','resources/js/app.js'])
    <title>E-Laundry</title>
</head>
<body>
    <x-navbar></x-navbar>
    <main class="mx-auto w-full max-w-screen-xl p-4 py-6 lg:py-8">
        @yield('content')
    </main>
    <x-footer></x-footer>
</body>
</html>