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
<img src="assets/img/logo.jpg" style="position: absolute; width: 150px; height: auto;"> 
           <table style="width: 105%;">
			<tr>
			<td align="center">
			<p>DPRD PEMERINTAHAN KOTA BANJARMASIN<br><h2>SEKRETARIAT DEWAN PERWAKILAN RAKYAT DAERAH</h2>
					Alamat : Jl. Lambung Mangkurat No.18, Kertak Baru Ulu, Kec. Banjarmasin Tengah, Kota Banjarmasin, Kalimantan Selatan 70111 <br> Telp. (0511)-3366351 – 3366352 Fax. (0511)-3366353</p>
			</tr>
			
		</table><br>
		<hr class="line-title">
		<p align="center">
			<strong>LAPORAN DATA SURAT KELUAR</strong>
		</p>
		
        <table id="customers" class="table table-bordered">
			 <thead>
			 <tr align="center">			
			 <th>NO</th>
                  <th>Tanggal</th>
                  <th>Petugas Penerima Surat</th>
                  <th>Pengirim</th>
                  <th>Alamat Pengirim</th>
                  <th>Surat Keluar</th>                  
                  <th>No Surat</th>
                  
                  <th>Tanggal Surat</th>
                  <th>Di Keluarkan Tanggal</th>  
                  <th>Perihal</th>  
                </tr>
              </thead>
              <tbody>
			  <?php
                $no = 1;
                foreach ($tb_suratkeluar as $ct) : ?>
                 <tr align="center">
				 <td width="20px"><?php echo $no++ ?></td>
                      <td><?php echo date('d-m-Y', strtotime($ct->tanggal))?></td>
                       <td><?php echo $ct->nm_petugas?></td>
                      <td><?php echo $ct->pengirim?></td>
                      <td><?php echo $ct->alamat?></td>
                      <td><?php echo $ct->surat?></td>
                      <td><?php echo $ct->no_surat?></td>  
                
                      <td><?php echo date('d-m-Y', strtotime($ct->tgl_surat))?></td>
                      <td><?php echo date('d-m-Y', strtotime($ct->tgl_dikeluarkan))?></td>  
                      
                      <td><?php echo $ct->perihal?></td>  
                  </tr>
				  <?php endforeach; ?>
	</tbody>
       </table><br>
	   
	   <table width="30%" align="right" border="0">
		<tr>
			<td width="10%"></td>
			<td align="center"><p> PIMPINAN DEWAN PERWAKILAN RAKYAT<br>DAERAH KOTA BANJARMASIN<br>KETUA,<br><br><br><br><br><u>H.HARRY WIJAYA</u><br><strong>NIP.19860912 201001 1 006</strong></p></td>		</tr>
		</tr>
	</table>


<!-- page script -->
</body>
</html>