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

Aclaraciones:

 -Usaremos para crear URL amigables con la modificación del archivo .htaccess. Google compila mejor este tipo de paginas donde tiene aplicado este archivo. Lo creamos desde la fuente:
    Pagina Web HTACCESS: https://www.arsys.es/blog/url-amigables-htaccess

-Usaremos la plantilla ElaAdmin de Boostrap que descargaremos para nuestro proyecto. Podemos Googlearla o sacarla de la web: colorlib.com/polygon/elaadmin

-->


<?php

    require_once "controladores/plantilla.controlador.php";

$plantilla = new ControladorPlantilla();
$plantilla->ctrPlantilla();

?>