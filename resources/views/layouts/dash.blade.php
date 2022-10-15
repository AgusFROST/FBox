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



    <!-- css -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <link href="/css/dashboard.css" rel="stylesheet">
</head>

<body>

    @include('partials.header')

    <div class="container-fluid">
        <div class="row">
            @include('partials.dashnav')

            <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
                @yield('isiDash')
            </main>
        </div>
    </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous">
    </script>

    <script src="https://cdn.jsdelivr.net/npm/feather-icons@4.28.0/dist/feather.min.js"
        integrity="sha384-uO3SXW5IuS1ZpFPKugNNWqTZRRglnUJK6UAZ/gxOX80nxEkN9NcGZTftn6RzhGWE" crossorigin="anonymous">
    </script>
    <script src="/js/dashboard.js"></script>
</body>

</html>
