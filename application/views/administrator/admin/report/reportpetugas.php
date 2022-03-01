  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1> Laporan Absen Rapat</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="<?php echo base_url() ?>administrator/admin/dashboardadmin">Home</a></li>
              <li class="breadcrumb-item active">Laporan Absen Rapat</li>
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
              <h3 class="card-title">Daftar Data Absen Rapat</h3>
            </div>
            <?php echo $this->session->flashdata('pesan') ?>
              <div class="card-body">
              <?php echo anchor('administrator/report/reportpetugas/print','<button class="btn btn-sm btn-success mb-3"><i class="fas fa-print"></i> Print </button>') ?>
              <table id="example1" class="table table-bordered table-striped table-hover">           
                <thead>
                <tr align="center">
                <th>NO</th>
                  <th>NIP</th>
                  <th>Nama Petugas</th>                  
                  <th>Nama</th>
                  <th>Jabatan</th>
                  <th>Keterangan</th>
                  <th>Tanggal & Jam</th>
                </tr>
                </thead>
                <tbody>               
                <?php
                $no = 1;
                foreach ($tb_petugas as $ct) : ?>
                 <tr align="center">
                 <td width="20px"><?php echo $no++ ?></td>
                      <td><?php echo $ct->kd_petugas?></td>
                      <td><?php echo $ct->nm_petugas?></td>
                      <td><?php echo $ct->nama?></td>  
                      <td><?php echo $ct->alamat?></td>  
                      <td><?php echo $ct->no_hp?></td>  
                      <td><?php echo date('d-m-Y', strtotime($ct->tanggal))?> & <?php echo $ct->jam?></td>  
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
<script src="<?php echo base_url('assets/jquery.min.js'); ?>"></script>
  <script>
    $(document).ready(function() {
    $('#form-status').hide();
    $('#filter').change(function() {
      if ($(this).val() == '0') { // Jika filter nya 1 (per tanggal)
        $('#form-status').hide(); // Sembunyikan form tanggal
      } else if ($(this).val() == '1') { // Jika filter nya 1 (per tanggal)
        $('#form-status').show(); // Sembunyikan form bulan dan tahun
      } 

            $('#form-status select').val(''); // Clear data pada textbox tanggal, combobox bulan & tahun
        });
    });
    </script>
<!-- ./wrapper -->

<!-- jQuery -->
<!-- page script -->
