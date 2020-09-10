<?php
    require_once('./MySQLConnect.php');
    require_once('./Query.php');
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
            <a class="col l-3 m-3 c-0 hide-on-tablet show-on-mobile" href="index.html"><img src="img/logo.png" alt=""></a>
            <nav class="col l-9 m-9 c-12 hide-on-tablet">
                <ul class="nav__menu">
                    <li><a class="active" href="index.html"> Trang chủ</a></li>
                    <li><a href="gioithieu.html"> Giới thiệu</a></li>
                    <li><a href="datban.html"> Đặt bàn</a></li>
                    <li><a href="thucdon.html">Thực đơn</a></li>
                    <li><a href="lienhe.html"> Liên hệ</a></li>
                    <li><a href="tel:+840776134908" class="hotline">Hotline:0776134908</a></li>
                    <li><a href="dangnhap.html"><i class="fa fa-user" aria-hidden="true"></i></a></li>
                    <li><a href="giohang.html"><i class="fa fa-cart-arrow-down" aria-hidden="true"></i></a></li>
                </ul>
            </nav>
            <nav class="col l-12 m-12 c-12 show-on-tablet">
                <ul class="nav__menu">
                    <li><a class="active" href="index.html"> Trang chủ</a></li>
                    <li><a href="gioithieu.html"> Giới thiệu</a></li>
                    <li><a href="datban.html"> Đặt bàn</a></li>
                    <li><a href="thucdon.html">Thực đơn</a></li>
                    <li><a href="lienhe.html"> Liên hệ</a></li>
                    <li><a href="tel:+840776134908" class="hotline">Hotline:0776134908</a></li>
                    <li><a href="dangnhap.html"><i class="fa fa-user" aria-hidden="true"></i></a></li>
                    <li><a href="giohang.html"><i class="fa fa-cart-arrow-down" aria-hidden="true"></i></a></li>
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
                    <li><a href="index.html"> Trang chủ</a></li>
                    <li><a href="gioithieu.html"> Giới thiệu</a></li>
                    <li><a href="datban.html"> Đặt bàn</a></li>
                    <li><a href="thucdon.html">Thực đơn</a></li>
                    <li><a href="lienhe.html"> Liên hệ</a></li>
                    <li><a href="dangnhap.html">Đăng nhập</a></li>
                    <li><a href="giohang.html">Giỏ hàng</a></li>
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

                    <!-- row -->
                    <div class="row top__thucdon">
                        <!-- column -->
                        <div class="top__thucdon__left col l-4 m-4 c-12">
                            <img src="img/anh36.png" alt="">
                            <p>Các loại mỳ</p>
                            <ul>
                                <li><i class="fa fa-check" aria-hidden="true"></i>Mỳ trộn lạnh</li>
                                <li><i class="fa fa-check" aria-hidden="true"></i>Mỳ lạnh nước</li>
                                <li><i class="fa fa-check" aria-hidden="true"></i>Gà xào phô mai</li>
                                <li><i class="fa fa-check" aria-hidden="true"></i>Mỳ đen</li>
                                <li><i class="fa fa-check" aria-hidden="true"></i>Mỳ bò Hàn Quốc</li>
                                <li><i class="fa fa-check" aria-hidden="true"></i>Miến xào Hàn Quốc</li>
                            </ul>
                        </div>
                        <!-- /column -->

                        <!-- column -->
                        <div class="top__thucdon__mid col l-4 m-4 c-12">
                            <img src="img/anh37.png" alt="">
                            <p>Cơm và bánh</p>
                            <ul>
                                <li><i class="fa fa-check" aria-hidden="true"></i>Cơm trộn bát đá nóng</li>
                                <li><i class="fa fa-check" aria-hidden="true"></i>Cơm trộn Hàn Quốc</li>
                                <li><i class="fa fa-check" aria-hidden="true"></i>Bánh Hải Sản</li>
                                <li><i class="fa fa-check" aria-hidden="true"></i>Bánh Mandu</li>
                                <li><i class="fa fa-check" aria-hidden="true"></i>Bánh bí Hàn Quốc</li>
                                <li><i class="fa fa-check" aria-hidden="true"></i>Bánh trứng</li>
                            </ul>
                        </div>
                        <!-- /column -->

                        <!-- column -->
                        <div class="top__thucdon__right col l-4 m-4 c-12">
                            <img src="img/anh38.jpg" alt="">
                            <p>Lẩu</p>
                            <ul>
                                <li><i class="fa fa-check" aria-hidden="true"></i>Lẩu Bulgogi</li>
                                <li><i class="fa fa-check" aria-hidden="true"></i>Lẩu sườn sụn</li>
                                <li><i class="fa fa-check" aria-hidden="true"></i>Lẩu sườn heo kim chi</li>
                                <li><i class="fa fa-check" aria-hidden="true"></i>Lẩu bò</li>
                                <li><i class="fa fa-check" aria-hidden="true"></i>Lẩu kim chi</li>
                                <li><i class="fa fa-check" aria-hidden="true"></i>Lẩu thái cay</li>
                            </ul>
                        </div>
                        <!-- /column -->
                    </div>
                    <!-- /row -->

                    <!-- row -->
                    <div class="row top__thucdon">
                        <div class="mid__thucdon__left col l-4 m-4 c-12">
                            <img src="img/anh39.png" alt="">
                            <p>Thịt heo</p>
                            <ul>
                                <li><i class="fa fa-check" aria-hidden="true"></i>Ba chỉ heo mỹ</li>
                                <li><i class="fa fa-check" aria-hidden="true"></i>Nạc vai heo</li>
                                <li><i class="fa fa-check" aria-hidden="true"></i>Sườn heo</li>
                                <li><i class="fa fa-check" aria-hidden="true"></i>Sụn heo: 139K</li>
                                <li><i class="fa fa-check" aria-hidden="true"></i>Thịt heo đặc biệt</li>
                            </ul>
                        </div>
                        <div class="mid__thucdon__mid col l-4 m-4 c-12">
                            <img src="img/anh40.png" alt="">
                            <p>Thịt bò</p>
                            <ul>
                                <li><i class="fa fa-check" aria-hidden="true"></i>Dẻ sườn bò Mỹ ướp sốt</li>
                                <li><i class="fa fa-check" aria-hidden="true"></i>Ba chỉ bò Mỹ</li>
                                <li><i class="fa fa-check" aria-hidden="true"></i>Cổ bò Mỹ Gogi</li>
                                <li><i class="fa fa-check" aria-hidden="true"></i>Nạc vai bò Mỹ</li>
                                <li><i class="fa fa-check" aria-hidden="true"></i>Sườn non bò Mỹ</li>
                                <li><i class="fa fa-check" aria-hidden="true"></i>Dẻ sườn bò tươi</li>
                            </ul>
                        </div>
                        <div class="mid__thucdon__right col l-4 m-4 c-12">
                            <img src="img/anh41.jpg" alt="">
                            <p>Thịt bò</p>
                            <ul>
                                <li><i class="fa fa-check" aria-hidden="true"></i>Canh kim chi</li>
                                <li><i class="fa fa-check" aria-hidden="true"></i>Canh bò cay</li>
                                <li><i class="fa fa-check" aria-hidden="true"></i>Canh đậu phụ</li>
                                <li><i class="fa fa-check" aria-hidden="true"></i>Canh rong biển</li>
                                <li><i class="fa fa-check" aria-hidden="true"></i>Canh rong biển ngao</li>
                                <li><i class="fa fa-check" aria-hidden="true"></i>Canh thịt ba chỉ bò</li>
                            </ul>
                        </div>
                    </div>
                    <!-- /row -->

                    <!-- row -->
                    <div class="row top__thucdon">
                        <div class="bottom__thucdon__left col l-4 m-4 c-12">
                            <img src="img/anh42.png" alt="">
                            <p>Các loại nước uống</p>
                            <ul>
                                <li><i class="fa fa-check" aria-hidden="true"></i>Passion Juice</li>
                                <li><i class="fa fa-check" aria-hidden="true"></i>BERRY COLADA</li>
                                <li><i class="fa fa-check" aria-hidden="true"></i>RED WINE SANGRIA</li>
                                <li><i class="fa fa-check" aria-hidden="true"></i>Trà hồ đào</li>
                                <li><i class="fa fa-check" aria-hidden="true"></i>Sinh tố xoài</li>
                                <li><i class="fa fa-check" aria-hidden="true"></i>Chanh muối</li>
                            </ul>
                        </div>
                        <div class="bottom__thucdon__mid col l-4 m-4 c-12">
                            <img src="img/anh44.png" alt="">
                            <p>Soft Drink</p>
                            <ul>
                                <li><i class="fa fa-check" aria-hidden="true"></i>PEPSI</li>
                                <li><i class="fa fa-check" aria-hidden="true"></i>MIRINDA</li>
                                <li><i class="fa fa-check" aria-hidden="true"></i>7UP</li>
                                <li><i class="fa fa-check" aria-hidden="true"></i>AQUAFINA</li>
                                <li><i class="fa fa-check" aria-hidden="true"></i>SODA</li>
                                <li><i class="fa fa-check" aria-hidden="true"></i>PEPSI (LIGHT)</li>
                            </ul>
                        </div>
                        <div class="bottom__thucdon__right col l-4 m-4 c-12">
                            <img src="img/anh43.png" alt="">
                            <p>Nước hoa quả</p>
                            <ul>
                                <li><i class="fa fa-check" aria-hidden="true"></i>SPARKLE HƯƠNG TÁO</li>
                                <li><i class="fa fa-check" aria-hidden="true"></i>GRANITA DÂU</li>
                                <li><i class="fa fa-check" aria-hidden="true"></i>GRANITA KIWI</li>
                                <li><i class="fa fa-check" aria-hidden="true"></i>PASSION COLADA</li>
                                <li><i class="fa fa-check" aria-hidden="true"></i>BERRY COLADA</li>
                                <li><i class="fa fa-check" aria-hidden="true"></i>TRÀ HỒ ĐÀO</li>
                            </ul>
                        </div>
                    </div>
                    <!-- /row -->
                </div>

                <div class="col l-12 m-12 c-12 thucdon__back">
                    <div class="row top__thucdon__back">
                        <div class="top__thucdon__back__left col l-4 m-4 c-12">
                            <img src="img/anh39.png" alt="">
                            <p>Thịt heo</p>
                            <ul>
                                <li><i class="fa fa-check" aria-hidden="true"></i>Ba chỉ heo mỹ</li>
                                <li><i class="fa fa-check" aria-hidden="true"></i>Nạc vai heo</li>
                                <li><i class="fa fa-check" aria-hidden="true"></i>Sườn heo</li>
                                <li><i class="fa fa-check" aria-hidden="true"></i>Sụn heo: 139K</li>
                                <li><i class="fa fa-check" aria-hidden="true"></i>Thịt heo đặc biệt</li>
                            </ul>
                        </div>
                        <div class="top__thucdon__back__mid col l-4 m-4 c-12">
                            <img src="img/anh40.png" alt="">
                            <p>Thịt bò</p>
                            <ul>
                                <li><i class="fa fa-check" aria-hidden="true"></i>Dẻ sườn bò Mỹ ướp sốt</li>
                                <li><i class="fa fa-check" aria-hidden="true"></i>Ba chỉ bò Mỹ</li>
                                <li><i class="fa fa-check" aria-hidden="true"></i>Cổ bò Mỹ Gogi</li>
                                <li><i class="fa fa-check" aria-hidden="true"></i>Nạc vai bò Mỹ</li>
                                <li><i class="fa fa-check" aria-hidden="true"></i>Sườn non bò Mỹ</li>
                                <li><i class="fa fa-check" aria-hidden="true"></i>Dẻ sườn bò tươi</li>
                            </ul>
                        </div>
                        <div class="top__thucdon__back__right col l-4 m-4 c-12">
                            <img src="img/anh41.jpg" alt="">
                            <p>Thịt bò</p>
                            <ul>
                                <li><i class="fa fa-check" aria-hidden="true"></i>Canh kim chi</li>
                                <li><i class="fa fa-check" aria-hidden="true"></i>Canh bò cay</li>
                                <li><i class="fa fa-check" aria-hidden="true"></i>Canh đậu phụ</li>
                                <li><i class="fa fa-check" aria-hidden="true"></i>Canh rong biển</li>
                                <li><i class="fa fa-check" aria-hidden="true"></i>Canh rong biển ngao</li>
                                <li><i class="fa fa-check" aria-hidden="true"></i>Canh thịt ba chỉ bò</li>
                            </ul>
                        </div>
                    </div>
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