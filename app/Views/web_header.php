<?php

?>
<!DOCTYPE html>
<html lang="en" style="scroll-behavior: smooth;">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Pasar Kita</title>

  <meta content="" name="description">
  <meta content="" name="keywords">
  <!-- Favicons -->
  <link href="<?= base_url()?>assets/img/logo.png" rel="icon">
  <link href="<?= base_url()?>assets/img/logo2.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <!-- <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet"> -->
  <!-- <link href="https://fonts.googleapis.com/css2?family=Jost:wght@500&display=swap" rel="stylesheet"> -->
  <link href="https://fonts.googleapis.com/css2?family=Jost:wght@500&family=Urbanist:wght@100;200;300&display=swap" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="<?= base_url()?>assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="<?= base_url()?>assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="<?= base_url()?>assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="<?= base_url()?>assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="<?= base_url()?>assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="<?= base_url()?>assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="<?= base_url()?>assets/css/style.css" rel="stylesheet">

  <!-- Vendor JS Files -->
  <script src="<?= base_url()?>assets/vendor/aos/aos.js"></script>
  <script src="<?= base_url()?>assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="<?= base_url()?>assets/vendor/bootstrap/js/bootstrap.min.js"></script>
  <script src="<?= base_url()?>assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="<?= base_url()?>assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="<?= base_url()?>assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="<?= base_url()?>assets/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="<?= base_url()?>assets/js/main.js"></script>

  <!-- =======================================================
  * Template Name: Day
  * Updated: Sep 18 2023 with Bootstrap v5.3.2
  * Template URL: https://bootstrapmade.com/day-multipurpose-html-template-for-free/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

  <!-- ======= Header ======= -->
  <header id="header" class="d-flex align-items-center">
    <div class="container d-flex align-items-center justify-content-between">

      <h1 class="logo">
        <a href="<?= base_url('/')?>"><img src="<?= base_url('assets/img/logo_web.png') ?>" alt="Logo"></a>
      </h1>

      <nav id="navbar" class="navbar">
        <ul>
          <li><a class="nav-link" href="<?= base_url('/')?>">Beranda</a></li>
          <li><a class="nav-link" href="<?= base_url('about')?>">Tentang Kami</a></li>
          <li><a class="nav-link" href="<?= base_url('acara')?>">Acara</a></li>
          <li><a class="nav-link" href="<?= base_url('leasing')?>">Leasing</a></li>
          <li><a class="nav-link" href="<?= base_url('contact')?>">Kontak</a></li>
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav>
      <!-- .navbar -->
    </div>
    <script>
  document.addEventListener("DOMContentLoaded", function() {
    var navbar = document.getElementById("navbar");
    var mobileNavToggle = document.querySelector(".mobile-nav-toggle");

    mobileNavToggle.addEventListener("click", function() {
      navbar.classList.toggle("mobile-nav-active");
    });
  });
</script>
<style>
  /* Gaya untuk mode mobile */
  .mobile-nav-active ul {
    display: flex;
    flex-direction: column;
    width: 100%;
    position: absolute;
    top: 60px; 
    left: 0;
    background-color: black; 
    z-index: 1000;
  }

  .mobile-nav-active ul li {
    text-align: center;
    margin: 0;
    padding: 15px;
    border-bottom: 2px solid;
    color: red; 
  }

  .mobile-nav-active ul li a {
    color: white;
  }

  .mobile-nav-toggle {
    display: block;
    cursor: pointer;
  }

  @media (min-width: 992px) {
    .mobile-nav-toggle {
      display: none;
    }
  }
</style>

  </header>
  <!-- Include Bootstrap JS (Popper.js and Bootstrap JS) -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/2.10.2/umd/popper.min.js"></script>

<!-- Your existing Vendor JS Files -->
<script src="<?= base_url()?>assets/vendor/aos/aos.js"></script>
<script src="<?= base_url()?>assets/vendor/glightbox/js/glightbox.min.js"></script>
<script src="<?= base_url()?>assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
<script src="<?= base_url()?>assets/vendor/swiper/swiper-bundle.min.js"></script>
<script src="<?= base_url()?>assets/vendor/php-email-form/validate.js"></script>

<!-- Template Main JS File -->
<script src="<?= base_url()?>assets/js/main.js"></script>

  <!-- End Header -->
</body>