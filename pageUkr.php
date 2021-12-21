<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title></title>
    <link rel="stylesheet" href="css/page.css">
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@500;600&family=Roboto+Slab:wght@400;500;600&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.1/css/all.css"
integrity="sha384-gfdkjb5BdAXd+lj+gudLWI+BXq4IuLW5IT+brZEZsLFm++aCMlF1V92rMkPaX4PP" crossorigin="anonymous">
<link href="https://fonts.googleapis.com/css2?family=Rubik:wght@400;500&display=swap" rel="stylesheet">
</head>
<body>
<header class="header">
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
            <a class="nav-el" href="sofa.html">Дивани</a>
            <a class="nav-el" href="chair.html">Стільці</a>
            <a class="nav-el" href="table.html">Столи</a>
            <a class="nav-el" href="armchair.html">Крісла</a>
            <a class="nav-el" href="cupboard.html">Шафи</a>
        </div>
        <div class="icons">
           <a href="authorization.php" class="icons_a" ><i class="fas fa-user-alt"></i></a> 
           <a href="" class="icons_a"> <i class="fas fa-shopping-basket"></i></a>
        </div>
        </form>

        <form action='control.php' method='get' >     
<button style='background: #2E2E2E;border-style: none;' onclick='editCookie("rus")'><img src = 'img/rus.jpg' width=30px></button>
</form>

<form action='control.php' method='get' >       
<button style='background: #2E2E2E;border-style: none;' onclick='editCookie("ukr")'><img src = 'img/ukr.jpg' width=30px></button>
</form>

<form action='control.php' method='get'> 
<button style='background: #2E2E2E;border-style: none;' onclick='editCookie("eng")'><img src = 'img/eng.jpg' width=30px></button>

</form>


<script>
  
    function editCookie(val){
        document.cookie = `lang=${val}`;
    }
    

</script>
    


    



    </div> 
    </div>
    <div class="header-main">
        <div class="container-header">
        <div class="header-main__tittle">
            <p class="header-main__text">ЗАТИШНІ МЕБЛІ ДЛЯ ВАС<br>І ДЛЯ ВАШОЇ РОДИТИ</p>
        </div>
        <a href="furniture.php" class="header-main__button" target="_self">
            Выбрати меблі
        </a>
    </div>
    </div>
</header>
<section class="main-info">
    <div class="container">
    </div>
</section>
</body>
</html>