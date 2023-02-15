<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">

    <title>Home</title>
</head>

<body>
    <nav class="navbar bg-primary navbar-expand-lg ">
        <div class="container-fluid">
            <a class="navbar-brand text-white" href="{{ route('home') }}">Home</a>
            <div class="collapse navbar-collapse">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link text-white" href="{{ route('about-me') }}">About Me</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-white" href="{{ route('my-blog') }}">My Blog</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-white" href="{{ route('testimonials') }}">Testimonials</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-white" href="{{ route('shop') }}">Shop</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <div class="container">
        <div class="row">
            <div class="col-12 text-center">
                <h1>ABOUT ME</h1>
            </div>
        </div>
    </div>
</body>

</html>