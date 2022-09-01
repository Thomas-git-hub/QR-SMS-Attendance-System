<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title></title>
        <!-- Favicon-->
        <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
        <script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="css/bootstrap5.css" rel="stylesheet" />
        <link href="css/style.css" rel="stylesheet" />
        <link rel="stylesheet" type="text/css" href="css/sidenav.css">

        <link rel="stylesheet" type="text/css" href="bootstrap/bootstrap.min.css">

        <!-- BoxIcon -->
        <link href='https://cdn.jsdelivr.net/npm/boxicons@2.0.5/css/boxicons.min.css' rel='stylesheet'>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
    </head>

    <style>
        .side-icon{
            font-size: 25px;
            color: #4c4e52;
        }
    </style>


    <body>
        <div class="d-flex" id="wrapper">
            <!-- Sidebar-->
            <div class="border-end bg-white" id="sidebar-wrapper">
                <div class="sidebar-heading">
                    <center>
                    <img src="assets/png/logo_2.png" style="width: 50px;">
                    <h3>Bicol University</h3>
                    </center>
                </div>

                <div class="list-group list-group-flush mt-5">
                    <a class="list-group-item list-group-item-action py-2 ripple d-flex justify-content-start mt-3" href="dashboard.php?page=home" id="">
                        <i class='bx bxs-home side-icon ml-3 mr-2'></i>
                        Home
                    </a>

                    <a class="list-group-item list-group-item-action py-2 ripple d-flex justify-content-start mt-3" href="dashboard.php?page=view_acc" id="">
                        <i class='bx bxs-group side-icon ml-3 mr-2'></i>
                        View Accounts
                    </a>

                    <a class="list-group-item list-group-item-action py-2 ripple d-flex justify-content-start mt-3" href="dashboard.php?page=add_camp" id="">
                        <i class='bx bxs-school side-icon ml-3 mr-2'></i>
                        Manage Campus
                    </a>

                    <a class="list-group-item list-group-item-action py-2 ripple d-flex justify-content-start mt-3" href="dashboard.php?page=admin_acc" id="">
                        <i class='bx bx-group side-icon ml-3 mr-2'></i>
                        Manage Admin Accounts
                    </a>

                    <a class="list-group-item list-group-item-action py-2 ripple d-flex justify-content-start mt-3" href="dashboard.php?page=generate" id="">
                        <i class='bx bxs-file-pdf side-icon ml-3 mr-2'></i>
                        Generate Report
                    </a>
                </div>
                
            </div>

            
            <!-- Page content wrapper-->

            <div id="page-content-wrapper">
                <!-- Top navigation-->
                <nav class="navbar navbar-expand-lg">
                    <div class="container-fluid">

                        <button class="btn" id="sidebarToggle">
                            <i class='fas fa-bars'></i>
                        </button>


                        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>

                        <div class="collapse navbar-collapse" id="navbarSupportedContent">
                            <ul class="navbar-nav ms-auto mt-2 mt-lg-0">
                                <!-- <a class="me-5">Thomas Allene B. Escoto</a> -->
                                
                                <li class="nav-item dropdown">
                                    <a class="nav-link dropdown-toggle" id="navbarDropdown" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Thomas Allene B. Escoto</a>
                                    
                                    <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                                        <center>
                                        <a class="dropdown-item" href="dashboard.php?page=profile">Profile</a>
                                        <div class="dropdown-divider"></div>
                                        <a class="dropdown-item" href="">Logout</a>
                                        </center>
                                    </div>
                                </li>
                            </ul>
                        </div>

                    </div>
                </nav>

        