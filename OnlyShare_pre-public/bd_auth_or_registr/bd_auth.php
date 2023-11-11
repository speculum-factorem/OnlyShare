<?php
    require '../main_login_db.php';

    $email = $_POST['email'];
    $password = $_POST['password'];

    $password = md5($password.'gfwb23dfw');

    $result = $pdo->query("SELECT * FROM `user` WHERE `email` = '$email' AND `password` = '$password'");

    $user = $result->fetch(PDO::FETCH_ASSOC);

    if(!($user)){
        echo 'Пользователь не найден';
        exit();
    };
    

    setcookie('username', $user['name'], time() + 360 * 360, "/");
    setcookie('email', $user['email'], time() + 360 * 360, "/");
    setcookie('s', $user['sex'], time() + 360 * 360, "/");

    header('Location: ../index.php');
?>