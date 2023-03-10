<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="scroll-smooth scroll-p-20">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Agnieszka Mazur</title>

    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="icon" href="{{ url('img/icon.png') }}">

    <!-- Styles -->
    <link href="{{ asset('/css/app.css') }}" rel="stylesheet">

</head>
<body class="antialiased text-gray-800 dark:text-gray200">
    <div class="min-h-screen bg-gray-100 dark:bg-gray-900 pt-24">
        <x-layout.navbar></x-layout.navbar>
        {{ $slot }}
        <x-layout.footer></x-layout.footer>
    </div>
    <script src="{{ asset('js/app.js') }}"></script>
</body>
</html>
