<?php 
    include('../Modelo/Autenticar.php');
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../CSS/booststrap.css">
    <link rel="stylesheet" href="../CSS/Formulario.css">
    <link rel="stylesheet" href="../CSS/fooder.css">
    <link rel="stylesheet" href="../CSS/btnlogin.css">
    <link rel="stylesheet" href="../CSS/Reload_Esperar.css">
    <link rel="stylesheet" href="../CSS/Reload.css">

    
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
    <script src="https://cdn.rawgit.com/harvesthq/chosen/gh-pages/chosen.jquery.min.js"></script>
    <link href="https://cdn.rawgit.com/harvesthq/chosen/gh-pages/chosen.min.css" rel="stylesheet"/>
    <!-- <script src="https://code.jquery.com/jquery-3.6.1.min.js"></script> -->
    <title>Bienvenido</title>
    <link rel="icon" href="../IMG/simbolo_cac_color.png" type="image/x-icon" />
    <!-- letras   -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,400;1,700&display=swap"
        rel="stylesheet">
    <!-- letras -->
</head>

<body style="font-family: 'Montserrat', sans-serif;font-weight: bold;">
    </style>


    <div class="" id="contenedor_carga">
        <div id="carga"></div>
</div>

    <div class="loader ">
        <div class="ContenedorEsperar">
            <center>
                <p class="Esperar">Espera un momento porfavor ...</p>
            </center>
        </div>
        <div id="carga">
        </div>
    </div>


    <div class="container-fluid ">

        <button class="btnEnviar" id="Import" onclick="ValidValues()">
        <i class="fas fa-paper-plane"></i>
        </button>

        <div class="login-modal-overlay">

            <div class="login-modal">
                <h1><b> BIENVENIDO</b> </h1>
                <form action="../Modelo/ValidadAdmin.php" method="POST" >
                    <div class="group">
                        <input type="text" required name="user"></span><span class="bar"></span>
                        <label>Usuario</label>
                    </div>
                    <div class="group">
                        <input type="password" required name="pass"></span><span class="bar"></span>
                        <label>Contraseña</label>
                    </div>
                    <button type="submit" class="btnEntrarLog">Entrar
                        <div class="ripples buttonRipples">
                            <span class="ripplesCircle"></span>
                        </div>
                    </button>
                </form>
            </div>

        </div>




        <div class="headerform">
            <div class="containerImgIcono">
                <img src="../IMG/simbolo_cac_color.png" class="iconoCAC" alt="" width="60px">
                
                <h5>ESTUDIO DE MADUREZ EN GOBIERNO Y GESTIÓN DEL DATO</h5>
            </div>

            <div class="home">
                <button onclick="CerrarSesion()" class="iconhome ">
                    <i class="fas fa-home"></i>
                </button>

             
                    <button type="text" class="openb icontools"><i class="fas fa-tools"></i>
                        <div class="ripples buttonRipples"><span class="ripplesCircle"></span></div>
                    </button>
              





            </div>
        </div>

        <!-- container-fluid -->







        <div class="ContenedorFormulario">


            <?php //include('TodosTaps.php')?>


            <!-- <div class="contenedorGrd"> -->
            <div class="formularioHeader row">
                <div class="col-4">
                    <div class="paralelogramo">
                        <p>CAC</p>
                    </div>
                </div>
                <div class="col-8">
                    <div class="TituloCAC">
                        <span class="Nomnbre">CUENTA DE ALTO COSTO</span>
                    </div>
                </div>
            </div>

            <div class="formularioFeedBack row ">
                <div class="linear"></div>

                <div class="feedBack">
                    <h3><b>INTRODUCCIÓN</b> </h3>
                    <p>
                    Bienvenidos al ejercicio de valoración general de madurez en gestión y gobierno de datos en las entidades del sector salud, la participación de su entidad es fundamental.
                    </p>
                    <span>
                    Complete el cuestionario con exito:
                    </span>
                    <li>Conteste todas las preguntas.</li>
                    <li>Justifique sus repuestas, cada pregunta tiene un apartado de campo abierto para que explique al detalle su respuesta.</li>
                    <li>Cuando haya contestado cada una de las preguntas puede terminar su cuestionario dandole click al boton enviar.</li>
                    </p>
                    
                </div>
            </div>




            <?php include ('Tabs/Preguntas.php') ?>









            <!-- </div> -->
        </div>



        <!-- fooder -->
        <footer>
            <div class="fooder">
                <p>
                    © 2022 Todos los derechos reservados a Cuenta de Alto Costo
                </p>
            </div>
        </footer>

        <!-- fooder -->

        <!-- container-fluid -->
    </div>

    <script>
     $(".chosen-select").chosen({
        no_results_text: "Oops, nothing found!"
      })
</script>
<script>
 
    window.onload = function() {
        var contenedor = document.getElementById('contenedor_carga');
        contenedor.style.visibility = 'hidden';
        contenedor.style.opacity = '0';
    }
  
</script>



    <script src="https://kit.fontawesome.com/c4cc899971.js" crossorigin="anonymous"></script>

    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    <script src="../JS/Alert.js"></script>

    <script src="../JS/login.js"></script> 
</body>

</html>