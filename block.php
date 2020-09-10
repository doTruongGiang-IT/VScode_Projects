<?php
    require_once "MySQLConnect.php";
    $id = $_GET['id'];
    $query = "SELECT * FROM account WHERE id='$id'";
    $result = $conn->query($query);
    while( $resultset = mysqli_fetch_assoc($result) ) {
        $status = $resultset['status'];
        if( $status == 1 ) {
            $status = 0;
            $query2 = "UPDATE account SET `status`='$status' WHERE id='$id'";
            $conn->query($query2);
        }else {
            $status = 1;
            $query3 = "UPDATE account SET `status`='$status' WHERE id='$id'";
            $conn->query($query3);
        }
        header('location:acount.php');
    }
?>