<div class="ContGracias">  
    <h3 id="ContGraciasAlamacenamientoOpera">
        No hay preguntas
    </h3>
</div>



<div id="Calidad" class="tabcontent">
    
    <?php
    $TraerPreguntas = 'SELECT * FROM preguntas INNER JOIN areaconocimiento ON preguntas.idAreaCon = areaconocimiento.idAreaConocimiento WHERE idAreaCon = 15' ;
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
        if($Report15 == 1 ){
            break;
        }else{
            if(in_array($Rolarray[0], $separada) || in_array($Rolarray[1], $separada) || in_array($Rolarray[2], $separada) || in_array($Rolarray[3], $separada) || in_array($Rolarray[4], $separada) ){
                $contador++;
$prueba15 = 1;
echo "<script>pruebita('ContGraciasAlamacenamientoOpera');</script>";
            ?>
        <div class="formularioQuestion linearBlue row">
            <div class="col">
                <div class="titleformul">Pregunta <?php echo $contador?>.</div>
                <div class="questionFrom"><?php echo $fila['pregunta']; ?></div>
                <div class="request requestAlacenamientoOpera">
                    <?php 
                        $TraerSelect= "SELECT * FROM `bancorespuesta` WHERE TipoPregunta = '$TipoRespuesta'"; 
                        $ResSelect=  mysqli_query($conn,$TraerSelect);
                            while ($filaBuscaSelect=mysqli_fetch_array($ResSelect)){
                                $ValTipoPregunta =  $filaBuscaSelect['ValTipoPregunta'];    
                            }
                            if($ValTipoPregunta == 'Select'){
                            ?>
                    <select class="Almacenamiento_operaciones" name="<?php echo "Almacenamiento". $contador?>" id="<?php echo "Almacenamiento". $contador?>" required>
                        <option disabled selected value="">Seleccionar</option>
                        <?php    
                            }elseif($ValTipoPregunta == 'MultiSelect'){
                            ?>
                        <select data-placeholder="Seleccione uno o varios"  multiselect-hide-x="true"  multiple class="chosen-select " name="<?php echo "Almacenamiento". $contador?>[]"  id="<?php echo "Almacenamiento". $contador ?>">
                            <option disabled selected value="" required>Seleccione uno o varios</option>
                            <?php    
                            }
                            $TraerRespuestas= "SELECT * FROM `bancorespuesta` WHERE TipoPregunta = '$TipoRespuesta'"; 
                            $ResRespuestas=  mysqli_query($conn,$TraerRespuestas);
                            if($ValTipoPregunta == 'Abierta'){
                            ?>
                            <textarea class="Almacenamiento_operaciones form-control" placeholder="Si/No Justifique su respuesta" style="height: 100px" id="<?php echo "Almacenamiento". $contador ?>" name="<?php echo "Almacenamiento". $contador ?>" ></textarea>
                            <input type="hidden" name="<?php echo "PreguntaAbiertaAlmacenamiento". $contador ?>" value="Null" class="Almacenamiento_operaciones" id="<?php echo "PreguntaAbiertaAlmacenamiento". $contador ?>">        
                            <input type="hidden" value="<?php echo $idPregunta?>" id="<?php echo "PreguntaAlmacenamiento".$contador ?>" id="<?php echo "PreguntaAlmacenamiento".$idPregunta ?>">
                            <?php  
                            }elseif($ValTipoPregunta == 'Porcentaje'){
                            ?>
                            <input type="number" class="Almacenamiento_operaciones" placeholder="Agregue el porcentaje" id="<?php echo "Almacenamiento". $contador ?>"
                                name="<?php echo "Almacenamiento". $contador ?>">
                            <input class="Almacenamiento_operaciones" type="hidden" name="<?php echo "PreguntaAbiertaAlmacenamiento". $contador ?>" value="Null" id="<?php echo "PreguntaAbiertaAlmacenamiento". $contador ?>">    
                            <input type="hidden" value="<?php echo $idPregunta?>" id="<?php echo "PreguntaAlmacenamiento".$contador ?>" id="<?php echo "PreguntaAlmacenamiento".$idPregunta ?>">
                            <?php 
                            }else{
                            while ($filaBuscaRespuestas=mysqli_fetch_array($ResRespuestas)){
                                
                            ?>
                            <option value="<?php echo $filaBuscaRespuestas['Valor']; ?>">
                                <?php echo $filaBuscaRespuestas['Respuesta']; }?></option>
                        </select> 
                        <textarea class="Almacenamiento_operaciones form-control" placeholder="Justifique su respuesta" style="height: 100px" name="<?php echo "PreguntaAbiertaAlmacenamiento". $contador ?>" id="<?php echo "PreguntaAbiertaAlmacenamiento". $contador ?>" ></textarea>
                        <input type="hidden" value="<?php echo $idPregunta?>" id="<?php echo "PreguntaAlmacenamiento".$contador ?>" id="<?php echo "PreguntaAlmacenamiento".$idPregunta ?>">
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
    if(empty($prueba15)){
        $CambiarEstado = "UPDATE `persona` SET `repo15` = '1' WHERE idPersona = '$id'" ;
        $res2 =  mysqli_query($conn,$CambiarEstado);
        echo "<script>addClasses('btnli15');</script>";
    }  
    
?>
</div>