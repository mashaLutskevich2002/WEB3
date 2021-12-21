<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<link rel="stylesheet" href="css/page.css">
<link href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@500;600&family=Roboto+Slab:wght@400;500;600&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.1/css/all.css"
integrity="sha384-gfdkjb5BdAXd+lj+gudLWI+BXq4IuLW5IT+brZEZsLFm++aCMlF1V92rMkPaX4PP" crossorigin="anonymous">
</head>
<body>
<style>
        body{
            background: rgb(238,174,202);
background: radial-gradient(circle, rgba(238,174,202,1) 0%, rgba(207,163,192,1) 19%, rgba(186,155,185,1) 32%, rgba(160,145,176,1) 56%, rgba(128,143,178,1) 65%, rgba(100,141,180,1) 72%, rgba(119,142,179,1) 100%, rgba(210,164,193,0.7458333675266982) 100%, rgba(34,136,185,0.6898109585631127) 100%, rgba(176,226,196,1) 100%, rgba(148,187,233,0.5805672610841212) 100%, rgba(212,178,211,1) 100%);
        }
    </style>
<header>
    <div class="header-nav">
       <div class="container">
        <div class="logo">
            <div class="logo-img" onclick="document.location='page.php'">
                
            </div>
            <div class="logo-text">
                <p class="logo-text__style">DIMARO</p>
            </div>
        </div>
        <div class="nav-element">
             <a class="nav-el" href="sofa.html">Диваны</a>
            <a class="nav-el" href="chair.html">Стулья</a>
            <a class="nav-el" href="table.html">Столы</a>
            <a class="nav-el" href="armchair.html">Кресла</a>
            <a class="nav-el" href="cupboard.html">Шкафы</a>
        </div>
        <div class="icons">
           <a href="authorization.php" class="icons_a" ><i class="fas fa-user-alt"></i></a> 
           <a href="" class="icons_a"> <i class="fas fa-shopping-basket"></i></a>
        </div>


    </div> 
    </div>
    
    </div>
</header>




<?php
require_once 'connection.php'; // подключаем скрипт
     
if(isset($_POST['ID'])){
 
$link = mysqli_connect($host, $user, $password, $database) 
            or die("Ошибка " . mysqli_error($link)); 
    $ID = mysqli_real_escape_string($link, $_POST['ID']);
     
    $query ="DELETE FROM sales  WHERE id = '$ID'";
    $result = mysqli_query($link, $query) or die("Ошибка " . mysqli_error($link)); 
 
    mysqli_close($link);
    // перенаправление на скрипт index.php
    
    header('Location: adminRes.php');
}
 
if(isset($_GET['ID']))
{   
    $ID = htmlentities($_GET['ID']);
    echo "<h2>Удалить модель Продажи по ID = '$ID'?</h2>
        <form method='POST'>
        <input type='hidden' name='ID' value='$ID' />
        <input type='submit' value='Удалить'>
        </form>";
}
?>


<?php
require_once 'connection.php'; // подключаем скрипт
     
if(isset($_POST['ID'])){
 
$link = mysqli_connect($host, $user, $password, $database) 
            or die("Ошибка " . mysqli_error($link)); 
    $ID = mysqli_real_escape_string($link, $_POST['ID']);
     
    $query ="DELETE FROM producttypes  WHERE id = '$ID'";
    $result = mysqli_query($link, $query) or die("Ошибка " . mysqli_error($link)); 
 
    mysqli_close($link);
    // перенаправление на скрипт index.php
    
    header('Location: adminRes.php');
}
 
if(isset($_GET['ID']))
{   
    $ID = htmlentities($_GET['ID']);
    echo "<h2>Удалить модель Тип товара по ID= '$ID'?</h2>
        <form method='POST'>
        <input type='hidden' name='ID' value='$ID' />
        <input type='submit' value='Удалить'>
        </form>";
}
?>


<?php
require_once 'connection.php'; // подключаем скрипт
     
if(isset($_POST['ID'])){
 
$link = mysqli_connect($host, $user, $password, $database) 
            or die("Ошибка " . mysqli_error($link)); 
    $ID = mysqli_real_escape_string($link, $_POST['ID']);
     
    $query ="DELETE FROM manufacturs WHERE id = '$ID'";
    $result = mysqli_query($link, $query) or die("Ошибка " . mysqli_error($link)); 
 
    mysqli_close($link);
    // перенаправление на скрипт index.php
    
    header('Location: adminRes.php');
}
 
if(isset($_GET['ID']))
{   
    $ID = htmlentities($_GET['ID']);
    echo "<h2>Удалить модель Фирма производителей по ID= '$ID'?</h2>
        <form method='POST'>
        <input type='hidden' name='ID' value='$ID' />
        <input type='submit' value='Удалить'>
        </form>";
}
?>









</body>
</html>