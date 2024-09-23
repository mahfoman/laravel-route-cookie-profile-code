<!DOCTYPE html>
<html lang="en">
<head>
    <title>BS5 Laravel</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
</head>
<body>

<div class="p-5 bg-primary text-white text-center">
    <h1>BS5 Laravel</h1>
</div>

<nav class="navbar navbar-expand-sm bg-dark navbar-dark">
    <div class="container">
        <ul class="navbar-nav">
            <li class="nav-item">
                <a class="nav-link active" href="/">Home</a>
            </li>
        </ul>
    </div>
</nav>


@yield('content')

<div class="mt-5 p-4 bg-dark text-white text-center">
    <p>Footer</p>
</div>

</body>
</html>
