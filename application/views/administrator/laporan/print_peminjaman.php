<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<link rel="icon" href="<?php echo base_url() ?>assets/img/download.jpg">
	<title>Surat Umum</title>
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
<img src="assets/img/logo.jpg" style="position: absolute; width: 70px; height: auto;"> 
           <table style="width: 105%;">
			<tr>
			<td align="center">
			<p>DPRD PEMERINTAHAN KOTA BANJARMASIN<br><h2>SEKRETARIAT DEWAN PERWAKILAN RAKYAT DAERAH</h2>
					Alamat : Jl. Lambung Mangkurat No.18, Kertak Baru Ulu, Kec. Banjarmasin Tengah, Kota Banjarmasin, Kalimantan Selatan 70111 <br> Telp. (0511)-3366351 – 3366352 Fax. (0511)-3366353</p>
			</tr>
			
		</table><br>
		<hr class="line-title">
		<p align="center">
			<strong><u>Surat Peminjaman Mobil Dinas</u> </strong>
		</p>
		<?php foreach ($tb_peminjam as $ct) : ?>
		
		  <p>
		  Yang bertanda tangan di bawah, dengan ini menerangkan bahwa :
		  </p>

		  <table class="table">
		 
	 		<tbody>
 			<tr>

				 <td width="130px">Tanggal Peminjam</td>
      			 <td width="10px">:</td>
      			 <td><?php echo $ct->tgl_peminjam?></td>
 				</tr>
 				<tr>

				 <td width="130px">Nama Peminjam</td>
      			 <td width="10px">:</td>
      			 <td><?php echo $ct->nm_peminjam?></td>
 				</tr>
 				<tr>

				 <td width="130px">No HP</td>
      			 <td width="10px">:</td>
      			 <td><?php echo $ct->no_hp?></td>	
 				</tr>
 				
				 
 			</tbody>
			 <?php endforeach; ?>
 		</table>
		  
	   
	

		 <p>
		 Saya Mengajukan Permohonan Peminjaman 1 (satu) unit mobil yang benopol <b><?php echo $ct->no_polisi?></b> untuk keperluan <b><?php echo $ct->keperluan?></b> dengan tujuan <b><?php echo $ct->tujuan?></b>.
		 <br>
		 Demikian surat keterangan ini kami buat dengan sebenarnya untuk dapat dipergunakan sebagaimana semestinya.
		 </p>


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