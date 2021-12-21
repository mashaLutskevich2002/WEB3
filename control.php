<?php

if($_COOKIE['lang'] == 'rus'){
    include 'page.php';
    echo '<h2 align="center">Ваш язык: Русский </h2>';
}elseif($_COOKIE['lang'] == 'ukr'){
    include 'pageUkr.php';
    echo '<h2 align="center">Ваша мова: Українська </h2>';
}elseif($_COOKIE['lang'] == 'eng'){
    include 'pageEng.php';
    echo '<h2 align="center">Your lang: English </h2>';
}else{
    setcookie('lang', 'rus',time() + (3600 * 24 * 180));
    include 'page.php';
    echo '<h2 align="center">Ваш язык: Русский </h2>';
}
?>

<script>

(function updateURL(){
        let cookieValue = document.cookie.replace(/(?:(?:^|.*;\s*)lang\s*\=\s*([^;]*).*$)|^.*$/, "$1");
        let baseUrl = window.location.protocol + "//" + window.location.host + window.location.pathname;
        let newUrl = baseUrl + `?leng=${cookieValue}`;
        history.pushState(null, null, newUrl);
       
    })()
 

</script>