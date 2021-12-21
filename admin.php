<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
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
// подключаемся к серверу
if(isset($_POST['ID_productTypes']) && isset($_POST['ID_manufacturs']) && isset($_POST['price'])){
 
    // подключаемся к серверу
    $link = mysqli_connect($host, $user, $password, $database) 
        or die("Ошибка " . mysqli_error($link)); 
     
    // экранирования символов для mysql
    $ID_productTypes = htmlentities(mysqli_real_escape_string($link, $_POST['ID_productTypes']));
    $ID_manufacturs = htmlentities(mysqli_real_escape_string($link, $_POST['ID_manufacturs']));
    $price = htmlentities(mysqli_real_escape_string($link, $_POST['price']));
    // создание строки запроса
    $query ="INSERT INTO products VALUES(NULL, '$ID_productTypes','$ID_manufacturs', '$price')";
     
    // выполняем запрос
    $result = mysqli_query($link, $query) or die("Ошибка " . mysqli_error($link)); 
    if($result)
    {
        echo "<span style='color:blue;'>Данные добавлены</span>";
    }
    // закрываем подключение
    mysqli_close($link);
}
?>
<section class='admin'>
    <div style = 'border: solid; width: 250px; '>
<a  href='adminRes.php'>Посмотреть содержимое таблиц</a>
<a href='delete.php'>Удалить</a>
</div>
<style>
    .admin{
        display: flex;
	justify-content: center;
	align-items: center;
	flex-direction: column;
    }
</style>

<h2>Добавить новый товар</h2>
<form method="POST">
Id типа товара:
<input type="text" name="ID_productTypes" />
Id производителя 
<input type="text" name="ID_manufacturs" />
Цена 
<input type="text" name="price" />

<input type="submit" value="Отправить"/>
</form>
</section>
<hr>

<?php
require_once 'connection.php'; // подключаем скрипт
// подключаемся к серверу
if(isset($_POST['product_type']) ){
 
    // подключаемся к серверу
    $link = mysqli_connect($host, $user, $password, $database) 
        or die("Ошибка " . mysqli_error($link)); 
     
    // экранирования символов для mysql
    $product_type = htmlentities(mysqli_real_escape_string($link, $_POST['product_type']));
  
     
    // создание строки запроса
    $query ="INSERT INTO producttypes VALUES(NULL, '$product_type')";
     
    // выполняем запрос
    $result = mysqli_query($link, $query) or die("Ошибка " . mysqli_error($link)); 
    if($result)
    {
        echo "<span style='color:blue;'>Данные добавлены</span>";
    }
    // закрываем подключение
    mysqli_close($link);
}
?>
<section  class='admin'>
<h2>Добавить новый тип товара</h2>
<form method="POST">
Тип товара:
<input type="text" name="product_type" />

<input type="submit" value="Отправить"/>
</form>
</section>
<hr>

<?php
require_once 'connection.php'; // подключаем скрипт
// подключаемся к серверу
if(isset($_POST['manufacture']) && isset($_POST['country'])){
 
    // подключаемся к серверу
    $link = mysqli_connect($host, $user, $password, $database) 
        or die("Ошибка " . mysqli_error($link)); 
     
    // экранирования символов для mysql
    $manufacture = htmlentities(mysqli_real_escape_string($link, $_POST['manufacture']));
    $country = htmlentities(mysqli_real_escape_string($link, $_POST['country']));
     
    // создание строки запроса
    $query ="INSERT INTO manufacturs VALUES(NULL, '$manufacture','$country')";
     
    // выполняем запрос
    $result = mysqli_query($link, $query) or die("Ошибка " . mysqli_error($link)); 
    if($result)
    {
        echo "<span style='color:blue;'>Данные добавлены</span>";
    }
    // закрываем подключение
    mysqli_close($link);
}
?>
<section  class='admin'>
<h2>Добавить нового производителя </h2>
<form method="POST">
Введите производителя:
<input type="text" name="manufacture" />
Введите страну:  
<input type="text" name="country" />
<input type="submit" value="Отправить"/>
</form>
</section>  

<hr>

<?php
require_once 'connection.php'; // подключаем скрипт
// подключаемся к серверу
if(isset($_POST['ID_sales']) && isset($_POST['ID_products']) && isset($_POST['quantity'])){
 
    // подключаемся к серверу
    $link = mysqli_connect($host, $user, $password, $database) 
        or die("Ошибка " . mysqli_error($link)); 
     
    // экранирования символов для mysql
    $ID_sales = htmlentities(mysqli_real_escape_string($link, $_POST['ID_sales']));
    $ID_products = htmlentities(mysqli_real_escape_string($link, $_POST['ID_products']));
    $quantity = htmlentities(mysqli_real_escape_string($link, $_POST['quantity']));
    // создание строки запроса
    $query ="INSERT INTO salecontent VALUES(NULL, '$ID_sales','$ID_products', '$quantity')";
     
    // выполняем запрос
    $result = mysqli_query($link, $query) or die("Ошибка " . mysqli_error($link)); 
    if($result)
    {
        echo "<span style='color:blue;'>Данные добавлены</span>";
    }
    // закрываем подключение
    mysqli_close($link);
}
?>

