<?php
    setcookie('username', '', -1, "/");
    setcookie('email', $user['email'], -1, "/");
    setcookie('s', $user['sex'], -1, "/");
    header('Location: auth.php')
?>