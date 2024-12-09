<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <link rel="icon" type="image/x-icon" href="/images/logo-zoom.png">
    <style>
        body{
            display: flex;
            flex-direction: column;
            min-height: 100vh;
            font-family: "ABeeZee", sans-serif !important;
        }
        .main-sidebar {
            /* background: linear-gradient(135deg, #2c3e50 0%, #1a457d 100%); */
            background-color: #ffffff !important;
        }

        .main-header {
            background-color: #ffffff;
            /* box-shadow: 0 2px 5px rgba(0,0,0,0.1); */
        }

        .nav-sidebar .nav-item .nav-link{
            border-radius: 10px;
            transition: background-color 0.3s ease;
        }
        
        .nav-sidebar .nav-item .nav-link:hover{
            background-color: rgba(255,255,255,0.1);
        }
        
        .card {
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0,0,0,0.1);
            transition: transform 0.3s ease-in-out;
        }

        .card:hover {
            transform: scale(1.02);
        }

        .modal-content{
            border-radius: 10px;
        }

        .modal-header {
            background-color: #3498db;
            color: white;
        }

        .btn-close {
            background-color: white;
        }

        .main-footer {
            background-color: #f8f9fa;
            border-top: 1px solid #dee2e6;
            padding: 10px;
            text-align: center;
        }

        .center{
            position: absolute;
            left: 50%;
            top: 50%;
            -webkit-transform: translate(-50%, -50%);
            transform: translate(-50%, -50%);
        }

        .content-wrapper{
            flex:1;
            background-color: rgb(197, 255, 248,0.7) !important;
        }
        .nav-link:hover {
            background-color: rgba(197, 255, 248, 0.4) !important;
        }
        .table-responsive {
            max-height: calc(100vh - 200px);
            overflow-y: auto;
        }

        .pagination {
            display: flex;
            justify-content: center; /* Center the pagination links */
            margin-top: 20px;
        }

        .pagination li {
            list-style: none;
            margin: 0 5px;
        }

        .pagination a {
            padding: 8px 12px;
            border: 1px solid #ddd;
            border-radius: 5px;
            text-decoration: none;
            color: #007bff;
            transition: background-color 0.3s ease;
        }

        .pagination a:hover {
            background-color: #007bff;
            color: white;
        }

        .pagination .active a {
            background-color: #007bff;
            color: white;
            border-color: #007bff;
        }
    </style>

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=ABeeZee:ital@0;1&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css">

    <link rel="stylesheet" href="{{ asset('css/adminlte.min.css') }}">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</head>
<body class="hold-transition sidebar-mini">
    <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="staticBackdropLabel">Apakah ingin Logout?</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <a href="/actionlogout">
                        <button type="button" class="btn btn-danger">Logout</button>
                    </a>
                </div>
            </div>
        </div>
    </div>
    <div class="wrapper">
        <nav class="main-header navbar navbar-expand navbar-white navbar-light">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" data-widget="pushmenu" href="#" role="button">
                        <i class="fas fa-bars"></i>
                    </a>
                </li>
            </ul>
            <ul class="navbar-nav ml-auto">
                <li class="nav-item d-flex">
                    
                    <button class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#staticBackdrop">
                        <i class="fas fa-arrow-right-from-bracket"></i> Logout
                    </button>
                    
                    <a class="nav-link" data-widget="fullscreen" href="#" role="button">
                        <i class="fas fa-expand-arrows-alt"></i>
                    </a>
                </li>
            </ul>
        </nav>

        <aside class="main-sidebar sidebar-light-primary elevation-0">
            <a href="/" class="brand-link text-decoration-none">
                <img src="{{ asset('images/logo-zoom.png') }}" alt="Lovely Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
                <span class="brand-text font-weight-light fw-bold" style="color: #5FBDFF;">Lovely Laundry</span>
            </a>

            <div class="sidebar">
                <div class="user-panel mt-3 pb-3 mb-3 d-flex">
                    <div class="image">
                        <img src="{{ asset('img/user2-160x160.jpg') }}" class="img-circle elevation-2" alt="User Image">
                    </div>
                    <div class="info">
                        <a href="{{ url('/admin/dashboard') }}" class="d-block text-decoration-none">Admin</a>
                    </div>
                </div>
                <nav class="mt-2">
                    <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                        <li class="nav-item">
                            <a href="{{ url('/admin/dashboard') }}" class="nav-link">
                                <i class="nav-icon fas fa-home"></i>
                                <p> Home </p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ url('admin/user') }}" class="nav-link">
                                <i class="nav-icon fas fa-user"></i>
                                <p> User Management </p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('order.index') }}" class="nav-link">
                                <i class="nav-icon fas fa-shirt"></i>
                                <p> Order Management </p>
                            </a>
                        </li>
                    </ul>
                </nav>
                

            </div>
        </aside>
        <div class="content-wrapper">
            @yield('content')
        </div>

        <footer class="main-footer">
            <strong>Copyright &copy; {{ date('Y') }} <a href="#">Lovely Laundry</a>. </strong> All rights reserved.
        </footer>
    </div>

    <script src="{{ asset('plugins/jquery/jquery.min.js') }}"></script>
    <script src="{{ asset('js/adminlte.min.js') }}"></script>
</body>
</html>