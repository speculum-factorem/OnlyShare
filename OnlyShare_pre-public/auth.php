<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>OnlyShare</title>
    <link rel="stylesheet" href="css/auth.css">
</head>
<body>
    <div class="main_container">
        <div class="main_logo">
            <h1>OnlyShare</h1>
        </div>
        <h3>Авторизация</h3>
        <form action="/bd_auth_or_registr/bd_auth.php" method="post">
                <input type="text" placeholder="Введите логин" required name="email">
                <input type="password" placeholder="Введите пароль" required name="password">
                <button type="submit">Отправить</button>
        </form>
        <div class="not_exs">Нет аккаунта? <a href="registr.php">Зарегистрируйтесь</a></div>
    </div>
</body>
</html>