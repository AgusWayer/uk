<?php
     session_start();
     if(!isset($_SESSION['user']) && $_SESSION['user'] !== "Agus Wira"){
         return header('location: ./index.php');
     }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/global.css">
    <link rel="stylesheet" href="css/file.css">
    <link rel="stylesheet" href="css/navbar.css">
    <link rel="icon" type="image/x-icon" href="public/favicon.ico">
    <title>Document</title>
</head>
<body>
    <?php require('partials/Navbar.php')?>
    <div class="w-75 mx-auto">
        <h1 class="text-center">Upload and Read File Functions</h1>
        <div class="d-flex px-2">
           <div class="me-2">
                <a href="./files.php?action=read" class="btn btn-warning">Read</a>
           </div> 
           <div class="me-2">
                <a href="./files.php?action=create" class="btn btn-primary">Create</a>
           </div>
           <div>
                <a href="functions/file.php?action=clear" class="btn btn-danger ">Clear</a>
           </div>
            
        </div>
        <?php
            if(!isset($_GET['action']) || $_GET['action'] == "create" ){
        ?>
        <form action="functions/file.php" method="POST" class="px-2">
            <div class="mb-2">
                <label for="judul" class="d-block mb-2">Judul</label>
                <input type="text" name="judul" id="judul" class="form-control " placeholder="Masukkan Judul">
            </div>
            <div>
                <label for="isi"></label>
                <textarea name="isi" id="isi" class=" form-control" rows="20"></textarea>
            </div>
            <div>
                <button type="submit" name="create" class="btn btn-primary px-2">Submit</button>
            </div>
        </form>
        <?php } else {?>
            <form action="functions/file.php" method="POST" enctype="multipart/form-data" class="px-2">
            <div class="mb-2">
                <label for="file" class="d-block">Upload File</label>
                <input type="file" name="file" id="file" class="form-control" required>
                <button type="submit" class="btn btn-success" name="check-file">Check</button>
            </div>
            <?php
                if(isset($_SESSION['file'])){
                    $judul = $_SESSION['file']['judul'];
                    $judulText = explode('.',$judul);
                    $judul = $judulText[0];
            ?>
             <div class="mb-2">
                <label for="judul" class="d-block mb-2">Judul</label>
                <input type="text" name="judul" id="judul" class="form-control w-75" placeholder="Masukkan Judul" value="<?= $judul ?>">
            </div>
            <div>
                <label for="isi"></label>
                <textarea name="isi" id="isi" class="w-100 form-control" rows="20" ><?= $_SESSION['file']['isi']?></textarea>
            </div>
            <div>
                <button type="submit" class="btn btn-primary px-2">Submit</button>
            </div>
            <?php
                }
            ?>
        </form>
        <?php } ?>
    </div>
    <script src="js/navbar.js"></script>
</body>
</html>