<!-- 

Aclaraciones:
 -En este archivo crearemos la conexion con nuestra base de datos. Los pasos previos estan comentados tambien en el archivo "login.php".
 -Los pasos para la conexion lo podemos sacar de la web de PHP ruta: php.net/manual/es/ref.pdo-mysql.php
  La pagina nos explica que hay multiples formas de conectar, asique usaremos la que explica el capacitador para nuestro caso.
-La conexion es la que contiene la funcion conectar().

-->

<?php

    class Conexion
    {
        static public function conectar()
        {
            $link = new PDO ("mysql:host=localhost:dbname=backend_mvc","root","", array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
            PDO::MYSQL_ATTR_INIT_COMMAND =>
            "SET NAMES utf8"));
        }
    }

?>