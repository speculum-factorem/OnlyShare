<?php
    $username = $_COOKIE['username'];
    if(empty($_COOKIE['username'])){
        $user_header_info = "<a href='auth.php' class='not_user_header'>Войти</a>";
        $main_input = '';
        $main_button = '';
    }else{
        $user_header_info = "<a href='user_info.php' class='user_head'>$username</a>";
        $main_input = "<input type='text' name='record' placeholder='Введите запись' class='input_record'>";
        $main_button ="<button type='submit' class='input_button'>Отправить</button>";
    };

    
?>


<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>OnlyShare</title>
    <link rel="stylesheet" href="css/main.css">
</head>
<body>
    <div class="main_container">
        <header>
            <a href="index.php" class="main_logo">OnlyShare</a>
            <?php echo $user_header_info?>
        </header>
        <div class="input_section">
            <form action="input.php" method="post">
                    <?php echo $main_input?>
                    <?php echo $main_button?>
            </form>
        </div>
        <?php
          require 'main_login_db.php';

          $query = $pdo->query('SELECT * FROM `main_info`');


          while($row = $query->fetch(PDO::FETCH_ASSOC)){
            echo "<section>";
            echo "<nav class='rec_name'>";
            echo $row['name'];
            echo "</nav>";
            echo "<div class='rec_record'>";
            echo $row['record'];
            echo "</div>";
            #echo $row['time'];
            echo "</section>";
            };
        ?>
    </div>


</body>
</html>