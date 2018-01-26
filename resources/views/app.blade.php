<!doctype html>

<html lang="en">

<head>

    <meta charset="UTF-8">

    <title>Document</title>

    <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css">


</head>

<body>

    <div class="container">

        <!-- kada idemo sa yield view kreira sekciju skoja ce biti prikazana ovde -->
        <!-- idemo u about i odredimo sta se nalazi u sekciji -->
        @yield('content')

    </div>

        @yield('footer')

</body>
</html>