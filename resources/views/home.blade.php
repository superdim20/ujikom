<!DOCTYPE html>
<html
  lang="en"
  class="light-style layout-menu-fixed"
  dir="ltr"
  data-theme="theme-default"
  data-assets-path="../assets/"
  data-template="vertical-menu-template-free"
>
  <head>
    <meta charset="utf-8" />
    <meta
      name="viewport"
      content="width=device-width, initial-scale=1.0, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0"
    />

    <title>Dashboard - Analytics | Sneat - Bootstrap 5 HTML Admin Template - Pro</title>

    <meta name="description" content="" />

    <!-- Favicon -->
    <link rel="icon" type="image/x-icon" href="../assets/img/favicon/favicon.ico" />

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Public+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&display=swap"
      rel="stylesheet"
    />

    <!-- Icons. Uncomment required icon fonts -->
    <link rel="stylesheet" href="../assets/vendor/fonts/boxicons.css" />

    <!-- Core CSS -->
    <link rel="stylesheet" href="../assets/vendor/css/core.css" class="template-customizer-core-css" />
    <link rel="stylesheet" href="../assets/vendor/css/theme-default.css" class="template-customizer-theme-css" />
    <link rel="stylesheet" href="../assets/css/demo.css" />

    <!-- Vendors CSS -->
    <link rel="stylesheet" href="../assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.css" />

    <link rel="stylesheet" href="../assets/vendor/libs/apex-charts/apex-charts.css" />

    <!-- Page CSS -->

    <!-- Helpers -->
    <script src="../assets/vendor/js/helpers.js"></script>

    <!--? Template customizer & Theme config files MUST be included after core stylesheets and helpers.js in the <head> section -->
    <!--? Config:  Mandatory theme config file contain global vars & default theme options, Set your preferred theme option in this file.  -->
    <script src="../assets/js/config.js"></script>

    <style>
      .small-box {
        position: relative;
        display: block;
        background: #17a2b8;
        color: #fff;
        padding: 20px;
        border-radius: 10px;
        box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
        transition: transform 0.3s ease;
        text-align: center;
      }

      .small-box:hover {
        transform: translateY(-5px);
      }

      .small-box .inner {
        padding: 10px;
      }

      .small-box .inner h3 {
        font-size: 3rem;
        font-weight: bold;
        color: #fff;
      }

      .small-box .inner p {
        font-size: 1.25rem;
        color: #fff;
        margin-top: 5px;
      }

      .small-box .icon {
        position: absolute;
        top: 10px;
        right: 10px;
        font-size: 4rem;
        color: rgba(255, 255, 255, 0.2);
      }

      .small-box-footer {
        display: block;
        padding: 10px;
        background: rgba(0, 0, 0, 0.1);
        color: #fff;
        text-align: center;
        text-decoration: none;
        border-radius: 0 0 10px 10px;
        margin-top: 15px;
      }

      .small-box-footer:hover {
        background: rgba(0, 0, 0, 0.2);
      }
    </style>

  </head>

  <body>
    <!-- Layout wrapper -->
    @include('layouts.include.navbar')

    <!-- content -->
    <div class="content-wrapper">
  <div class="container-xxl flex-grow-1 container-p-y">
    <!-- Kotak Data -->
    <div class="row">
      <!-- Kotak Data 1 (Publisher) -->
      <div class="col-md-4 col-6 mb-4">
        <div class="small-box bg-info">
          <div class="inner">
            <h3>{{$publisher}}</h3>
            <p>Jumlah Publisher</p>
          </div>
          <div class="icon">
            <i class="bx bx-bookmark"></i> <!-- Ikon Publisher -->
          </div>
          <a href="{{route('publisher.index')}}" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
        </div>
      </div>

      <!-- Kotak Data 2 (Kategori) -->
      <div class="col-md-4 col-6 mb-4">
        <div class="small-box bg-success">
          <div class="inner">
            <h3>{{$kategori}}</h3>
            <p>Jumlah Kategori</p>
          </div>
          <div class="icon">
            <i class="bx bx-category-alt"></i> <!-- Ikon Kategori -->
          </div>
          <a href="{{route('kategori.index')}}" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
        </div>
      </div>

      <!-- Kotak Data 3 (Buku) -->
      <div class="col-md-4 col-6 mb-4">
        <div class="small-box bg-warning">
          <div class="inner">
            <h3>{{$buku}}</h3>
            <p>Jumlah Buku</p>
          </div>
          <div class="icon">
            <i class="bx bx-book"></i> <!-- Ikon Buku -->
          </div>
          <a href="{{route('buku.index')}}" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
        </div>
      </div>

      <!-- Kotak Data 4 (User) -->
      <div class="col-md-4 col-6 mb-4">
        <div class="small-box bg-warning">
          <div class="inner">
            <h3>{{$user}}</h3>
            <p>Jumlah User</p>
          </div>
          <div class="icon">
            <i class="bx bx-user"></i> <!-- Ikon User -->
          </div>
          <a href="{{route('user.index')}}" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
        </div>
      </div>
    </div>
  </div>
</div>


  <!-- Overlay -->
  <div class="layout-overlay layout-menu-toggle"></div>
</div>
<!-- / Layout wrapper -->

<!-- Core JS -->
<!-- build:js assets/vendor/js/core.js -->
<script src="../assets/vendor/libs/jquery/jquery.js"></script>
<script src="../assets/vendor/libs/popper/popper.js"></script>
<script src="../assets/vendor/js/bootstrap.js"></script>
<script src="../assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.js"></script>

<script src="../assets/vendor/js/menu.js"></script>
<!-- endbuild -->

<!-- Vendors JS -->
<script src="../assets/vendor/libs/apex-charts/apexcharts.js"></script>

<!-- Main JS -->
<script src="../assets/js/main.js"></script>

<!-- Page JS -->
<script src="../assets/js/dashboards-analytics.js"></script>

<!-- Place this tag in your head or just before your close body tag. -->
<script async defer src="https://buttons.github.io/buttons.js"></script>
</body>
</html>
