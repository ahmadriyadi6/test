<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<link rel="icon" href="<?php echo base_url() ?>assets/img/download.jpg">
	<title>Laporan Data Surat Keluar</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="<?php echo base_url() ?>assets/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">
  	<link rel="stylesheet" href="<?php echo base_url() ?>assets/plugins/datatables-responsive/css/responsive.bootstrap4.min.css">
  	<style type="text/css">
  		table tr td,
  		table tr th{
  		font-size: 8pt;
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
  background-color: #000000;
  color: white;
}
</style>
</head>
<body>	
<img src="assets/img/logo.jpg" style="position: absolute; width: 80px; height: auto;"> 
           <table style="width: 105%;">
			<tr>
			<td align="center">
			<p>PEMERINTAHAN PROVINSI KALIMANTAN SELATAN<br><h3>SEKRETARIAT DEWAN PERWAKILAN RAKYAT DAERAH</h3>
					Alamat : Jl. Lambung Mangkurat No.18, Kertak Baru Ulu, Kec. Banjarmasin Tengah, Kota Banjarmasin, Kalimantan Selatan 70111 <br> Telp. (0511)-3366351 – 3366352 Fax. (0511)-3366353</p>
			</tr>
			
		</table><br>
		<hr class="line-title">
	
		<table width="30%" align="right" border="0">
		<tr>
			<td width="10%"></td>
			<td align="center"><h3>Banjarmasin,<?php echo date('d/m/Y'); ?></td>
		</tr>
	</table> <br> <br> <br>

		<?php foreach ($tb_suratkeluar as $ct) : ?>
		
		
		<table class="table">
	   
		   <tbody>
			   <tr>
			   <td width="150px">Nomor</td>
				 <td width="10px">:</td>
				 <td><?php echo $ct->no_surat?></td>
				   
			   </tr>
			   <tr>

			   <td width="130px">Lampiran</td>
				 <td width="10px">:</td>
				 <td><?php echo $ct->file?></td>
			   </tr>
			   <tr>

			   <td width="130px">Perihal</td>
				 <td width="10px">:</td>
				 <td><?php echo $ct->perihal?></td>	
			   </tr>
			   
			   
		   </tbody>
		  
	   </table>
		
	 
  

	   <p width="10px">
	   Kepada Yth, SEKRETARIAT DEWAN PERWAKILAN RAKYAT DAERAH <br> <br>
	   Berhubung surat saudara nomor : <b><?php echo $ct->no_surat?><br></b> 
	   Tanggal <b><?php echo date('d-m-Y', strtotime($ct->tgl_surat))?> </b>Melakukan Kegiatan <b><?php echo $ct->perihal?></b>
	   <br><br>
	   Dengan ini kami dapat menerimanya sesuai dengan jadwal yang sudah ditentukan. <br>
	   Demikian surat keterangan ini kami buat dengan sebenarnya untuk dapat dipergunakan sebagaimana semestinya.
	   </p>

	   <?php endforeach; ?>
	   <br>
	 
	   <table width="30%" align="right" border="0">
		<tr>
			<td width="10%"></td>
			<td align="center"><p> PIMPINAN DEWAN PERWAKILAN RAKYAT<br>DAERAH KOTA BANJARMASIN<br>KETUA,<br><br><br><br><br><u>H.HARRY WIJAYA</u><br><strong>NIP.19860912 201001 1 006</strong></p></td>		</tr>
		</tr>
	</table>
        


<!-- page script -->
</body>
</html>