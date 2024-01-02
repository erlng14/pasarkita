<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>CMS | <?= $title ?></title>
  <base href="<?php echo base_url('assets')?>/">
  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Tempusdominus Bootstrap 4 -->
  <link rel="stylesheet" href="plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css">
  <!-- iCheck -->
  <link rel="stylesheet" href="plugins/icheck-bootstrap/icheck-bootstrap.min.css">
  <!-- JQVMap -->
  <link rel="stylesheet" href="plugins/jqvmap/jqvmap.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="dist/css/adminlte.min.css">
  <!-- overlayScrollbars -->
  <link rel="stylesheet" href="plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
  <!-- Daterange picker -->
  <link rel="stylesheet" href="plugins/daterangepicker/daterangepicker.css">
  <!-- summernote -->
  <link rel="stylesheet" href="plugins/summernote/summernote-bs4.min.css">
</head>
<body class="hold-transition sidebar-mini layout-fixed">
<div class="wrapper">

  <!-- Preloader -->
  <div class="preloader flex-column justify-content-center align-items-center">
    <img class="animation__shake" src="dist/img/AdminLTELogo.png" alt="AdminLTELogo" height="60" width="60">
  </div>

  <!-- Navbar -->
  <nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
      </li>
      <li class="nav-item">
        <a href="<?= base_url('logout')?>" class="nav-link">Logout</a>
      </li>
    </ul>
</nav>
    

  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="<?= base_url('cms/dashboard')?>" class="brand-link">
      <img src="dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
      <span class="brand-text font-weight-light"> CMS</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="info">
          <a class="text">Login as <?= user() -> username; ?></a>
        </div>
      </div>

      <!-- SidebarSearch Form -->
      <div class="form-inline">
        <div class="input-group" data-widget="sidebar-search">
          <input class="form-control form-control-sidebar" type="search" placeholder="Search" aria-label="Search">
          <div class="input-group-append">
            <button class="btn btn-sidebar">
              <i class="fas fa-search fa-fw"></i>
            </button>
          </div>
        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-item <?php if (in_array($activeMenu, ['dashboard'])) echo "menu-open" ?>">
              <a href="<?php echo site_url('cms/dashboard')?>" class="nav-link <?php if (in_array($activeMenu, ['dashboard'])) echo "active" ?>">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Dashboard
                <i class="right badge badge-danger"></i>
              </p>
              </a>
          </li>
          <li class="nav-item <?php if (in_array($activeMenu, ['homepage'])) echo "menu-open" ?>">
            <a href="<?php echo site_url('cms/homepage')?>" class="nav-link <?php if (in_array($activeMenu, ['homepage'])) echo "active" ?>">
              <i class="nav-icon fas fa-book"></i>
              <p>
                Homepage
                <i class="right badge badge-danger"></i>
              </p>
            </a>
          </li>
          <li class="nav-item <?php if (in_array($activeMenu, ['about'])) echo "menu-open" ?>">
            <a href="<?php echo site_url('cms/about')?>" class="nav-link <?php if (in_array($activeMenu, ['about'])) echo "active" ?>">
              <i class="nav-icon fas fa-file"></i>
              <p>
                About
                <i class="right badge badge-danger"></i>
              </p>
            </a>
          </li>
          <li class="nav-item <?php if (in_array($activeMenu, ['acara'])) echo "menu-open" ?>">
            <a href="<?php echo site_url('cms/acara')?>" class="nav-link <?php if (in_array($activeMenu, ['acara'])) echo "active" ?>">
              <i class="nav-icon fa-regular fa-calendar"></i>
              <p>
                Acara
                <i class="right badge badge-danger"></i>
              </p>
            </a>
          </li>
          <li class="nav-item <?php if (in_array($activeMenu, ['cta'])) echo "menu-open" ?>">
            <a href="<?php echo site_url('cms/cta/')?>" class="nav-link <?php if (in_array($activeMenu, ['cta'])) echo "active" ?>">
              <i class="nav-icon fas fa-search"></i>
              <p>
                CTA
                <i class="right badge badge-danger"></i>
              </p>
            </a>
          </li>
          <li class="nav-item <?php if (in_array($activeMenu, ['userlist'])) echo "menu-open" ?>">
            <a href="<?php echo site_url('cms/userlist')?>" class="nav-link <?php if (in_array($activeMenu, ['userlist'])) echo "active" ?>">
              <i class="nav-icon fa-solid fa-users"></i>
              <p>
                User Management
                <i class="right badge badge-danger"></i>
              </p>
            </a>
          </li>
          <li class="nav-item <?php if (in_array($activeMenu, ['contact'])) echo "menu-open" ?>">
            <a href="<?php echo site_url('cms/contact')?>" class="nav-link <?php if (in_array($activeMenu, ['contact'])) echo "active" ?>">
              <i class="nav-icon fa-regular fa-envelope"></i>
              <p>
                Contact
                <i class="right badge badge-danger"></i>
              </p>
            </a>
          </li>
          <li class="nav-item <?php if (in_array($activeMenu, ['leasing'])) echo "menu-open" ?>">
            <a href="<?php echo site_url('cms/leasing')?>" class="nav-link <?php if (in_array($activeMenu, ['leasing'])) echo "active" ?>">
            <i class="nav-icon fa-solid fa-lines-leaning"></i>
              <p>
                Leasing
                <i class="right badge badge-danger"></i>
              </p>
            </a>
          </li>
          <li class="nav-item <?php if (in_array($activeMenu, ['news'])) echo "menu-open" ?>">
            <a href="<?php echo site_url('cms/news')?>" class="nav-link <?php if (in_array($activeMenu, ['news'])) echo "active" ?>">
            <i class="nav-icon fa-regular fa-folder-open"></i>
              <p>
                Newslatter
                <i class="right badge badge-danger"></i>
              </p>
            </a>
          </li>
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0"><?php echo $title ?>
            <small style="font-size: small;">
              <script type="text/javascript">
                var months = ['Januari', 'Februari', 'Maret', 'April', 'Mei', 'Juni', 'Juli', 'Agustus', 'September', 'Oktober', 'November', 'Desember'];
                    var myDays = ['Minggu', 'Senin', 'Selasa', 'Rabu', 'Kamis', 'Jumat', 'Sabtu'];
                    var date = new Date();
                    var day = date.getDate();
                    var month = date.getMonth();
                    var thisDay = date.getDay(),
                        thisDay = myDays[thisDay];
                    var yy = date.getYear();
                    var year = (yy < 3000) ? yy + 1900 : yy;
                    document.write(thisDay + ', ' + day + ' ' + months[month] + ' ' + year);
              </script>
            </small>
          </div>
            </h1> <!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><i class="nav-icon fas fa-tachometer-alt mr-2"></i><a href="<?= base_url('cms/dashboard')?>">Home</a></li>
              <li class="breadcrumb-item active"><?php echo $title ?></li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->