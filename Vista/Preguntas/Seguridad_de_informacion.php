<div class="ContGracias">  
    <h3 id="ContGraciasSeguridadInfo">
        No hay preguntas
    </h3>
</div>


<div id="Calidad" class="tabcontent">
    
    <?php
    $TraerPreguntas = 'SELECT * FROM preguntas INNER JOIN areaconocimiento ON preguntas.idAreaCon = areaconocimiento.idAreaConocimiento WHERE idAreaCon = 10' ;    $res =  mysqli_query($conn,$TraerPreguntas);
    $contador = 0;
    while ($fila=mysqli_fetch_array($res)) { 
        $Rol = $fila['Rol'];
        $separador = ",";
        $Rolperson2 = "1";
        $TipoRespuesta = $fila['TipoRespuesta'];
        $Descripcion = $fila['Descripcion'];
        $idPregunta = $fila['idPregunta'];
        $separada = explode($separador, $Rol);
        

        if($Report10 == 1 ){
            break;
        }else{
            if(in_array($Rolarray[0], $separada) || in_array($Rolarray[1], $separada) || in_array($Rolarray[2], $separada) || in_array($Rolarray[3], $separada) || in_array($Rolarray[4], $separada) ){
                $contador++;
$prueba10 = 1;
echo "<script>pruebita('ContGraciasSeguridadInfo');</script>";

            ?>
        <div class="formularioQuestion linearBlue row">
            <div class="col">
                <div class="titleformul">Pregunta <?php echo $contador?>.</div>
                <div class="questionFrom"><?php echo $fila['pregunta']; ?></div>
                <div class="request requestSeguridadInfo">
                    <?php 
                        $TraerSelect= "SELECT * FROM `bancorespuesta` WHERE TipoPregunta = '$TipoRespuesta'"; 
                        $ResSelect=  mysqli_query($conn,$TraerSelect);
                            while ($filaBuscaSelect=mysqli_fetch_array($ResSelect)){
                                $ValTipoPregunta =  $filaBuscaSelect['ValTipoPregunta'];    
                            }
                            if($ValTipoPregunta == 'Select'){
                            ?>
                    <select class="Seguridad_De_info" name="<?php echo "Seguirdadinfo". $contador?>" id="<?php echo "Seguirdadinfo". $contador?>" required>
                        <option disabled selected value="">Seleccionar</option>
                        <?php    
                            }elseif($ValTipoPregunta == 'MultiSelect'){
                            ?>
                        <select data-placeholder="Seleccione uno o varios"  multiselect-hide-x="true"  multiple class="chosen-select " name="<?php echo "Seguirdadinfo". $contador?>[]"  id="<?php echo "Seguirdadinfo". $contador ?>">
                            <option disabled selected value="" required>Seleccione uno o varios</option>
                            <?php    
                            }
                            $TraerRespuestas= "SELECT * FROM `bancorespuesta` WHERE TipoPregunta = '$TipoRespuesta'"; 
                            $ResRespuestas=  mysqli_query($conn,$TraerRespuestas);
                            if($ValTipoPregunta == 'Abierta'){
                            ?>
                            <textarea class="Seguridad_De_info form-control" placeholder="Si/No Justifique su respuesta" style="height: 100px" id="<?php echo "Seguirdadinfo". $contador ?>" name="<?php echo "Seguirdadinfo". $contador ?>" ></textarea>
                            <input type="hidden" name="<?php echo "PreguntaAbiertaSeguirdadinfo". $contador ?>" value="Null" class="Seguridad_De_info" id="<?php echo "PreguntaAbiertaSeguirdadinfo". $contador ?>">        
                            <input type="hidden" value="<?php echo $idPregunta?>" id="<?php echo "PreguntaSeguirdadinfo".$contador ?>" id="<?php echo "PreguntaSeguirdadinfo".$idPregunta ?>">
                            <?php  
                            }elseif($ValTipoPregunta == 'Porcentaje'){
                            ?>
                            <input type="number" class="Seguridad_De_info" placeholder="Agregue el porcentaje" id="<?php echo "Seguirdadinfo". $contador ?>"
                                name="<?php echo "Seguirdadinfo". $contador ?>">
                            <input class="Seguridad_De_info" type="hidden" name="<?php echo "PreguntaAbiertaSeguirdadinfo". $contador ?>" value="Null" id="<?php echo "PreguntaAbiertaSeguirdadinfo". $contador ?>">    
                            <input type="hidden" value="<?php echo $idPregunta?>" id="<?php echo "PreguntaSeguirdadinfo".$contador ?>" id="<?php echo "PreguntaSeguirdadinfo".$idPregunta ?>">
                            <?php 
                            }else{
                            while ($filaBuscaRespuestas=mysqli_fetch_array($ResRespuestas)){
                                
                            ?>
                            <option value="<?php echo $filaBuscaRespuestas['Valor']; ?>">
                                <?php echo $filaBuscaRespuestas['Respuesta']; }?></option>
                        </select> 
                        <textarea class="Seguridad_De_info form-control" placeholder="Justifique su respuesta" style="height: 100px" name="<?php echo "PreguntaAbiertaSeguirdadinfo". $contador ?>" id="<?php echo "PreguntaAbiertaSeguirdadinfo". $contador ?>" ></textarea>
                        <input type="hidden" value="<?php echo $idPregunta?>" id="<?php echo "PreguntaSeguirdadinfo".$contador ?>" id="<?php echo "PreguntaSeguirdadinfo".$idPregunta ?>">
                        <?php 
                            }
                            ?>
    
    
                </div>
            </div>
        </div>
        <?php 
        } 
        }


    }
    if(empty($prueba10)){
        $CambiarEstado = "UPDATE `persona` SET `repo10` = '1' WHERE idPersona = '$id'" ;
        $res2 =  mysqli_query($conn,$CambiarEstado);
        echo "<script>addClasses('btnli10');</script>";
    } 
    
?>
</div>

