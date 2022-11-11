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
        <div class="col">
            <div class="titleformul">Pregunta <?php echo $contador." -  ".$Descripcion?>.</div>
            <div class="questionFrom"><?php echo $fila['pregunta']; ?></div>
            <div class="request">
                <?php 
                    $TraerSelect= "SELECT * FROM `bancorespuesta` WHERE TipoPregunta = '$TipoRespuesta'"; 
                    $ResSelect=  mysqli_query($conn,$TraerSelect);
                        while ($filaBuscaSelect=mysqli_fetch_array($ResSelect)){
                            $ValTipoPregunta =  $filaBuscaSelect['ValTipoPregunta'];    
                        }
                        if($ValTipoPregunta == 'Select'){
                        ?>
                    <select class="validar" name="<?php echo $contador?>" id="<?php echo $contador?>" required >
                    <option disabled selected value="">Seleccionar</option>
                    <?php    
                        }elseif($ValTipoPregunta == 'MultiSelect'){
                        ?>
                    <select data-placeholder="Seleccione uno o varios" multiple  class="chosen-select" name="Rol[]" class="validar" id="<?php echo $contador ?>">
                        <option disabled selected value="" required>Seleccione uno o varios</option>
                        <?php    
                        }
                        $TraerRespuestas= "SELECT * FROM `bancorespuesta` WHERE TipoPregunta = '$TipoRespuesta'"; 
                        $ResRespuestas=  mysqli_query($conn,$TraerRespuestas);
                        while ($filaBuscaRespuestas=mysqli_fetch_array($ResRespuestas)){
                        ?>
                        <option value="<?php echo $filaBuscaRespuestas['Respuesta']; ?>">
                            <?php echo $filaBuscaRespuestas['Respuesta']; }?></option>
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