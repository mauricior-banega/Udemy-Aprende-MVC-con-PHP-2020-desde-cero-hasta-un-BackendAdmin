<!-- 

Aclaraciones: En este archivo vamos a hacer las conexiones  que nos van a servir para loguearnos, para la conexion, para mostrar,crear y eliminar los usuarios. 

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
            if($item !=null)
            {
                $stmt = Conexion::conectar()->prepare("SELECT * FROM $tabla WHERE $item = :$item ORDER BY id DESC");

                $stmt->binParam(":" .$item, $valor, PDO::PARAM_STR);
                $stmt->execute();
                return $stmt->fetch(); //Retornara solo los valores consultados
            } 
            
            else
            {
                $stmt = Conexion::conectar()->prepare("SELECT * FROM $tabla ORDER BY id DESC"); 

                //En la conexion podriamos poner solo "SELECT * FROM $tabla pero le agregamos "ORDER BY id DESC" para que nos muestra desde el ultimo valor de la tabla al primero cargado.

                $stmt = execute();
                return $stmt->fethAll(); //Retornara todos los valores
            }
        }
    }

?>