<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Copy of transistor</title>

    <link href="{{ asset('/css/app.css') }}" rel="stylesheet" />

    <link
        href="https://fonts.googleapis.com/css2?family=Noto+Sans&family=Open+Sans&family=Roboto:wght@400;500;700;900&display=swap"
        rel="stylesheet">
    <!-- Fonts -->
    <style>
        body {
            font-family: 'Roboto', 'Open Sans', 'Noto Sans', sans-serif;
        }
    </style>
</head>

<body class="antialiased bg-gray-900" style="font-family: 'Open Sans', sans-serif;">

    @include('partials.navbar')

    @yield('content')

    @include ('partials.footer')

</body>

</html>