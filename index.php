<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="Allstyles/indexstyles.css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300&display=swap" rel="stylesheet">
    <title>Джентльмены</title>
</head>
<body>
    <?php
    echo $_COOKIE['login'];
    ?>
    <img
        class="font"
        src="img/main_bg.jpg"
        alt="Фон с джентльменом"
    >
    <header>
        <a href="index.php">
            <img class="logo"
            src="img/Logo.png"
            title="Лого"
            alt="Лого с галстуком"
        >
        </a>
        <div class="navbar">
            <a href="index.php"><span class="main">Главная</span></a>
            <a href="Pages/about.php"> <span class="service">О сервисе</span> </a>
            <a href="Pages/courses.php"><span class="course">Курс</span></a>
            <a href="Pages/faq1.php"><span class="faq">FAQ</span></a>
            <!-- Кнопка должна меняться на картинку и данные пользователя!-->
            <?php
            $Login = "'".$_COOKIE['login']."'";
            $connect = new mysqli("127.0.0.1", "root", "", "gentlemen");//Конект к бд
            $db_query_for_auth_check ="
            SELECT lastname , name
            FROM userinfo 
            WHERE login_id = (
                SELECT login 
                FROM allusers
                WHERE login = .$Login.
                )
            ";
          // $rez_of_query =  mysqli_fetch_array($connect->query($db_query_for_auth_check, $result_mode = MYSQLI_STORE_RESULT));
           if (isset($rez_of_query[0]) && isset($rez_of_query[2])):?>
            <span> 
                <img
                    class="user"
                    src="icons/User.png"
                >
            </span>
            <div class="lk">
                <?php echo $rez_of_query[0]?> <br>
                <?php echo $rez_of_query[2]?>
            </div>
            <?php else:?>
            <div>
                <a href="Pages/reg.php">
                <button class="regbut">Зарегистрироваться</button>
                </a>
            </div>
            <?php endif;?>
           
        </div>
    </header>
    <div class="maintext">
        Джентльмен - это человек, общаясь 
        с которым чувствуешь себя джентльменом
    </div>
    <div>
        <a href="Pages/reg.php">
        <button class="begin"> Начать обучаться </button>
        </a>
    </div>
    <div id="link" class="line1"> </div>
    <div class="who"> Кто мы?</div>
    <div class="line2"> </div>
    <div class="answer">
        Наша онлайн-платформа поможет 
        Вам стать истинным джентльменом, 
        научит правильным манерам и поведению в 
        приличных заведениях. Мы хотим сделать 
        мир лучше!
    </div>
    <div class="step1">Шаг1: Зарегистрируйтесь!
    </div>
    <span class="regimg"> 
        <img
            src="img/step1.png"
        >
    </span>
    <div class="step2">Шаг2: Обучайтесь!
    </div>
    <span class="learnimg"> 
        <img
            src="img/step2.png"
        >
    </span>
    <div class="step3">Шаг3: Проверяйте знания!
    </div>
    <span class="checkimg"> 
        <img
            src="img/step3 (1).png"
        >
    </span>
    <div class="step4">Шаг4: Отслеживайте прогресс!
    </div>
    <span class="progressimg"> 
        <img
            src="img/step4.png"
        >
    </span>
    <div class="footer">
        <a href="index.php">
            <img class="logo2"
            src="img/Logo2.png"
            title="Лого"
            alt="Лого с галстуком"
            >
        </a>
        <div class="navbar2">
            <a href="index.php"><span class="main2">Главная</span></a>
            <a href="#link"><span class="service2">О сервисе</span></a>
            <span class="course2">Курс</span>
            <span class="faq2">FAQ</span>
        </div>
        <div class="icons">
            <span class="vk">
                <img
                    src="icons/vk.png"
                >
            </span>
            <span class="inst">
                <img
                    src="icons/instagram.png"
                >
            </span>
            <span class="facebook">
                <img
                    src="icons/facebook.png"
                >
            </span>
            <span class="telega">
                <img
                    src="icons/telegram.png"
                >
            </span>
        </div>
    </div>
</body>
</html>