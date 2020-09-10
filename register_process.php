<?php
    session_start();

    require_once "MySQLConnect.php";
    if( isset($_POST['register']) && $_POST['Name'] != '' && $_POST['Email'] != '' && $_POST['User'] != '' && $_POST['Pass'] != '' && $_POST['Compass'] != '') {
        $name = $_POST['Name'];
        $username = $_POST['User'];
        $password = $_POST['Pass'];
        $repassword = $_POST['Compass'];
        if( $repassword != $password ) {
            //$_SESSION['mess'] = "Hãy xác nhận lại mật khẩu";
            setcookie('login','Hãy xác nhận lại mật khẩu',time()+5,'/');
            header('location:dangnhap.php');
            die();
        }
        $query = "SELECT * FROM account WHERE Username='$username'";
        $result = $conn->query($query);
        $password = md5($password);
        if( mysqli_num_rows($result) > 0 ) {
            //$_SESSION['mess'] = "Tên tài khoản đã tồn tại";
            setcookie('login','Tên tài khoản đã tồn tại',time()+5,'/');
            header('location:dangnhap.php');
            die();
        }
        $query2 = "INSERT INTO account(`HoTen`,`Username`,`Password`,`status`) VALUE('$name','$username', '$password', '1')";
        $conn->query($query2);
        //$_SESSION['mess'] = "Đăng ký thành công";
        setcookie('login','Đăng ký thành công',time()+5,'/');
        header('location:dangnhap.php');
    }else {
        //$_SESSION['mess'] = "Vui lòng nhập đầy đủ thông tin";
        setcookie('login','Vui lòng nhập đầy đủ thông tin',time()+5,'/');
        header('location:dangnhap.php');
    }
?>