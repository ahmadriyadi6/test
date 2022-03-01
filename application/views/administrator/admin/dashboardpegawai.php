  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">SELAMAT DATANG</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="<?php echo base_url() ?>administrator/admin/dashboardadmin">Home</a></li>
              <li class="breadcrumb-item active">Dashboard</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <!-- Small boxes (Stat box) -->
        <div class="row">
          
          <!-- ./col -->
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-success">
              <div class="inner">
                <h3><?=$this->fungsi->count_suratmasuk()?></h3>

                <h2>Data Surat Masuk </h2>
              </div>
             
              <a href="<?php echo base_url() ?>administrator/reportpegawai/reportsuratmasuk" class="small-box-footer">Klik Disini <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>

          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-danger">
              <div class="inner">
                <h3><?=$this->fungsi->count_suratkeluar()?></h3>

                <h2>Data Surat Keluar</h2>
              </div>
             
              <a href="<?php echo base_url() ?>administrator/reportpegawai/reportsuratkeluar" class="small-box-footer">Klik Disini <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <!-- ./col -->
          <!-- <div class="col-lg-3 col-6">

            <div class="small-box bg-warning">
              <div class="inner">
                <h3><?=$this->fungsi->count_suratreview()?></h3>

                <h2>Data Surat Review</h2>
              </div>
             
              <a href="<?php echo base_url() ?>administrator/admin/suratreview" class="small-box-footer">Klik Disini<i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>

          <div class="col-lg-3 col-6">
            <div class="small-box bg-primary">
              <div class="inner">
                <h3><?=$this->fungsi->count_suratumum()?></h3>

                <h2>Data Surat Umum</h2>
              </div>
              
              <a href="<?php echo base_url() ?>administrator/admin/suratumum" class="small-box-footer">Klik Disini <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div> -->

        

          
          <!-- ./col -->
        </div>
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->


  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>

  <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->

<!-- jQuery -->

