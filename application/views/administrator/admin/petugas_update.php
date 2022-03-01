<div class="content-wrapper">
    <!-- Content Header (Page header) -->

    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Update Data Absen</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="<?php echo base_url() ?>administrator/admin/dashboardadmin">Home</a></li>
              <li class="breadcrumb-item active">Update Data Absen</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

<section class="content">
      
      <div class="row">  

        <div class="col-md-12">
        <?php foreach($tb_petugas as $ct) : ?>
           <?php echo form_open_multipart('administrator/admin/petugas/update_aksi'); ?>
          <div class="card card-primary">

            <div class="card-body">
            

                 
                <div class="form-group">
                  <label>ID Petugas</label>
                  <div class="input-group">
                  <input type="hidden" name="id" class="form-control" value="<?php echo $ct->id ?>">
                    <input type="text" class="form-control" name="kd_petugas" value="<?php echo $ct->kd_petugas ?>" readonly>
                  </div>
                  <?php echo form_error('kd_petugas','<div class="text-danger small" ml-3>') ?>
                </div>

                 

              <div class="form-group">
              <label for="inputName">Nama Petugas</label>
              <input type="text" name="nm_petugas" class="form-control" id="nm_petugas" value="<?php echo $ct->nm_petugas ?>">
              <?php echo form_error('nm_petugas','<div class="text-danger small" ml-3>') ?>
              </div>

              <div class="form-group">
              <label for="inputName">Nama</label>
              <input type="text" name="nama" class="form-control" id="nama" value="<?php echo $ct->nama ?>">
              <?php echo form_error('nama','<div class="text-danger small" ml-3>') ?>
              </div>

              <div class="form-group">
                <label for="inputStatus">Jabatan</label>
                <input type="text" name="alamat" class="form-control" id="alamat"  value="<?php echo $ct->alamat ?>">
                <?php echo form_error('alamat','<div class="text-danger small" ml-3>') ?>
              </div>

              
              <div class="form-group">
              <label for="inputName">Keterangan</label>
              <input type="text" name="no_hp" class="form-control" id=""  value="<?php echo $ct->no_hp ?>">
                <?php echo form_error('no_hp','<div class="text-danger small" ml-3>') ?>
              </div>

             
              <div class="form-group">
              <label for="inputName">Tanggal</label>
              <input type="date" name="tanggal" class="form-control" value="<?php echo $ct->tanggal ?>" id="tanggal">
              <?php echo form_error('tanggal','<div class="text-danger small" ml-3>') ?>
              </div>

              <div class="form-group">
              <label for="inputName">Jam</label>
              <input type="time" name="jam" class="form-control" value="<?php echo $ct->jam ?>" id="jam">
              <?php echo form_error('jam','<div class="text-danger small" ml-3>') ?>
              </div>
         
             </div>

                </div>
         <button type="submit" class="btn btn-primary mb-5">Simpan</button>
              <?php echo anchor('administrator/admin/petugas','<div class="btn mb-5 btn-primary">Kembali</div>') ?> 
              <?php echo form_close(); ?>
            <?php endforeach; ?>
    </div>
    
    </section>
  </div>
  </div>

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <a id="back-to-top" href="#" class="btn btn-primary back-to-top" role="button" aria-label="Scroll to top">
      <i class="fas fa-chevron-up"></i>
    </a>
 </div>

 <script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
 <script type="text/javascript">
  $(document).ready(function(){
    $("#nip").on("change", function(){
      var nama = $("#nip option:selected").attr("nama"),
          jabatan = $("#nip option:selected").attr("jabatan");
      
          
      $("#nama").val(nama);
      $("#jabatan").val(jabatan);
    });
  });

</script>
 