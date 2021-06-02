<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="Allstyles/regstyles.css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300&display=swap" rel="stylesheet">
    <title>Document</title>
</head>
<body>
    <div class="regbox">
        <div class="line1"></div>
        <span class="regword">Регистрация</span>
        <form action="../Handler/reg.handler.php" method="POST">
            <input class="user" placeholder="Имя" type="text" name="UserName"><br>
            <input class="lastname" placeholder="Фамилия" type="text" name="UserLastName"><br>
            <input class="loginstyle" placeholder="Логин (почта или телефон)" type="text" name="Login"><br>
            <input class="dob" placeholder="Дата рождения" type="date" name="BirthDate"><br>
            <span class="pol">Пол: Мужской <input class="sexradio" type="radio" value="Male" name="Sex" id="SexChoose"></span> <br>
            <span class="woman"> Женский <input class="sexradio" type="radio" name="Sex" id="SexChoose" value="Female"></span><br>
            <input placeholder="Пароль" type="text" name="Password"><br>
            <input placeholder="Повторите пароль" type="text"><br>
        <input class="button" type="submit"><br>
        <div class="line2"></div>
        </form>
    </div>
</body>
</html>
