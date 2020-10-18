<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Copy of transistor</title>

    <link href="{{ asset('/css/app.css') }}" rel="stylesheet" />
    
</head>

<body class="antialiased bg-gray-900 p-4" style="font-family: 'Roboto', sans-serif;">

    @include('partials.navbar')

    @yield('content')

    @include ('partials.footer')

</body>

</html>