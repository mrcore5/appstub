<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Meta Information -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>@yield('title', config('app.name'))</title>

    <!-- CSS -->
    <link href="/css/app.css" rel="stylesheet">

    <!-- Global Spark Object -->
    <script>
    </script>
</head>

<body v-cloak>

    <div id="app">

        <!-- Navigation -->

        <!-- Main Content -->
        <div class="container">
            <{{ $page }} :data=<?= json_encode($data) ?>></{{ $page }}>
        </div>

        <!-- JavaScript -->
        <script src={{ asset('app/mrcore/appstub/js/app.js') }}></script>
    </div>
</body>
</html>
