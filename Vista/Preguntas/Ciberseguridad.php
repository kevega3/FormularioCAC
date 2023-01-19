<div class="ContGracias">  
    <h3 id="ContGraciasCiberseguridad">
        No hay preguntas
    </h3>
</div>


<div id="Calidad" class="tabcontent">
    
    <?php
    $TraerPreguntas = 'SELECT * FROM preguntas INNER JOIN areaconocimiento ON preguntas.idAreaCon = areaconocimiento.idAreaConocimiento WHERE idAreaCon = 5' ;
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
        

        if($Report5 == 1 ){
            break;
        }else{

            if(in_array($Rolarray[0], $separada) || in_array($Rolarray[1], $separada) || in_array($Rolarray[2], $separada) || in_array($Rolarray[3], $separada) || in_array($Rolarray[4], $separada) ){
                $contador++;
                $prueba5 = 1;
                echo "<script>pruebita('ContGraciasCiberseguridad');</script>"; 
            ?>
        <div class="formularioQuestion linearBlue row">
            <div class="col">
                <div class="titleformul">Pregunta <?php echo $contador?>.</div>
                <div class="questionFrom"><?php echo $fila['pregunta']; ?></div>
                <div class="request requestCiberseguridad">
                    <?php 
                        $TraerSelect= "SELECT * FROM `bancorespuesta` WHERE TipoPregunta = '$TipoRespuesta'"; 
                        $ResSelect=  mysqli_query($conn,$TraerSelect);
                            while ($filaBuscaSelect=mysqli_fetch_array($ResSelect)){
                                $ValTipoPregunta =  $filaBuscaSelect['ValTipoPregunta'];    
                            }
                            if($ValTipoPregunta == 'Select'){
                            ?>
                    <select class="Ciberseguridad" name="<?php echo "Ciber". $contador?>" id="<?php echo "Ciber". $contador?>" required>
                        <option disabled selected value="">Seleccionar</option>
                        <?php    
                            }elseif($ValTipoPregunta == 'MultiSelect'){
                            ?>
                        <select data-placeholder="Seleccione uno o varios"  multiselect-hide-x="true"  multiple class="chosen-select " name="<?php echo "Ciber". $contador?>[]"  id="<?php echo "Ciber". $contador ?>">
                                                        <?php    
                            }
                            $TraerRespuestas= "SELECT * FROM `bancorespuesta` WHERE TipoPregunta = '$TipoRespuesta'"; 
                            $ResRespuestas=  mysqli_query($conn,$TraerRespuestas);
                            if($ValTipoPregunta == 'Abierta'){
                            ?>
                            <textarea class="Ciberseguridad form-control" placeholder="Si/No Justifique su respuesta" style="height: 100px" id="<?php echo "Ciber". $contador ?>" name="<?php echo "Ciber". $contador ?>" ></textarea>
                            <input type="hidden" name="<?php echo "PreguntaAbiertaCiber". $contador ?>" value="Null" class="Ciberseguridad" id="<?php echo "PreguntaAbiertaCiber". $contador ?>">        
                            <input type="hidden" value="<?php echo $idPregunta?>" id="<?php echo "PreguntaCiber".$contador ?>" id="<?php echo "PreguntaCiber".$idPregunta ?>">
                            <?php  
                            }elseif($ValTipoPregunta == 'Porcentaje'){
                            ?>
                            <input type="number" class="Ciberseguridad" placeholder="Agregue el porcentaje" id="<?php  echo "Ciber". $contador ?>"
                                name="<?php echo "Ciber". $contador ?>">
                            <input class="Ciberseguridad" type="hidden" name="<?php echo "PreguntaAbiertaCiber". $contador ?>" value="Null" id="<?php echo "PreguntaAbiertaCiber". $contador ?>">    
                            <input type="hidden" value="<?php echo $idPregunta?>" id="<?php echo "PreguntaCiber".$contador ?>" id="<?php echo "PreguntaCiber".$idPregunta ?>">
                            <?php 
                            }else{
                            while ($filaBuscaRespuestas=mysqli_fetch_array($ResRespuestas)){
                                
                            ?>
                            <option value="<?php echo $filaBuscaRespuestas['Valor']; ?>">
                                <?php echo $filaBuscaRespuestas['Respuesta']; }?></option>
                        </select> 
                        <textarea class="Ciberseguridad form-control" placeholder="Justifique su respuesta" style="height: 100px" name="<?php echo "PreguntaAbiertaCiber". $contador ?>" id="<?php echo "PreguntaAbiertaCiber". $contador ?>" ></textarea>
                        <input type="hidden" value="<?php echo $idPregunta?>" id="<?php echo "PreguntaCiber".$contador ?>" id="<?php echo "PreguntaCiber".$idPregunta ?>">
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
    if(empty($prueba5)){
        $CambiarEstado = "UPDATE `persona` SET `repo5` = '1' WHERE idPersona = '$id'" ;
        $res2 =  mysqli_query($conn,$CambiarEstado);
        echo "<script>addClasses('btnli5');</script>";
    } 
    
?>
</div>
