<?php
    session_start();
    if(!isset($_SESSION['user']) && $_SESSION['user'] !== "Agus Wira"){
		return header('location: ./index.php');
	}else{
        if(isset($_POST['submit']) && isset($_POST['number'])){
            $_SESSION['number'] = $_POST['number'];
        }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/global.css">
    <link rel="stylesheet" href="css/array.css">
    <link rel="stylesheet" href="css/navbar.css">
    <link rel="icon" type="image/x-icon" href="public/favicon.ico">
    <title>Array</title>
</head>
<body>
    <?php
        require('partials/Navbar.php')
    ?>
    <div class=" w-75 mx-auto">
        <h1 class="text-center">Sort Array Functions</h1>
        <p class="text-center">Note : Hanya Untuk Angka dan Dipisahkan Spasi!</p>
        <p class="text-center"> Contoh : 1 2 3 4</p>
        <div>
            <form action="" method="POST" class="d-flex w-75 mx-auto">
                <input type = "text" pattern="[0-9 ]+" name="number" class="form-control w-100 mx-2 fs-3" id="input" >
                <div class="me-2">
                    <button type="submit" name="submit" class="btn btn-primary py-2">Submit</button>
                </div>
            </form>
        </div>
        <div class="d-flex p-2">
            <div class="me-2">
                <a href="./array.php?sort=asc" class="btn btn-primary ">ASC</a>
            </div>
            <div class="me-2">
                <a href="./array.php?sort=dsc" class="btn btn-success">DESC</a>
            </div>
            <div>
                <a href="functions/array.php" class="btn btn-danger">CLEAR</a>
            </div>
        </div>
        <div>
            <ul class="list">
            <?php
                if(isset($_SESSION['number'])):
                    $numbers = $_SESSION['number'];
                    $number = explode(' ',$numbers);

                    if(!isset($_GET['sort']) || $_GET['sort'] == 'asc'){
                        sort($number);
                    }else{
                        rsort($number);
                    }
                    foreach($number as $nmb):
            ?>
                        <li><?=$nmb?></li>
            <?php
                     endforeach;
                endif;
            ?>
            </ul>
        </div>
    </div>
    <script src="js/navbar.js"></script>

</body>
</html>
<?php
    }
?>