<?php
  require 'main_login_db.php';

  $record = $_POST['record'];

  if($name == ''){
    echo 'Введите имя';
    exit();
  };

  if($record == ''){
    echo 'Введите запись';
    exit();
  };

  
  $sql = 'INSERT INTO main_info (name, record) VALUES (:name, :record)';
  $query = $pdo->prepare($sql);
  $query->execute(['name'=>$_COOKIE['username'], 'record'=>$record]);

  header('Location: /');


?>