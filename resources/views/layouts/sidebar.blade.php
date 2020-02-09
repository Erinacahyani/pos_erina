  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="../../index3.html" class="brand-link">
      <img src="/adminlte/img/AdminLTELogo.png"
           alt="AdminLTE Logo"
           class="brand-image img-circle elevation-3"
           style="opacity: .8">
      <span class="brand-text font-weight-light">AdminLTE 3</span>
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
              <i class="/adminlte/img/logo/home.png"></i>
              <p>
                Home
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="?page=user" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Daftar User</p>
                </a>
              </li>
            </ul>
          </li>

          <li class="nav-item has-treeview">
            <a href="?page=barang" class="nav-link">
            <img src=/adminlte/img/logo/barang.png>
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
                  <p>Master Konfigurasi</p>
                </a>
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
              <i class="/adminlte/img/logo/pos.png"></i>
              <p>
                Point Of Sale
              </p>
            </a>
          </li>
          <li class="nav-item has-treeview">
            <a href="?page=kasir" class="nav-link">
              <i class="/adminlte/img/logo/laporan.png"></i>
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