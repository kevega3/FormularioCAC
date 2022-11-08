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
    <link rel="stylesheet" href="../CSS/tabs.css">
    <link rel="stylesheet" href="../CSS/fooder.css">
    <title>Bienvenido</title>
    <link rel="icon" href="../IMG/simbolo_cac_color.png" type="image/x-icon" />
    <!-- letras   -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,400;1,700&display=swap"
        rel="stylesheet">
    <!-- letras -->
</head>

<body style="font-family: 'Montserrat', sans-serif;font-weight: bold;background: #e6e3f0">
    </style>



    <div class="container-fluid ">
        <div class="headerform">
            <div class="containerImgIcono">
                <img src="../IMG/simbolo_cac_color.png" class="iconoCAC" alt="" width="60px">
                <h3>Formulario xxxxxx</h3>
            </div>

            <div class="home">
                <button onclick="CerrarSesion()">
                    <i class="fas fa-home"></i>
                </button>
            </div>
        </div>

        <!-- container-fluid -->





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
                <div class="tab">
                    <button class="tablinks" onclick="openCity(event, 'Almacenamiento')">Almacenamiento
                        <buttom class="circulo">2</buttom>
                    </button>
                    <button class="tablinks" onclick="openCity(event, 'Almacenamiento y operaciones')">Almacenamiento y operaciones 
                        <buttom class="circulo">10</buttom>
                    </button>
                    <button class="tablinks" onclick="openCity(event, 'Arquitectura Empresarial')">Arquitectura Empresarial
                        <buttom class="circulo">2</buttom>
                    </button>

                </div>

            </div>

            <div class="formularioFeedBack row ">
                <div class="linear"></div>

                <div class="feedBack">
                    <h2><b> FEEDBACK</b> </h2>
                    <p>
                        Lorem ipsum, dolor sit amet consectetur adipisicing elit. Quasi enim ostrum illo, a harum
                        rerum,
                        suscipit repellendus placeat omnis minima molestias
                        id? Illo quo in eos officiis ullam sit ea? Lorem ipsum dolor sit amet consectetur
                        adipisicing
                        elit. Quidem, fuga repella
                        t deserunt atque
                    </p>
                </div>
            </div>

            

            <?php include ('Tabs/taps_Alacenamiento.php') ?>

            




           
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



    <script src="https://kit.fontawesome.com/c4cc899971.js" crossorigin="anonymous"></script>

    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    <script src="../JS/Alert.js"></script>
    <script src="../JS/tabs.js"></script>
</body>

</html>