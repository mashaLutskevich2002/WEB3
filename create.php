<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
</head>
<body>
<p id="link"><a href="index.php">Назад</a></p>
<?php
require_once 'connection.php'; // подключаем скрипт
// подключаемся к серверу
if(isset($_POST['name']) && isset($_POST['bus_number'])){
 
    // подключаемся к серверу
    $link = mysqli_connect($host, $user, $password, $database) 
        or die("Ошибка " . mysqli_error($link)); 
     
    // экранирования символов для mysql
    $name = htmlentities(mysqli_real_escape_string($link, $_POST['name']));
    $bus_number = htmlentities(mysqli_real_escape_string($link, $_POST['bus_number']));
     
    // создание строки запроса
    $query ="INSERT INTO buses VALUES(NULL, '$name','$bus_number')";
     
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
<h2>Добавить новый автобус</h2>
<form method="POST">
<p>Введите название:<br> 
<input type="text" name="name" /></p>
<p>Номер автобуса: <br> 
<input type="text" name="bus_number" /></p>
<input type="submit" value="Отправить"/>
</form>

<?php
require_once 'connection.php'; // подключаем скрипт
// подключаемся к серверу
if(isset($_POST['departure_time']) && isset($_POST['arrival_time'])){
 
    // подключаемся к серверу
    $link = mysqli_connect($host, $user, $password, $database) 
        or die("Ошибка " . mysqli_error($link)); 
     
    // экранирования символов для mysql

    $departure_time = htmlentities(mysqli_real_escape_string($link, $_POST['departure_time']));
    $arrival_time = htmlentities(mysqli_real_escape_string($link, $_POST['arrival_time']));
     
    // создание строки запроса
    $query ="INSERT INTO timetables VALUES(NULL,'$departure_time','$arrival_time')";
     
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
<h2>Добавить новое расписание:</h2>
<form method="POST">
<p>Введите дату прибытия: <br> 
<input type="text" name="departure_time" /></p>
<p>Введите дату отправления: <br> 
<input type="text" name="arrival_time" /></p>

<input type="submit" value="Отправить"/>
</form>


<?php
require_once 'connection.php'; // подключаем скрипт
// подключаемся к серверу
if(isset($_POST['ID_buses']) && isset($_POST['ID_timetables'])  && isset($_POST['address'])){
 
    // подключаемся к серверу
    $link = mysqli_connect($host, $user, $password, $database) 
        or die("Ошибка " . mysqli_error($link)); 
     
    // экранирования символов для mysql
    $ID_buses = htmlentities(mysqli_real_escape_string($link, $_POST['ID_buses']));
    $ID_timetables = htmlentities(mysqli_real_escape_string($link, $_POST['ID_timetables']));
    $address = htmlentities(mysqli_real_escape_string($link, $_POST['address']));
     
    // создание строки запроса
    $query ="INSERT INTO stops VALUES(NULL, '$ID_buses','$ID_timetables', '$address')";
     
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
<h2>Добавить новую остановку</h2>
<form method="POST">
<p>Введите ID_автобуса:<br> 
<input type="text" name="ID_buses" /></p>
<p>Введите ID_расписания:<br> 
<input type="text" name="ID_timetables" /></p>
<p>Введите адрес: <br> 
<input type="text" name="address" /></p>
<input type="submit" value="Отправить"/>
</form>


</body>
</html>

