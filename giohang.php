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
    <title>Giỏ hàng của bạn-SunHome BBQ</title>
    <link rel="shortcut icon" href="img/favicon.ico" /> 
    <link rel="stylesheet" href="assests/styleshopping-cart.css">
    <link rel="stylesheet" href="assests/base.css">
    <link rel="stylesheet" href="assests/responsive.css">
    <script src="https://code.jquery.com/jquery-3.4.1.js"></script>
    <script type="text/javascript" src="mjs/shopping-cart.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
<!-- ==================== Start Header ================== -->
    <header class="grid header__menu__giohang">
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
<?php
    if( isset($_COOKIE['book']) ) {
        echo "<div id=\"annoucement\" class=\"annoucement\">";
        echo "<div class=\"message\">";
        echo "<p>";
        echo "<span>Notification:</span><br /><br />";
        echo "<b>".$_COOKIE['book']."</b>";
        echo "</p>";
        echo "</div>";
        echo "</div>";
        setcookie('book', '','/');
    }  
?>
<!-- ==================== Start Cart ================== -->
    <main class="grid wide">
        <div class="row col l-10 m-10 c-10 l-o-1 m-o-1 c-o-1">
            <div class="col l-12 m-12 c-12">
                <div class="error">
                    <?php
                        if( isset($_SESSION['error']) ) {
                            echo $_SESSION['error'];
                        }
                    ?>
                </div>
                <div class="bill-title">
                    <p id="userbill">
                        Đơn đặt bàn của
                        <?php
                            if( isset($_SESSION['user']) ) {
                                echo $_SESSION['user'];
                            }
                        ?>
                    </p>
                </div>
                <form action="#" method="POST">
                    <table class="col l-12 m-12 c-12 table__cart">
                        <tr>
                            <th style="width:10%;">
                                STT
                            </th>
                            <th style="width:30%;">
                                Tên khách hàng                            
                            </th>
                            <th style="width:20%;">    
                                Bàn đã đặt
                            </th>
                            <th style="width:10%;">    
                                Số lượng
                            </th>
                            <th style="width:30%;">
                                Xử lý
                            </th>
                        </tr>
                        <?php
                            if( isset($_SESSION['user']) ) {
                                if( isset($_SESSION['cart']) ) {
                                    $hoten = $_SESSION['user'];
                                    $id = 0;
                                    $i = 0;
                                    $query = "SELECT * FROM account WHERE Username='$hoten'";
                                    $result = $conn->query($query);
                                    if( mysqli_num_rows($result) > 0 ) {
                                        while($resultset = mysqli_fetch_assoc($result)) {
                                            $name = $resultset['HoTen'];
                                            foreach( $_SESSION['cart'] as $key => $val ) {
                                                $i++;
                                                echo "<tr>";
                                                echo "<td><input style=\"border:none; padding-left:47%; font-size:1.8rem;\" type=\"text\" name=\"id\" value=\"$i\"></td>";
                                                echo "<td><input style=\"border:none; padding-left:26%; font-size:1.8rem;\" type=\"text\" name=\"name\" value=\"$name\"></td>";
                                                echo "<td><input style=\"border:none; padding-left:37%; font-size:1.8rem;\" type=\"text\" name=\"gio\" value=\"".$val['time']."\"></td>";        
                                                echo "<td><input style=\"border:none; width:100%; padding-left:35%; font-size:1.8rem;\" id=\"amount\" name=\"amount\" type=\"number\" value=\"".$val['qty']."\" onkeyup=\"check(this)\" onclick=\"check(this)\"></td>"; 
                                                echo "<td><a id=\"btnXoa\" href='delete_table.php?id=".$val['id']."'><i class=\"fa fa-trash\" aria-hidden=\"true\"></i> Xóa</a> | <a id=\"btnDat\" href='insert_table.php?id=".$val['id']."'>Đặt bàn</a></td>";
                                                echo "</tr>";
                                            }
                                        }
                                    }
                                }
                            }
                        ?>
                    </table>
                    <div class="checkout__btn__inner">
                        <a class="gray__btn" href="datban.php">Tiếp tục chọn bàn</a>
                    </div>
                </form>
            </div>
        </div>
    </main>
<!-- ==================== End Cart ================== -->

<!-- ==================== Start Footer ================== -->
    <!-- <footer class="grid footer">
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
    </footer> -->
<!-- ==================== End Footer ================== -->
</body>
</html>