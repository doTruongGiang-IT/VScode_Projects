<?php
    require_once "MySQLConnect.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SunHome-BBQ</title>
    <link rel="shortcut icon" href="img/favicon.ico" /> 
    <link rel="stylesheet" href="assests/update.css">
    <link rel="stylesheet" href="assests/base.css">
    <link rel="stylesheet" href="assests/responsive.css">
    <script type="text/javascript" src="mjs/main.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
    <div class="grid">
        <div class="row banner">
            <div class="col l-12 m-12 c-12">
                <p>UPDATE MENU</p>
            </div>
        </div>
        <div class="row">
            <div class="col l-4 m-4 c-4 l-o-4 m-o-4 c-o-4 form">
                <form class="form-update" action="#" method="POST">
                    <?php
                        $id = $_GET['id'];
                        $query2 = "SELECT * FROM menus WHERE id='$id'";
                        $result2 = $conn->query($query2);
                        while( $resultset2 = mysqli_fetch_assoc($result2) ) {
                            $ten = $resultset2['name'];
                            $gia = $resultset2['price'];
                            echo "<span id=\"name\">Tên món ăn: </span><input type=\"text\" name=\"tenmon\" value=\" $ten \"><br /><br />";
                            echo "<span id=\"price\">Giá món ăn: </span><input type=\"text\" name=\"gia\" value=\" $gia \"><br /><br />";
                        }
                    ?>
                    <input id="click" type="checkbox" name="ckbox" value="0"><span id="ckbox"> Ẩn món ăn</span><br /><br />
                    <input id="btn-update" type="submit" name="update" value="Chấp nhận sửa">
                </form>
                <?php
                    if(isset($_POST['update'])) {
                        $id = $_GET['id'];
                        $Tenmon = $_POST['tenmon'];
                        $Gia = $_POST['gia'];
                        $query = "UPDATE menus SET `name`='$Tenmon', `price`='$Gia' WHERE id='$id'";
                        $conn->query($query);
                        header('location:admin.php');
                    }
                    if(isset($_POST['update'])) {
                        $id = $_GET['id'];
                        if(isset($_POST['ckbox'])) {
                            $status = $_POST['ckbox'];
                            $query = "UPDATE menus SET `status`='$status' WHERE id='$id'";
                            $conn->query($query);
                            header('location:admin.php');
                        }else {
                            $query = "UPDATE menus SET `status`=1 WHERE id='$id'";
                            $conn->query($query);
                            header('location:admin.php');
                        }
                    }
                ?>
            </div>
        </div>
    </div>
</body>