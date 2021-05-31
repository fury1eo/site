<?php
$db_query;
//Проверить правильные данные введены
if(isset($_POST['UserName']) &&
    isset($_POST['UserLastName']) &&
    isset($_POST['Login']) && 
    isset($_POST['BirthDate'])&&
    isset($_POST['Sex']) &&
    isset($_POST['Password'])) {
    header("Location:../Pages/auth.php");
    //Подключаемся к БД
    $connect = new mysqli("127.0.0.1", "root", "", "gentlemen");
    //Проверка на подключение
    if ($connect->connect_errno) {
        printf("Не удалось подключиться: %s\n", $connect->connect_error);
        exit();
    }
    $Name = "'".$_POST['UserName']."'";
    $LastName = "'".$_POST['UserLastName']."'";
    $Login = "'".$_POST['Login']."'";
    $BirthDate = "'".$_POST['BirthDate']."'";
    $Sex = "'".$_POST['Sex']."'";
    $Password = "'".$_POST['Password']."'";
    $db_query = "
        INSERT INTO allusers(login, password)
        VALUES (".$Login.",".$Password.")";
    $connect->query($db_query, $result_mode = MYSQLI_STORE_RESULT);
    //Понять что ввел пользователь в качестве логина - телефон,почту или просто придумал логин
    if (strpos($_POST['Login'], '@') !== false) {
        $db_query = "
        INSERT INTO userinfo(login_id, name, lastname, email, birthdate, sex)
        VALUES((SELECT login FROM allusers WHERE login =".$Login."),".$Name.",".$LastName.",".$Login.",".$BirthDate.",".$Sex.")";
        if($connect->query($db_query, $result_mode)) {
        }
        else{//Ошибка, которой никогда быть не должно, но мало ли чё
            echo "Ошибка";
            header("Location:../Pages/reg.php");
        }  
    }
    else if (ctype_digit ($_POST['Login'] && strlen($_POST['Login']) == 11)) {
        $db_query = "
        INSERT INTO userinfo(login_id, name, lastname, telephone_number, birthdate, sex)
        VALUES((SELECT login FROM allusers WHERE login =".$Login."),".$Name.",".$LastName.",".$Login.",".$BirthDate.",".$Sex.")";
        if($connect->query($db_query, $result_mode)) {
        }
        else{//Ошибка, которой никогда быть не должно, но мало ли чё
            echo "Ошибка";
            header("Location:../Pages/reg.php");
        }
    }
    else{
        //Ввод инфы в первую бд
        $db_query = "
        INSERT INTO userinfo(login_id, name, lastname, birthdate, sex)
        VALUES((SELECT login FROM allusers WHERE login =".$Login."),".$Name.",".$LastName.",".$BirthDate.",".$Sex.")";   
        if($connect->query($db_query, $result_mode)) {
        }
        else{//Ошибка, которой никогда быть не должно, но мало ли чё
            echo "Ошибка";
            header("Location:../Pages/reg.php");
        }
    }
    //Закрыть коннект
    $connect->close();

}
else{//неправильно полученные данные влекут за собой возврат на страницу регистрации
    header("Location:../Pages/reg.php");
}?>