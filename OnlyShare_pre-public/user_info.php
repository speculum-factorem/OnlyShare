<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/user_info.css">
    <title>OnlyShare</title>
</head>
<body>
    <header>
        <a href="index.php" class="main_logo">OnlyShare</a>
    </header>
    <div class="main_container">
        <div class="username"><?php echo $_COOKIE['username']?></div>
        <div class="user_email user_on_info">Email: <?php echo $_COOKIE['email']?></div>
        <div class="user_sex user_on_info">Пол:<?php echo $_COOKIE['s']?></div>
        <a href="logout.php" class="exit_box">Выйти</a>
    </div>
</body>
</html>