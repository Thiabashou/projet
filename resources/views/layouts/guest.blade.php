<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>
<style>
    .container1 {
        padding: 30px;
    color: white;
    width:450px;
    height:650px;
    border-radius: 40px;
    background-color: rgb(6, 6, 83);
    box-shadow: 0 0 50px rgba(0, 0, 0, 0.1);
    margin: 0 auto;
    color: rgb(49, 124, 161);
    }
 </style>
        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

        <!-- Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>
    <body class="font-sans text-gray-900 antialiased">
        <div >
            

            <div class="container1">
                {{ $slot }}
            </div>
        </div>
    </body>
</html>
