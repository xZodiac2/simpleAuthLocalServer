<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/index.css">
    <title>Document</title>
</head>
<body>
    <div class="container">
        <?php
            if ($_COOKIE['user'] == '') :
        ?>
            <form action="auth/createUser.php" method="post">
                <h1>Форма реистрации</h1>
                <input type="text" name="name" id="name" placeholder="Enter your name">
                <input type="text" name="login" id="login" placeholder="Enter your login">
                <input type="password" name="password" id="password" placeholder="Enter your password">
                <button type="submit">Создать аккаунт</button>
            </form>
            <form action="auth/auth.php" method="post">
                <h1>Форма авторизации</h1>
                <input type="text" name="login" id="login" placeholder="Enter your login">
                <input type="password" name="password" id="password" placeholder="Enter your password">
                <button type="submit">Авторизоваться</button>
            </form>
        <?php else: ?>
            <p>Привет, <?= $_COOKIE['user'] ?>. Чтобы выйти из ситемы нажми <a href="auth/exit.php">здесь</a></p>
        <?php endif;?>
    </div>
</body>
</html>
