function register() {
    var register = document.getElementById("register");
    var login = document.getElementById("login");
    var btn = document.getElementById("btn-overlay");

    login.style.left = "-100rem";
    register.style.left = "0rem";
    btn.style.left = "12.5rem";
}

function login() {
    var register = document.getElementById("register");
    var login = document.getElementById("login");
    var btn = document.getElementById("btn-overlay");

    login.style.left = "0rem";
    register.style.left = "50rem";
    btn.style.left = "0rem";
}

function checkInfo() {
    var name = document.getElementById("name");
    var email = document.getElementById("email");
    var user = document.getElementById("user");
    var pass = document.getElementById("pass");
    var compass = document.getElementById("compass");

    if(name.value.length == 0 || email.value.length == 0 || user.value.length == 0 || pass.value.length == 0 || compass.value.length == 0){
        //alert("Bạn chưa nhập đầy đủ thông tin");        
    }

    if(pass.value.length < 6){
        //alert("Password cần nhiều hơn 6 ký tự");
    }

    if(compass.value != pass.value){
        //alert("Hãy xác nhận lại mật khẩu");
    }
}