<div id="Calidad" class="tabcontent">

    <?php 
    $TraerCalida = "SELECT * FROM `preguntas` WHERE idAreaCon = 4 and TipoRespuesta ='Select_deacuerdo'";
    $res =  mysqli_query($conn,$TraerCalida);
    $contador = 0;
    while ($fila=mysqli_fetch_array($res)) { 
        $Rol = $fila['Rol'];
        $separador = ",";
        $separada = explode($separador, $Rol);

        if(in_array($RolPersona, $separada)){
            $contador++;
        ?>
    <div class="formularioQuestion linearBlue row">
        <div class="col-12">
            <div class="titleformul">Pregunta <?php echo $contador?>.</div>
            <div class="questionFrom"><?php echo $fila['pregunta']; ?></div>
            <div class="request">
                <select class="select" name="Pregunta1" id="Pregunta1" required>
                    <option disabled selected value="">Seleccionar</option>
                    <?php
                        $NuPregunta = $fila['idPregunta'];
                        
                        $sqlPregunta1 = "SELECT * FROM `bancorespuesta` WHERE idPregunta = 1"; 

                        $Pregunta1res =  mysqli_query($conn,$sqlPregunta1);
                        while ($filaPre1=mysqli_fetch_array($Pregunta1res)){
                    ?>
                    <option value="<?php echo $filaPre1['Respuesta'] ?>">
                        <?php echo $filaPre1['Respuesta']; }?></option>

                    <input type="text" class="AbiertaCalidad" name="Justifique su respuesta"
                        placeholder="Justifique su respuesta">


            </div>
        </div>
    </div>


    <?php 
    }  
    }
    
?>

<?php 
    $TraerCalida = "SELECT * FROM `preguntas` WHERE idAreaCon = 4 and TipoRespuesta ='Select_Tecnologia'";
    $res =  mysqli_query($conn,$TraerCalida);
    while ($fila=mysqli_fetch_array($res)) { 
        ?>
    <!-- <div class="formularioQuestion linearBlue row">
        <div class="col-12">
            <div class="titleformul">Pregunta <?php echo "10"?>.</div>
            <div class="questionFrom"><?php echo $fila['pregunta']; ?></div>
            <div class="request">
                <select class="select" name="Pregunta1" id="Pregunta1" required>
                    <option disabled selected value="">Seleccionar</option>
                    <?php
                        $NuPregunta = $fila['idPregunta'];
                        
                        $sqlPregunta1 = "SELECT * FROM `bancorespuesta` WHERE idPregunta = 2"; 

                        $Pregunta1res =  mysqli_query($conn,$sqlPregunta1);
                        while ($filaPre1=mysqli_fetch_array($Pregunta1res)){
                    ?>
                    <option value="<?php echo $filaPre1['Respuesta'] ?>">
                        <?php echo $filaPre1['Respuesta']; }?></option>

                    <input type="text" class="AbiertaCalidad" name="<?php echo "Pregunta".$NuPregunta ?>"
                        placeholder="Justifique su respuesta">


            </div>
        </div>
    </div> -->


    <?php 
    }
    
?>

</div>
