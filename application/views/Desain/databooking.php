<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<title>Car Rental ROJO RAFIH</title>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/Style/bootstrap4/bootstrap.min.css') ?>">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/Style/stylepencarianmobil.css') ?>">
</head>
<body>
<div class="super_container">
	<div class="home">
		<div class="background_image" style="background-image:url(<?php echo base_url('assets/Images/mobil1.jpg') ?>)"></div>
		<header class="header" id="header">
			<div>
				<div class="header_top">
					<div class="container">
						<div class="row">
							<div class="col">
								<div class="header_top_content d-flex flex-row align-items-center justify-content-start">
									<div class="logo">
										<a href="<?php echo site_url('Welcome/index') ?>"><span>Car Rental</span>ROJO RAFIH</a>	
								</div>
							</div>
						</div>
					</div>
				</div>	
			</div>
		</header>
		<div class="home_container">
			<div class="container">
				<div class="row">
					<div class="col">
						<div class="home_content">
							<div class="home_title">Data Booking</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="contact">
		<div class="container">
			<div class="row">

				<!-- Contact form -->
				<div class="col-lg-8 contact_col">
					<div class="contact_form">
						<div class="contact_form_container">
							<div class="cform">
								<table border="1">
								<tr>
									<th>No</th>
									<th>NIK</th>
									<th>Plat Mobil</th>
									<th>Nama</th>
									<th>Alamat</th>
									<th>Tanggal Peminjaman</th>
									<th>Tanggal Pengembalian</th>
									<th>Foto Ktp</th>
								</tr>
								<?php

									$no = 1;
									foreach ($hasilbooking as $baris) {
										echo "<tr>";
										echo "<td>".$no."</td>";
										echo "<td>".$baris->NIK."</td>";
										echo "<td>".$baris->Plat_Mobil."</td>";
										echo "<td>".$baris->Nama."</td>";
										echo "<td>".$baris->Alamat."</td>";
										echo "<td>".$baris->Tanggal_Peminjaman."</td>";
										echo "<td>".$baris->Tanggal_Pengembalian."</td>";
										echo "<td>".$baris->Foto_KTP."</td>";
									$no++; } 
								?>
								</table>
							</div>
							<br><a href="<?php echo site_url('Welcome/Menuadmin') ?>">Kembali</a>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<footer class="footer">
		<div class="copyright">
			&copy; Copyright By : ROJO RAFIH
		</div>
	</footer>
</div>
</body>
</html>