<?php
    require_once "MySQLConnect.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin-BBQ</title>
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
                    <li><a href="bill.php"> Hóa đơn đặt bàn</a></li>
                    <li><a href="acount.php"> Tài khoản khách hàng</a></li>>
                </ul>
            </nav>
            <nav class="col l-12 m-12 c-12 show-on-tablet">
                <ul class="nav__admin-menu">
                    <li><a class="active" href="admin.php"> Menu món ăn</a></li>
                    <li><a href="bill.php"> Hóa đơn đặt bàn</a></li>
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
                    <li><a href="bill.php"> Hóa đơn đặt bàn</a></li>
                    <li><a href="acount.php"> Tài khoản khách hàng</a></li>
                </ul>
            </nav>
        </div>
    </header>
<!-- ==================== End Header ================== -->
<div class="grid top" style="height: 7.4rem;"></div>
<!-- ==================== Start Main ================== -->
    <main class="grid wide container">
        <div class=" col l-8 m-8 c-8 session-left">
            <table style="width:100%" class="data">
                <tr>
                    <th id="title-monan" colspan="5">BẢNG MÓN ĂN</th>
                </tr>
                <tr>
                    <th>
                        STT
                    </th>
                    <th style="width:50%">
                        Tên món
                    </th>
                    <th style="width:20%">
                        Giá
                    </th>
                    <th>
                        Tình trạng
                    </th>
                    <th>
                        Xử lý
                    </th>
                </tr>
                <?php
                    $query = "SELECT * FROM menus";
                    $result = $conn->query($query);
                    if(mysqli_num_rows($result) > 0) {
                        $i = 0;
                        while($resultset = mysqli_fetch_assoc($result)) {
                            $i++;
                            $Tenmon = $resultset['name'];
                            $Giamon = $resultset['price'];
                            $Tinhtrang = $resultset['status'];
                            echo "<tr>";
                            echo "<td>$i</td>";
                            echo "<td>$Tenmon</td>";
                            echo "<td>$Giamon</td>";
                            if($Tinhtrang==1) {
                                echo "<td>Còn</td>";    
                            }else {
                                echo "<td>Ẩn</td>";
                            }
                            
                            echo "<td><a href='delete.php?id=$i'>Xóa</a> | <a href='update.php?id=$i'>Sửa</a></td>";
                            echo "</tr>";
                        }
                    }
                ?>
            </table>
        </div>

        <div class="col l-4 m-4 c-4 session-right">
            <table style="width:100%" class="data">
                <tr>
                    <th id="title-monan" colspan="4">BẢNG DANH MỤC</th>
                </tr>
                <tr>
                    <th>
                        ID
                    </th>
                    <th style="width:50%">
                        Tên danh mục
                    </th>
                    <th style="width:40%">
                        Tình trạng
                    </th>
                </tr>    
                <?php
                    $query = "SELECT * FROM categories";
                    $result = $conn->query($query);
                    if(mysqli_num_rows($result) > 0) {
                        while($resultset = mysqli_fetch_assoc($result)) {
                            $id = $resultset['id'];
                            $tieude = $resultset['title'];
                            $trangthai = $resultset['status'];
                            echo "<tr>";
                            echo "<td>$id</td>";
                            echo "<td>$tieude</td>";
                            if($trangthai==1) {
                                echo "<td>Đang phục vụ</td>";
                            }else {
                                echo "<td>Tạm ngưng</td>";
                            }
                            
                            echo "</tr>";
                        }
                    }
                ?>
            </table>

            <form style="width:100%" action="#" method="POST" class="insert">
                
                <table style="width:100%" class="insert-table">
                    <tr>
                        <th colspan="2">Bảng thêm món ăn</th>
                    </tr>
                    <tr>
                        <td>Số id của món:</td>
                        <?php $query = "SELECT * FROM menus";
                    $result = $conn->query($query); $count = mysqli_num_rows($result);?>
                        <td><input style="width:100%" type="text" name="stt" value="<?=$count+1 ?>"></td>
                    </tr>
                    <tr>
                        <td>Danh mục món:</td>
                        <!-- <td><input style="width:100%" type="text" name="danhmuc"></td> -->
                        <td>
                            <select style="width:100%; font-size:1.4rem; font-weight:bold;" name="danhmuc">
                                <option value="1" selected="selected">Các loại mỳ</option>
                                <option value="2">Cơm và bánh</option>
                                <option value="3">Lẩu</option>
                                <option value="4">Thịt heo</option>
                                <option value="5">Thịt bò</option>
                                <option value="6">Thịt bò 2</option>
                                <option value="7">Các loại nước uống</option>
                                <option value="8">Sofr drink</option>
                                <option value="9">Nước hoa quả</option>
                            </select>
                        </td>
                    </tr>
                    <tr>
                        <td>Tên món:</td>
                        <td><input style="width:100%" type="text" name="tenmon"></td>
                    </tr>
                    <tr>
                        <td>Giá món:</td>
                        <td><input style="width:100%" type="text" name="gia"></td>
                    </tr>
                    <tr>
                        <td id="insertbtn" colspan="2"><input type="submit" name="them" value="Thêm mới"></td>
                    </tr>
                </table>
            </form>    
            <?php
                if(isset($_POST['them'])) {
                    $id = $_POST['stt'];
                    $danhmuc = $_POST['danhmuc'];
                    $tenmon = $_POST['tenmon'];
                    $gia = $_POST['gia'];
                    $query = "INSERT INTO menus(`id`, `name`, `price`,`status`, `categories_id`) VALUE('$id', '$tenmon','$gia','1','$danhmuc')";
                    $conn->query($query);
                    
                }
            ?>
        </div>     
    </main>
<!-- ==================== End Main ================== -->

</body>
</html>