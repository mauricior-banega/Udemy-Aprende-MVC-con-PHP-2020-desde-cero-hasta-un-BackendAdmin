<!-- 

Aclaraciones: En este archivo vamos a hacer las conexiones  que nos van a servir para loguearnos, para la conexion, para mostrar,crear y eliminar los usuarios. 

-Se crea una variable llamada $stmt que es sinonimos de statement que significa "declaracion", puede usarse cualquier pero es la que se usa por convencion para este tipo de acciones mediante PHP/MySQL.

-->

<?php

   require_once "conexion.php";
    
   //A todos los modelos le podremos esa palabra para poder administrarnos mejor, similar a como hicimos con controlador/plantillacontrolador.php
    class ModeloAdministrador
    {

        /*---------------------------------------
        MOSTRAR ADMINISTRADORES
        -----------------------------------------*/

        public static function mdlMostrarAdministrador($tabla,$item,$valor)
        {   
            //El if preguntara si $item no esta vacio, por ejemplo el mail, entonces que haga la llamada a la tabla que posteriormente retornara los valores del item consultado.

            if($item !=null)
            {
                $stmt = Conexion::conectar()->prepare("SELECT * FROM $tabla WHERE $item = :$item ORDER BY id DESC"); //CONSULTA 1 (1*)

                $stmt->bindParam(":" .$item, $valor, PDO::PARAM_STR); //Enlaza variables como parámetros a una sentencia preparada
                $stmt->execute(); //Ejecuta la consulta
                return $stmt->fetch(); //Retornara solo los valores consultados
            } 
            
            //Pero si esta vacio retornara todos los valores de la tabla.
            else
            {
                $stmt = Conexion::conectar()->prepare("SELECT * FROM $tabla ORDER BY id DESC"); //CONSULTA 2

                //En la conexion de la consulta 1 y 2 vemos que al final tiene la sentencia "ORDER BY id DESC", podria no tenerla pero la usamos en este caso para que nos muestra desde el ultimo valor de la tabla al ultimo cargado.

                $stmt = execute(); //Ejecuta la consulta
                return $stmt->fethAll(); //Retornara todos los valores
            }
        }
    }

?>