<?php 
	session_start();
	if (isset($_SESSION['user']) && $_SESSION['user'] != "Agus Wira")  {
		header("location: ./login.php");
	}
 ?>

 <!DOCTYPE html>
 <html>
 <head>
 	<meta charset="utf-8">
 	<meta name="viewport" content="width=device-width, initial-scale=1">
 	<link rel="stylesheet" href="css/global.css">
	<link rel="stylesheet" href="css/navbar.css">
	<link rel="stylesheet" href="css/products.css">
	<link rel="stylesheet" href="css/footer.css">
	<link rel="icon" type="image/x-icon" href="public/favicon.ico">
 	<title>PRODUCTS</title>
 </head>
 <body>
 	<?php include('partials/Navbar.php') ?>

 	<div class="container hero position-relative p-0  ">
 		<div class="image">
			<img src="public/product4.webp" class="w-100 h-100">
		</div>
		<div class="content d-flex align-items-center">
			<div class="text-white mx-auto text-center text">
				<h1 class="mb-2 text-writing">All of Our Products</h1>
				<p class="mx-auto">You Can See All of Our Products Right Here</p>
			</div>
		</div>
	</div>
 	<div class="container w-75 mx-auto">
 		<div class="product my-2  mx-auto ">
			<p class="section-title">Our Products</p>
			<div class="container-card">
				<?php
					for($i = 1;$i <= 8;$i++):
				?>
				<section class="card">
					<img src="public/product<?=$i?>.webp" alt="" class="card-img-top ">
					<div class="card-content">
						<h2 class="mb-0">Product <?=$i ?></h2>
						<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Illum ab iusto veniam. Iure distinctio rem autem expedita consectetur cumque magnam?</p>
						<div class="w-100 h-100">
							<a href="https://wa.me/6281246888974?text=Halo%20Aku%20Ingin%20Memesan%20Produk%20Product%20<?=$i ?>%20Apakah%20Masih%20Tersedia?" class="btn btn-primary">Order Now</a>
						</div>
						
					</div>
				</section>
				<?php
				endfor;
				?>
			</div>
 		</div>
 	</div>
 	<?php require('partials/Footer.php') ?>
 	<script src="js/navbar.js"></script>
 </body>
 </html>