<?php 
session_start();
	if(!isset($_SESSION['user']) && !$_SESSION['user']=="Agus Wira"){
		header("location: ./login.php");
	}
 ?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="css/global.css">
	<link rel="stylesheet" href="css/index.css">
	<link rel="stylesheet" href="css/navbar.css">
	<link rel="stylesheet" href="css/footer.css">
	<link rel="icon" type="image/x-icon" href="public/favicon.ico">
	<title>GUSWIR WEB</title>
</head>
<body>
	<?php include('partials/Navbar.php') ?>
	<div class="container hero position-relative p-0  ">
		<div class="content d-flex align-items-center">
			<div class="text-white mx-auto text-center text">
				<h1 class="mb-2 text-writing">Mab.io</h1>
				<p class="mx-auto">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Eligendi repudiandae non, nesciunt, quas ex saepe nemo dolores ratione laudantium vero optio nobis nostrum accusamus asperiores voluptatem omnis praesentium quibusdam necessitatibus.</p>
			</div>
		</div>
		<div class="image">
			<img src="public/product1.webp" class="w-100 h-100">
		</div>
		<!-- <div class="overlay"></div>
		<div class="">
		<video muted autoplay class="w-100  video-bg">
			<source src="public/vid.mp4" type="video/mp4">
		</video> -->
		<!-- </div> -->
	</div>
		
	<div class=" mx-auto about">
		<p class="section-title">About Us</p>
		<div class="about-us">
			<section class="w-100 image">
				<img src="public/about-bg.webp" class="image-about" alt="">
			</section>
			<section class="w-100 content">
				<h1 class="text-primary">Lorem ipsum dolor sit amet</h1>
				<p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Commodi nostrum molestiae itaque earum amet? Quo praesentium aliquid dolorem. Modi, minus ullam? Voluptatem nulla quibusdam reprehenderit alias eveniet facere adipisci? Libero molestiae magnam laboriosam eaque? Ea soluta ipsa mollitia iure earum similique quis, nostrum tenetur sequi illum doloremque corrupti dolores excepturi facilis modi odit dolorum impedit cumque delectus voluptate praesentium? </p>
				<p>Error ipsa exercitationem repellendus necessitatibus in dolorum vero recusandae quidem corrupti! Sequi, quaerat quidem pariatur sint eum provident doloribus sed voluptatum eius mollitia doloremque nihil error esse distinctio. Perspiciatis vel asperiores tempora, quod molestiae, quas magnam commodi soluta nobis perferendis odio?</p>
			</section>
		</div>
		
	</div>
	
	<div class="product my-2  mx-auto ">
		<p class="section-title">Our Products</p>
		<div class="container-card ">
			<?php
				for($i = 1;$i <= 4;$i++):
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
		<div class="text-center w-100 my-2">
				<a href="./products.php" class="btn btn-primary px-3 py-2 fs-2">See More Products</a>
			</div>
	</div>

	<div class="promo mx-auto text-center bg-primary ">
			<h2 class="text-gold">GET YOUR PRODUCT NOW!</h2>
			<p class="text-white">Lorem ipsum dolor sit amet consectetur adipisicing elit. Doloremque, blanditiis ullam. Molestiae incidunt facilis minus. Quia ad temporibus eum placeat!</p>
			<div class="text-center w-100 my-2">
				<a href="./products.php" style="background-color: white; text-decoration: none;color:black" class="btn  px-3 py-2 fs-2">See More Products</a>
			</div>
	</div>

	<div class=" gallery-container mx-auto my-2 p-2">
		<h2 class="section-title">Our Gallery</h2>
		<div class="gallery mx-auto ">
			<?php for($i = 1; $i <= 6;$i++): ?>
			<div class="w-100">
				<img src="public/product<?=$i?>.webp" class="w-100">
			</div>
			<?php endfor; ?>
		</div>
	</div>

	<div class="review  mx-auto my-2 p-2">
		<h2 class="section-title text-center">WHAT OUR CUSTOMER SAY?</h2>
		<div class="container-review">
			<?php 
				for ($i=1; $i <= 5; $i++) { 
			?>
				<div class="card-review">
					<div class="profile text-center">
						<img src="public/profile/<?=$i ?>.webp" class="avatar mx-auto">
					</div>
					<div class="review text-center">
						<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum et neque eget ipsum interdum pellentesque. Quisque sollicitudin, dolor ac bibendum iaculis, odio augue porta elit, at tempor tortor magna sed ex. Integer lacinia efficitur dolor eget interdum. </p>
					</div>
				</div>
			<?php
				}
			 ?>
		</div>
		
	</div>

	<?php require('partials/Footer.php') ?>
		<script src="js/navbar.js"></script>
</body>
</html>
