<?php
  $host = 'localhost';
  $data = 'share_the_day';
  $name = 'root';
  $password = 'root';

  $dsn = "mysql:host=$host;dbname=$data";

  try{
    $pdo = new PDO($dsn, $name, $password);
  }
  catch (PDOException $e){
    throw new PDOException($e->getMessage(), (int)$e->getCode());
  }