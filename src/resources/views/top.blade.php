<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>KumaTest</title>
    <link rel="stylesheet" href="css/app.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Zen+Maru+Gothic&display=swap" rel="stylesheet">
    <link rel="shortcut icon" href="pict/favicon.ico">


</head>

<body>
    <header>
        <h1 class="title">くまのさいと</h1>
        <nav class="nav">
            <ul class="menu-group">
                <li class="menu-item"><a class=header href="{{ route('register') }}">登録</a></li>
                <li class="menu-item"><a class=header href="{{ route('login') }}">ログイン</a></li>
            </ul>
        </nav>
    </header>
    <div class="center">
        <a href="{{ route('kuma') }}">
            <img class=fifty src="pict/kuma.png">
        </a>
    </div>
</body>

</html>