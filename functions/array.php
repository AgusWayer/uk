<?php
    session_start();
   unset($_SESSION['number']);
   header('location: ../array.php');
?>