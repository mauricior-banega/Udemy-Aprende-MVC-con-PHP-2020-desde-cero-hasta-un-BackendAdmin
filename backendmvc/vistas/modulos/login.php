<!-- 

Aclaraciones:
-Copiamos el codigo la plantilla ElaAdmin del codigo de "page-login" que reutilizaremos para definir el "login.php". Seleccionamos la seccion del body practicamente, descartamos los script que estan antes de finalizar tambien.
-Agregamos el logo y cambiamos algunos valores de titulos y quitamos los que no vamos a usar comentandolos.

CONEXION CON BASE DE DATOS: http://localhost:8080/phpmyadmin
-Creamos una conexion, vamos a Nuevo y luego le damos el nombre "backend_mvc". Luego importamos la base de datos que ya tenia el proyecto (es simple asique se podria replicar si quisieramos).
-La opcion de importar esta arriba al centro. Nos despliega la opc de Seleccionar el archivo de la base de datos y lo hacemos.
-Seguiremos con mas informacion sobre la conexion en el archivo "conexion.php".

-->

<div class="sufee-login d-flex align-content-center flex-wrap">
        <div class="container">
            <div class="login-content">
                <div class="login-logo">
                    <a href="index.html">
                        <img class="align-content" src="vistas/img/plantilla/logojumplogin.png" alt=""> <!--Añadimos la img del logo diseñado en Canva de Jump -->
                    </a>
                </div>
                <div class="login-form">
                    <form>
                        <div class="form-group">
                            <label>Email</label>
                            <input type="email" class="form-control" id="ingemail" name="ingemail" placeholder="Email">
                        </div>
                        <div class="form-group">
                            <label>Password</label>
                            <input type="password" class="form-control" id="ingpassword" name="ingpassword" placeholder="Password">
                        </div>
                        <div class="checkbox">
                            <label>
                                <input type="checkbox"> Recordar
                            </label>
                <!--QUITA    <label class="pull-right">
                                <a href="#">Forgotten Password?</a>
                            </label>
                -->
                        </div>
                        <button type="submit" class="btn btn-success btn-flat m-b-30 m-t-30">Ingresar</button>
                <!--QUITA   <div class="social-login-content">
                            <div class="social-button">
                                <button type="button" class="btn social facebook btn-flat btn-addon mb-3"><i class="ti-facebook"></i>Sign in with facebook</button>
                                <button type="button" class="btn social twitter btn-flat btn-addon mt-2"><i class="ti-twitter"></i>Sign in with twitter</button>
                            </div>
                        </div>
                        <div class="register-link m-t-15 text-center">
                            <p>Don't have account ? <a href="#"> Sign Up Here</a></p>
                        </div> -->

                    $login = new ControladorAdministrador();
                    $login->ctrIngresoAdministrador();

                    </form>
                </div>
            </div>
        </div>
    </div>