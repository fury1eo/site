<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="Allstyles/authstyle.css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300&display=swap" rel="stylesheet">
    <title>Document</title>
</head>
<body>
    <div class="regbox">
        <div class="line1"></div>
        <span class="regword">Авторизация</span>
        <form action="../Handler/auth.handler.php" method="POST">
        <input type="text" placeholder="Логин" name="UserLogin"><br>
        <input type="text" placeholder="Пароль" name="UserPassword"><br>
        <input class="button" type="submit">
        <div class="line2"></div>
        </form>
    </div>
</body>
</html>
