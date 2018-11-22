<!DOCTYPE html>
<html lang="en">
<head>
	<title>Car Rental ROJO RAFIH</title>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/Style/bootstrap4/bootstrap.min.css') ?>">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/Style/styleamintambahmobil.css') ?>">
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
							<div class="home_title">Tambah Data Mobil</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="contact">
		<div class="container">
			<div class="row">
				<div class="col-lg-8 contact_col">
					<div class="contact_form">
						<div class="contact_info_title"></div>
							<div class="contact_form_container">
								<form action="<?php echo site_url('Welcome/tambahmobil'); ?>" method="post">
									<input type="text" name="PlatMobil" class="contact_input" placeholder="Plat mobil" required="required">
									<input type="text" name="NamaMobil" class="contact_input" placeholder="Nama mobil" required="required">
									<input type="text" name="HargaSewa" class="contact_input" placeholder="Harga sewa" required="required">
									<input type="text" name="TypeMobil" class="contact_input" placeholder="Type mobil" required="required">
									<input type="text" name="JumlahOrang" class="contact_input" placeholder="Jumlah orang" required="required">
									<button class="contact_button" id="contact_button">Submit</button>
								</form>
							</div>
							<br><a href="<?php echo site_url('Welcome/Menuadmin') ?>">Kembali</a>
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