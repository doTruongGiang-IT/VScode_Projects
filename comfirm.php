<?php
    require_once "MySQLConnect.php";
    $id = $_GET['id'];
    $query = "SELECT * FROM bill WHERE id='$id'";
    $result = $conn->query($query);
    while( $resultset = mysqli_fetch_assoc($result) ) {
        $status = $resultset['status'];
        $status = 1;
        $query2 = "UPDATE bill SET `status`='$status' WHERE id='$id'";
        $conn->query($query2);
        header('location:bill.php');
    }
?>