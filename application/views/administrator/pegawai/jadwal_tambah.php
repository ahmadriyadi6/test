<div class="content-wrapper">
    <!-- Content Header (Page header) -->

    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Tambah Jadwal</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="<?php echo base_url() ?>administrator/admin/dashboardadmin">Home</a></li>
              <li class="breadcrumb-item active">Tambah Jadwal</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

<section class="content">
      
      <div class="row">  

        <div class="col-md-12">

           <?php echo form_open_multipart('administrator/pegawai/jadwal/input_aksi'); ?>
          <div class="card card-primary">

            <div class="card-body">
            <div class="form-group">
                  <label>No Agenda</label>
                  <div class="input-group">
                    <input type="text" class="form-control" name="no_agenda" value="<?php echo $kode;?>" readonly>
                  </div>
                  <?php echo form_error('no_agenda','<div class="text-danger small" ml-3>') ?>
                </div>

                 

              <div class="form-group">
              <label for="inputName">Tanggal</label>
              <input type="date" name="tanggal" class="form-control" id="tanggal">
              <?php echo form_error('tanggal','<div class="text-danger small" ml-3>') ?>
              </div>

              

              <div class="form-group">
                <label for="inputStatus">Agenda</label>
                <input type="text" name="agenda" class="form-control" id="agenda">
                <?php echo form_error('agenda','<div class="text-danger small" ml-3>') ?>
              </div>

              <div class="form-group">
                <label for="inputStatus">Tahun Sidang</label>
                <input type="text" name="tahun_sidang" class="form-control" id="tahun_sidang" data-inputmask='"mask": "2099"' data-mask>
                <?php echo form_error('tahun_sidang','<div class="text-danger small" ml-3>') ?>
              </div>

              
              <div class="form-group">
              <label for="inputName">Rapat Ke</label>
              <input type="number" name="rapat" class="form-control" id="">
                <?php echo form_error('rapat','<div class="text-danger small" ml-3>') ?>
              </div>           
                  </div>
                </div>
         <button type="submit" class="btn btn-primary mb-5">Simpan</button>
              <?php echo anchor('administrator/pegawai/jadwal','<div class="btn mb-5 btn-primary">Kembali</div>') ?> 
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
      var nama = $("#no_surat option:selected").attr("nama"),
          jabatan = $("#no_surat option:selected").attr("jabatan");
      
          
      $("#nama").val(nama);
      $("#jabatan").val(jabatan);
    });
  });

</script>

<!-- <script>
$(document).ready(function(){
   $("#absen, #tugas, #uts, #uas,#rata, #predikat").keyup(function() {
            var absen  = $("#absen").val();
            var tugas = $("#tugas").val();
            var uts = $("#uts").val();
            var uas = $("#uas").val();
            var rata = $("#rata").val();
            var predikat = $("#predikat").val();

            var rata = ((parseInt(absen) + parseInt(tugas))/2 + parseInt(uts) + parseInt(uas))/3;
            $("#rata").val(rata);

            if((rata > 80) && (rata <= 100))
            {
              $('#predikat').val("A");
            } else if ((rata > 70) && (rata <= 80)){
              $('#predikat').val("B");
            } else if ((rata > 60) && (rata <= 70)){
              $('#predikat').val("C");
            } else if ((rata > 40) && (rata <= 60)){
              $('#predikat').val("D");
            } else if ((rata > 1) && (rata <= 40)){
              $('#predikat').val("E");
            }
           

        });
    });
</script> -->
 