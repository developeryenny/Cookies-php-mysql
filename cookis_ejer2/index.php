<!doctype html>
<html lang="en">
    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

        <title>WELCOME!</title>
    </head>
    <body>
<?php
//compruebo si antes se creo la cookie
    if(isset($_COOKIE["idioma"])){
        if($_COOKIE["idioma"]=="es"){
            header("Location:spanish.php");
        }elseif ($_COOKIE["idioma"]=="en") {
            header("Location:english.php");
        }
    }
    

?>
        
        
        <div class="container">
        
                <div id="titulo" class="col-xs-12 col-md-12 col-md-offset-2">
                    <h1 class="display-1">Elige el idioma</h1>
                 </div>
            
         
            <!-- Content here -->
            <div class="row">
                <div class="col-sm">
                    <a href="crearCookie.php?idioma=es">
                        <img src="http://localhost/estudiandophp/curso_php_2019/31_cookies/cookis_ejer2/img/banspain.png" width="275" height="200" > 
                    </a>
                </div>
                 <div class="col-sm">
                   <a href="crearCookie.php?idioma=en">
                       <img src="http://localhost/estudiandophp/curso_php_2019/31_cookies/cookis_ejer2//img/binglesa.png" width="275" height="200">  
                   </a>
                 </div>
             </div>
           </div>



                                <!-- Optional JavaScript -->
                                <!-- jQuery first, then Popper.js, then Bootstrap JS -->
                                <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
                                <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
                                <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
                                </body>
                                </html>
