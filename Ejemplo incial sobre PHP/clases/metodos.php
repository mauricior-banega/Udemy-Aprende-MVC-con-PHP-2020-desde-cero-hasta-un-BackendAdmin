<?php

/*
-Aclaracion de error: Tal cual muestra en el video no anda. Y esto es por que desde la web de PHP en la ruta: https://www.php.net/manual/es/language.oop5.basic.php donde dice lo siguiente: 

Advertencia: Llamar a un método no estático arroja estáticamente un Error. Antes de PHP 8.0.0, esto generaría un aviso de desaprobación obsoleta, y $this esto no estaría definido.

-Esto quiere decir que al metodo creado "public mostrar" debemos definirlo como estatico "static".
*/
class Metodo
{
    public static function mostrar($nombre)
    {
        echo "El nombre es: ".$nombre;
    }
}

$nombre ="ever";
$resultado = Metodo::mostrar($nombre);

?>

