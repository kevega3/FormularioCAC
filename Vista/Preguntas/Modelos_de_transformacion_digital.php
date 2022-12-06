<div class="ContGracias">  
    <h3 id="ContGraciasModelodeTrasformacion">
        No hay preguntas
    </h3>
</div>


<div id="Calidad" class="tabcontent">
    
    <?php
    $TraerPreguntas = 'SELECT * FROM preguntas INNER JOIN areaconocimiento ON preguntas.idAreaCon = areaconocimiento.idAreaConocimiento WHERE idAreaCon = 13' ;
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
        

        if($Report13 == 1 ){
            break;
        }else{
            if(in_array($Rolarray[0], $separada) || in_array($Rolarray[1], $separada) || in_array($Rolarray[2], $separada) || in_array($Rolarray[3], $separada) || in_array($Rolarray[4], $separada) ){
                $contador++;
                $prueba13 = 1;
                echo "<script>pruebita('ContGraciasModelodeTrasformacion');</script>";   
            ?>
        <div class="formularioQuestion linearBlue row">
            <div class="col">
                <div class="titleformul">Pregunta <?php echo $contador?>.</div>
                <div class="questionFrom"><?php echo $fila['pregunta']; ?></div>
                <div class="request requestModelosTrasform">
                    <?php 
                        $TraerSelect= "SELECT * FROM `bancorespuesta` WHERE TipoPregunta = '$TipoRespuesta'"; 
                        $ResSelect=  mysqli_query($conn,$TraerSelect);
                            while ($filaBuscaSelect=mysqli_fetch_array($ResSelect)){
                                $ValTipoPregunta =  $filaBuscaSelect['ValTipoPregunta'];    
                            }
                            if($ValTipoPregunta == 'Select'){
                            ?>
                    <select class="Modelos_de_transformacion" name="<?php echo $contador?>" id="<?php echo $contador?>" required>
                        <option disabled selected value="">Seleccionar</option>
                        <?php    
                            }elseif($ValTipoPregunta == 'MultiSelect'){
                            ?>
                        <select data-placeholder="Seleccione uno o varios"  multiselect-hide-x="true"  multiple class="chosen-select " name="<?php echo $contador?>[]"  id="<?php echo $contador ?>">
                            <option disabled selected value="" required>Seleccione uno o varios</option>
                            <?php    
                            }
                            $TraerRespuestas= "SELECT * FROM `bancorespuesta` WHERE TipoPregunta = '$TipoRespuesta'"; 
                            $ResRespuestas=  mysqli_query($conn,$TraerRespuestas);
                            if($ValTipoPregunta == 'Abierta'){
                            ?>
                            <textarea class="Modelos_de_transformacion form-control" placeholder="Si/No Justifique su respuesta" style="height: 100px" id="<?php echo $contador ?>" name="<?php echo $contador ?>" ></textarea>
                            <input type="hidden" name="<?php echo "PreguntaAbierta". $contador ?>" value="Null" class="Modelos_de_transformacion" id="<?php echo "PreguntaAbierta". $contador ?>">        
                            <input type="hidden" value="<?php echo $idPregunta?>" id="<?php echo "Pregunta".$contador ?>" id="<?php echo "Pregunta".$idPregunta ?>">
                            <?php  
                            }elseif($ValTipoPregunta == 'Porcentaje'){
                            ?>
                            <input type="number" class="Modelos_de_transformacion" placeholder="Agregue el porcentaje" id="<?php echo $contador ?>"
                                name="<?php echo $contador ?>">
                            <input class="Modelos_de_transformacion" type="hidden" name="<?php echo "PreguntaAbierta". $contador ?>" value="Null" id="<?php echo "PreguntaAbierta". $contador ?>">    
                            <input type="hidden" value="<?php echo $idPregunta?>" id="<?php echo "Pregunta".$contador ?>" id="<?php echo "Pregunta".$idPregunta ?>">
                            <?php 
                            }else{
                            while ($filaBuscaRespuestas=mysqli_fetch_array($ResRespuestas)){
                                
                            ?>
                            <option value="<?php echo $filaBuscaRespuestas['Valor']; ?>">
                                <?php echo $filaBuscaRespuestas['Respuesta']; }?></option>
                        </select> 
                        <textarea class="Modelos_de_transformacion form-control" placeholder="Justifique su respuesta" style="height: 100px" name="<?php echo "PreguntaAbierta". $contador ?>" id="<?php echo "PreguntaAbierta". $contador ?>" ></textarea>
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


    }
    if(empty($prueba13)){
        $CambiarEstado = "UPDATE `persona` SET `repo13` = '1' WHERE idPersona = '$id'" ;
        $res2 =  mysqli_query($conn,$CambiarEstado);
        echo "<script>addClasses('btnli13');</script>";
    } 
    
?>
</div>
