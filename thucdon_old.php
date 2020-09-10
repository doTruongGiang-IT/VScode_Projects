<?php
    session_start();
    require_once "MySQLConnect.php";
    require_once "Query_old.php";

    if( !isset($_SESSION['user']) ) {
        header('location:dangnhap.php');
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Thực đơn-SunHome BBQ</title>
    <link rel="shortcut icon" href="img/favicon.ico" /> 
    <link rel="stylesheet" href="assests/stylethucdon.css">
    <link rel="stylesheet" href="assests/base.css">
    <link rel="stylesheet" href="assests/responsive.css">
    <script src="https://code.jquery.com/jquery-3.4.1.js"></script>
    <script type="text/javascript" src="mjs/main.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
<!-- ==================== Start Header ================== -->
    <header class="grid header__menu__thucdon">
        <div class="row col l-12 m-12 c-12">
            <a class="col l-3 m-3 c-0 hide-on-tablet show-on-mobile" href="index.php"><img src="img/logo.png" alt=""></a>
            <nav class="col l-9 m-9 c-12 hide-on-tablet">
                <ul class="nav__menu">
                    <li><a class="active" href="index.php"> Trang chủ</a></li>
                    <li><a href="gioithieu.php"> Giới thiệu</a></li>
                    <li><a href="datban.php"> Đặt bàn</a></li>
                    <li><a href="thucdon_old.php">Thực đơn</a></li>
                    <li><a href="lienhe.php"> Liên hệ</a></li>
                    <li><a href="tel:+840776134908" class="hotline">Hotline:0776134908</a></li>
                    <li>
                        <?php
                            if( isset($_SESSION['user']) ) {
                                echo "<a href=\"logout_process.php\"><i class=\"fa fa-sign-out\" aria-hidden=\"true\"></i>";
                                echo " ".$_SESSION['user'];
                                echo "</a>";
                            }else {
                                echo "<a href=\"dangnhap.php\"><i class=\"fa fa-user\" aria-hidden=\"true\"></i></a>";
                            }
                        ?>
                    </li>
                    <li><a href="giohang.php"><i class="fa fa-cart-arrow-down" aria-hidden="true"></i></a></li>
                </ul>
            </nav>
            <nav class="col l-12 m-12 c-12 show-on-tablet">
                <ul class="nav__menu">
                    <li><a class="active" href="index.php"> Trang chủ</a></li>
                    <li><a href="gioithieu.php"> Giới thiệu</a></li>
                    <li><a href="datban.php"> Đặt bàn</a></li>
                    <li><a href="thucdon_old.php">Thực đơn</a></li>
                    <li><a href="lienhe.php"> Liên hệ</a></li>
                    <li><a href="tel:+840776134908" class="hotline">Hotline:0776134908</a></li>
                    <li><a href="dangnhap.php"><i class="fa fa-user" aria-hidden="true"></i></a></li>
                    <li><a href="giohang.php"><i class="fa fa-cart-arrow-down" aria-hidden="true"></i></a></li>
                </ul>
            </nav>
            <div class="menu-icon" onclick="openMenu()">
                <i class="fa fa-bars" aria-hidden="true"></i>
            </div>
            <div class="overlay" id="overlay" onclick="closeMenu()"></div>
            <nav class="sub-menu" id="submenu">
                <div class="close-menu">
                    <i class="fa fa-times" aria-hidden="true" onclick="closeMenu()"></i>
                </div>
                <ul>
                    <li><a href="index.php"> Trang chủ</a></li>
                    <li><a href="gioithieu.php"> Giới thiệu</a></li>
                    <li><a href="datban.php"> Đặt bàn</a></li>
                    <li><a href="thucdon_old.php">Thực đơn</a></li>
                    <li><a href="lienhe.php"> Liên hệ</a></li>
                    <li><a href="dangnhap.php">Đăng nhập</a></li>
                    <li><a href="giohang.php">Giỏ hàng</a></li>
                </ul>
            </nav>
        </div>
    </header>
<!-- ==================== End Header ================== -->
<div class="grid top" style="height: 7.4rem;"></div>
<!-- ==================== Start Pic ================== -->
<div class="grid pic-thucdon"></div>
<!-- ==================== End Pic ================== -->

<!-- ==================== Start Main ================== -->
    <main class="grid">
        <div class="grid wide">
            <div class="row col l-6 m-6 c-6 l-o-3 m-o-3 c-o-3 menu-title">
                <h2>THỰC ĐƠN TẠI TPHCM</h2>
            </div>
            <div class="row col l-8 m-8 c-8 l-o-2 m-o-2 c-o-2 btn-menu">
                <a id="btn1" href="#">Chọn món nướng</a>
                <a id="btn2" href="#">Combo hấp dẫn</a>
            </div>
            <div class="row flip__thucdon">
                <div class="col l-12 m-12 c-12 thucdon__front">
                    <?php
                        require "thucdon_front.php";
                    ?>
                </div>

                <div class="col l-12 m-12 c-12 thucdon__back">
                <?php
                        require "thucdon_back.php";
                    ?>
                </div> 
            </div>           
        </div>
    </main>
<!-- ==================== End Main ================== -->

<!-- ==================== Start Footer ================== -->
<?php
    require_once "footer.php";
?>
<!-- ==================== End Footer ================== -->
</body>
</html>