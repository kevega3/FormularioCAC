<div id="Calidad" class="tabcontent">
    <input type="hidden" name="Person" id="Person" value="<?php echo $id?>">
    <?php
    //$TraerPreguntas = 'SELECT * FROM preguntas INNER JOIN areaconocimiento ON preguntas.idAreaCon = areaconocimiento.idAreaConocimiento'; 
    $TraerPreguntas = 'SELECT * FROM preguntas INNER JOIN areaconocimiento ON preguntas.idAreaCon = areaconocimiento.idAreaConocimiento WHERE idPregunta = 142' ;
    $res =  mysqli_query($conn,$TraerPreguntas);
    $contador = 0;
    while ($fila=mysqli_fetch_array($res)) { 
        $Rol = $fila['Rol'];
        $separador = ",";
        $TipoRespuesta = $fila['TipoRespuesta'];
        $Descripcion = $fila['Descripcion'];
        $idPregunta = $fila['idPregunta'];
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
                <select class="validar" name="<?php echo $contador?>" id="<?php echo $contador?>" required>
                    <option disabled selected value="">Seleccionar</option>
                    <?php    
                        }elseif($ValTipoPregunta == 'MultiSelect'){
                        ?>
                    <select data-placeholder="Seleccione uno o varios" multiple class="chosen-select " name="<?php echo $contador?>[]"  id="<?php echo $contador ?>">
                        <option disabled selected value="" required>Seleccione uno o varios</option>
                        <?php    
                        }
                        $TraerRespuestas= "SELECT * FROM `bancorespuesta` WHERE TipoPregunta = '$TipoRespuesta'"; 
                        $ResRespuestas=  mysqli_query($conn,$TraerRespuestas);
                        if($ValTipoPregunta == 'Abierta'){
                        ?>
                        <input type="text" class="validar" placeholder="Si/No Justifique su respuesta" id="<?php echo $contador ?>" name="<?php echo $contador ?>">
                        <input type="hidden" name="<?php echo "PreguntaAbierta". $contador ?>" value="Null" class="validar" id="<?php echo "PreguntaAbierta". $contador ?>">        
                        <?php  
                        }elseif($ValTipoPregunta == 'Porcentaje'){
                        ?>
                        <input type="number" class="validar" placeholder="Agregue el porcentaje" id="<?php echo $contador ?>"
                            name="<?php echo $contador ?>">
                        <input class="validar" type="hidden" name="<?php echo "PreguntaAbierta". $contador ?>" value="Null" id="<?php echo "PreguntaAbierta". $contador ?>">    
                        <?php 
                        }else{
                        while ($filaBuscaRespuestas=mysqli_fetch_array($ResRespuestas)){
                            
                        ?>
                        <option value="<?php echo $filaBuscaRespuestas['Valor']; ?>">
                            <?php echo $filaBuscaRespuestas['Respuesta']; }?></option>
                    </select>
                    <input type="text" class="validar" placeholder="Justifique su respuesta"
                        name="<?php echo "PreguntaAbierta". $contador ?>"
                        id="<?php echo "PreguntaAbierta". $contador ?>">
                    <input type="hidden" value="<?php echo $idPregunta?>" id="<?php echo "Pregunta".$contador ?>" id="<?php echo "Pregunta".$idPregunta ?>">
                    <?php 
                        }
                        ?>


            </div>
        </div>
    </div>
    <?php 
    }  
    }
    
?>
</div>