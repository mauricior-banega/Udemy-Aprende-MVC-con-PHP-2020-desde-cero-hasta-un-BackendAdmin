<?php
    /*
      Sentencia "require_once": Sirve para enlazar un archivo con otro; podemos utilizar "include"como vimos en el practico(Udemy - PHP y MySQLi - Conceptos básicos para principiantes), incluso require solo, pero hay una diferencia que explicamos:
       - require: Cuando se hace la llamada y este no encuentra la ruta el te manda un error. Y hace la llamada, varias veces.
       - include: Cuando se hace la llamada pero no manda error, sino que muestra una alerta, un warning.
       - require_once: Idem a "require" pero hace la llamada una sola vez.
    */
    
    require_once "clases.php";

    //Instanciamos la clase
    $plantilla = new Principal();
    $plantilla->Inicio();

?>