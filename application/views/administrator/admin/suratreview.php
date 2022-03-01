  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Data Hasil Banggar</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="<?php echo base_url() ?>administrator/admin/dashboardadmin">Home</a></li>
              <li class="breadcrumb-item active">Data Hasil Banggar</li>
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
              <h3 class="card-title">Daftar Data Hasil Banggar</h3>
            </div>
            <?php echo $this->session->flashdata('pesan') ?>
              <div class="card-body">   

                <?php echo anchor('administrator/admin/suratreview/input','<button class="btn btn-sm btn-primary mb-3"><i class="fas fa-plus fa-mr"></i> Tambah </button>') ?>

              <table id="example1" class="table table-bordered table-striped table-hover">           
                <thead>
                <tr>
                  <th>NO</th>
                  <th>No Surat Banggar</th>
                  <th>No Surat Masuk</th>
                  <th>Tanggal Surat</th>                  
                  <th>Surat</th>
                  
                  <th>Perihal</th>
                  <th>Hasil</th>  
                  <th>Keterangan</th>  
                  <th>Verif</th>  
              
                  <th width="88px">AKSI</th>
                </tr>
                </thead>
                <tbody>               
                <?php
                $no = 1;
                foreach ($tb_suratreview as $ct) : ?>
                 <tr align="center">
                      <td width="20px"><?php echo $no++ ?></td>
                      <td><?php echo $ct->nomor_surat?></td>
                      <td><?php echo $ct->no_surat?></td>
                      <td><?php echo date('d-m-Y', strtotime($ct->tgl_surat))?></td>
                      <td><?php echo $ct->surat?></td>
                  
                      <td><?php echo $ct->perihal?></td>                    
                      <td><?php echo $ct->keterangan?></td>                    
                      <td><?php echo $ct->ket?></td>                    
                      <td><?php echo $ct->verif?></td>                    

                      <td class="project-actions text-left">                        
                                              
                          <a width="20px"><?php echo anchor('administrator/admin/suratreview/update/'.$ct->id,'<div class="btn btn-info btn-sm"><i class="fa fa-pencil-alt"></i></div>') ?>
                          </a>
                          <a width="20px"><?php echo anchor('administrator/admin/suratreview/delete/'.$ct->id,'<div class="btn btn-sm btn-danger"><i class="fa fa-trash"></i></div>') ?>
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
