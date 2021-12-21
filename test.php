<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<button id='btn'>Button</button>
<script>

let	id_product = 321;
let qty_product = 2;

const request = new XMLHttpRequest();

const url = "admin.php";
 
const params = "id_product=" + id_product+ " qty_product=" + qty_product;
 
request.open("POST", url, true);
 
request.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
 
request.addEventListener("readystatechange", () => {

    if(request.readyState === 4 && request.status === 200) {       
    document.write(params)
    }
});
 
//	Вот здесь мы и передаем строку с данными, которую формировали выше. И собственно выполняем запрос. 
request.send(params);
</script>
</body>
</html>