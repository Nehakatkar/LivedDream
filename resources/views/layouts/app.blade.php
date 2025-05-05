<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield('title', 'Lived dream')</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/product.css') }}">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200&icon_names=menu" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/regular.min.css">



    <style>
        body {
            background-color: #f8f9fa;
            font-family: "Poppins", sans-serif;
            font-weight: 100;
            font-style: normal;
            width: 100%;
            transition: margin-left 0.3s ease-in-out;
        }

        .navbar {
            position: fixed;
            top: 0;
            left: 0;
            right: 0;
            height: 60px;
            z-index: 1300;
            background-color: #ffffff;
            padding: 0.5rem 1rem;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.05);
        }

        .navbar-brand {
            color: black;
            text-decoration: none;
            gap: 5%;
            display: flex;
            align-items: center;
        }

        .sidebar {
            width: 250px;
            background: #343a40;
            color: #fff;
            height: 100vh;
            position: fixed;
            top: 60px; /* Below navbar */
            left: 0;
            z-index: 1200;
            transform: translateX(0);
            transition: transform 0.3s ease-in-out;
            padding: 10px 0;
            
        }

        .sidebar .nav-item {
            display: flex;
          
            gap: 10px;
            padding: 8px 7px;
            /* margin-bottom: 5px; */
            text-decoration: none;
            color: #ebdfdf;
            font-weight: 600;
            border-radius: 5px;
            transition: all 0.3s ease-in-out;
        }

        .sidebar a:hover {
            background: #495057;
        }

        #sidebar.collapsed {
            width: 80px;
        }

        #sidebar.collapsed .nav-text,
        #sidebar.collapsed .sidebar-title {
            display: none;
        }

        .main-content {
            margin-left: 250px;
            padding: 10px;
            width: calc(100% - 250px);
            transition: all 0.3s ease-in-out;
        }

        #sidebar.collapsed ~ .main-content {
            margin-left: 80px;
            width: calc(100% - 80px);
        }

        #sidebartoggle {
            font-size: 24px;
            width: 40px;
            height: 40px;
            display: flex;
            align-items: center;
            justify-content: center;
            border-radius: 50%;
            /* transition: left 0.3s ease-in-out, width 0.3s, height 0.3s; */
            position: fixed;
            left: 270px;
            transition: all 0.3s ease-in-out;
            cursor: pointer;
            z-index: 1100;
            background-color: white;
            box-shadow: 0 0.125rem 0.25rem rgba(0, 0, 0, 0.075);
        }

        #sidebar.collapsed ~ #sidebartoggle {
            left: 90px;
            width: 30px;
            height: 30px;
            font-size: 18px;
        }
        body.sidebar-collapsed .sidebar {
            transform: translateX(-100%);
        }
        .main-content {
           
            position: absolute;
            top: 60px; /* height of the navbar */
        
            right: 0;
            bottom: 0;
            overflow-y: auto;
            padding: 20px;
            transition: all 0.3s ease-in-out;
        }
        .dropdown {
            display: flex;
            flex-direction: column;
           
        }

        .dropdown-menu {
            display: none;
            flex-direction: column;
            list-style: none;
            padding-left: 30px;
            margin-top: 1px; 
            background-color:unset;
            position: relative;
        }

        .dropdown.open .dropdown-menu {
            display: flex;
        } 

         .dropdown-menu li {
            margin-left: auto;
            margin: 2px 0;
        } 

         .dropdown-icon {
            transition: transform 0.1s ease;
        } 

         .dropdown.open .dropdown-icon {
            transform: rotate(180deg);
        }
            #sidebar.collapsed .dropdown-icon {
            display: none;
        }
        .sidebar .nav-item:last-child {
            margin-bottom: 0; /* remove last item's extra space */
        }

        body.sidebar-collapsed .main-content {
            pointer-events: none;
            opacity: 0.5;
        }




        

        @media (max-width: 991px) {
            .sidebar {
                transform: translateX(-100%);
                width: 250px;
              
                top: 50px; /* remove extra gap */
                height: 100vh;
                

            }

            .main-content {
              
                top: 60px;
                width: 100% !important;
                height: calc(100% - 60px);
                    
          
            }
                  

            body.sidebar-collapsed .main-content {
                margin-left: 0 !important;
                width: 100% !important;
            }
            #sidebar.collapsed ~ .main-content {
                left: 0 !important;
            }

            #sidebartoggle {
                
                left: 10px;
               
            }

            .navbar-brand {
                position: absolute;
                left: 50%;
                transform: translateX(-50%);
            }

            .sidebar {
                top: 60px;
                width: 250px;
                height: calc(100vh - 60px);
                transform: translateX(-100%);
            }

            body.sidebar-collapsed .sidebar {
                transform: translateX(0);
            }

            #sidebar.collapsed .nav-text,
            #sidebar.collapsed .sidebar-title {
                display: inline;
            }

            .navbar {
                z-index: 1080;
            }
        }
    </style>
