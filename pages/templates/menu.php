<?php

session_start();

if (! $_SESSION) {
  header('location: ../../index.php');
}

?>

<!-- Main Sidebar Container -->
<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="index3.html" class="brand-link">
      <img src="../../dist/img/clogo.jpg" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
      <span class="brand-text font-weight-light">Consess AEON </span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="../../dist/img/aman.jpg" class="ithumbnailmg-" alt="User Image">
        </div>
        <div class="info">
          <a class="d-block"><?php echo $_SESSION['_data']->nama_lengkap; ?></a>
          <a class="d-block"><?php echo $_SESSION['_data']->supplier_description ? $_SESSION['_data']->supplier_description : 'Administrator Area'; ?></a>
        </div>
      </div>

      <!-- SidebarSearch Form -->
      <div class="form-inline">
        <div class="input-group" data-widget="sidebar-search">
          <input class="form-control form-control-sidebar" type="search" placeholder="Search" aria-label="Search">
          <div class="input-group-append">
            <button class="btn btn-sidebar">
              <i class="nav-icon fas fa-search fa-fw"></i>
            </button>
          </div>
        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <!-- <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Dashboard
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="./index.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Dashboard v1</p>
                </a>
              </li>
            </ul>
          </li> -->
          <li class="nav-item">
            <a href="../dashboard" class="nav-link">
            <i class="nav-icon fas fa-laptop-house"></i>
              <p>
                Dashboard
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="../master_item_barang" class="nav-link">
              <i class="nav-icon fas fa-warehouse"></i><p> Item Barang</p>
            </a>
          </li>

          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-dolly-flatbed"></i>
              <p>
                Log History
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="../log_masuk_barang" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Masuk Barang</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="../log_keluar_barang" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Keluar Barang</p>
                </a>
              </li>
            </ul>
          </li>
          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-dolly-flatbed"></i>
              <p>
                Master Data
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
                <li class="nav-item">
                <a href="../master_data_jenis_barang" class="nav-link">
                <i class="nav-icon fas fa-boxes"></i>
                  <p>
                    Jenis Barang
                  </p>
                </a>
              </li>
              <li class="nav-item">
                <a href="../Category  " class="nav-link">
                <i class="nav-icon fas fa-file-alt"></i>
                  <p>
                    Category 
                  </p>
                </a>
              </li>
              <li class="nav-item">
                <a href="../Group  " class="nav-link">
                <i class="nav-icon fas fa-users"></i>
                  <p>
                    Group 
                  </p>
                </a>
              </li>
              <li class="nav-item">
                <a href="../Departemen  " class="nav-link">
                <i class="nav-icon fas fa-city"></i>
                  <p>
                    Departemen 
                  </p>
                </a>
              </li>
              <li class="nav-item">
                <a href="../Division  " class="nav-link">
                <i class="nav-icon fas fa-house-user"></i>
                  <p>
                    Division 
                  </p>
                </a>
              </li>
              <li class="nav-item">
                <a href="../Line  " class="nav-link">
                <i class="nav-icon fas fa-user-tie"></i>
                  <p>
                    Line 
                  </p>
                </a>
              </li>
              <li class="nav-item">
                <a href="../Supplier  " class="nav-link">
                <i class="nav-icon fas fa-user-plus"></i>
                  <p>
                    Supplier 
                  </p>
                </a>
              </li>
            </ul>
          </li>
          
          
          <li class="nav-item">
            <a href="../pengguna" class="nav-link">
            <i class="nav-icon fas fa-user-graduate"></i>
              <p>
                Pengguna
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="../sample-modal" class="nav-link">
              <i class="nav-icon fas fa-th"></i>
              <p>
                Sample Modal
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="../sample-link" class="nav-link">
              <i class="nav-icon fas fa-th"></i>
              <p>
                Sample Link
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="../sample-link" class="nav-link">
              <i class="nav-icon fas fa-th"></i>
              <p>
                Riwayat Transaksi
              </p>
            </a>
          </li>
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>