<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ env('APP_NAME') }} - @yield('page-title')</title>

    @vite('resources/js/app.js')
</head>
<body>
    <header></header>
    <main>
        @yield('main-content')
    </main>
    <footer></footer>
</body>
</html>