</head>
<body>

<!-- NAVBAR -->
<nav class="navbar navbar-expand navbar-light bg-white topbar mb-0 static-top shadow position-relative">
    <button id="sidebartoggle" class="btn">
        <span class="material-symbols-outlined">menu</span>
    </button>

    <a class="navbar-brand d-flex ms-2">
        <div class="brand">
            <img src="img/WhatsApp Image 2025-02-21 at 12.10.11 1.png" alt="" class="logo" style="height: 2rem;">
        </div>
        <h4 class="ms-2 mb-0">Lived Dream</h4>
    </a>

    <ul class="navbar-nav ms-auto">
        <div class="topbar-divider d-none d-sm-block"></div>
        <li class="nav-item dropdown no-arrow">
            <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button"
                data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <span class="mr-2 d-none d-lg-inline text-gray-600 small">Douglas McGee</span>
                <img class="img-profile rounded-circle" src="img/undraw_profile.svg">
            </a>
            <ul class="dropdown-menu dropdown-menu-end shadow animated--grow-in" aria-labelledby="userDropdown">
                <li><a class="dropdown-item" href="#"><i class="fas fa-user fa-sm fa-fw me-2 text-gray-400"></i> Profile</a></li>
                <li><a class="dropdown-item" href="#"><i class="fas fa-cogs fa-sm fa-fw me-2 text-gray-400"></i> Settings</a></li>
                <li><a class="dropdown-item" href="#"><i class="fas fa-list fa-sm fa-fw me-2 text-gray-400"></i> Activity Log</a></li>
                <li><hr class="dropdown-divider"></li>
                <li><a class="dropdown-item" href="#" data-bs-toggle="modal" data-bs-target="#logoutModal">
                    <i class="fas fa-sign-out-alt fa-sm fa-fw me-2 text-gray-400"></i> Logout
                </a></li>
            </ul>
        </li>
    </ul>
</nav>

