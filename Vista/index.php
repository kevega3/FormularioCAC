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
    <script src="https://code.jquery.com/jquery-3.6.1.min.js"></script>
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

        <div class="login-modal-overlay">

            <div class="login-modal">
                <h1><b> Iniciar Sesion</b> </h1>
                <h2>Para continuar, porfavor ingrese sus credenciales de acceso</h2>
                <form action="../Modelo/ValidadAdmin.php" method="POST" >
                    <div class="group">
                        <input type="text" required name="user"></span><span class="bar"></span>
                        <label>Usuario</label>
                    </div>
                    <div class="group">
                        <input type="password" required name="pass"></span><span class="bar"></span>
                        <label>Contraseña</label>
                    </div>
                    <button type="submit" class="btn btn-primary">Entrar
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
                <h3>Formulario xxxxxx</h3>
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





    <script src="https://kit.fontawesome.com/c4cc899971.js" crossorigin="anonymous"></script>

    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    <script src="../JS/Alert.js"></script>

    <script src="../JS/login.js"></script>
</body>

</html>