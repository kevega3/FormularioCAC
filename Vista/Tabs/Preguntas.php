<div id="Calidad" class="tabcontent">

    <?php
    $TraerPreguntas = 'SELECT * FROM preguntas INNER JOIN areaconocimiento ON preguntas.idAreaCon = areaconocimiento.idAreaConocimiento'; 
    $res =  mysqli_query($conn,$TraerPreguntas);
    $contador = 0;
    while ($fila=mysqli_fetch_array($res)) { 
        $Rol = $fila['Rol'];
        $separador = ",";
        $TipoRespuesta = $fila['TipoRespuesta'];
        $Descripcion = $fila['Descripcion'];
        $separada = explode($separador, $Rol);
        
        if(in_array($RolPersona, $separada)){
            $contador++;
        ?>
    <div class="formularioQuestion linearBlue row">
        <div class="col-12">
            <div class="titleformul">Pregunta <?php echo $contador.". -  ".$Descripcion?></div>
            <div class="questionFrom"><?php echo $fila['pregunta']; ?></div>
            <div class="request">
                <?php 
                    $TraerRespuestas= "SELECT * FROM `bancorespuesta` WHERE TipoPregunta = '$TipoRespuesta'"; 
                    $ResRespuestas=  mysqli_query($conn,$TraerRespuestas);
                        while ($filaBuscaTipoInput=mysqli_fetch_array($ResRespuestas)){
                            $ValTipoPregunta =  $filaBuscaTipoInput['ValTipoPregunta'];    
                        }
                        if($ValTipoPregunta == 'Select'){
                        ?>
                <select class="select" name="Pregunta1" id="Pregunta1" required>
                    <option disabled selected value="">Seleccionar</option>
                    <?php    
                        }elseif($ValTipoPregunta == 'MultiSelect'){
                        ?>
                    <select data-placeholder="¿Aquien se le va a preguntar?" multiple class="chosen-select"
                        name="Rol[]">
                        <option disabled selected value="" required>¿Aquien se le va a preguntar?</option>

                        <?php    
                        }
                        while ($filaBuscaTipoInput=mysqli_fetch_array($ResRespuestas)){
                        ?>
                        <option value="<?php echo $filaBuscaTipoInput['Respuesta']; ?>">
                            <?php echo $filaBuscaTipoInput['Respuesta']; }?></option>


                    </select>
            </div>
        </div>
    </div>


    <?php 
    }  
    }
    
?>

    <!-- <?php 
 $ResRespuestas = mysqli_query($conn,$TraerRespuestas);
 while ($filaBuscaTipoInput=mysqli_fetch_array($ResRespuestas)){
?>

    <option value="<?php echo $filaBuscaTipoInput['Respuesta']; ?>">
        <?php echo $filaBuscaTipoInput['Respuesta']; }?></option> -->

</div>