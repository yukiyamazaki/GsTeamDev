<!DOCTYPE html>
<html lang="en">

<head>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="{{ asset('assets/css/destyle.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/app.css') }}">
</head>

<body>

    <header>

        <ul>
            <li>home</li>
            <li>about</li>
            <li>検索</li>
        </ul>

        <ul>
            <li>投稿</li>
            <li>登録</li>
            <li>アイコン</li>
        </ul>

    </header>

    <main>
        @yield('content')
    </main>

    <footer>
        <small>Copyright © 2020 ハリ〜 All Rights Reserved.</small>
    </footer>

    <script src="{{ asset('assets/js/app.js') }}"></script>
</body>

</html>