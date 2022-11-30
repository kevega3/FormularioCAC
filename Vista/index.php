<?php 
    include('../Modelo/Autenticar.php');
    if($Report1 == 1 && $Report2== 1 && $Report3== 1 && $Report4== 1 && $Report5== 1 && $Report6== 1 && $Report7== 1 && $Report8== 1 && $Report9== 1 && $Report10== 1 && $Report11== 1 && $Report12== 1 && $Report13== 1 && $Report14== 1 && $Report15== 1 && $Report16== 1 && $Report17== 1 && $Report18== 1 ){
    ?>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
<script src="https://cdn.rawgit.com/harvesthq/chosen/gh-pages/chosen.jquery.min.js"></script>
<link href="https://cdn.rawgit.com/harvesthq/chosen/gh-pages/chosen.min.css" rel="stylesheet" />
<link rel="stylesheet" href="../CSS/Reload.css">
<link rel="icon" href="../IMG/simbolo_cac_color.png" type="image/x-icon" />
<title>Bienvenido</title>
<body style="padding: 0; margin:0;">
<input type="hidden" value="<?php echo $id ?>" id="idPersona">
    <div class="" id="contenedor_carga">
            <div id="carga"></div>
    </div>   
</body>
 


<script src="../JS/Final.js"></script>
<?php    
    }else{
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
    <link rel="stylesheet" href="../CSS/LineaTemporal.css">


    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
    
    <link rel="icon" href="../IMG/simbolo_cac_color.png" type="image/x-icon" />
    <!-- letras   -->
    <title>Bienvenido</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,400;1,700&display=swap"
        rel="stylesheet">
    <!-- letras -->
</head>

<body style="font-family: 'Montserrat', sans-serif;font-weight: bold;">
    </style>




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

        <?php include('Preguntas/btns.html') ?>




        <div class="login-modal-overlay">

            <div class="login-modal">
                <h1><b> BIENVENIDO</b> </h1>
                <form action="../Modelo/ValidadAdmin.php" method="POST">
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



        <?php include('LineaTemporal.php') ?>



        <div class="ContenedorFormulario">




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




            <section class="formularioFeedBack row" id="feedBack">
                <div class="linear"></div>

                <div class="feedBack">
                    <h4><b>INTRODUCCIÓN</b> </h4>
                    <p>
                        Bienvenidos al ejercicio de valoración general de madurez en gestión y gobierno de datos en las
                        entidades del sector salud, la participación de su entidad es fundamental.
                    </p>
                    <span>
                        Recomendaciones para completar este formulario con éxito
                    </span>
                    <li>Contestar todas las preguntas.</li>
                    <li>Justifique su repuesta, cada pregunta tiene un apartado de campo abierto para que explique al
                        detalle su respuesta.</li>
                    <li>Cuando haya contestado cada una de las preguntas puede terminar su cuestionario dándole click al
                        botón enviar.</li>
                    </p>

                </div>
            </section>




            <!-- <div class="conttemp"> -->
            <div class="events-content">
                <input type="hidden" name="Person" id="Person" value="<?php echo $id?>">
                <ol style="padding: 0; margin: 0;">
                    <li class="selected" data-date="01/01/2005">
                        <h2>Area Conocimiento - Almacenamiento</h2>
                        <?php include ('Preguntas/Alacenamiento.php') ?>
                    </li>

                    <li data-date="01/01/2010">
                        <h2>Area Conocimiento - Arquitectura Empresarial</h2>
                        <?php include ('Preguntas/AlamacenamientoEmpre.php') ?>
                    </li>

                    <li data-date="01/01/2015">
                        <h2>Area Conocimiento - Arquitectura de datos</h2>
                        <?php include ('Preguntas/ArquitecturadeDatos.php') ?>
                    </li>

                    <li data-date="01/01/2020">
                        <h2>Area Conocimiento - Calidad</h2>
                        <?php include ('Preguntas/Calidad.php') ?>
                    </li>

                    <li data-date="01/01/2025">
                        <h2>Area Conocimiento - Ciberseguridad</h2>
                        <?php include ('Preguntas/Ciberseguridad.php') ?>
                    </li>

                    <li data-date="01/01/2030">
                        <h2>Area Conocimiento - Estrategia de datos</h2>
                        <?php include ('Preguntas/Estrategia_de_datos.php') ?>
                    </li>

                    <li data-date="01/01/2035">
                        <h2>Area Conocimiento - Gestión de datos maestros</h2>
                        <?php include ('Preguntas/Gestión_de_datos_maestros.php') ?>
                    </li>

                    <li data-date="01/01/2040">
                        <h2>Area Conocimiento - Gobierno</h2>
                        <?php include ('Preguntas/Gobierno.php') ?>
                    </li>

                    <li data-date="01/01/2045">
                        <h2>Area Conocimiento - Mejora de Productividad</h2>
                        <?php include ('Preguntas/Mejora_de_Productividad.php') ?>
                    </li>

                    <li data-date="01/01/2050">
                        <h2>Area Conocimiento - Seguridad de información y de los datos</h2>
                        <?php include ('Preguntas/Seguridad_de_información.php') ?>
                    </li>

                    <li data-date="01/01/2055">
                        <h2>Area Conocimiento - Gestión documental y de contenidos</h2>
                        <?php include ('Preguntas/Gestión_documental_y_de_contenidos.php') ?>
                    </li>

                    <li data-date="01/01/2060">
                        <h2>Area Conocimiento - Integracion e interoperabilidad</h2>
                        <?php include ('Preguntas/Integracion_e_interoperabilidad.php') ?>
                    </li>

                    <li data-date="01/01/2065">
                        <h2>Area Conocimiento - Modelos de transformacion digital</h2>
                        <?php include ('Preguntas/Modelos_de_transformacion_digital.php') ?>
                    </li>

                    <li data-date="01/01/2070">
                        <h2>Area Conocimiento - Metadatos</h2>
                        <?php include ('Preguntas/Metadatos.php') ?>
                    </li>

                    <li data-date="01/01/2075">
                        <h2>Area Conocimiento - Almacenamiento y operaciones</h2>
                        <?php include ('Preguntas/Almacenamiento_y_operaciones.php') ?>
                    </li>


                    <li data-date="01/01/2080">
                        <h2>Area Conocimiento - Datos maestros y de referencia</h2>
                        <?php include ('Preguntas/Datos_maestros_y_de_referencia.php') ?>
                    </li>


                    <li data-date="01/01/2085">
                        <h2>Area Conocimiento - Gestion Arquitectura de datos</h2>
                        <?php include ('Preguntas/Gestion_Arquitectura_de_datos.php') ?>
                    </li>


                    <li data-date="01/01/2090">
                        <h2>Area Conocimiento - Gestión de metadatos</h2>
                        <?php include ('Preguntas/Gestión_de_metadatos.php') ?>
                    </li>


                </ol>
            </div>
            <!-- </div> -->




            <!-- </div> -->
        </div>



        <!-- fooder -->
        <footer>
            <div class="fooder">
                <p>
                    © 2022 Todos los derechos reservados a Cuenta de Alto Costo
                </p>
                <a href="#feedBack" id="redirect" style="color: transparent;">feedBack</a>
            </div>
        </footer>

        <!-- fooder -->

        <!-- container-fluid -->
    </div>

    <script>
    $(".chosen-select").chosen({
        no_results_text: "Reinicia la pagina, Error"
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


    <script src="../JS/LineTiempo.js"></script>
    <script src="../JS/login.js"></script>
    <script src="../JS/btnes.js"></script>

    <script src="../JS/multiselect-dropdown.js"></script>
</body>

</html>

<?php     }?>