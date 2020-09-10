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
    <title>SunHome-BBQ</title>
    <link rel="shortcut icon" href="img/favicon.ico" /> 
    <link rel="stylesheet" href="assests/styleindex.css">
    <link rel="stylesheet" href="assests/base.css">
    <link rel="stylesheet" href="assests/responsive.css">
    <script type="text/javascript" src="mjs/main.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
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
                    <li><a href="tel:+840776134908" class="hotline">Hotline: 0776134908</a></li>
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

<?php
    if( isset($_COOKIE['login']) ) {
        echo "<div id=\"annoucement\" class=\"annoucement\">";
        echo "<div class=\"message\">";
        echo "<p>";
        echo "<span>Notification:</span><br /><br />";
        echo "<b>".$_COOKIE['login']."</b>";
        echo "</p>";
        echo "</div>";
        echo "</div>";
        setcookie('login', '', time()-5,'/');
    }    
?>
<!-- ==================== Start Slideshow ================== -->
    <div class="grid contentSlide hide-on-moblie">
        <div class="row rowSlide">
            <!-- <div class="grid"> -->
                <div class="slideshow">
                    <div class="slides">
                        <input type="radio" name="p" id="p1" checked>
                        <input type="radio" name="p" id="p2">
                        <input type="radio" name="p" id="p3">
                        <input type="radio" name="p" id="p4">
    
                        <div class="slide s1 col l-12 m-12 c-12">
                            <img src="img/anh2.jpg">
                        </div>
                        <div class="slide col l-12 m-12 c-12">
                            <img src="img/anh1.jpg">
                        </div>
                        <div class="slide col l-12 m-12 c-12">
                            <img src="img/anh3.jpg">
                        </div>
                        <div class="slide col l-12 m-12 c-12">
                            <img src="img/anh4.jpg">
                        </div>
    
                        <div class="navigation">
                            <label for="p1" class="bar dot" id="lb1"><a href="#lb1"></a></label>
                            <label for="p2" class="bar dot" id="lb2"><a href="#lb2"></a></label>	
                            <label for="p3" class="bar dot" id="lb3"><a href="#lb3"></a></label>	
                            <label for="p4" class="bar dot" id="lb4"><a href="#lb4"></a></label>	
                        </div>
                    </div>
                </div>
            <!-- </div> -->
        </div>
    </div>
<!-- ==================== End Slideshow ================== -->

<!-- ==================== Start Prices ================== -->
    <div class="grid prices hide-on-moblie">
        <div class="row col l-12 m-12">
            <img class="col l-12 m-12 c-12" src="img/anh8.png" alt="">
        </div>
    </div>
<!-- ==================== End Prices ================== -->

<!-- ==================== Start Infor-BBQ ================== -->
   <div class="grid infor-BBQ">
        <div class="grid wide">
            <div class="row">
                <div class="col l-6 m-12 c-12 infor">
                    <h2>Sun Home BBQ</h2>
                    <p>
                        <strong>Sun Homes BBQ</strong> (Quán thịt nướng Hàn Quốc) sẽ đưa bạn đến Seoul, nơi những con phố bình dị, những quán ăn dân dã đã trở nên quen thuộc và gắn bó với người dân xứ Hàn. Nếu đã một lần thưởng thức thịt nướng tại <strong>Sun Homes BBQ</strong>, bạn sẽ không thể quên được hương vị “ngất ngây” của những món sườn non bò Mỹ, nạc vai bò Mỹ, dẻ sườn tươi…. khi hòa quyện vào với các loại gia vị đặc trưng của xứ sở Kimchi đã trở nên hấp dẫn đến thế nào.<br /> <br />
                        Bí quyết của <strong>Sun Homes BBQ</strong> nằm ở nước sốt tẩm ướp thịt được chế biến từ nguyên liệu hoàn toàn tự nhiên, theo công thức bí truyền, do Bếp Trưởng Park Sung Min hơn 40 năm kinh nghiệm nghiên cứu và chế biến. <strong>Sun Homes BBQ</strong> có 2 dạng thực đơn để Quý Khách lựa chọn là: Chọn Combo và Gọi Món.
                    </p>
                </div>
                <div class="col l-6 m-12 c-12 pic-bbq">
                    <div class="img1">
						<a href="thucdon_old.php" class="btn-thucdon"><i class="fa fa-heart" aria-hidden="true"></i>Chọn món</a>
					</div>
					<div class="img2">
						<a href="thucdon_old.php" class="btn-thucdon"><i class="fa fa-star" aria-hidden="true"></i>Chọn món</a>
					</div>
                </div>
            </div>
        </div>
   </div>
<!-- ==================== End Infor-BBQ ================== -->
<i class="fa fa-arrow-up" id="goto-top-page" onClick="gotoTop()"></i>
<!-- ==================== Start Menu-BBQ ================== -->
    <div class="grid menu-BBQ">
        <div class="grid wide">
            <div class="row">
                <div class="col l-6 m-12 c-12 pic-menu">
                    <div class="contain-pic">
                        <img class="col l-6 m-6 c-11" src="img/anh8.jpg">
                        <img class="col l-6 m-6 c-0" src="img/anh9.jpg">
                    </div>
                    <div class="contain-pic">
                        <img class="col l-6 m-6 c-11" src="img/anh10.jpg">
                        <img class="col l-6 m-6 c-0" src="img/anh11.jpg">
                    </div>
                </div>
                <div class="col l-6 m-12 c-12 menu">
                    <div class="contain-menu">
                        <h1>Menu</h1>
                        <p>
                            Hơn 200 món ăn được chắt lọc từ Tinh hoa ẩm thực Hàn Quốc với mức giá chỉ từ 69.000 cùng nhiều combo và set bộ hấp dẫn đều có trong menu của King BBQ. Ngoài ra các bạn còn được thưởng thức những món ăn đặc trưng và nổi tiếng trong văn hoá ẩm thực của Hàn Quốc do chính tay đàu bếp người Hàn Quốc chế biến.
                        </p>
                        <a href="thucdon_old.php" class="btn-menu"><i class="fa fa-shopping-bag" aria-hidden="true"></i>Thực đơn</a>
                    </div>	
                </div>
            </div>
        </div>
    </div>
