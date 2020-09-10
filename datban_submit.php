<?php
    session_start();

    $id = isset($_GET['id']) ? $_GET['id'] : '';
    $time = isset($_GET['time']) ? $_GET['time'] : '';
    if( isset($_SESSION['cart']) ) {
        if( isset($_SESSION['cart'][$id]) ) {
            $_SESSION['cart'][$id]['qty'] += 1;
            setcookie('message','Đã thêm khung giờ này vào giỏ hàng',time()+5,'/');
            echo "<pre />";
            var_dump($_SESSION['cart']);
        }else {
            $_SESSION['cart'][$id]['qty'] = 1;
            $_SESSION['cart'][$id]['time'] = $time;
            $_SESSION['cart'][$id]['id'] = $id;
            setcookie('message','Đã thêm khung giờ này vào giỏ hàng',time()+5,'/');
            echo "<pre />";
            var_dump($_SESSION['cart']);
        }
        header('location:datban.php');  
    }else {
        $_SESSION['cart'][$id]['qty'] = 1;
        $_SESSION['cart'][$id]['time'] = $time;
        $_SESSION['cart'][$id]['id'] = $id;
        setcookie('message','Đã thêm khung giờ này vào giỏ hàng',time()+5,'/');
        echo "<pre />";
        var_dump($_SESSION['cart']);
        header('location:datban.php');  
    }
?>
