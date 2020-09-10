<?php
    session_start();
    require_once "MySQLConnect.php";

    //$key = isset($_GET['id']) ? $_GET['id'] : '';
    if( isset($_GET['id']) && isset($_SESSION['user']) ) {
        $user = $_SESSION['user'];
        $tenkh = "";
        $key = $_GET['id'];
        echo $key;
        if( array_key_exists($key,$_SESSION['cart']) ) {
            $query = "SELECT * FROM bill";
            $result = $conn->query($query);
            if( mysqli_num_rows($result) > 0 ) {
                while( $resultset = mysqli_fetch_assoc($result) ) {
                    $id = $resultset['id'];
                }
                $id++;
            }
            $query2 = "SELECT * FROM account WHERE Username='$user'";
            $result2 = $conn->query($query2);
            if( mysqli_num_rows($result2) > 0 ) {
                while( $resultset2 = mysqli_fetch_assoc($result2) ) {
                    $hoten = $resultset2['HoTen'];
                }
            }
            foreach( $_SESSION['cart'] as $keycart => $value ) {
                $gio = $value['time'];
                $sl = $value['qty'];
                $proid = $value['id'];
                if( $key == $proid) {
                    $query = "INSERT INTO bill(`id`,`TenKH`,`BanDat`,`SoLuong`,`Created_at`) VALUE('$id','$hoten','$gio','$sl',NOW())";
                    $conn->query($query);
                }
            }
            unset($_SESSION['cart'][$key]);
        }
    }
    setcookie('book','Đang chờ duyệt',time()+3600,'/');
    header('location:giohang.php');
?>