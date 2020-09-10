<?php
    session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Đăng nhập-SunHome BBQ</title>
    <link rel="shortcut icon" href="img/favicon.ico" /> 
    <link rel="stylesheet" href="assests/stylelogin.css">
    <link rel="stylesheet" href="assests/base.css">
    <link rel="stylesheet" href="assests/responsive.css">
    <script src="https://code.jquery.com/jquery-3.4.1.js"></script>
    <script type="text/javascript" src="mjs/login.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
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
    <div class="grid blur"></div>
    <div class="grid">
        <div class="row col l-12 m-12 c-12">
            <div class="col l-8 m-8 c-8 l-o-2 m-o-2 c-o-2">
                <div class="login">
                    <div class="btn-box">
                        <div id="btn-overlay"></div>
                        <a class="toggle-btn" href="#" onclick="login()">Log in</a>
                        <a class="toggle-btn" href="#">Register</a>
                    </div>
                    <!-- Form Login -->
                    <form class="Login" id="login" action="login_process.php" method="POST">
                        <input type="text" name="Username" class="input-login" id="username" placeholder="UserName">
                        <input type="password" name="Password" class="input-login" id="password" placeholder="Password">
                        <span>Bạn chưa có tài khoản ?</span>
                        <a id="reg" href="#" onclick="register()">Đăng ký tài khoản</a>
                        <input id="btn-login" style="border:none; outline:none; font-size:1.8rem;" type="submit" class="btn-submit" name="login" value="Log In" onclick="showmessage()"></input>
                    </form>
                    <!-- Register Login -->
                    <form class="Login" id="register" action="register_process.php" method="POST">
                        <input type="text" name="Name" class="input-login" id="name" placeholder="Họ tên">
                        <input type="text" name="Email" class="input-login" id="email" placeholder="Email">
                        <input type="text" name="User" class="input-login" id="user" placeholder="UserName">
                        <input type="password" name="Pass" class="input-login" id="pass" placeholder="Password">
                        <input type="password" name="Compass" class="input-login" id="compass" placeholder="Comfirm password">
                        <input id="btn-register" style="border:none; outline:none; font-size:1.8rem;" type="submit" class="btn-reg" name="register" onclick="checkInfo()" value="Register"></input>
                    </form>
                </div>
            </div>
        </div>
    </div>
</body>
</html>