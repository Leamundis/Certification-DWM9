<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href=" {{ URL::asset("css/base.css") }} ">
    <title>@yield('title')</title>
</head>
<body>
    <header>
        <nav>
            <ul>
                    <li><a href="/">Accueil</a></li>
                    <li><a href="/album">Albums</a></li>
                    <li><a href="/shirt">T-shirts</a></li>
                    <li><a href="/instrument">Instruments</a></li>
            </ul>
        </nav>
        @yield('content')
    </header>
    <main>

    </main>
</body>
</html>