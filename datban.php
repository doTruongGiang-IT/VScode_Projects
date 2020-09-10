<?php
    session_start();
    require_once "MySQLConnect.php";
    if( !isset($_SESSION['user']) ) {
        header('location:dangnhap.php');
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Đặt bàn-SunHome BBQ</title>
    <link rel="shortcut icon" href="img/favicon.ico" /> 
    <link rel="stylesheet" href="assests/stylebook.css">
    <link rel="stylesheet" href="assests/base.css">
    <link rel="stylesheet" href="assests/responsive.css">
    <script src="https://code.jquery.com/jquery-3.4.1.js"></script>
    <script type="text/javascript" src="mjs/main.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
<?php
    if( isset($_COOKIE['message']) ) {
        echo "<div id=\"annoucement\" class=\"annoucement\">";
        echo "<div class=\"message\">";
        echo "<p>";
        echo "<span>Notification:</span><br /><br />";
        echo "<b>".$_COOKIE['message']."</b>";
        echo "</p>";
        echo "</div>";
        echo "</div>";
        setcookie('message', '', time()-5,'/');
    }    
?>
<!-- ==================== Start Header ================== -->
<header class="grid header__menu__datban">
    <div class="row row__menu" id="row__menu">
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
            <ul class="nav__menu" id="nav__menu">
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

<!-- ==================== Start Main ================== -->
<main class="grid settable">
    <div class="grid wide">
        <div class="row">
            <div class="col l-6 m-6 c-0 settable__left">
                <h1>Set Table</h1>
                <p>
                    Quý khách vui lòng đặt bàn trước để có trải nghiệm thưởng thức ẩm thực tốt nhất tại Sun Homes BBQ.<br /><br />Gợi ý đặt bàn:
                </p>
                <nav>
                    <ul>
                        <li><span></span>Đi 1 người: đặt bàn đơn</li>
                        <li><span></span>Đi 2 người: đặt bàn đôi</li>
                        <li><span></span>Đi nhóm 4-6 người: đặt bàn 6 người.</li>
                        <li><span></span>Đi nhóm 6-12 người: đặt bàn dài</li>
                        <li><span></span>Đi nhóm >12 người: gọi trực tiếp Hotline: 0972.939.830</li>
                    </ul>
                </nav>
            </div>
            <form class="col l-6 m-6 c-12" action="#" method="POST">
                <div class="settable__right">
                    <input id="tendatban" type="text" name="text" placeholder="Tên của bạn">
                    <input id="sdtdatban" type="text" name="text" placeholder="Số điện thoại">
                    <input id="songuoidatban" type="text" name="text" placeholder="Số người">
                    <input id="namsinh" type="text" name="text" placeholder="dd/mm/yyyy">
                    <h2>KHUNG GIỜ PHỤC VỤ</h2><br /><br /><br /><br />
                    <?php
                        $query = "SELECT * FROM `time`";
                        $result = $conn->query($query);
                        if( mysqli_num_rows($result) > 0 ) {
                            echo "<div class=\"contain-time\">";
                            while( $resultset = mysqli_fetch_assoc($result) ) {
                                $time = $resultset['KhungGio'];
                                $tid = $resultset['id'];
                                //echo "<a href=\"giohang.php?id=$tid\"><input type=\"radio\" name=\"time\" value=\"".$time."\"><span>".$time."</span></a>&nbsp";
                                echo "<a id=\"time\" href=\"datban_submit.php?id=$tid&time=$time\"><span id=\"gio\">".$time."</span></a>&nbsp";
                            }
                            echo "</div>";
                        }
                    ?>        
                    <!-- <input style="border:none; outline:none; font-size:1.8rem;" type="submit" name="setup" value="Đặt bàn" class="setup" onclick="check()"></input> -->
                </div>
            </form>
        </div>
    </div>
</main>
<!-- ==================== End Main ================== -->

<!-- ==================== Start Footer ================== -->
    <footer class="grid footer">
        <div class="grid wide">
            <div class="row col l-12 m-12 c-12">
                <div class="col l-6 m-6 c-12 footer-left">
                    <p>
                        Đại học Sài Gòn<br />
                        Trụ sở chính: 273 An Dương Vương, quận 5, thành phố Hồ Chí Minh<br />
                        GPĐK: Số 0103023679 cấp ngày 09/04/2008<br />
                        ĐT: 077.6134.908  dotruonggiang290@gmail.com
                    </p>
                </div>
                <div class="col l-6 m-6 c-0 footer-right">
                    <p>© 2011 Golden Gate ., JSC. All rights reserved</p>
                    <img src="img/anh24.png">
                </div>
            </div>
        </div>
    </footer>
<!-- ==================== End Footer ================== -->

</body>
</html>