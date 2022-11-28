<!-- 

Aclaraciones:
 -En este archivo crearemos la conexion con nuestra base de datos. Los pasos previos estan comentados tambien en el archivo "login.php".
 -Los pasos para la conexion lo podemos sacar de la web de PHP ruta: php.net/manual/es/ref.pdo-mysql.php
  La pagina nos explica que hay multiples formas de conectar, asique usaremos la que explica el capacitador para nuestro caso.
-La conexion es la que contiene la funcion conectar().
-(1*) Trozo de codigo añadido en video (13. Creando controlador y conectando con PDO)
-->

<?php

    class Conexion
    {
        public static function conectar()
        {
            $link = new PDO ("mysql:host=localhost:dbname=backend_mvc","root","", array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
            PDO::MYSQL_ATTR_INIT_COMMAND =>
            "SET NAMES utf8"));
            
            return $link; //(1*)
        }
    }

?>