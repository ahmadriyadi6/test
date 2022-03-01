<body class="hold-transition sidebar-mini layout-fixed">
<div class="wrapper">

  <!-- Navbar -->
  <nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
      </li>
       
    </ul>
 
    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto">
      <!-- Messages Dropdown Menu -->
            <!-- Message End -->
          
      <!-- Notifications Dropdown Menu -->
            <li class="nav-item dropdown">
        <a class="nav-link" data-toggle="dropdown" href="#">
          <i class="far fa-user"></i>
        </a>
        <div class="dropdown-menu">
           <a href="<?php echo base_url() ?>administrator/pengguna" class="dropdown-item">
          <i class="far fa-plus-square mr-2"></i>Pengguna
          </a>   
         <div class="dropdown-divider"></div>
         <a href="<?php echo base_url() ?>auth" class="dropdown-item">
          <i class="fas fa-sign-out-alt fa-sm mr-2"></i>Logout
          </a>
      </li> 
    </ul>
  </nav>
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4 bg-dark ">
    <!-- Brand Logo -->
    

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
      <div class="image">
        <img src="<?php echo base_url() ?>assets/img/logo.jpg" alt="" class="brand-image img-circle elevation-3"
           style="opacity: 200">
        </div>
        <div class="info">
          <a class="d-block"><h5>DPRD PEMERINTAH <br> KOTA BANJARMASIN</h5></a>
        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-item has-treeview">
              <a class="nav-link" href="<?php echo base_url() ?>administrator/admin/dashboardadmin">
              <i class="nav-icon fas fa-th"></i>
              <p>
               Dashboard</p>
            </a>
          </li>
          <li class="nav-item">
                <a href="<?php echo base_url() ?>administrator/admin/jadwal" class="nav-link">
                  <i class="nav-icon fas fa-edit nav-icon"></i>
                  <p>Data Jadwal</p>
                </a>
              </li>
          <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-inbox"></i>
              <p>
                Data Surat
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
           
             
            <ul class="nav nav-treeview">
           
              <li class="nav-item">
                <a href="<?php echo base_url() ?>administrator/admin/suratmasuk" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Data Surat Masuk</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="<?php echo base_url() ?>administrator/admin/suratkeluar" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Data Surat Keluar</p>
                </a>
              </li> 
             
            </ul>
          <li class="nav-item">
                <a href="<?php echo base_url() ?>administrator/admin/petugas" class="nav-link">
                  <i class="nav-icon fas fa-edit nav-icon"></i>
                  <p>Data Absen Rapat</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="<?php echo base_url() ?>administrator/admin/suratumum" class="nav-link">
                  <i class="nav-icon fas fa-edit nav-icon"></i>
                  <p>Hasil Paripurna</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="<?php echo base_url() ?>administrator/admin/suratreview" class="nav-link">
                  <i class="nav-icon fas fa-edit nav-icon"></i>
                  <p>Hasil Banggar</p>
                </a>
              </li>
            
             

          
            
             <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-print"></i>
              <p>
                Laporan
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
            <li class="nav-item">
                <a href="<?php echo base_url() ?>administrator/report/reportjadwal" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Laporan Data Jadwal</p>
                </a>
              </li>
            <li class="nav-item">
                <a href="<?php echo base_url() ?>administrator/report/reportsuratmasuk" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Laporan Surat Masuk</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="<?php echo base_url() ?>administrator/report/reportsuratkeluar" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Laporan Surat Keluar</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="<?php echo base_url() ?>administrator/report/reportpetugas" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Laporan Data Absen Rapat</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="<?php echo base_url() ?>administrator/report/reportsuratumum" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Laporan Hasil Paripurna</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="<?php echo base_url() ?>administrator/report/reportsuratreview" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Laporan Hasil Banggar</p>
                </a>
              </li>
              
           
             
              

        </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>
  