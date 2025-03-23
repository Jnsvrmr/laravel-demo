<!DOCTYPE html>
<html lang="nl">
<head>
    <meta charset="UTF-8">
    <title>Laravel Miniwebsite</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>
<body>
    <nav>
        <a href="{{ route('home') }}">Home</a>
        <a href="{{ route('vangsten') }}">Vangsten</a>
        <a href="{{ route('hobby') }}">Hobby</a>
        <a href="{{ route('contact') }}">Contact</a>
    </nav>

    <main>
        @yield('content')
    </main>
</body>
</html>
