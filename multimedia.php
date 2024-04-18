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
	<link rel="stylesheet" href="css/footer.css">
	<link rel="stylesheet" href="css/multimedia.css">
	<link rel="icon" type="image/x-icon" href="public/favicon.ico">
 	<title>MULTIMEDIA</title>
 </head>
 <body>
 	<?php include('partials/Navbar.php') ?>

 	<div class="container">
 		<div class="vid-container">
 			<video src="public/vid.mp4" muted autoplay class="w-100 video"></video>
 		</div>
 		<div class="content text-center">
 			<h1>Mab.IO</h1>
 			<p>LoremLorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum et neque eget ipsum interdum pellentesque. Quisque sollicitudin, dolor ac bibendum iaculis, odio augue porta elit, at tempor tortor magna sed ex. Integer lacinia efficitur dolor eget interdum. Maecenas quis neque a purus ullamcorper lobortis. Quisque rhoncus, nulla ac tristique elementum, diam nibh ultrices tortor, sed molestie arcu ligula eu velit. Mauris hendrerit fermentum felis vitae placerat. Maecenas vehicula tortor massa, a iaculis nibh feugiat sit amet.</p>
 			<p>Aliquam in dolor vitae ipsum egestas tempus et eu mauris. Fusce mollis quis neque sit amet ultrices. Mauris pulvinar egestas neque at rhoncus. Suspendisse at consectetur eros, eget semper felis. In hac habitasse platea dictumst. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Nulla nec urna ac diam sollicitudin suscipit.</p>
 			<div class="w-100 h-100">
				<a href="" class="btn btn-primary px-3 py-2">Order Now</a>
			</div>
 		</div>
 	</div>


 	<?php require('partials/Footer.php') ?>
 	<script src="js/navbar.js"></script>
 </body>
 </html>