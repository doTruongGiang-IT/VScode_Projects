<?php
    if( isset($_POST['lienhe']) && $_POST['yourname'] != "" && $_POST['email'] != "" 
    && $_POST['phone'] != "" && $_POST['purpose'] != "" && $_POST['purpose'] != "" ) {
        setcookie('contact','Góp ý của bạn đã được gửi đi',time()+5,'/');
    }else {
        setcookie('contact','Hãy điền đầy đủ thông tin trước khi gửi',time()+5,'/');
    }
    header('location:lienhe.php');
?>