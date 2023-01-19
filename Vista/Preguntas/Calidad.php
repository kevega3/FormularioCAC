
<div class="ContGracias">  
    <h3 id="ContGraciasCalidad">
        No hay preguntas
    </h3>
</div>



<div id="Calidad" class="tabcontent">
    
    <?php
    $TraerPreguntas = 'SELECT * FROM preguntas INNER JOIN areaconocimiento ON preguntas.idAreaCon = areaconocimiento.idAreaConocimiento WHERE idAreaCon = 4' ;
    $res =  mysqli_query($conn,$TraerPreguntas);
    $contador = 0;
    while ($fila=mysqli_fetch_array($res)) { 
        $Rol = $fila['Rol'];
        $separador = ",";
        $Rolperson2 = "1";
        $TipoRespuesta = $fila['TipoRespuesta'];
        $Descripcion = $fila['Descripcion'];
        $idPregunta = $fila['idPregunta'];
        $separada = explode($separador, $Rol);
        
        if($Report4 == 1 ){
            break;
        }else{
            if(in_array($Rolarray[0], $separada) || in_array($Rolarray[1], $separada) || in_array($Rolarray[2], $separada) || in_array($Rolarray[3], $separada) || in_array($Rolarray[4], $separada) ){
                $contador++;
$prueba4 = 1;
echo "<script>pruebita('ContGraciasCalidad');</script>"; 
            ?>
        <div class="formularioQuestion linearBlue row">
            <div class="col">
                <div class="titleformul">Pregunta <?php echo $contador?>.</div>
                <div class="questionFrom"><?php echo $fila['pregunta']; ?></div>
                <div class="request requestCalidad">
                    <?php 
                        $TraerSelect= "SELECT * FROM `bancorespuesta` WHERE TipoPregunta = '$TipoRespuesta'"; 
                        $ResSelect=  mysqli_query($conn,$TraerSelect);
                            while ($filaBuscaSelect=mysqli_fetch_array($ResSelect)){
                                $ValTipoPregunta =  $filaBuscaSelect['ValTipoPregunta'];    
                            }
                            if($ValTipoPregunta == 'Select'){
                            ?>
                    <select class="Calidad" name="<?php echo "Calidad". $contador?>" id="<?php echo "Calidad". $contador?>" required>
                        <option disabled selected value="">Seleccionar</option>
                        <?php    
                            }elseif($ValTipoPregunta == 'MultiSelect'){
                            ?>
                        <select data-placeholder="Seleccione uno o varios"  multiselect-hide-x="true"  multiple class="chosen-select " name="<?php echo "Calidad". $contador?>[]"  id="<?php echo "Calidad". $contador ?>">
                                                        <?php    
                            }
                            $TraerRespuestas= "SELECT * FROM `bancorespuesta` WHERE TipoPregunta = '$TipoRespuesta'"; 
                            $ResRespuestas=  mysqli_query($conn,$TraerRespuestas);
                            if($ValTipoPregunta == 'Abierta'){
                            ?>
                            <textarea class="Calidad form-control" placeholder="Si/No Justifique su respuesta" style="height: 100px" id="<?php echo "Calidad". $contador ?>" name="<?php echo "Calidad". $contador ?>" ></textarea>
                            <input type="hidden" name="<?php echo "PreguntaAbiertaCalidad". $contador ?>" value="Null" class="Calidad" id="<?php echo "PreguntaAbiertaCalidad". $contador ?>">        
                            <input type="hidden" value="<?php echo $idPregunta?>" id="<?php echo "PreguntaCaidad".$contador ?>" id="<?php echo "PreguntaCaidad".$idPregunta ?>">
                            <?php  
                            }elseif($ValTipoPregunta == 'Porcentaje'){
                            ?>
                            <input type="number" class="Calidad" placeholder="Agregue el porcentaje" id="<?php echo "Calidad". $contador ?>"
                                name="<?php echo "Calidad". $contador ?>">
                            <input class="Calidad" type="hidden" name="<?php echo "PreguntaAbiertaCalidad". $contador ?>" value="Null" id="<?php echo "PreguntaAbiertaCalidad". $contador ?>">    
                            <input type="hidden" value="<?php echo $idPregunta?>" id="<?php echo "PreguntaCaidad".$contador ?>" id="<?php echo "PreguntaCaidad".$idPregunta ?>">
                            <?php 
                            }else{
                            while ($filaBuscaRespuestas=mysqli_fetch_array($ResRespuestas)){
                                
                            ?>
                            <option value="<?php echo $filaBuscaRespuestas['Valor']; ?>">
                                <?php echo $filaBuscaRespuestas['Respuesta']; }?></option>
                        </select> 
                        <textarea class="Calidad form-control" placeholder="Justifique su respuesta" style="height: 100px" name="<?php echo "PreguntaAbiertaCalidad". $contador ?>" id="<?php echo "PreguntaAbiertaCalidad". $contador ?>" ></textarea>
                        <input type="hidden" value="<?php echo $idPregunta?>" id="<?php echo "PreguntaCaidad".$contador ?>" id="<?php echo "PreguntaCaidad".$idPregunta ?>">
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
    if(empty($prueba4)){
        $CambiarEstado = "UPDATE `persona` SET `repo4` = '1' WHERE idPersona = '$id'" ;
        $res2 =  mysqli_query($conn,$CambiarEstado);
        echo "<script>addClasses('btnli4');</script>";
    } 
    
?>
</div>