<!-- ==================== End Menu-BBQ ================== -->

<!-- ==================== Start Salad-BBQ ================== -->
<div class="grid">
    <div class="salad">
        <div class="waves">
            <div class="wave wave1"></div>
            <div class="wave wave2"></div>
            <div class="wave wave3"></div>
            <div class="wave wave4"></div>
        </div>
    </div>
</div>
<!-- ==================== End Salad-BBQ ================== -->

<!-- ==================== Start Restaurant-BBQ ================== -->
    <div class="grid res-BBQ">
        <div class="grid wide">
            <div class="row">
                <div class="col l-6 m-12 c-12 infor-restaurant">
                    <h1>Restaurant</h1>
					<p>
						Khi nói đến Hàn Quốc, ẩm thực là nét văn hóa đặc trưng không thể bỏ qua và thịt nướng Hàn Quốc luôn được “truyền tai” về độ tươi ngon, đậm đà qua những trang cẩm nang du lịch hay những bộ phim Hàn gây bão<br />Hệ thống Sun Homes BBQ hiện có 17 nhà hàng trong đó 7 nhà hàng chuyên về Buffet tự chọn (Buffet) và 10 nhà hàng chuyên về gọi món (Alacarte).<br />Hãy lựa chọn địa điểm gần bạn nhất và liên hệ đặt bàn ngay nhé!
					</p>
					<a href="gioithieu.php" class="btn-res"><i class="fa fa-search" aria-hidden="true"></i>Nhà hàng</a>
                </div>
                <div class="col l-6 m-12 c-12 pic-restaurant">
                    <div class="flip1 col l-6 m-6 c-11">
						<div class="front1"><img src="img/anh12.jpg"></div>
						<div class="back1"><img src="img/anh13.jpg"></div>
					</div>
					<div class="flip2 col l-6 m-6 c-0">
						<div class="front2"><img src="img/anh14.jpg"></div>
						<div class="back2"><img src="img/anh15.jpg"></div>
					</div>
                </div>
            </div>
        </div>
    </div>
<!-- ==================== End Restaurant-BBQ ================== -->

<!-- ==================== Start Signup-BBQ ================== -->
    <div class="grid sign-up hide-on-moblie-and-tablet">
        <div class="row col l-12 m-12 c-12 overlay">
           <div class="col l-6 m-6 c-6">
               <span>Đăng ký để nhận ưu đãi hàng tháng tới 30% từ Sun Homes BBQ</span>      
           </div> 
           <div class="col l-4 m-4 c-4">
                <input type="text" name="" id="" value="" placeholder="Nhập địa chỉ email ...">
           </div>
           <div class="col l-2 m-2 c-2">
                <a href="#" class="btn-signup">Đăng ký</a>
           </div>
        </div>
    </div>
<!-- ==================== End Signup-BBQ ================== -->

<!-- ==================== Start Cousine-BBQ ================== -->
    <div class="grid cousine-BBQ hide-on-moblie-and-tablet">
        <div class="grid wide">
            <div class="row">
                <img class="col l-6 m-6 c-6" src="img/anh17.jpg" alt="">
                <div class="col l-6 m-6 c-6 infor-cousine">
                    <h1>Korea Cousine</h1>
					<p>
						Khi nói đến Hàn Quốc, ẩm thực là nét văn hóa đặc trưng không thể bỏ qua và thịt nướng Hàn Quốc luôn được “truyền tai” về độ tươi ngon, đậm đà qua những trang cẩm nang du lịch hay những bộ phim Hàn gây bão.<br /><br />Sốt chấm Ssamjang cay nồng thường được dùng để ăn kèm với các loại thịt nướng. Đó là hỗn hợp được trộn giữa tương đậu và tương ớt lên men..mỗi khi thịt chín ruộm, người ta phết một chút sốt lên bề mặt miếng thịt, cuộn cùng với kim chi, xà lách xoăn, dưa chuột. Cho tất cả vào miệng và nhai kỹ bạn sẽ cảm nhận được ngay hương vị đặc biệt của loại tương này.
					</p>
                </div>
            </div>
            <div class="row">
                <div class="gallery col l-12 m-12 c-12">
                    <div class="box col l-3 m-3 c-3">
                        <img src="img/anh18.jpg">
                        <div class="box-infor">
                            <h1>Có</h1>
                        </div>
                    </div>
                    <div class="box col l-3 m-3 c-3">
                        <img src="img/anh19.jpg">
                        <div class="box-infor">
                            <h1>Đặt</h1>
                        </div>
                    </div>
                    <div class="box col l-3 m-3 c-3">
                        <img src="img/anh20.jpg">
                        <div class="box-infor">
                            <h1>Bàn</h1>
                        </div>
                    </div>
                    <div class="box col l-3 m-3 c-3">
                        <img src="img/anh21.jpg">
                        <div class="box-infor">
                            <h1>Không</h1>
                        </div>
                    </div>
                </div>	
            </div>
        </div>
    </div>
<!-- ==================== End Cousine-BBQ ================== -->

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