<?php

    ini_set('display_errors', 1);
    error_reporting(E_ALL);

    $login = $_POST['login'];
    $password = $_POST['password'];
    $name = $_POST['name'];

    if (mb_strlen($login) > 30) {
        echo 'Недопустимая длина логина';
        exit();
    } else if (mb_strlen($password) <= 8) {
        echo 'Минимум 8 символов';
        exit();
    }

    $mysql = new mysqli('localhost:8889', 'root', 'root', 'registration');
    $mysql->query("INSERT INTO `users` (`login`, `password`, `name`) VALUES('$login', '$password', '$name')");
    $mysql->close();

    header('Location: /');
?>
