<!-- 

Aclaraciones:
 -Este archivo, nos sirve para las rutas de las imagenes, cuando guardamos nuestras imagenes o hacemos alguna funcion de autoguardado, entonces en la funcion almacenamos la ruta general y lo que vamos a obtener si lo cambiamos, lo ponemos en un servidor, cambiamos lo que contiene el http y utilizamos esa ruta. Sirve en breves palabras para hacerlo mas ordenado a nuestro proyecto.


-->

<?php

    class Ruta
    {
        static public function ctrRuta()
        {
            return "http://localhost/mecanica";
        }
    }

?>