<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Dashboard - CidaUg </title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="/assets/img/logo.png" rel="icon">
  <link href="/adminAssets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.gstatic.com" rel="preconnect">
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="/adminAssets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="/adminAssets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="/adminAssets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="/adminAssets/vendor/quill/quill.snassetsow.css" rel="stylesheet">
  <link href="/adminAssets/vendor/quill/quill.bubble.css" rel="stylesheet">
  <link href="/adminAssets/vendor/remixicon/remixicon.css" rel="stylesheet">
  <link href="/adminAssets/vendor/simple-datatables/style.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="/adminAssets/css/style.css" rel="stylesheet">

  <script src="https://cdn.ckeditor.com/4.16.2/standard/ckeditor.js"></script>

  <!-- =======================================================
  * Template Name: CidaUg
  * Template URL: https://bootstrapmade.com/nice-admin-bootstrap-admin-html-template/
  * Updated: Apr 20 2024 with Bootstrap v5.3.3
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

  <!-- ======= Header ======= -->
  <header id="header" class="header fixed-top d-flex align-items-center">

    <div class="d-flex align-items-center justify-content-between">
      <a href="{{ url('admin-dashboard') }}" class="logo d-flex align-items-center">
        <img src="/assets/img/logo.png" alt="">
        <span class="d-none d-lg-block">CidaUg</span>
      </a>
      <i class="bi bi-list toggle-sidebar-btn"></i>
    </div><!-- End Logo -->


    <nav class="header-nav ms-auto">
      <ul class="d-flex align-items-center">

        <li class="nav-item d-block d-lg-none">
          <a class="nav-link nav-icon search-bar-toggle " href="#">
            <i class="bi bi-search"></i>
          </a>
        </li><!-- End Search Icon-->

        <li class="nav-item dropdown pe-3">

          <a class="nav-link nav-profile d-flex align-items-center pe-0" href="#" data-bs-toggle="dropdown">
            <img src="/adminAssets/img/profile-img.jpg" alt="Profile" class="rounded-circle">
            <span class="d-none d-md-block dropdown-toggle ps-2">Admin</span>
          </a><!-- End Profile Iamge Icon -->

          <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow profile">
            <li class="dropdown-header">
              <h6>Admin</h6>
              <span>System Admin</span>
            </li>
            
           
            <li>
              <a class="dropdown-item d-flex align-items-center" href="{{ url('admin-logout')}}" >
                <i class="bi bi-box-arrow-right"></i>
                <span>Sign Out</span>
              </a>
            </li>

          </ul><!-- End Profile Dropdown Items -->
        </li><!-- End Profile Nav -->

      </ul>
    </nav><!-- End Icons Navigation -->

  </header><!-- End Header -->
