<?php
$Login = "'".$_POST['UserLogin']."'";//Логин в нормальном для запроса виде
$Password = "'".$_POST['UserPassword']."'";//Пароль в нормальном для запроса виде
$db_query_for_auth_Login = "
   SELECT login
   FROM allusers
   Where login = ".$Login;//Запрос, что спрашивает есть ли пользователь в БД
$connect = new mysqli("127.0.0.1", "root", "", "gentlemen");//Коннект к бд , вероятнее всего опасно оставлять всё на стандартных настройках
    $res_query_login = mysqli_fetch_array($connect->query($db_query_for_auth_Login, $result_mode = MYSQLI_STORE_RESULT));//Спросить у бд есть ли такой логин, если есть, то добавить в массив
//почему-то записывается 2 раза одинаковое значение по разным ключам, поэтому просто берём первый элемент
if ($res_query_login['0'] == $_POST['UserLogin']) {
    $db_query_for_auth_Password = "
    SELECT password
    FROM allusers
    Where password = ".$Password;//Теперь меняем на запрос, что проверяет наличие правильного пароля
    $res_query_password = mysqli_fetch_array($connect->query($db_query_for_auth_Password, $result_mode));
    if ($res_query_password['0'] == $_POST['UserPassword']) {
        $db_query_for_auth = "
        UPDATE allusers
        SET authorized = '1'
        WHERE login = ".$Login;//Запрос на то, чтобы пользователь был авторизорован
        if($connect->query($db_query_for_auth, $result_mode)){
            header('Location:../index.html');//если всё правильно, то отправляем на основную страницу
        }
        else{
            echo "ошибка";
        }
        
    }
    else{
        echo "Пароль не совпадает";//Если нет, то выводим ошибочку
    }
}
else{
    echo "Сначала зарегистрируйтесь по данной ссылке:<a href=\"../Pages/reg.php\">регистрация</a>";
}
?>