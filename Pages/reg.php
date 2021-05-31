<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="../Handler/reg.handler.php" method="POST">
        Имя:<input type="text" name="UserName"><br>
        Фамилия:<input type="text" name="UserLastName"><br>
        Логин(советуем указать электронную почту или номер телефона):<input type="text" name="Login"><br>
        Дата рождения: <input type="date" name="BirthDate"><br>
        Пол:<br> Мужской <input type="radio" value="Male" name="Sex" id="SexChoose"><br>
        Женский<input type="radio" name="Sex" id="SexChoose" value="Female"><br>
        Пароль:<input type="text" name="Password"><br>
        Повторите пароль: <input type="text"><br>
        <input type="submit"><br>
    </form>
</body>
</html>

