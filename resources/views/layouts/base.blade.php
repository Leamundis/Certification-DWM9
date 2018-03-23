<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet/less" type="text/css" href=" {{ URL::asset("css/style.less") }} " />
    <title>@yield('title')</title>
</head>
<body>
    
    <header>
        <nav>
            <ul>
                <li><a href="/">Accueil</a></li>
                <li><a href="/album">Albums</a></li>
                <li><a href="/shirt">T-shirts</a></li>
            </ul>
        </nav>
        @yield('nav')
    </header>
    <main>
        @yield('kaiser')
        @yield('content')
    </main>
    <script src="//cdnjs.cloudflare.com/ajax/libs/less.js/3.0.0/less.min.js" ></script>
    <script src="./js/script.js" ></script>
</body>
</html>