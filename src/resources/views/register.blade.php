<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>登録</title>
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
                <li class="menu-item"><a class=header href="{{ route('top') }}">戻る</a></li>
            </ul>
        </nav>
    </header>
    <form action="{{ route('checkRegister') }}" method="POST">
        @csrf
        <input type="text" placeholder="Username" name="username" />
        <input type="password" placeholder="Password" name="password" />
        <input type="password" placeholder="Password Check" name="passwordCheck" />
        <button>登録</button>
    </form>
</body>

</html>