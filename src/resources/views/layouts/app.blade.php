<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Blog</title>
    <link rel="stylesheet" href="{{ asset('css/sanitize.css')}}">
    <link rel="stylesheet" href="{{ asset('css/common.css')}}">
    @yield('css')
</head>

<body>
    <header class="header">
            <div class="header__inner">
                <a class="header__logo" href="posts/index.blade.php">BLOG</a>
            </div>

            <nav class="nav">
                <ul class="nav__lists">
                    <li class="nav__lists-item"><a href="">ホーム</a></li>
                    <li class="nav__lists-item"><a href="">ブログ一覧</a></li>
                    <li class="nav__lists-item"><a href="">新規投稿</a></li>
                    <li class="nav__lists-item"><a href="">お問い合わせ</a></li>
                </ul>
            </nav>
    </header>
    <main>
        @yield('content')
    </main>
</body>

</html>