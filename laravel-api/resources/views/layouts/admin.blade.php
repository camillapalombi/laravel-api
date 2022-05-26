<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{ config('app.name', 'Laravel') }} | @yield('pageTitle')</title>

    <!-- JS -->
    <script src="{{ asset('js/admin.js') }}" defer></script>

    <!-- STYLE -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">

</head>

<body>

    @include('partials.header')

    @yield('pageMain')

</body>
</html>