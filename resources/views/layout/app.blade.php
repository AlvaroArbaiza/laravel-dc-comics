<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
    <title>@yield('title')</title>
    @vite('resources/js/app.js')
</head>
<body>

    {{-- header importato con @include --}}
    @include('partials.header')

    <main>
        @yield('content')
    </main>

    {{-- footer importato con @include --}}
    @include('partials.footer')
</body>

</html>
