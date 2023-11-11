<?php
    require '../main_login_db.php';


    $email = $_POST['email'];
    $name = $_POST['name'];
    $password = $_POST['password']; 
    $second_password = $_POST['second_password'];
    $s = $_POST['s'];

    if($password!=$second_password){
        echo 'Пароли не совпадают';
        exit();
    };

    $password = md5($password.'gfwb23dfw');



    $query = $pdo->prepare("INSERT INTO user(name, password, sex, email) VALUES(:name, :password, :sex, :email)");
    $query->execute(['name'=>$name,
                     'password'=>$password,
                     'sex'=>$s,
                     'email'=>$email
                    ]);
    

    header('Location: ../auth.php');
?>