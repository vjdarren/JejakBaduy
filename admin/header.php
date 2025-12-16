<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <!--
  <link href="img/logo/logo.png" rel="icon">
-->
    <title>Admin JejakBaduy</title>
    <link rel="shortcut icon" width="100%" type="image/icon" href="../images/logo1.png"/>
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link href="vendor/bootstrap/css/bootstrap.css" rel="stylesheet" type="text/css">
    <link href="css/style.css" rel="stylesheet">
</head>

<body id="page-top">
    <div id="wrapper">
        <!-- Sidebar -->
        <ul class="navbar-nav sidebar sidebar-light accordion" id="accordionSidebar">
            <a class="sidebar-brand d-flex align-items-center justify-content-center" href="cms.php">
                <div class="sidebar-brand-icon">
                    <!--
          <img src="img/logo/logo2.png">
        -->
                </div>
                <div class="sidebar-brand-text mx-3">Jejak Baduy Admin</div>
            </a>

            <li class="nav-item">
                <a class="nav-link" href="cms_aboutusbaduy.php?category=aboutus">
                    <i class="far fa-fw fa-window-maximize"></i>
                    <span>About Us</span>
                </a>
            </li>

            <li class="nav-item">
                <a class="nav-link" href="cms_aboutusbaduy.php?category=aboutbaduy">
                    <i class="far fa-fw fa-window-maximize"></i>
                    <span>About Baduy</span>
                </a>
            </li>

            <li class="nav-item">
                <a class="nav-link" href="cms_blog.php?category=blog">
                    <i class="far fa-fw fa-window-maximize"></i>
                    <span>Blog</span>
                </a>
            </li>

            <li class="nav-item">
                <a class="nav-link" href="cms_gallery.php?category=gallery">
                    <i class="far fa-fw fa-window-maximize"></i>
                    <span>Gallery</span>
                </a>
            </li>

            <li class="nav-item">
                <a class="nav-link" href="cms_testi.php?category=testimonials">
                    <i class="far fa-fw fa-window-maximize"></i>
                    <span>Testimonials</span>
                </a>
            </li>

            <hr class="sidebar-divider">
            <li class="nav-item">
                <a class="nav-link" href="view_forms.php">
                    <i class="fas fa-fw fa-cog"></i>
                    <span>Form Management</span>
                </a>
            </li>
            <hr class="sidebar-divider">
            <div class="version" id="version-ruangadmin"></div>
        </ul>
        <!-- Sidebar -->
        <div id="content-wrapper" class="d-flex flex-column">
            <div id="content">
                <!-- TopBar -->
                <nav class="navbar navbar-expand navbar-light bg-navbar topbar mb-4 static-top">
                    <button id="sidebarToggleTop" class="btn btn-link rounded-circle mr-3">
                        <i class="fa fa-bars"></i>
                    </button>
                    <ul class="navbar-nav ml-auto">

                        <div class="topbar-divider d-none d-sm-block"></div>
                        <li class="nav-item dropdown no-arrow">
                            <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown"
                                aria-haspopup="true" aria-expanded="false">
                                <img class="img-profile rounded-circle" src="img/boy.png" style="max-width: 60px">
                                <span class="ml-2 d-none d-lg-inline text-white small">Admin</span>
                            </a>
                            <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="userDropdown">

                                <a class="dropdown-item" href="javascript:void(0);" data-toggle="modal" data-target="#logoutModal">
                                    <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Logout
                                </a>
                            </div>
                        </li>
                    </ul>
                </nav>
                <!-- Topbar -->

