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
    <title>Liên hệ-SunHome BBQ</title>
    <link rel="shortcut icon" href="img/favicon.ico" /> 
    <link rel="stylesheet" href="assests/stylecontact.css">
    <link rel="stylesheet" href="assests/base.css">
    <link rel="stylesheet" href="assests/responsive.css">
    <script type="text/javascript" src="mjs/main.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
<?php
    if( isset($_COOKIE['contact']) ) {
        echo "<div id=\"annoucement\" class=\"annoucement\">";
        echo "<div class=\"message\">";
        echo "<p>";
        echo "<span>Notification:</span><br /><br />";
        echo "<b>".$_COOKIE['contact']."</b>";
        echo "</p>";
        echo "</div>";
        echo "</div>";
        setcookie('contact', '', time()-5,'/');
    }    
?>    
<!-- ==================== Start Header ================== -->
    <header class="grid header__menu">
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
    <main class="grid wide">
        <div class="row main__container">
            <div class="col l-6 m-12 c-12 main__contact">
                <h1>Contact</h1>
					<p>
						Chúng tôi luôn trân trọng mọi ý kiến của quý khách, ý kiến từ quý khách sẽ giúp chúng tôi nâng cao về chất lượng phục vụ chính quý khách cũng góp phần vào sự thành công và phát triển thương hiệu Sun Homes BBQ của chúng tôi:
					</p>
					<p>
						Hamrongmedia rất hoan nghênh độc giả gửi thông tin và góp ý cho chúng tôi! 
					</p>
					<p>
						Địa chỉ:11B/10/202 Đường Thanh Chương, P. Quảng Thành, Tp. Thanh Hóa
					</p>
					<p>
						Email: hamrongmedia@gmail.com
					</p>
					<p>
							SĐT: 0968.724.886Website:
					</p>
					<p>
							www.hamrongmedia.com
					</p>
            </div>
            <div class="col l-6 m-12 c-12 main__input">
                <form action="lienhe_submit.php" method="POST">
                    <input type="text" name="yourname" placeholder="Tên của bạn">
                    <input type="text" name="email" placeholder="Địa chỉ email">
                    <input type="text" name="phone" placeholder="Số điện thoại">
                    <input type="text" name="purpose" placeholder="Mục đích liên hệ">
                    <input type="text" name="infor" placeholder="Nội dung chi tiết">
                    <!-- <a class="btn-lienhe" href="lienhe_submit.php">Gửi liên hệ</a> -->
                    <input type="submit" name="lienhe" value="Gửi liên hệ">
                </form>
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