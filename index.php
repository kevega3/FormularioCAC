
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="CSS/Login.css">
    <link rel="stylesheet" href="CSS/Reload.css">
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <!--Fuentes-->
    <!--Titulo-->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,400;1,700&display=swap"
        rel="stylesheet">

    <!--Css propios -->
    <!-- Recatch -->

    <title>Login</title>
</head>

<body>
<div class="" id="contenedor_carga">
        <div id="carga"></div>
</div>

    <div class="ContenedorGe">
        <div class="contenedorLogin">

            <div class="row">
                <div class="col-1"></div>
                <div class="col-3 colorAzul"></div>
                <div class="col-4 colorMorado"></div>
                <div class="col-3 colorVerde"></div>
                <div class="col-1"></div>
            </div>


            <div class="row contenedorFormulario">
            <div class="col-sm-1 d-md-block col-md-1 vacio"></div>


            <div class="d-none d-md-block  col-md-6 col-lg-6 p-0">
			<img src="img/Vector_2646.jpg" alt="" >
		</div>

                <div class="col-sm-10 col-md-4 col-lg-4 formularioCAC">
                    <div>
                    <img src="IMG/H_cac_color_fondo.png" style="width: 80%;" alt="">
                    </div>
                    <div class="verificacionCodigo">
                        <h3>Bienvenido</h3>
                        <p>En este paso digite su codigo de acceso</p>
                    </div>
                    <form action="Modelo/ValidadEntidad.php" method="POST" class="formulario" id="formulario">

                        <!-- Grupo: Usuario -->
                        <div class="formulario__grupo" id="grupo__codigo">
                            <label for="usuario" class="formulario__label">Codigo de verificación</label>
                            <div class="formulario__grupo-input">
                                <input type="text" class="formulario__input" name="codigo" id="codigo"
                                    placeholder="Digite el codigo que se le asigno " />
                                <i class="formulario__validacion-estado fas fa-times-circle"></i>
                            </div>
                            <p class="formulario__input-error">
                                El usuario debe digitar el codigo que se le asignó
                            </p>
                        </div>
                        <br>



                        <div class="formulario__mensaje" id="formulario__mensaje">
                            <p>
                                <i class="fas fa-exclamation-triangle"></i> <b>Error:</b> Por favor
                                rellena el formulario correctamente.
                            </p>
                        </div>

                        <br>

                        <div class="formulario__grupo formulario__grupo-btn-enviar">
                            <input type="hidden" name="entrar" id="entrar" />
                            <button type="submit" class="formulario__btn">Iniciar Sesion</button>
                        </div>

                    </form>
                    <div class="Derechos">
                        <p>© 2022 Todos los derechos reservados a Cuenta de Alto Costo
                            Términos y condiciones . Políticas de privacidad y condiciones de uso.</p>
                    </div>
                </div>

                <div class="col-sm-1 d-md-block col-md-1 vacio"></div>


            </div>

            <!-- CONTENEDOR LOG-->
        </div>
    </div>
    <!-- CONTENEDOR -->

</body>




<!--Fonazome-->
<script src="https://kit.fontawesome.com/c4cc899971.js" crossorigin="anonymous"></script>

<!--Formulario-->

<script src="JS/formularioEntidades.js">
</script>
<script>
 
    window.onload = function() {
        var contenedor = document.getElementById('contenedor_carga');
        contenedor.style.visibility = 'hidden';
        contenedor.style.opacity = '0';
    }
  
</script>
</html>