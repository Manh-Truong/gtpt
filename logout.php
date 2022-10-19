<?php
    session_start();
    include 'connect.php';
    session_destroy();

    // if(isset($_SESSION['ROLE'])){
    //     unset($_SESSION['ROLE']);
    // }

    // if(isset($_SESSION['IS_LOGIN'])){
    //     unset($_SESSION['IS_LOGIN']);
    // }

    header('location: login.php');
?>
