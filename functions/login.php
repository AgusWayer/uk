<?php
session_start();


    if(isset($_POST["submit"]) && isset($_POST["username"])){
        $username = $_POST["username"];
        $password = $_POST["password"];
        if(!isset($_SESSION['salah'])){
            $_SESSION['salah'] = [];
        }
        if($username == "agus" && $password == "kerengengsap"){
            $_SESSION["user"] = "Agus Wira";
            header("location: ../");
        } else{
            $_SESSION["message"] = 'Login Gagal';
            if(isset($_SESSION['salah']) && count($_SESSION['salah']) <= 2){
               $_SESSION['salah'][] = 'Login Gagal';
            }else if(isset($_SESSION['salah']) && count($_SESSION['salah'])  == 3){
                unset($_SESSION['salah']);
            }
            header("location: ../");
        }
        
    }
    if(isset($_GET['action']) && $_GET['action'] == "logout"){
        session_destroy();
        header("location: ../index.php");
    }
?>