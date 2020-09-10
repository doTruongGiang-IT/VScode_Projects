<?php
    $servername = "localhost";
    $dbName = "bbq";
    $username = "root";
    $password = "";
    $conn = new mysqli($servername, $username, $password, $dbName);
    mysqli_query($conn, 'SET NAMES UTF8');
    // $qry = "SELECT * FROM categories WHERE STATUS=1";
    // $rs = $conn->query($qry)->fetch_assoc();
?>