<?php
    session_start();
    if(isset($_POST["create"])){
        $judul = $_POST['judul'].'.txt';
        $filePath = '../files/'.$judul;
        $isi = $_POST['isi'];
        $judul = preg_replace('/\s+/','_', $judul);
        $file = fopen($filePath,'w') or die('Unable to Open');
        fwrite($file, $isi);
        fclose($file);
        header('location: ../files.php');
    }
    if(isset($_POST['check-file']) && isset($_FILES['file'])){
        $filename = $_FILES['file']['name'];
        $filePath = '../files/'.$filename;
        $fileExtension = pathinfo($filename, PATHINFO_EXTENSION);
        if($fileExtension == 'txt'){
            $file = fopen($filePath,'r') or die('Unable to open');
            $fileContent = fread($file, filesize($filePath));
            $_SESSION['file'] = [
                'judul' => $filename,
                'isi' => $fileContent
            ];
            header('location: ../files.php?action=read');
        }else{
            echo "File is Not TXT";
        }
    }
    if(isset($_GET['action']) && $_GET['action'] == 'clear'){
        unset($_SESSION['file']);
        header('location: ../files.php');
    }
?>