

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<?php
include('connectionAuth.php');
// include('authorization.php');
require_once 'authorization.php';
session_start();
if(!isset ($_SESSION['login'])){
    $login = $_POST['login'];
    $pass = $_POST['pass'];

    if(empty($login) or empty($pass)){
        exit( "<p>Вы ввели неправильную информацию или поля пустые<p><br>
        <input type='button' value='Вернуться' onclick='history.back()'>
        ");
    }
  }



?>
    
</body>
</html>