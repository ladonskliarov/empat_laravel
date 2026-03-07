<!DOCTYPE html>
<html lang="uk">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/styles.css') }}">
    <title>History Malva ⚔️</title>
</head>

<body>
    <nav class="nav-bar">
        History Malva ⚔️
        <a href="{{route('formations.index')}}">
            Формування СОУ
        </a>
        <a href="{{route('brigades.index')}}">
            Бригади
        </a>
        <a href="{{route('battles.index')}}">
            Битви
        </a>
        @guest
        <a href="{{route('auth.login')}}">
            Увійти
        </a>
        <a href="{{route('auth.registration')}}">
            Реєстрація
        </a>
        @endguest
        @auth
        <a href="{{route('products.index')}}">
            Мерч
        </a>
        <a href="{{route('account.index')}}">
            Аккаунт
        </a>
        @endauth
    </nav>
    <section class="content" style="width:100%">
        {{$content}}
    </section>
</body>

</html>