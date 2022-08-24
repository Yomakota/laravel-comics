<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('page_title')</title>
    <link rel="icon" type="image/x-icon" href="{{ asset('img/favicon.ico') }}">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>

<body>

    @include('partials.header')
    @include('partials.jumbotron')

    <main>
        @yield('main_content')
    </main>

    <footer>
        @include('partials.footer-top')
        @include('partials.footer-bottom')
    </footer>
</body>

</html>