<section  class='admin'>
<h2>Добавить новое содержание продаж</h2>
<form method="POST">
Id продажи:
<input type="text" name="ID_sales" />
Id товара  
<input type="text" name="ID_products" />
Количество 
<input type="text" name="quantity" />

<input type="submit" value="Отправить"/>
</form>
</section>
<hr>

<?php
require_once 'connection.php'; // подключаем скрипт
// подключаемся к серверу
if(isset($_POST['dateSale']) && isset($_POST['customer'])){
 
    // подключаемся к серверу
    $link = mysqli_connect($host, $user, $password, $database) 
        or die("Ошибка " . mysqli_error($link)); 
     
    // экранирования символов для mysql
    $dateSale = htmlentities(mysqli_real_escape_string($link, $_POST['dateSale']));
    $customer = htmlentities(mysqli_real_escape_string($link, $_POST['customer']));
     
    // создание строки запроса
    $query ="INSERT INTO sales VALUES(NULL, '$dateSale','$customer')";
     
    // выполняем запрос
    $result = mysqli_query($link, $query) or die("Ошибка " . mysqli_error($link)); 
    if($result)
    {
        echo "<span style='color:blue;'>Данные добавлены</span>";
    }
    // закрываем подключение
    mysqli_close($link);
}
?>
<section  class='admin'>
<h2>Добавить новую продажу </h2>
<form method="POST">
Введите дату:
<input type="text" name="dateSale" />
Введите имя клиента:  
<input type="text" name="customer" />
<input type="submit" value="Отправить"/>
</form><br><br>
<hr>




Пошук
<form method="POST" id='welcome1'>

ID
<input type="text" name="ID" />
Назва таблиці
<input type="text" name="base" />
<input type="submit" value="Отправить" />
</form>
</section> 

<br><br><br>


<!-- 
<div id="txtHint"><b></b></div> -->

<?php

require_once 'connection.php'; // подключаем скрипт
// подключаемся к серверу
if(isset($_POST['ID']) && isset($_POST['base'])){
 
    // подключаемся к серверу
    $link = mysqli_connect($host, $user, $password, $database) 
        or die("Ошибка " . mysqli_error($link)); 
     
    // экранирования символов для mysql
    $ID = htmlentities(mysqli_real_escape_string($link, $_POST['ID']));
    $base = htmlentities(mysqli_real_escape_string($link, $_POST['base']));
     
    // создание строки запроса
    $query ="SELECT * FROM $base WHERE ID = $ID";
     
    // выполняем запрос
    $result = mysqli_query($link, $query) or die("Ошибка " . mysqli_error($link)); 
    if($result)
    {
        $rows = mysqli_num_rows($result); // количество полученных строк
         
       
        echo "<table align='center'><tr><th>Id</th><th>Id автобуса</th><th>Id_остановки</th><th>Адрес</th></tr>";
        for ($i = 0 ; $i < $rows ; ++$i)
        {
            $row = mysqli_fetch_row($result);
            echo "<tr>";
                for ($j = 0 ; $j < 6 ; ++$j) echo "<td>$row[$j]</td>";
            echo "</tr>";
        }
        echo "</table>";
         
        // очищаем результат
        mysqli_free_result($result);
    }
    // закрываем подключение
    mysqli_close($link);
}

?>



<div  id="records"></div> 
        
        <p align='center'>
            <input  type="button" id = "getusers" value = "Manufacturs" />
        </p>
      
    </div> 
    <script src="http://code.jquery.com/jquery-3.1.1.min.js"></script>
   
    <script type="text/javascript"> 
        $(function(){ 
          $("#getusers").on('click', function(){ 
          $.ajax({ 
            method: "GET", 
            
            url: "t.php",
          }).done(function( data ) { 
            var result= $.parseJSON(data); 
            var string='<table align="center" width="20%"><tr> <th>id</th><th>manufacture</th> <th>country</th><tr>';
     
           /* from result create a string of data and append to the div */
          
            $.each( result, function( key, value ) { 
              
                string += "<tr> <td>"+value['id']  + "</td><td>"+value['manufacture']+ "</td><td>" +value['country']+"</td> </tr>"; 
                  }); 
                 string += '</table>'; 
              $("#records").html(string); 
           }); 
        }); 
    }); 
    </script> 

</body>
</html>