<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <title>Info 6</title>
</head>
<body>
    @include('partials.nav-header-main')
    
    <div class="container">

        @include('partials.sesion-flash-status')
        @yield('content')

    </div>
    
</body>
<script src="{{ asset('js/app.js') }}"></script>
</html>