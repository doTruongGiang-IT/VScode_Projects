<?php
    session_start();
    require_once "MySQLConnect.php";
    if( !isset($_SESSION['cart']) ) {
        header('location:giohang.php');
    }
    $key = isset($_GET['id']) ? $_GET['id'] : '';
    if( $key ) {
        if( array_key_exists($key,$_SESSION['cart']) ) {
            unset($_SESSION['cart'][$key]);
        }
    }
    header('location:giohang.php');
?>