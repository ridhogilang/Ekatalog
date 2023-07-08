<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>E-Katalog | {{ $title }}</title>
    <link rel="icon" type="image/png" href="{{ asset('image/icon.png') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    @stack('header')
</head>
<body>
    @include('partials.sidebar')
    
    @yield('container')

    @stack('footer')
</body>
</html>