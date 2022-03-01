  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1> Laporan Surat Masuk</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="<?php echo base_url() ?>administrator/admin/dashboardadmin">Home</a></li>
              <li class="breadcrumb-item active">Laporan Surat Masuk</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

  <section class="content">
      <div class="row">
        <div class="col-12">
          <div class="card">
            <div class="card-header">
              <h3 class="card-title">Daftar Data Surat Masuk</h3>
            </div>
            <?php echo $this->session->flashdata('pesan') ?>
              <div class="card-body">
              <?php echo anchor('administrator/report/reportsuratmasuk/print','<button class="btn btn-sm btn-success mb-3"><i class="fas fa-print"></i> Print </button>') ?>
              <table id="example1" class="table table-bordered table-striped table-hover">           
                <thead>
                <tr align="center">
                <tr>
                  <th>NO</th>
                  <th>Tanggal</th>
                  <th>Petugas Penerima Surat</th>
                  <th>Pengirim</th>
                  <th>Alamat Pengirim</th>
                  <th>Surat Masuk</th>                  
                  <th>No Surat</th>
                  
                  <th>Tanggal Surat</th>
                    
                  <th>Perihal</th>  
                  <th>File</th>
                  <th>Foto</th>
                  
                </tr>
                </thead>
                <tbody>               
                <?php
                $no = 1;
                foreach ($tb_suratmasuk as $ct) : ?>
                 <tr align="center">
                      <td width="20px"><?php echo $no++ ?></td>
                      <td><?php echo date('d-m-Y', strtotime($ct->tanggal))?></td>
                      <td><?php echo $ct->nm_petugas?></td>
                      <td><?php echo $ct->pengirim?></td>
                      <td><?php echo $ct->alamat?></td>
                      
                      <td><?php echo $ct->surat?></td>
                      <td><?php echo $ct->no_surat?></td>  
                
                      <td><?php echo date('d-m-Y', strtotime($ct->tgl_surat))?></td>
                        
                      
                      <td><?php echo $ct->perihal?></td>                    
                      <td><a type="button" target="_blank" class="btn btn-primary" href="<?php echo base_url('assets/img/').$ct->file ?>"> Buka File</a></td>  
                      <td width="20px"> <img src="<?php echo base_url('assets/img/') . $ct->file ?>" witdh="60" height="77"></td>

                  </tr>
                  
                <?php endforeach; ?>
                </tbody>
                <tfoot>
              </table>
            </div>
            <!-- /.card-body -->
          </div>
          <!-- /.card -->
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->
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
<!-- page script -->
