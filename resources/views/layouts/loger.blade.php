<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="IE=7">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="author" content="Agus FROST">
    <meta name="copyright" content="Agus FROST">
    <meta name="description" content="Fbox adalah website streaming asupan, gore, creepy dan lain lain.">
    <meta name="keywords" content="asupan, gore, creepy, disturbing">
    <meta name="robots" content="noindex,nofollow">
    <meta name="rating" content="adult" />
    <meta name="rating" content="RTA-5042-1996-1400-1577-RTA" />

    <title>Fbox | {{ $title }}</title>

    <!-- CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <link rel="stylesheet" href="/css/style.css">
    <link rel="stylesheet" href="/css/loger.css">

    <link rel="apple-touch-icon-precomposed" sizes="57x57" href="/img/icon/apple-touch-icon-57x57.png" />
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="/img/icon/apple-touch-icon-114x114.png" />
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="/img/icon/apple-touch-icon-72x72.png" />
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="/img/icon/apple-touch-icon-144x144.png" />
    <link rel="apple-touch-icon-precomposed" sizes="60x60" href="/img/icon/apple-touch-icon-60x60.png" />
    <link rel="apple-touch-icon-precomposed" sizes="120x120" href="/img/icon/apple-touch-icon-120x120.png" />
    <link rel="apple-touch-icon-precomposed" sizes="76x76" href="/img/icon/apple-touch-icon-76x76.png" />
    <link rel="apple-touch-icon-precomposed" sizes="152x152" href="/img/icon/apple-touch-icon-152x152.png" />
    <link rel="icon" type="image/png" href="/img/icon/favicon-196x196.png" sizes="196x196" />
    <link rel="icon" type="image/png" href="/img/icon/favicon-96x96.png" sizes="96x96" />
    <link rel="icon" type="image/png" href="/img/icon/favicon-32x32.png" sizes="32x32" />
    <link rel="icon" type="image/png" href="/img/icon/favicon-16x16.png" sizes="16x16" />
    <link rel="icon" type="image/png" href="/img/icon/favicon-128.png" sizes="128x128" />
    <meta name="application-name" content="&nbsp;" />
    <meta name="msapplication-TileColor" content="#FFFFFF" />
    <meta name="msapplication-TileImage" content="mstile-144x144.png" />
    <meta name="msapplication-square70x70logo" content="mstile-70x70.png" />
    <meta name="msapplication-square150x150logo" content="mstile-150x150.png" />
    <meta name="msapplication-wide310x150logo" content="mstile-310x150.png" />
    <meta name="msapplication-square310x310logo" content="mstile-310x310.png" />

</head>

<body>
    <!-- Navbar -->
    @include('partials.navbar')
    <!-- End Navbar -->

    <!-- Main -->
    @yield('isi-loger')
    <!-- End Main -->

    <!-- Footer -->
    @include('partials.footer')
    <!-- End Footer -->

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous">
    </script>
</body>

</html>
