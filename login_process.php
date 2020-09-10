<?php
    session_start();

    require_once "MySQLConnect.php";
    if( isset($_POST['login']) && $_POST['Username'] != '' && $_POST['Password'] != '') {
        $username = $_POST['Username'];
        $password = $_POST['Password'];
        $password = md5($password);
        $query = "SELECT * FROM account WHERE `Username`='$username' AND `Password`='$password'";
        $result = $conn->query($query);
        if( mysqli_num_rows($result) > 0 ) {
            while( $resultset = mysqli_fetch_assoc($result) ) {
                $status = $resultset['status'];
                if( $status == 1 ) {
                    setcookie('login','Đăng nhập thành công',time()+5,'/');
                    $_SESSION['user'] = $username;
                    header('location:index.php');    
                }else {
                    setcookie('login','Tài khoản này đã bị khóa',time()+5,'/');
                    header('location:dangnhap.php');
                }
            }
        }else {
            setcookie('login','Bạn đã nhập sai username hoặc password',time()+5,'/');
            header('location:dangnhap.php');
        }
    }else {
        //$_SESSION['mess'] = "Vui lòng nhập đầy đủ thông tin";
        setcookie('login','Vui lòng nhập đầy đủ thông tin',time()+5,'/');
        header('location:dangnhap.php');
    }
?>