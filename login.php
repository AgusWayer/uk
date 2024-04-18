<?php
	session_start();
	if(isset($_SESSION['user']) && $_SESSION['user'] == "Agus Wira"){
		return header('location: ./index.php');
	}

?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="css/global.css">
	<link rel="stylesheet" type="text/css" href="css/login.css">
	<link rel="icon" type="image/x-icon" href="public/favicon.ico">
	<title>LOGIN | COMPANY</title>
	
</head>
<body>
	<div class="body">
		<?php
				if(isset($_SESSION['message'])){
					?>
					<div class="text-center alert-message active" id="msg-alert">
						<div class="close">
							<button class="btn" id="close-alert">X</button>
						</div>
						<h2><?= $_SESSION['message']?></h2>
						<p>Username atau Password Salah!</p>
						<?php
							if(isset($_SESSION["salah"]) && count($_SESSION['salah']) == 3){
						?>
							<h4 id="alert-block">Percobaan Melebihi 3 Kali! Tunggu 10 Detik</h4>
						<?php
							}
						?>
					</div>
					<?php
				}
			?>
		<div class="container">
			<div class="card mx-auto">
				<h3 class="text-center login-text">LOGIN FIRST!</h3>
				<p class="text-center" style="font-weight: 100;">Login Terlebih dahulu untuk bisa mengakses Halaman Kami!</p>
				<form action="functions/login.php" method="POST" class="mx-2">
					<?php 
						
					?>
					<div class="mb-2">
						<label for="username" class="d-block mb-2">Username</label>
						<input type="text" id="username" name="username" class="form-control input " required <?= (isset($_SESSION['salah']) && count($_SESSION['salah']) >= 3  ? 'disabled=true' : '') ?> placeholder="Username">
					</div>
					<div class="mb-2">
						<label for="password" class="d-block mb-2">Password</label>
						<input type="password" id="password" name="password"  class="form-control input " required <?= ( isset($_SESSION['salah']) && count($_SESSION['salah']) >= 3  ? 'disabled=true' : '') ?> placeholder="Password">
					</div>
					<div class="text-center">
						<button type="submit"  name="submit" class="btn btn-primary input px-3 py-2 fs-2 login-btn" <?= (isset($_SESSION['salah']) && count($_SESSION['salah']) >= 3  ? 'disabled=true' : '') ?>>Submit</button>
						<button type="reset"  class="btn  input px-3 py-2 cancel-btn">Cancel</button>
					</div>
				</form>
			</div>
			<div class="image text-center">
				<img src="public/login.png">
			</div>
		</div>
	</div>
	

	<!--  -->
</body>
</html>

<script>
	const inputs = document.querySelectorAll('.input');
	inputs.forEach(element => {
		let att = element.getAttribute('disabled')
		if(att){
			setInterval(function(){
				element.removeAttribute("disabled")
			},10000)
		}
	});
	const msgAlrt = document.getElementById('msg-alert')

	const closeAlrt = document.getElementById('close-alert');
	if(closeAlrt){
		closeAlrt.addEventListener("click",()=>{
			msgAlrt.classList.toggle("active")
		})
	}
	
	const alertBlock = document.getElementById('alert-block')
	if(alertBlock){
		let i = 9;
		let hitungMundur  = setInterval(()=>{
			alertBlock.innerHTML = `Percobaan Melebihi 3 Kali! Tunggu ${i == 0 ? i : i--} Detik`
		},'1000')
	}
</script>
<?php
	
?>