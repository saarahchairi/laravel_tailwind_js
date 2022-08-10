<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite('resources/css/app.css')
    <title>Document</title>
</head>
<body>
    <header>
        @include("partial.nav")
    </header>
    <main class="mx-60">
        @yield("content")
    </main>
    <footer>
        @include("partial.footer")
    </footer>
</body>
</html>
