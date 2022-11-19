<!-- 
    Curso: Udemy- Aprende MVC con PHP 2020 desde cero hasta un BackendAdmin

    Tema: En este curso se hará un panel de administración usando MVC, PHP 7 y base de datos MYSQL, PDO. 

    Se aprendera:
    -Programación con php7
    -Patrón de arquitectura Mvc
    -Pdo y Mysql
    -Bootstrap 4 actual
    -Crear un login
    -Crear un backend admin

Pagina Web HTACCESS: https://www.arsys.es/blog/url-amigables-htaccess

-->


<?php

    require_once "controladores/plantilla.controlador.php";

$plantilla = new ControladorPlantilla();
$plantilla->ctrPlantilla();

?>