<!-- SIDEBAR -->
<div class="sidebar" id="sidebar">

    <!-- Dashboard -->
    <a href="{{ route('dashboard') }}" class="nav-item" style="margin-left:8px;margin-bottom:10px">
        <img src="img/hugeicons_menu-square.png" alt="" style="width: 20px; height: 20px;">
        <span class="nav-text">Dashboard</span>
    </a>

    <!-- Quotations -->
    <a href="/create-quotation" class="nav-item"  style="margin-left:8px;margin-bottom:10px">
        <img src="img/Vector.png" alt="" style="width: 20px; height: 20px;">
        <span class="nav-text">Quotations</span>
    </a>

    <!-- Products Dropdown -->
    <div class="nav-item dropdown" >
        <a href="#" class="nav-item" onclick="toggleDropdown(this)">
            <span style="">
                <img src="img/Vector (1).png" style="width: 20px; height: 20px; margin-right: 8px;">
                <span class="nav-text">Products</span>
            </span>
            <i class="fas fa-angle-down dropdown-icon" style="color:rgb(242, 232, 232);"></i>
        </a>
        <ul class="dropdown-menu">
            <li><a href="{{ route('products.store') }}" class="nav-item">Add New Product</a></li>
            <li><a href="{{ route('products.show') }}" class="nav-item">Product List</a></li>
        </ul>
    </div>

    <!-- Companies Dropdown -->
    <div class="nav-item dropdown">
        <a href="#" class="nav-item" onclick="toggleDropdown(this)">
            <span style="">
                <img src="img/Vector (2).png" style="width: 20px; height: 20px; margin-right: 8px;">
                <span class="nav-text">Companies</span>
            </span>
            <i class="fas fa-angle-down dropdown-icon" style="color:rgb(242, 232, 232);"></i>
        <ul class="dropdown-menu">
            <li><a href="{{ route('companies.create') }}" class="nav-item">Add New Company</a></li>
            <li><a href="{{ route('companies.index') }}" class="nav-item">Company List</a></li>
        </ul>
    </div>

    <!-- Categories Dropdown -->
    <div class="nav-item dropdown">
        <a href="#" class="nav-item" onclick="toggleDropdown(this)">
            <span >
                <img src="img/Vector (3).png" style="width: 20px; height: 20px; margin-right: 8px;">
                <span class="nav-text">Categories</span>
            </span>
            <i class="fas fa-angle-down dropdown-icon" style="color:rgb(242, 232, 232);"></i>
        </a>
        <ul class="dropdown-menu">
            <li><a href="{{ route('category.create') }}" class="nav-item">Add Category</a></li>
            <li><a href="{{ route('category.index') }}" class="nav-item">Category List</a></li>
        </ul>
    </div>

    <!-- Zones Dropdown -->
    <div class="nav-item dropdown">
        <a href="#" class="nav-item" onclick="toggleDropdown(this)">
            <span style="">
                <img src="img/Vector (4).png" style="width: 20px; height: 20px; margin-right: 8px;">
                <span class="nav-text">Zones</span>
            </span>
            <i class="fas fa-angle-down dropdown-icon" style="color:rgb(242, 232, 232);"></i>
        </a>
        <ul class="dropdown-menu">
            <li><a href="{{ route('zones.create') }}" class="nav-item">Add Zone</a></li>
            <li><a href="{{ route('zones.index') }}" class="nav-item">Zone List</a></li>
        </ul>
    </div>

    <!-- Adhesive Dropdown -->
    <div class="nav-item dropdown">
        <a href="#" class="nav-item" onclick="toggleDropdown(this)">
            <span style="display: flex; align-items: center;">
                <img src="img/Vector (5).png" style="width: 20px; height: 20px; margin-right: 8px;">
                <span class="nav-text">Adhesive</span>
            </span>
            <i class="fas fa-angle-down dropdown-icon" style="color:rgb(242, 232, 232);"></i>

        </a>
        <ul class="dropdown-menu">
            <li><a href="{{ route('adhesive.create') }}" class="nav-item">Add Adhesive</a></li>
            <li><a href="{{ route('adhesive.index') }}" class="nav-item">Adhesive List</a></li>
        </ul>
    </div>

    <!-- Samples Dropdown -->
    <div class="nav-item dropdown">
        <a href="#" class="nav-item" onclick="toggleDropdown(this)">
            <span style="display: flex; align-items: center;">
                <img src="img/Vector (6).png" style="width: 20px; height: 20px; margin-right: 8px;">
                <span class="nav-text">Samples</span>
            </span>
            <i class="fas fa-angle-down dropdown-icon" style="color:rgb(242, 232, 232);"></i>

        </a>
        <ul class="dropdown-menu">
            <li><a href="{{ route('sample.create') }}" class="nav-item">Add Sample</a></li>
            <li><a href="{{ route('sample.index') }}" class="nav-item">Sample List</a></li>
        </ul>
    </div>

    <!-- Users -->
    <a href="/create-user" class="nav-item"  style="margin-left:8px;margin-bottom:10px">
        <img src="img/solar_users-group-rounded-outline.png" alt="">
        <span class="nav-text">Users</span>
    </a>
</div>


<!-- MAIN CONTENT -->
<div class="main-content" id="mainContent">
    <div class="container mt-4">
        @yield('content')
    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
<script>
    document.addEventListener("DOMContentLoaded", function () {
        const toggleButton = document.getElementById('sidebartoggle');
        const sidebar = document.getElementById('sidebar');
        const body = document.body;

        toggleButton.addEventListener('click', function () {
            if (window.innerWidth < 992) {
                body.classList.toggle('sidebar-collapsed');
            } else {
                sidebar.classList.toggle('collapsed');
            }
        });
    });

    
</script>
<script>
    function toggleDropdown(element) {
        const dropdown = element.closest('.dropdown');
        if (dropdown) {
            dropdown.classList.toggle('open');
        }
    }
</script>
<script>
    document.addEventListener('click', function (e) {
    const sidebar = document.getElementById('sidebar');
    const toggle = document.getElementById('sidebartoggle');
    if (!sidebar.contains(e.target) && !toggle.contains(e.target)) {
        if (window.innerWidth < 992) {
            document.body.classList.remove('sidebar-collapsed');
        }
    }
});

</script>

</body>
</html>
