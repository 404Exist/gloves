<!doctype html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <link rel="icon" type="image/jpg" href="./images/loader.jpg" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Glove App</title>
    <link rel="stylesheet" href="./assets/index-cpT6kkN8.css" />
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body>
    <div class="loader active">
        <img src="./images/loader.jpg" alt="Loading..." />
    </div>
    <div class="container">
        @yield('content')
    </div>

    @stack('js')
</body>

</html>