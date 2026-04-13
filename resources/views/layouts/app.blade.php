<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', "Rajbir's Car Rental - Kharar, Punjab")</title>
    <meta name="description" content="Premium car rental service in Kharar, Punjab. Rent Ertiga or Alto at affordable rates. Call +91 98765 43210">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&family=Outfit:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    @yield('styles')
</head>
<body>
    @include('partials.navbar')
    @yield('content')
    @include('partials.footer')
    <script src="{{ asset('js/app.js') }}"></script>
    @yield('scripts')
</body>
</html>
