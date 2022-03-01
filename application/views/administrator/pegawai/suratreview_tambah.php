<div class="content-wrapper">
    <!-- Content Header (Page header) -->

    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Tambah Data Hasil Banggar</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="<?php echo base_url() ?>administrator/admin/dashboardadmin">Home</a></li>
              <li class="breadcrumb-item active">Tambah Data Hasil Banggar</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

<section class="content">
      
      <div class="row">  

        <div class="col-md-12">

           <?php echo form_open_multipart('administrator/pegawai/suratreview/input_aksi'); ?>
          <div class="card card-primary">

            <div class="card-body">
            <div class="form-group">
              <label for="inputName">Nomor Surat</label>
              <input type="text" name="nomor_surat" class="form-control" id="nomor_surat" value="<?php echo $kode;?>" readonly>
              <?php echo form_error('nomor_surat','<div class="text-danger small" ml-3>') ?>
              </div>
            <div class="form-group">
                  <label>No Surat Masuk</label>
                  <select name="no_surat" class="form-control custom-select" id="no_surat" data-placeholder="-Pilih-" style="width: 100%;">
                  <option selected disabled>-Pilih-</option>
                  <?php foreach ($tb_suratmasuk as $pg) : ?>
                    <option value="<?php echo $pg->no_surat ?>" tgl_surat="<?php echo $pg->tgl_surat ?>" surat="<?php echo $pg->surat ?>" perihal="<?php echo $pg->perihal ?>"><?php echo $pg->no_surat ?></option>
                  <?php endforeach; ?>
                   </select>
                  <?php echo form_error('kd_spt','<div class="text-danger small" ml-3>') ?>
                </div>

                 

              <div class="form-group">
              <label for="inputName">Tanggal Surat</label>
              <input type="date" name="tgl_surat" class="form-control" id="tgl_surat" readonly>
              <?php echo form_error('tgl_surat','<div class="text-danger small" ml-3>') ?>
              </div>

              <div class="form-group">
              <label for="inputName">Surat</label>
              <input type="text" name="surat" class="form-control" id="surat" readonly>
                <?php echo form_error('surat','<div class="text-danger small" ml-3>') ?>
              </div>

              <div class="form-group">
                <label for="inputStatus">Perihal</label>
                <input type="text" name="perihal" class="form-control" id="perihal" readonly>
                <?php echo form_error('perihal','<div class="text-danger small" ml-3>') ?>
              </div>

              <div class="form-group">
                <label for="inputStatus">Hasil</label>
                <select name="keterangan" class="form-control custom-select" id="keterangan" data-placeholder="-Pilih-" style="width: 100%;">
                  <option selected disabled>-Pilih-</option>
                  <option>Diterima</option>
                  <option>Tidak Diterima</option>
                  <option>Tunda</option>
                </select>
                <?php echo form_error('keterangan','<div class="text-danger small" ml-3>') ?>
              </div>

              <div class="form-group">
                <label for="inputStatus">Keterangan</label>
                <input type="text" name="ket" class="form-control" id="ket">
                <?php echo form_error('ket','<div class="text-danger small" ml-3>') ?>
              </div>
              <div class="form-group">
                
                <input type="hidden" name="verif" class="form-control" id="verif" placeholder="-">
               
              </div>
                  </div>

                 

                </div>
         <button type="submit" class="btn btn-primary mb-5">Simpan</button>
              <?php echo anchor('administrator/pegawai/suratreview','<div class="btn mb-5 btn-primary">Kembali</div>') ?> 
              <?php echo form_close(); ?>
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
    $("#no_surat").on("change", function(){
      var tgl_surat = $("#no_surat option:selected").attr("tgl_surat"),
          surat = $("#no_surat option:selected").attr("surat"),
          perihal = $("#no_surat option:selected").attr("perihal");
      
          
      $("#tgl_surat").val(tgl_surat);
      $("#surat").val(surat);
      $("#perihal").val(perihal);
    });
  });

</script>

 