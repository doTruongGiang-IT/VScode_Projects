<?php
    session_start();
    if( !isset($_SESSION['user']) ) {
        header('location:dangnhap.php');
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Giới thiệu-SunHome BBQ</title>
    <link rel="shortcut icon" href="img/favicon.ico" /> 
    <link rel="stylesheet" href="assests/stylegioithieu.css">
    <link rel="stylesheet" href="assests/base.css">
    <link rel="stylesheet" href="assests/responsive.css">
    <script type="text/javascript" src="mjs/main.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
<!-- ==================== Start Header ================== -->
    <header class="grid header__menu__gioithieu">
        <div class="clouds">
            <img src="img/cloud1.png" alt="" style="--i:1;">
            <img src="img/cloud2.png" alt="" style="--i:1.5;">
            <img src="img/cloud3.png" alt="" style="--i:2;">
            <img src="img/cloud4.png" alt="" style="--i:2.5;">
            <img src="img/cloud5.png" alt="" style="--i:3;">
        </div>
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
    <main class="grid main__content">
        <div class="grid wide content">
            <div class="row">
                <div class="col l-6 m-6 c-12 content__left">
                    <h1>SUN HOMES ALACARTE (GỌI MÓN)</h1>
					<img class="col l-12 m-12 c-12" src="img/anh30.jpg">
					<p>
						<b>Sun Homes BBQ</b> là mô hình phục vụ các món ăn gọi riêng lẻ theo nhu cầu. Mỗi món tương ứng với giá tiền khác nhau. King BBQ mô hình gọi món, với thực đơn đa dạng hơn 200 món ăn cùng các set bộ và combo dành cho 2-4 người với mức giá hợp lý. Món sườn King là món ăn đặc trưng và rất nổi tiếng mà bất cứ thực khách nào đến King BBQ cũng không thể bỏ qua.<br /><br /><b>Sun Homes BBQ</b> là điểm đến cho các khách hàng có nhu cầu tiếp khách, tụ tập bạn bè, gia đình, liên hoan sinh nhật.
					</p>
					<a href="thucdon_old.php" class="btn-left">Thực đơn</a>
                </div>
                <div class="col l-6 m-6 c-0 content__right">
                    <h1>SUN HOMES ALACARTE (GỌI MÓN)</h1>
					<img class="col l-12 m-12 c-12" src="img/anh31.jpg">
					<p>
						<b>Sun Homes BBQ</b> là mô hình Buffet tự chọn ăn không giới hạn trong một mức giá cố định, có Line Buffet để quý khách lựa chọn món ăn. Quý khách có thể bắt đầu bằng các món soup, kimchi salad, món nóng, món cổ truyền, các món thịt tẩm sốt Hàn Quốc nướng trên than hồng, và kết thúc với món tráng miệng. Thực đơn Buffet hơn 200 món ăn đa dạng đặc trưng hương vị Hàn Quốc.<br /><br /><b>Sun Homes BBQ</b> đặc biệt thích hợp với khách hàng có nhu cầu tổ chức liên hoan sinh nhật, khách đoàn và gia đình.
					</p>
					<a href="thucdon_old.php" class="btn-right">Thực đơn</a>
                </div>
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