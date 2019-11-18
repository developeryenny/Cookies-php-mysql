<?php

if(!$_COOKIE["idioma"]){
    header("Location:index.php");
    
}elseif ($_COOKIE["idioma"]=="es") {
  header("Location:spanish.php"); 
}else if($_COOKIE["idioma"]=="en"){
    header("Location: english.php");
}

?>