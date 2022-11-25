
<?php include('../../Modelo/Autenticar_admin.php')?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bienvenido</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
    <script src="https://cdn.rawgit.com/harvesthq/chosen/gh-pages/chosen.jquery.min.js"></script>
    <link href="https://cdn.rawgit.com/harvesthq/chosen/gh-pages/chosen.min.css" rel="stylesheet"/>
    
    <link rel="stylesheet" href="../../CSS/Admin/styles.css">
    <!-- <link rel="stylesheet" href="../../CSS/Admin/tabs.css"> -->
    <link rel="stylesheet" href="../../CSS/booststrap.css">
    <link rel="stylesheet" href="../../CSS/Login.css">
    <link rel="stylesheet" href="../../CSS/Reload_Esperar.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    

   

    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,400;1,700&display=swap"
        rel="stylesheet">
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
    
    <div class="tab">
        <button class="tablinks" id="btn1" onclick="openCity(event, 'Crear_Token')">Crear Token</button>
        <button class="tablinks" id="btn2"  onclick="openCity(event, 'Crear_Pregunta')">Crear Pregunta</button>
      </div>
      
      <div id="Crear_Token" class="tabcontent">
        <?php include('Crear_token.php')?>
      </div>
      
      <div id="Crear_Pregunta" class="tabcontent">
        <?php include('Crear_Pregunta.php') ?>
      </div>
      

    <script src="../../JS/formularioToken.js"></script>
    <script src="../../JS/bootstrap.bundle.min.js"></script>
    <script src="https://kit.fontawesome.com/c4cc899971.js" crossorigin="anonymous"></script>
    <script src="../../JS/tabs.js"></script>
    <script src="../../JS/jquery-3.6.1.min.js"></script>



    <!-- Tablas -->
    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script src="https://cdn.datatables.net/1.11.4/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.11.4/js/dataTables.bootstrap5.min.js"></script>
    <script src="../../JS/Tablas.js"></script>
    <!-- Tablas -->
    
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script>
     $(".chosen-select").chosen({
        no_results_text: "Oops, nothing found!"
      })
</script>
</body>
</html>



