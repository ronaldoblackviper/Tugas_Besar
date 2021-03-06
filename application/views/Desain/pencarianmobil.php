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
		<div class="background_image" style="background-image:url(<?php echo base_url('assets/Images/headerutama.jpg') ?>)"></div>
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
				<div class="header_nav" id="header_nav_pin">
					<div class="header_nav_inner">
						<div class="header_nav_container">
							<div class="container">
								<div class="row">
									<div class="col">
										<div class="header_nav_content d-flex flex-row align-items-center justify-content-start">
											<nav class="main_nav">
												<ul class="d-flex flex-row align-items-center justify-content-start">
													<li><a href="<?php echo site_url('Welcome/index') ?>">Beranda</a></li>
													<li><a href="<?php echo site_url('Welcome/rentallogin') ?>">Rental Mobil</a></li>
													<li><a href="<?php echo site_url('Welcome/about') ?>">Tentang Kami</a></li>
													<li class="active"><a href="<?php echo site_url('Welcome/pencarian') ?>">Pencarian</a></li>
												</ul>
											</nav>
										</div>
									</div>
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
							<div class="home_title">Hasil Pencarian</div>
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
									<th>Plat Mobil</th>
									<th>Nama Mobil</th>
									<th>Harga Sewa(Rp)</th>
									<th>Type Mobil</th>
									<th>Jumlah Orang</th>
								</tr>
								<?php

									$no = 1;
									foreach ($results as $baris) {
										echo "<tr>";
										echo "<td>".$no."</td>";
										echo "<td>".$baris->Plat_Mobil."</td>";
										echo "<td>".$baris->Nama_Mobil."</td>";
										echo "<td>".$baris->Harga_Sewa."</td>";
										echo "<td>".$baris->Type_Mobil."</td>";
										echo "<td>".$baris->Jumlah_Orang."</td>";
									$no++; } 
								?>
								</table>
							</div>
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