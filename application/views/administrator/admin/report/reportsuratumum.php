  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1> Laporan Hasil Paripurna</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="<?php echo base_url() ?>administrator/admin/dashboardadmin">Home</a></li>
              <li class="breadcrumb-item active">Laporan Hasil Paripurna</li>
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
              <h3 class="card-title">Daftar Data Hasil Paripurna</h3>
            </div>
            <?php echo $this->session->flashdata('pesan') ?>
              <div class="card-body">
             
              <table id="example1" class="table table-bordered table-striped table-hover">           
                <thead>
                <tr align="center">
                <th>NO</th>
                  <th>Topik</th>
                  <th>Tanggal</th>                  
                  <th>Isi</th>
                  <th>Tanggapan</th>
                  <th>Hasil</th>  
                  <th>Keterangan</th>            
                  <th>Verifikasi</th>            
                  <th>Cetak</th>           
                </tr>
                </thead>
                <tbody>               
                <?php
                $no = 1;
                foreach ($tb_suratumum as $ct) : ?>
                 <tr align="center">
                 <td width="20px"><?php echo $no++ ?></td>
                      <td><?php echo $ct->sdr?></td>
                      <td><?php echo date('d-m-Y', strtotime($ct->tanggal))?></td>
                      <td><?php echo $ct->isi?></td>
                      <td><?php echo $ct->tanggapan?></td>
                      <td><?php echo $ct->sifat?></td>                    
                      <td><?php echo $ct->ket?></td> 
                      <td><?php echo $ct->verif?></td> 
                      <td class="project-actions text-center">                        
                                              
                                              <a width="20px"><?php echo anchor('administrator/report/reportsuratumum/print/'.$ct->id,'<button class="btn btn-sm btn-success mb-3"><i class="fas fa-print"></i></button>') ?>
                                              </a>
                                          </td>
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
