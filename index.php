<?php 
error_reporting(0);
session_start();
session_destroy();
$error=$_GET['error'];
include ('Modelo/Key.php');
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="CSS/Login.css">
    <link rel="stylesheet" href="CSS/Reload.css">
    <link rel="stylesheet" href="CSS/booststrap.css">
    <!-- Bootstrap CSS -->
    <!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous"> -->
    <!--Fuentes-->
    <!--Titulo-->
    <link rel="icon" href="IMG/simbolo_cac_color.png" type="image/x-icon" />
    <link rel="stylesheet" href="">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,400;1,700&display=swap"
        rel="stylesheet">

    <script src="https://www.google.com/recaptcha/api.js?render=<?php echo SITE_KEY; ?>"></script>

    <!--Css propios -->
    <!-- Recatch -->

    <title>Login</title>
</head>

<body style="font-family: 'Montserrat', sans-serif;font-weight: bold">
    </style>
<div class="" id="contenedor_carga">
        <div id="carga"></div>
</div>

    <div class="ContenedorGe">
        <div class="contenedorLogin">
        <?php if(empty($error)){
	
}else{
?>
<div class="alert alert-danger alert-dismissible fade show">
    <strong> Datos incorrectos, verifique su usuario y contraseña
    <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
</div>
<?php
}
	?>

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
			<img src="IMG/Vector_2646.jpg" alt="" >
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
                        <!-- Grupo: Terminos y Condiciones -->
                        <div class="formulario__grupo" id="grupo__terminos">
                            <label class="formulario__label">
                                <input class="formulario__checkbox" type="checkbox" name="terminos" id="terminos">
                               He leído y acepto la <a href="https://cuentadealtocosto.org/site/wp-content/uploads/2022/10/sgi_dg_22-_politica-de-tratamiento-de-datos-personales-v5.pdf" target="_blank">política</a> y <a href="https://cuentadealtocosto.org/site/wp-content/uploads/2022/10/sgi_dg_24_autorizacion-para-tratamiento-de-datos-personales-general-v4.pdf" target="_blank">autorización de tratamiento de datos personales</a>.    
                                                        </label>
                        </div>


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



    <script type="text/Javascript">
        grecaptcha.ready(function(){

    grecaptcha.execute('<?php echo SITE_KEY; ?>', {action: 'homepage'}).then(function(token) {
        document.getElementById("entrar").value = token;
        });
    });
    </script>

    <script>
    function getReCaptcha() {
        grecaptcha.ready(function() {
            grecaptcha.execute('<?php echo SITE_KEY;?>', {
                action: 'homepage'
            }).then(function(token) {
                document.getElementById("entrar").value = token;
            });
        });
    }

    getReCaptcha();
    setInterval(function() {
        getReCaptcha();
    }, 110000);
    </script>

</html>