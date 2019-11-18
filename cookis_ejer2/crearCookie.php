<?php

    setcookie("idioma", $_GET["idioma"], time()+ 70000);//nombre, valor, duración cookie
    header("Location:ver_cookie.php");
?>
