<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Faculty Evaluation System</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="../css/<?= $_SESSION['theme'] ?>_theme.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css">
    <link href='https://fonts.googleapis.com/css?family=Poppins' rel='stylesheet'>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" rel="stylesheet">
    <style>
        /* Sidebar */
        .sidebar {
            position: fixed;
            top: 0;
            left: 0;
            height: 100%;
            width: 15rem;
            /* Initial sidebar width */
            min-width: 3.75rem;
            /* Minimum width of the sidebar */
            transition: width 0.3s;
            z-index: 1000;
            /* Ensure sidebar is above content */
        }

        .sidebar.collapsed {
            width: 3.75rem;
            /* Width of the collapsed sidebar */
        }

        .sidebar ul {
            list-style: none;
            padding: 6.25rem 0;
            /* Add padding to the top of the sidebar buttons */
            margin: 0;
        }

        .sidebar ul li {
            padding: 0.625rem;
            text-align: center;
            margin-bottom: 0.625rem;
        }

        .sidebar ul li a {
            color: #fff;
            text-decoration: none;
            display: flex;
            align-items: center;
            justify-content: flex-start;
        }

        .sidebar ul li a i {
            font-size: 1.5rem;
            margin-right: 1rem;
            margin-left: 1rem;
        }

        /* Content */
        .content {
            transition: margin-left 0.3s;
            padding: 1rem;
            margin-left: 15rem;
            /* Adjust margin to accommodate sidebar width */
            padding-top: 6.25rem;
            padding-left: 1rem;
            z-index: 999;
            /* Ensure content appears below navbar and sidebar */
            /* Width of the sidebar */
        }

        .content.collapsed {
            margin-left: 3.75rem;
            /* Width of the collapsed sidebar */
        }

        /* Navbar */
        .navbar {
            z-index: 1001;
            /* Ensure navbar appears above sidebar */
            position: fixed;
            top: 0;
            width: 100%;
            background-color: #343a40;
            padding-left: 1rem;
            /* Add padding to the left to accommodate the button */
        }

        .navbar-brand {
            display: flex;
            align-items: center;
            padding-left: 1rem;
            /* Add padding to the left of the brand */
        }

        .brand-logo {
            width: 3.75rem;
            /* Adjust width of the logo */
            height: auto;
            /* Maintain aspect ratio */
            margin-right: 1rem;
            /* Add space between logo and brand info */
        }

        .brand-info {
            display: flex;
            flex-direction: column;
            align-items: flex-start;
        }

        .brand-name {
            font-size: 1.2rem;
            /* Adjust font size for the brand name */
            font-weight: bold;
            /* Make the brand name bold */
        }

        .tagline {
            font-size: 0.8rem;
            /* Adjust font size for the tagline */
        }

        .navbar-toggler {
            color: #fff;
            border: none;
            outline: none;
            position: absolute;
            /* Position the button absolutely */
            left: 1rem;
            /* Adjust the left positioning */
            top: 50%;
            /* Align the button vertically */
            transform: translateY(-50%);
            /* Center the button vertically */
        }

        .dropdown-menu {
            display: block;
            opacity: 0;
            visibility: hidden;
            transform: translateY(0%);
            transition: all .5s;
        }

        .dropdown:hover .dropdown-menu {
            opacity: 1;
            visibility: visible;
            transform: translateY(20%);
        }




        @media (max-width: 992px) {
            .sidebar ul li a span {
                display: none;
                /* Hide full name in mobile view */
            }

            .navbar-toggler {
                display: none;
                /* Hide button in mobile view */
            }

            .sidebar ul li a i {
                font-size: 1.5rem;
                margin-left: 0.313rem;

            }

            .brand-name {
                font-size: 1rem;
                /* Adjust font size for the brand name */
                font-weight: bold;
                /* Make the brand name bold */
            }

            .brand-logo {
                display: none;
            }
        }

        @media (min-width: 992px) {
            .sidebar.collapsed ul li a span {
                display: none;
                /* Hide labels when uncollapsed */
            }

            .sidebar ul li a i {
                font-size: 1.5rem;
                margin-left: 0.313rem;
            }
        }
    </style>
</head>

<body style=" font-family: Poppins;">

    <!-- Top Navbar -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container">
            <!-- Button on the left side -->
            <button class="navbar-toggler d-none d-lg-block" type="button" id="sidebarCollapse">
                <span class="navbar-toggler-icon"></span>
            </button>
            <!-- Brand with logo, name, and tagline -->
            <a class="navbar-brand" href="#">
                <img src="../public\resources\<?= $_SESSION['logo'] ?>" alt="Logo" class="brand-logo">
                <div class="brand-info">
                    <div class="brand-name">Faculty Evaluation System</div>
                    <div class="tagline"><?= $_SESSION['schoolname'] ?></div>
                </div>
            </a>
            <!-- Dropdown Button -->
            <div class="dropdown">
                <button class="btn btn-secondary rounded-circle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="width: 40px; height: 40px;">
                    <i class="fas fa-user"></i> <!-- Font Awesome user icon -->
                </button>
                <div class="dropdown-menu dropdown-menu-end" style="right: 0; left: auto;" aria-labelledby="dropdownMenuButton" id="dropdownEffect">
                    <a class="dropdown-item" href="#">Action</a>
                    <a class="dropdown-item" href="#">Another action</a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="#">Something else here</a>
                </div>
            </div>
        </div>
        </div>
    </nav>


    <!-- Sidebar -->
    <div class="sidebar bg-primary" id="sidebar">
        <ul>
            <li><a href="#"><i class="fas fa-home"></i> <span>Home</span></a></li>
            <li><a href="#"><i class="fas fa-user"></i> <span>Profile</span></a></li>
            <li><a href="#"><i class="fas fa-cog"></i> <span>Settings</span></a></li>
            <li><a href="#"><i class="fas fa-sign-out-alt"></i> <span>Logout</span></a></li>
        </ul>
    </div>

    <div class="content" id="content">
        <div class="container-fluid">