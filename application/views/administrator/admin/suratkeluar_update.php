<div class="content-wrapper">
    <!-- Content Header (Page header) -->

    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Update Surat Keluar</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="<?php echo base_url() ?>administrator/admin/dashboardadmin">Home</a></li>
              <li class="breadcrumb-item active">Update Surat Keluar</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

<section class="content">
      
      <div class="row">  

        <div class="col-md-12">
        <?php foreach($tb_suratkeluar as $ct) : ?>
           <?php echo form_open_multipart('administrator/admin/suratkeluar/update_aksi'); ?>
          <div class="card card-primary">

            <div class="card-body">
            <div class="form-group">
                  <label>Tanggal</label>
                  <div class="input-group">
                  <input type="hidden" name="id" class="form-control" value="<?php echo $ct->id ?>">
                    <input type="date" class="form-control" name="tanggal"  value="<?php echo $ct->tanggal ?>">
                  </div>
                  <?php echo form_error('tanggal','<div class="text-danger small" ml-3>') ?>
                </div>
                
                <div class="form-group">
                <label for="inputStatus">Petugas Penerima Surat</label>
                <select name="nm_petugas" class="form-control custom-select" id="nm_petugas" data-placeholder="-Pilih-" style="width: 100%;">
                  <option value="<?php echo $ct->nm_petugas ?>"><?php echo $ct->nm_petugas ?></option>
                  <?php foreach ($tb_petugas as $pg) : ?>
                    <option value="<?php echo $pg->nm_petugas ?>"><?php echo $pg->nm_petugas ?></option>
                <?php endforeach; ?>
                </select>
                <?php echo form_error('tgl_diterima','<div class="text-danger small" ml-3>') ?>
              </div>

              <div class="form-group">
              <label for="inputName">Pengirim</label>
              <input type="text" name="pengirim" class="form-control" id="pengirim" value="<?php echo $ct->pengirim ?>">
              <?php echo form_error('pengirim','<div class="text-danger small" ml-3>') ?>
              </div>
              <div class="form-group">
              <label for="inputName">Alamat Pengirim</label>
              <input type="text" name="alamat" class="form-control" id="alamat" value="<?php echo $ct->alamat ?>">
              <?php echo form_error('alamat','<div class="text-danger small" ml-3>') ?>
              </div>

                 

              <div class="form-group">
              <label for="inputName">Surat</label>
              <input type="text" name="surat" class="form-control" id="surat" value="<?php echo $ct->surat ?>">
              <?php echo form_error('surat','<div class="text-danger small" ml-3>') ?>
              </div>

              <div class="form-group">
              <label for="inputName">No Surat</label>
              <input type="text" name="no_surat" class="form-control" id="" value="<?php echo $ct->no_surat ?>" readonly>
                <?php echo form_error('no_surat','<div class="text-danger small" ml-3>') ?>
              </div>

              <div class="form-group">
                <label for="inputStatus">Tanggal Surat</label>
                <input type="date" name="tgl_surat" class="form-control" id="tgl_surat" value="<?php echo $ct->tgl_surat ?>">
                <?php echo form_error('tgl_surat','<div class="text-danger small" ml-3>') ?>
              </div>

              <div class="form-group">
                <label for="inputStatus">Tanggal Dikeluarkan</label>
                <input type="date" name="tgl_dikeluarkan" class="form-control" id="tgl_dikeluarkan" value="<?php echo $ct->tgl_dikeluarkan ?>">
                <?php echo form_error('tgl_dikeluarkan','<div class="text-danger small" ml-3>') ?>
              </div>

              <div class="form-group">
                <label for="inputStatus">Perihal </label>
                <input type="text" name="perihal" class="form-control" id="perihal" value="<?php echo $ct->perihal ?>">
                <?php echo form_error('perihal','<div class="text-danger small" ml-3>') ?>
              </div>
              <div class="form-group">
                    <label for="exampleInputFile">File</label>
                    <div class="input-group">
                      <div class="custom-file">
                        <input type="file" name="userfile" value="<?php echo $ct->file ?>" class="custom-file-input" id="exampleInputFile">
                        <label class="custom-file-label" for="exampleInputFile">Masukkan File</label>
                      </div>
                    </div>
                  </div>

             </div>

                </div>
         <button type="submit" class="btn btn-primary mb-5">Simpan</button>
              <?php echo anchor('administrator/admin/suratkeluar','<div class="btn mb-5 btn-primary">Kembali</div>') ?> 
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
 