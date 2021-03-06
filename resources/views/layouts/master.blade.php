<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Copryn | Beranda</title>
  <link rel="icon" href="{{ asset('/adminlte/img/icon/store.png') }}">
  <!-- Tell the browser to be responsive to screen width -->
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- Font Awesome -->
  <link rel="stylesheet" href="/adminlte/fontawesome-free/css/all.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- overlayScrollbars -->
  <link rel="stylesheet" href="/adminlte/css/adminlte.min.css">
  <!-- Google Font: Source Sans Pro -->
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
</head>
<body class="hold-transition sidebar-mini">
<!-- Site wrapper -->
<div class="wrapper">
  <!-- Navbar -->
  <nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#"><i class="fas fa-bars"></i></a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="../../index3.html" class="nav-link">Home</a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="#" class="nav-link">Contact</a>
      </li>
    </ul>

    <!-- SEARCH FORM -->
    <form class="form-inline ml-3">
      <div class="input-group input-group-sm">
        <input class="form-control form-control-navbar" type="search" placeholder="Search" aria-label="Search">
        <div class="input-group-append">
          <button class="btn btn-navbar" type="submit">
            <i class="fas fa-search"></i>
          </button>
        </div>
      </div>
      
    </form>

    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto">
      <!-- Messages Dropdown Menu -->
      <!-- Notifications Dropdown Menu -->
      
      <li class="nav-item">
        <a class="nav-link" data-widget="control-sidebar" data-slide="true" href="#">
          <i class="fas fa-th-large"></i>
        </a>
      </li>
    </ul>
  </nav>
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="../../index3.html" class="brand-link">
      <img src="/adminlte/img/icon/store.png">
      <span class="brand-text font-weight-bold">COPryn</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="/adminlte/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="#" class="d-block">Alexander Pierce</a>
        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-item has-treeview">
            <a href="dashboard.blade.php" class="nav-link">
            <img src=/adminlte/img/icon/home.png>
              <p>
                Home
              </p>
            </a>
            <label>Manajemen Toko
            <li class="nav-item">
                <a href="?page=about" class="nav-link">
                <img src=/adminlte/img/icon/info.png>
                  <p>Informasi Toko</p>
                </a>
            </li>
              <li class="nav-item">
                <a href="?page=user" class="nav-link">
                <img src=/adminlte/img/icon/user.png>
                  <p>Daftar User</p>
                </a>
              </li>
          </li>
          </label>

          <li class="nav-item has-treeview">
            <a href="?page=barang" class="nav-link">
            <img src=/adminlte/img/icon/barang.png>
              <p>
                Inventory
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="?page=user" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Master Produk</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="?page=user" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Stok Minimum</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="?page=user" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Master Konfigurasi
                  <i class="right fas fa-angle-left"></i>
                  </p>
                </a>
                <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="?page=user" class="nav-link">
                  <p>Curr</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="?page=user" class="nav-link">
                  <p>Kategori</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="?page=user" class="nav-link">
                  <p>Unit</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="?page=user" class="nav-link">
                  <p>Persen Keuntungan</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="?page=user" class="nav-link">
                  <p>Stok Min dari PPN</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="?page=user" class="nav-link">
                  <p>Bahan</p>
                </a>
              </li>
            </ul>
              </li>
              <li class="nav-item">
                <a href="?page=user" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Lap. Barang Masuk</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="?page=user" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Lap. Barang Keluar</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="?page=user" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Bahan-Bahan</p>
                </a>
              </li>
            </ul>
          </li>
  
          <li class="nav-item has-treeview">
            <a href="?page=pos" class="nav-link">
            <img src=/adminlte/img/icon/pos.png>
              <p>
                Point Of Sale
              </p>
            </a>
          </li>
          <li class="nav-item has-treeview">
            <a href="?page=kasir" class="nav-link">
            <img src=/adminlte/img/icon/kasir.png>
              <p>
                Laporan Kasir
              </p>
            </a>
          </li>
            </ul>
          </li>
            </ul>
          </li>
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    @yield('content')
  </div>
  <!-- /.content-wrapper -->

  <footer class="main-footer">
    <div class="float-right d-none d-sm-block">
      <b>-COPryn</b>
    </div>
    <strong>Copyright &copy; 2019 <a>Erina Cahyani</a>.</strong> All rights
    reserved.
  </footer>

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->

<!-- jQuery -->
<script src="/adminlte/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="/adminlte/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- AdminLTE App -->
<script src="/adminlte/js/adminlte.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="/adminlte/js/demo.js"></script>
</body>
</html>