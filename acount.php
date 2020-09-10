<?php
    require_once "MySQLConnect.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Acount-BBQ</title>
    <link rel="shortcut icon" href="img/favicon.ico" /> 
    <link rel="stylesheet" href="assests/styleadmin.css">
    <link rel="stylesheet" href="assests/base.css">
    <link rel="stylesheet" href="assests/responsive.css">
    <script src="https://code.jquery.com/jquery-3.4.1.js"></script>
    <script type="text/javascript" src="mjs/main.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
<!-- ==================== Start Header ================== -->
    <header class="grid header__admin-menu">
        <div class="row col l-12 m-12 c-12">
            <a class="col l-3 m-3 c-0 hide-on-tablet show-on-mobile" href="admin.php"><img src="img/logo.png" alt=""></a>
            <nav class="col l-9 m-9 c-12 hide-on-tablet">
                <ul class="nav__admin-menu">
                    <li><a class="active" href="admin.php"> Menu món ăn</a></li>
                    <li><a href="bill.php"> Hóa đơn khách hàng</a></li>
                    <li><a href="acount.php"> Tài khoản khách hàng</a></li>>
                </ul>
            </nav>
            <nav class="col l-12 m-12 c-12 show-on-tablet">
                <ul class="nav__admin-menu">
                    <li><a class="active" href="admin.php"> Menu món ăn</a></li>
                    <li><a href="bill.php"> Hóa đơn khách hàng</a></li>
                    <li><a href="acount.php"> Tài khoản khách hàng</a></li>
                </ul>
            </nav>
            <div class="admin-menu-icon" onclick="openMenu()">
                <i class="fa fa-bars" aria-hidden="true"></i>
            </div>
            <div class="overlay" id="overlay" onclick="closeMenu()"></div>
            <nav class="sub-admin-menu" id="subadmin-menu">
                <div class="close-admin-menu">
                    <i class="fa fa-times" aria-hidden="true" onclick="closeMenu()"></i>
                </div>
                <ul>
                    <li><a href="admin.php"> Menu món ăn</a></li>
                    <li><a href="bill.php"> Hóa đơn khách hàng</a></li>
                    <li><a href="acount.php"> Tài khoản khách hàng</a></li>
                </ul>
            </nav>
        </div>
    </header>
<!-- ==================== End Header ================== -->
<div class="grid top" style="height: 7.4rem;"></div>
<!-- ==================== Start Main ================== -->
<main class="grid wide container">
        <div class=" col l-10 m-10 c-10 l-o-1 m-o-1 c-o-1 session-left">
            <table style="width:100%" class="data">
                <tr>
                    <th id="title-monan" colspan="5">TÀI KHOẢN KHÁCH HÀNG</th>
                </tr>
                <tr>
                    <th>
                        STT
                    </th>
                    <th style="width:40%">
                        Tên khách hàng
                    </th>
                    <th style="width:20%">
                        Username
                    </th>
                    <th>
                        Tình trạng
                    </th>
                    <th>
                        Xử lý
                    </th>
                </tr>
                <?php
                    $query = "SELECT * FROM account";
                    $result = $conn->query($query);
                    if(mysqli_num_rows($result) > 0) {
                        $i = 0;
                        while($resultset = mysqli_fetch_assoc($result)) {
                            $i++;
                            $id = $resultset['id'];
                            $hoten = $resultset['HoTen'];
                            $username = $resultset['Username'];
                            $tinhtrang = $resultset['status'];
                            echo "<tr>";
                            echo "<td>$i</td>";
                            echo "<td>$hoten</td>";
                            echo "<td>$username</td>";
                            if( $tinhtrang == '0' ) {
                                echo "<td id=\"state\">Đã khóa tài khoản</td>";  
                                echo "<td><a href='block.php?id=$id'>Mở khóa</a></td>";  
                            }else {
                                echo "<td id=\"state\">Hoạt động bình thường</td>";
                                echo "<td><a href='block.php?id=$id'>Khóa</a></td>";
                            }
                            echo "</tr>";
                        }
                    }
                ?>
            </table>
        </div>
    </main>
<!-- ==================== End Main ================== -->
</body>
</html>