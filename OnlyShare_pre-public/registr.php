<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>OnlyShare</title>
    <link rel="stylesheet" href="css/registr.css">
</head>
<body>
    <div class="main_container">
        <div class="main_logo">
            <h1>OnlyShare</h1>
        </div>
        <h3>Регистрация</h3>
        <form action="/bd_auth_or_registr/bd_registr.php" method="post">
                <input type="text" placeholder="Введите email" required name="email">
                <input type="text" placeholder="Введите имя" required name="name">
                <input type="password" placeholder="Введите пароль" required name="password">
                <input type="password" placeholder="Повторно введите пароль" required name="second_password">
                <div class="container_s">
                    Пол: Мужской<input type="radio" name="s" class="radio_s" value="man"> Женский<input type="radio" name="s" class="radio_s" required value="woman">
                </div>
                <button type="submit">Зарегистрироваться</button>
        </form>
        <div class="not_exs">Есть аккаунт? <a href="auth.php">Авторизуйтесь</a></div>
    </div>
</body>
</html>