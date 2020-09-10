<?php
    require_once "MySQLConnect.php";
    
    if(isset($_GET['id'])) {
        $id = $_GET['id'];
        $query = "DELETE FROM menus WHERE id='$id'";
        $conn->query($query);
        header('location:admin.php');
    }

?>