<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Hexlet Blog - @yield('title')</title>
</head>

<body>
    <nav>
        <a href="{{ route('articles.index') }}">Статьи</a> |
        <a href="{{ route('about') }}">О блоге</a>
    </nav>
    <hr>
    <div class="container">
        @yield('content')
    </div>
</body>

</html>
