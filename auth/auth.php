<?php

    ini_set('display_errors', 1);
    error_reporting(E_ALL);

    $login = $_POST['login'];
    $password = $_POST['password'];

    $mysql = new mysqli('localhost:8889', 'root', 'root', 'registration');
    $data = $mysql->query("SELECT * FROM `users` WHERE `login` = '$login' AND `password` = '$password'");
    $user = $data->fetch_assoc();

    if ($user == null) {
        echo 'Неверный логин или пароль';
        exit();
    }

    setcookie('user', $user['name'], time() + 3600, '/');

    $mysql->close();

    header('Location: /')

?>
