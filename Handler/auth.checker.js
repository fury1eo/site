function AuthChecker( login , password ){
    var LoginError = '<span><strong>Пожалуйста, введите свой логин.</strong></span>';
    var PasswordError = '<span><strong>Пожалуйста, введите свой пароль.</strong></span>';
    if (login == "") {
        document.getElementsByName('UserLogin').innerHTML += LoginError;
    }
    else if(password == ""){
        document.getElementsByName('UserPassword').innerHTML += PasswordError;
    }
    else{

    }
}
$(document).ready(function(){
    AuthChecker($("input[name*='UserL']").val,$("input[name*='UserP']").val);
});