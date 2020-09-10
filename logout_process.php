<?php
    session_start();
    session_unset();
    setcookie('book','',time()-3600,'/');
    header('location:dangnhap.php');
?>