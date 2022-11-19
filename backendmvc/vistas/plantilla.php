<!-- 

Pagina Web HTACCESS: https://www.arsys.es/blog/url-amigables-htaccess

-->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Backend admin</title>
</head>
<body>

    <?php

    //Hacemos el llamado a cada archivo mostrandolo con formato HTML

        include "modulos/cabezote.php"; 
        include "modulos/menu.php";
        include "modulos/footer.php";
        
        /*include "modulos/login.php"; Lo haremos cuando finalizemos las primeras 3 secciones de arriba. 

         ||
                   $_GET["ruta"] == "perfil" ||
                   $_GET["ruta"] == "productos"
        */

        if(isset($_GET["ruta"]))
        {
            if($_GET["ruta"] == "inicio" ||
               $_GET["ruta"] == "perfil" ||
               $_GET["ruta"] == "productos" )
            {
                include "modulos/". $_GET["ruta"]. ".php";
            }   

        }
    ?>

</body>
</html>