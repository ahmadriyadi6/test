<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<link rel="icon" href="<?php echo base_url() ?>assets/img/download.jpg">
	<title>Surat Review</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="<?php echo base_url() ?>assets/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">
  	<link rel="stylesheet" href="<?php echo base_url() ?>assets/plugins/datatables-responsive/css/responsive.bootstrap4.min.css">
  	<style type="text/css">
  		table tr td,
  		table tr th{
  			font-size: 12pt;
  		}
  	</style>
	<style>
	#wrapper {
     width: 800px;
     margin: 0 auto;
	 }
	 #judul {
		 text-align: center;
		 font-size: 25px;
		 font-weight: bold;
		 text-decoration: underline;
		 padding-top: 50px;
		 padding-bottom: 20px;
	 }
	 .isi {
		 font-size: 20px;
		 padding: 20px;
		 text-align: justify;
		 text-indent: 40px;
	 }

	 .table {
		text-align: justify;
    	width: 80%;
    	margin: auto;
		font-size: 20px;
	}

	td{
		height: 30px;
	}
	</style>
	<style>
		.line-title{
			border: 0;
			border-style: inset;
			border-top: 1px solid #000;
		}
	</style>

	<style>
	#customers {
  		font-family: "Trebuchet MS", Arial, Helvetica, sans-serif;
  		border-collapse: collapse;
  		width: 100%;
	}

	#customers td, #customers th {
  	border: 1px solid #ddd;
  	padding: 8px;
	}

	#customers tr:nth-child(even){background-color: #f2f2f2;}

	#customers tr:hover {background-color: #ddd;}

	#customers th {
  padding-top: 12px;
  padding-bottom: 12px;
  text-align: center;
  background-color: #4CAF50;
  color: white;
}
</style>
</head>
<body>	
			<img src="assets/img/logo.png" style="position: absolute; width: 90px; height: auto;">
           <table style="width: 105%;">
			<tr>
			<td align="center">
			<p>PEMERINTAHAN PROVINSI KALIMANTAN SELAMAT<br><h3>DINAS TENAGA KERJA DAN TRANSMIGRASI</h3>
					Alamat : Jl.Jend. A.Yani KM,6 No.23 Banjarmasin Kode Pos 70249</p>
				</td>
				
			</tr>
			
		</table><br>
		<hr class="line-title">
		<p align="center">
			<strong><u>Surat Review</u> </strong>
		</p>
		<?php foreach ($tb_suratspt as $ct) : ?>
		
		  <p>
		  Yang bertanda tangan di bawah, dengan ini menerangkan bahwa :
		  </p>

		  <table class="table">
		 
	 		<tbody>
 				<tr>
				 <td width="150px">Kode SPT</td>
      			 <td width="10px">:</td>
      			 <td><?php echo $ct->kd_spt?></td>
 					
 				</tr>
 				<tr>

				 <td width="130px">Tanggal Surat</td>
      			 <td width="10px">:</td>
      			 <td><?php echo date('d-m-Y', strtotime($ct->tgl_surat))?></td>
 				</tr>
 				<tr>

				 <td width="130px">Nama Pegawai</td>
      			 <td width="10px">:</td>
      			 <td><?php echo $ct->nm_pegawai?></td>	
 				</tr>
 				

				 <tr>
				 <td width="130px">Uraian</td>
      			 <td width="10px">:</td>
      			 <td><?php echo $ct->uraian?></td>
 				</tr>
				 
 			</tbody>
			
 		</table>
		  
	   
	

		 <p>
		 Dengan ingin melakuan perjalanan dinas untuk <b><?php echo $ct->tujuan?></b> melaksanakan tugas pada tanggal <b><?php echo date('d-m-Y', strtotime($ct->tgl_berangkat))?></b>.
		 <br>
		 Demikian surat keterangan ini kami buat dengan sebenarnya untuk dapat dipergunakan sebagaimana semestinya.
		 </p>

		 <?php endforeach; ?>
	   <table width="30%" align="left" border="0">
		<tr>
			<td width="10%"></td>
			<td align="center"><h3><br>Yang Bersangkutan,<br><br><br><br>.....................<br>________________<br><strong>...............</strong></h3></td>
		</tr>
	   <table width="30%" align="right" border="0">
		<tr>
			<td width="10%"></td>
			<td align="center"><h3>Banjarmasin,<?php echo date('d/m/Y'); ?><br>Yang Menerima,<br><br><br><br>.....................<br>________________<br><strong>...............</strong></h3></td>
		</tr>
	</table>


<!-- page script -->
</body>
</html>