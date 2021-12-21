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
<section class='tableRes'>
<div>



<?php
require_once 'connection.php'; // подключаем скрипт
 
$link = mysqli_connect($host, $user, $password, $database) 
    or die("Ошибка " . mysqli_error($link)); 
     
$query ="SELECT * FROM products";
 
$result = mysqli_query($link, $query) or die("Ошибка " . mysqli_error($link)); 
if($result)
{
    $rows = mysqli_num_rows($result); // количество полученных строк
    echo "<h3 align='center'>Товары</h3>"; 
    echo "<table border='1' align='center'><tr><th>Id</th><th>Id_типТовара</th><th>Id_производителя</th><th>Цена</th></tr>";
    for ($i = 0 ; $i < $rows ; ++$i)
    {
        $row = mysqli_fetch_row($result);
        echo "<tr>";
            for ($j = 0 ; $j < 4 ; ++$j) echo "<td>$row[$j]</td>";
        echo "</tr>";
    }
    echo "</table>";
    echo "<hr>";
     
    // очищаем результат
    mysqli_free_result($result);
}
 
mysqli_close($link);
?>

</div>

<div>
<?php
require_once 'connection.php'; // подключаем скрипт
 
$link = mysqli_connect($host, $user, $password, $database) 
    or die("Ошибка " . mysqli_error($link)); 
     
$query ="SELECT * FROM producttypes";
 
$result = mysqli_query($link, $query) or die("Ошибка " . mysqli_error($link)); 
if($result)
{
    $rows = mysqli_num_rows($result); // количество полученных строк
    
    echo "<h3 align='center'>Типы товаров </h3>";
    echo "<table border='1' align='center'><tr><th>Id</th><th>Тип товара</th></tr>";
    for ($i = 0 ; $i < $rows ; ++$i)
    {
        $row = mysqli_fetch_row($result);
        echo "<tr>";
            for ($j = 0 ; $j < 2 ; ++$j) echo "<td>$row[$j]</td>";
        echo "</tr>";
    }
    echo "</table>";
    echo "<hr>";
     
    // очищаем результат
    mysqli_free_result($result);
}
 
mysqli_close($link);
?>

</div>

<div>
<?php
require_once 'connection.php'; // подключаем скрипт
 
$link = mysqli_connect($host, $user, $password, $database) 
    or die("Ошибка " . mysqli_error($link)); 
     
$query ="SELECT * FROM manufacturs";
 
$result = mysqli_query($link, $query) or die("Ошибка " . mysqli_error($link)); 
if($result)
{
    $rows = mysqli_num_rows($result); // количество полученных строк
     
    echo "<h3 align='center'>Производители</h3>";
    echo "<table border='1' align='center'><tr><th>Id</th><th>Производитель</th><th>Страна</th></tr>";
    for ($i = 0 ; $i < $rows ; ++$i)
    {
        $row = mysqli_fetch_row($result);
        echo "<tr>";
            for ($j = 0 ; $j < 3 ; ++$j) echo "<td>$row[$j]</td>";
        echo "</tr>";
    }
    echo "</table>";
    echo "<hr>";
     
    // очищаем результат
    mysqli_free_result($result);
}
 
mysqli_close($link);
?>
</div>
<div>
<?php
require_once 'connection.php'; // подключаем скрипт
 
$link = mysqli_connect($host, $user, $password, $database) 
    or die("Ошибка " . mysqli_error($link)); 
     
$query ="SELECT * FROM salecontent";
 
$result = mysqli_query($link, $query) or die("Ошибка " . mysqli_error($link)); 
if($result)
{
    $rows = mysqli_num_rows($result); // количество полученных строк
     
    echo "<h3 align='center'>Содержание продаж</h3>";
    echo "<table border='1' align='center'><tr><th>Id</th><th>Id_продаж</th><th>Id_товара</th><th>Количество</th></tr>";
    for ($i = 0 ; $i < $rows ; ++$i)
    {
        $row = mysqli_fetch_row($result);
        echo "<tr>";
            for ($j = 0 ; $j < 4 ; ++$j) echo "<td>$row[$j]</td>";
        echo "</tr>";
    }
    echo "</table>";
    echo "<hr>";
     
    // очищаем результат
    mysqli_free_result($result);
}
 
mysqli_close($link);
?>
</div>
<div>
<?php
require_once 'connection.php'; // подключаем скрипт
 
$link = mysqli_connect($host, $user, $password, $database) 
    or die("Ошибка " . mysqli_error($link)); 
     
$query ="SELECT * FROM sales";
 
$result = mysqli_query($link, $query) or die("Ошибка " . mysqli_error($link)); 
if($result)
{
    $rows = mysqli_num_rows($result); // количество полученных строк
     
    echo "<h3 align='center'>Продажи</h3>";
    echo "<table border='1' align='center'><tr><th>Id</th><th>Дата</th><th>Клиент</th></tr>";
    for ($i = 0 ; $i < $rows ; ++$i)
    {
        $row = mysqli_fetch_row($result);
        echo "<tr>";
            for ($j = 0 ; $j < 3 ; ++$j) echo "<td>$row[$j]</td>";
        echo "</tr>";
    }
    echo "</table>";
     
    // очищаем результат
    mysqli_free_result($result);
}
 
mysqli_close($link);
?>
<div>
</section>


</body>
</html>