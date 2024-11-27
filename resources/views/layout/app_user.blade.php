<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lovely</title>
    <link rel="icon" type="image/x-icon" href="/images/logo-zoom.png">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=ABeeZee:ital@0;1&display=swap" rel="stylesheet">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Bagel+Fat+One&display=swap" rel="stylesheet">
    
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css">

    <style>
        html, body {
            height: 100%; 
        }

        body {
            font-family: "ABeeZee", sans-serif;
            display: flex;
            flex-direction: column;
        }

        .navbar-brand {
            font-family: "Bagel Fat One", system-ui;
            font-weight: 400;
        }

        .profile-menu {
            margin-left: auto;
        }

        .content-wrapper {
            flex-grow: 1;
        }

        .footer {
            background-color: #0f294d;
        }

        .footer p {
            font-size: 0.7rem;
        }
    </style>
</head>
<body>
    <nav class="navbar fixed-top navbar-expand-lg bg-body-tertiary px-md-4 bg-info-subtle" style="z-index: 10;">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">
                <img src="{{ asset('images/logo-zoom.png') }}" alt="Bootstrap" width="30" height="30" class="rounded-circle">
            </a>
            <a class="navbar-brand fw-bold text-info" href="/">Lovely</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            @if(Auth::check())
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item">
                    @if(Route::current()->getName() == 'home')
                        <a class="nav-link active" aria-current="page" href="/">Home</a>
                    @else
                        <a class="nav-link" aria-current="page" href="/">Home</a>
                    @endif
                    </li>
                    @if(Auth::user()->role == 'Customer')
                    <li class="nav-item">
                    @if(Route::current()->getName() == 'order')
                        <a class="nav-link active" href="{{ route('order.index') }}">Order</a>
                    @else
                        <a class="nav-link" href="{{ route('order.index') }}">Order</a>
                    @endif
                    </li>
                    @endif
                    
                    @if(Auth::user()->role == 'Administrator')
                    <li class="nav-item">
                        <a class="nav-link" href="{{ url('/admin/dashboard') }}">Dashboard</a>
                    </li>
                    @endif
                </ul>
                
                <ul class="navbar-nav ms-auto mb-2 mb-lg-0 profile-menu"> 
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            <div class="profile-pic d-inline">
                                <img src="{{ asset('img/user2-160x160.jpg') }}" alt="Profile Picture" style="width:35px;" class="rounded-circle">
                            </div>
                        </a>
                        <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                            <li><a class="dropdown-item" href="{{ url('/user/profile') }}"><i class="fas fa-sliders-h fa-fw"></i> Account</a></li>
                            @if(Auth::user()->role == 'Customer')
                            <li><a class="dropdown-item" href="{{ url('/user/history') }}"><i class="fas fa-clock-rotate-left fa-fw"></i> Order History</a></li>
                            @endif
                            <li><hr class="dropdown-divider"></li>
                            <li><a class="dropdown-item" href="/actionlogout"><i class="fas fa-sign-out-alt fa-fw"></i> Log Out</a></li>
                        </ul>
                    </li>
                </ul>
                
            </div>
            @else
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item">
                    @if(Route::current()->getName() == 'home')
                        <a class="nav-link active" aria-current="page" href="/">Home</a>
                    @else
                        <a class="nav-link" aria-current="page" href="/">Home</a>
                    @endif
                    </li>
                    <li class="nav-item">
                    @if(Route::current()->getName() == 'login')
                        <a class="nav-link active" href="{{ url('login') }}">Login</a>
                    @else
                        <a class="nav-link" href="{{ url('login') }}">Login</a>
                    @endif
                    </li>
                    <li class="nav-item">
                    @if(Route::current()->getName() == 'register')
                        <a class="nav-link active" href="{{ url('register') }}">Register</a>
                    @else
                        <a class="nav-link" href="{{ url('register') }}">Register</a>
                    @endif
                        
                    </li>
                </ul>
            </div>
            @endif
        </div>
    </nav>
    
    <div class="content-wrapper">
        @yield('content')
    </div>

    <div class="footer d-flex flex-column justify-content-center align-items-center py-5 gap-3" style="background-color: #1a457d">
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
    <div class="d-flex justify-content-center align-items-center text-white py-3 px-4 text-center footer" style="background-color: #0f294d">
        <p>
            <strong>Copyright &copy; {{ date('Y') }} <a href="#">Lovely Laundry</a>.</strong> All rights reserved.
        </p>
    </div>
</body>
</html>
