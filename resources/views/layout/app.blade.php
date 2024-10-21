<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lovely</title>

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=ABeeZee:ital@0;1&display=swap" rel="stylesheet">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Bagel+Fat+One&display=swap" rel="stylesheet">
    
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css">

    <style>
        body {
            font-family: "ABeeZee", sans-serif;
        }
        .navbar-brand {
            font-family: "Bagel Fat One", system-ui;
            font-weight: 100;
            text-shadow: 1px 1px #1a457d;
        }
        
    </style>
</head>
<body>
    <nav class="navbar fixed-top navbar-expand-lg bg-body-tertiary px-md-4 bg-info-subtle" style="">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">
                <img src="{{ asset('images/logo-zoom.png') }}" alt="Bootstrap" width="30" height="30" class="rounded-circle">
            </a>
            <a class="navbar-brand fw-bold text-info" href="/">Lovely</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="/">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ url('login') }}">Login</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ url('register') }}">Register</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    
    @yield('content')

    <div class="d-flex flex-column justify-content-center align-items-center py-5 gap-3" style="background-color: #1a457d">
        <div class="">
            <h3 class="text-white">Get in touch with us!</h3>
        </div>
        <div class="d-flex justify-content-center align-items-center gap-4">
            <a class="bg-white rounded-circle fs-3 text-black" style="padding: 2px 10px 0px 10px" href="https://instagram.com">
                <i class="fab fa-instagram"></i>
            </a>
            <a class="bg-white rounded-circle fs-3 text-black" style="padding: 2px 10px 0px 10px" href="https://whatsapp.com">
                <i class="fab fa-whatsapp"></i>
            </a>
            <a class="bg-white rounded-circle fs-3 text-black" style="padding: 2px 10px 0px 10px" href="https://facebook.com">
                <i class="fab fa-facebook"></i>
            </a>
        </div>
    </div>
    <div class="d-flex justify-content-center align-items-center text-white py-3 px-4 text-center" style="background-color: #0f294d">
        <p style="font-size: 0.7rem;">
            <strong>Copyright &copy; {{ date('Y') }} <a href="#">Lovely Laundry</a>.</strong> All rights reserved.
        </p>
    </div>
</body>
</html>