<?php
$Login = "'".$_POST['UserLogin']."'";
$Password = "'".$_POST['UserPassword']."'";
$db_query_for_auth_Login = "
   SELECT login
   FROM allusers
   Where login = ".$Login;
$connect = new mysqli("127.0.0.1", "root", "", "gentlemen");
    $res_query_login = mysqli_fetch_array($connect->query($db_query_for_auth_Login, $result_mode = MYSQLI_STORE_RESULT));
    
if ($res_query_login['0'] == $_POST['UserLogin']) {
    $db_query_for_auth_Password = "
    SELECT password
    FROM allusers
    Where password = ".$Password;
    $res_query_password = mysqli_fetch_array($connect->query($db_query_for_auth_Password, $result_mode));
    if ($res_query_password['0'] == $_POST['UserPassword']) {
        header('Location:../index.html');
    }
    else{
        echo "Пароль не совпадает";
    }
}
else{
    echo "Сначала зарегистрируйтесь по данной ссылке:<a href=\"../Pages/reg.php\">регистрация</a>";
}
?>