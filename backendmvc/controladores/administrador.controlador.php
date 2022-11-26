<!-- 

Aclaraciones: En este archivo crearemos nuestro primer controlador de ingreso al sistema.

-->

<?php

class ControladorAdministrador
{
   public function ctrIngresoAdministrador()
   {
       if(isset($_POST["ingemail"]))
       {

         if(preg_match('/^[^0-9][a-zA-Z0-9]+([.][z-zA-Z0-9_]+)*[@][a-zA-Z0-9_]+([.][a-zA-Z0-9_]+)*[.][a-zA-Z](2,4)$/', $POST["ingemail"]) && preg_match('/^[a-zA-Z0-9]+$/', $POST["ingpassword"]))
         {
            $encriptar = crypt($_POST["ingpassword"], '$2a$07$asxx54ahjppf45sd87a5a4dDDGsystemdev$');
         }

         $tabla = "administrador";
         $item = "email";
         $valor = $_POST["ingemail"];

         $respuesta = ModeloAdministrador::mdlMostrarAdministrador($tabla,$item,$valor);

         if($respuesta ["email"] == $_POST["ingemail"] && $respuesta["password"]==$encriptar)
         {
            if($respuesta["estado"]==1)
            {
               $_SESSION["validarSesionBackend"]="ok";
               $_SESSION["id"]=$respuesta["id"];
               $_SESSION["nombre"]=$respuesta["nombre"];
               $_SESSION["foto"]=$respuesta["foto"];
               $_SESSION["email"]=$respuesta["email"];
               $_SESSION["perfil"]=$respuesta["perfil"];

               echo '</script>

                     window.location = "inicio";

                     </script>';
            }
         }

         else
         {
            echo '</br>
            <div class="alert-danger">Error al ingresar, vuelva a intentarlo</div>';
         }

       }
   }
}
?>