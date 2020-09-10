function openMenu() {
    document.getElementById("overlay").style.display="block";
    document.getElementById("submenu").style.display="block";
}

function closeMenu() {
    document.getElementById("overlay").style.display="none";
    document.getElementById("submenu").style.display="none";
}
// Dành cho nút về đầu trang
function gotoTop() {
    if (window.jQuery) {
        jQuery('html,body').animate({
        scrollTop: 0
        }, 'slow');
    } else {
        document.getElementsByClassName('top')[0].scrollIntoView({
        behavior: 'smooth',
        block: 'start'
    });
        document.body.scrollTop = 0;
        document.documentElement.scrollTop = 0;
    }
}

// Dành cho Nav cố định

window.addEventListener("scroll",function(){
    if(window.pageYOffset > 200){
        document.getElementById("row__menu").style.backgroundColor = "black";
    }else{
        document.getElementById("row__menu").style.background = "none";
    }
});

// Dành cho banner Đặt bàn
$(window).scroll(function(){
    var scroll = $(this).scrollTop();
    $(".header__menu__datban").css({
        backgroundSize : "100 + scroll/5 +'%'"
    });
});

// Dành cho Menu lật trang

$(document).ready(function() {
    $("#btn1").on("click",function() {
        $(".flip__thucdon").removeClass("mom");
        $("#btn1").css("border-top",".4rem solid #fbc531");
        $("#btn2").css("border-top",".1rem solid #333")
    });
});
$(document).ready(function() {
    $("#btn2").on("click",function() {
        $(".flip__thucdon").addClass("mom");
        $("#btn1").css("border-top",".1rem solid #333");
        $("#btn2").css("border-top",".4rem solid #fbc531")
    });
});

function thanhtoan() {
    alert("Có cái mẹ gì đâu mà thanh toán. Đi vào thực đơn chọn món ngay và liền cho bố.");
}