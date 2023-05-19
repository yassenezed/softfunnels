<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @include('partials.css')
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Soft Funnels | @yield('title')</title>
</head>
<body>
    @include('partials.navbar')
    <main>
    <div class="container">
        @include('partials.flashbag')
        <div class="m-3">
        @yield('main')
        </div>
    </div>
    </main>
    @include('partials.newfooter')
    @include('partials.js')
    @stack('javascript')
</body>
</html>