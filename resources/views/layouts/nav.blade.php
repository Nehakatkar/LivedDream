<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield('title', 'Lived Dream')</title>

   
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css">
    <link rel="stylesheet" href="{{ asset('css/product.css') }}">
    <link rel="stylesheet" href="{{ asset('css/quotation.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">



    

    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200&icon_names=menu" />


    <style>
        body {
            background-color: #f8f9fa;
            font-family: "Poppins", sans-serif;
            margin: 0;
            padding-top: 60px; /* To offset fixed navbar */
        }

        .navbar {
            position: fixed;
            top: 0;
            left: 0;
            right: 0;
            height: 60px;
            z-index: 1300;
            background-color: #fff;
            padding: 0.5rem 1rem;
            box-shadow: 0 0.125rem 0.25rem rgba(0, 0, 0, 0.075);
        }

        .navbar-brand {
            color: black;
            text-decoration: none;
            gap: 5%;
            display: flex;
            align-items: center;
        }
        @media (max-width: 991px) {
           

            .navbar {
                z-index: 1080;
                width: 100%;
            }
            .navbar-brand {
                position: absolute;
                left: 50%;
                transform: translateX(-50%);
            }
        }

        
    </style>
</head>
<body>
<div id="content-wrapper" class="d-flex flex-column">
        <div id="container-fluid d-flex justify-content-between align-items-centr">
            <nav class="navbar navbar-expand-lg bg-white shadow-sm fixed-top">
                <a class="navbar-brand d-flex align-items-center" href="#">
                    <img src="img/WhatsApp Image 2025-02-21 at 12.10.11 1.png" alt="Logo" class="logo me-2" style="height: 32px;">
                    <h4 class="mb-0 fs-5">Lived Dream</h4>
                </a>

                <ul class="navbar-nav ms-auto">
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle d-flex align-items-center" href="#" id="userDropdown" role="button"
                        data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <span class="d-none d-lg-inline text-dark small me-2">Douglas McGee</span>
                        <img class="img-profile rounded-circle" src="img/undraw_profile.svg" style="width: 32px; height: 32px;">
                        </a>
                        <ul class="dropdown-menu dropdown-menu-end shadow" aria-labelledby="userDropdown">
                        <li><a class="dropdown-item" href="#"><i class="fas fa-user fa-sm fa-fw me-2 text-gray-400"></i> Profile</a></li>
                        <li><a class="dropdown-item" href="#"><i class="fas fa-cogs fa-sm fa-fw me-2 text-gray-400"></i> Settings</a></li>
                        <li><a class="dropdown-item" href="#"><i class="fas fa-list fa-sm fa-fw me-2 text-gray-400"></i> Activity Log</a></li>
                        <li><hr class="dropdown-divider"></li>
                        <li><a class="dropdown-item" href="#" data-bs-toggle="modal" data-bs-target="#logoutModal">
                            <i class="fas fa-sign-out-alt fa-sm fa-fw me-2 text-gray-400"></i> Logout
                        </a></li>
                </ul>
            </nav>
        </div>
</div>


<div class="main-content">
    <div class="container mt-4">
        @yield('content')
    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
