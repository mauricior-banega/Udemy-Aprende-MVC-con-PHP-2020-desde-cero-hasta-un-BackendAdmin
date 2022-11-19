<!-- 

Aclaraciones:
(1*) Cuando copiamos el codigo la plantilla ElaAdmin del codigo de index.html que reutilizaremos para definir el "cabezote" que seria el header del anterior archivo, hay una linea div (<div id="right-panel" class="right-panel">) que esta comentada como Right Panel para darnos cuenta. Esta la corta de "cabezote" y la pega aqui en plantilla.php y la define mediante un echo como vemos.

(2*) Aclaracion: 

JS- Exportamos los script de los JS de ElaAdmin en este documento. Asi como tambien copiamos la carpeta "assets" en vistas de nuestro archivo que contiene los js. Por ello es que la ruta que esta codificada al copiarla es otra la modificamos a <script src="vistas/assets/DEMAS ARCHIVOS"></script> , es decir le agregamos que esta en vistas la carpeta.
CSS - Exportamos los link rel de CSS de ElaAdmin en este documento. Asi como tambien copiamos la carpeta "assets" en vistas de nuestro archivo que contiene los css. Por ello es que la ruta que esta codificada al copiarla es otra la modificamos a todos los href="vistas/assets/css/DEMAS ARCHIVOS"> , es decir le agregamos que esta en vistas la carpeta.

-->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Backend admin</title>

    <!--Librerias Importadas de ElaAdmin las pegamos aca (2*)-->

    <link rel="apple-touch-icon" href="https://i.imgur.com/QRAUqs9.png">
    <link rel="shortcut icon" href="https://i.imgur.com/QRAUqs9.png">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/normalize.css@8.0.0/normalize.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/font-awesome@4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/lykmapipo/themify-icons@0.1.2/css/themify-icons.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/pixeden-stroke-7-icon@1.2.3/pe-icon-7-stroke/dist/pe-icon-7-stroke.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/flag-icon-css/3.2.0/css/flag-icon.min.css">
    <link rel="stylesheet" href="assets/css/cs-skin-elastic.css">
    <link rel="stylesheet" href="vistas/assets/css/style.css">
    <!-- <script type="text/javascript" src="https://cdn.jsdelivr.net/html5shiv/3.7.3/html5shiv.min.js"></script> -->
    <link href="https://cdn.jsdelivr.net/npm/chartist@0.11.0/dist/chartist.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/jqvmap@1.5.1/dist/jqvmap.min.css" rel="stylesheet">

    <link href="https://cdn.jsdelivr.net/npm/weathericons@2.1.0/css/weather-icons.css" rel="stylesheet" />
    <link href="https://cdn.jsdelivr.net/npm/fullcalendar@3.9.0/dist/fullcalendar.min.css" rel="stylesheet" />


</head>
<body>

    <?php

    //Hacemos el llamado a cada archivo mostrandolo con formato HTML

        include "modulos/menu.php"; //1º Inclusion: Menu
       
        echo '<div id="right-panel" class="right-panel">';  //Right Panel (1*)

        include "modulos/cabezote.php"; //2º Inclusion: Cabezote
        
      //include "modulos/login.php"; Lo haremos cuando finalizemos las primeras 3 secciones de arriba.
        

        if(isset($_GET["ruta"]))
        {
            if($_GET["ruta"] == "inicio" ||
               $_GET["ruta"] == "perfil" ||
               $_GET["ruta"] == "productos" )
            {
                include "modulos/". $_GET["ruta"]. ".php";
            }   

        }

        include "modulos/footer.php"; //3º Inclusion: Footer

        echo '</div>';
    ?>


<!--Scripts Importados de ElaAdmin las pegamos aca -->

<!-- Scripts -->
<script src="https://cdn.jsdelivr.net/npm/jquery@2.2.4/dist/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.4/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/js/bootstrap.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/jquery-match-height@0.7.2/dist/jquery.matchHeight.min.js"></script>
    <script src="vistas/assets/js/main.js"></script> <!-- (2*) -->

    <!--  Chart js -->
    <script src="https://cdn.jsdelivr.net/npm/chart.js@2.7.3/dist/Chart.bundle.min.js"></script>

    <!--Chartist Chart-->
    <script src="https://cdn.jsdelivr.net/npm/chartist@0.11.0/dist/chartist.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/chartist-plugin-legend@0.6.2/chartist-plugin-legend.min.js"></script>

    <script src="https://cdn.jsdelivr.net/npm/jquery.flot@0.8.3/jquery.flot.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/flot-pie@1.0.0/src/jquery.flot.pie.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/flot-spline@0.0.1/js/jquery.flot.spline.min.js"></script>

    <script src="https://cdn.jsdelivr.net/npm/simpleweather@3.1.0/jquery.simpleWeather.min.js"></script>
    <script src="vistas/assets/js/init/weather-init.js"></script>

    <script src="https://cdn.jsdelivr.net/npm/moment@2.22.2/moment.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/fullcalendar@3.9.0/dist/fullcalendar.min.js"></script>
    <script src="vistas/assets/js/init/fullcalendar-init.js"></script>

</body>
</html>