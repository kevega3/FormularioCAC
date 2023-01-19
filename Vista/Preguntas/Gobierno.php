<div class="ContGracias">
    <h3 id="ContGraciasGobierno">
        No hay preguntas
    </h3>
</div>


<div id="Calidad" class="tabcontent">
    <?php
    $TraerPreguntas = 'SELECT * FROM preguntas INNER JOIN areaconocimiento ON preguntas.idAreaCon = areaconocimiento.idAreaConocimiento WHERE idAreaCon = 8' ;
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
        

        if($Report8== 1 ){
            break;
        }else{
            
        if(in_array($Rolarray[0], $separada) || in_array($Rolarray[1], $separada) || in_array($Rolarray[2], $separada) || in_array($Rolarray[3], $separada) || in_array($Rolarray[4], $separada) ){
            $contador++;
            $prueba8 = 1;
            echo "<script>pruebita('ContGraciasGobierno');</script>";   
        ?>
    <div class="formularioQuestion linearBlue row">
        <div class="col">
            <div class="titleformul">Pregunta <?php echo $contador?>.</div>
            <div class="questionFrom"><?php echo $fila['pregunta']; ?></div>
            <div class="request requestGobierno">
                <?php 
            $TraerSelect= "SELECT * FROM `bancorespuesta` WHERE TipoPregunta = '$TipoRespuesta'"; 
            $ResSelect=  mysqli_query($conn,$TraerSelect);
                while ($filaBuscaSelect=mysqli_fetch_array($ResSelect)){
                    $ValTipoPregunta =  $filaBuscaSelect['ValTipoPregunta'];    
                }
                if($ValTipoPregunta == 'Select'){
                ?>
                <select class="Gobierno" name="<?php echo "Gobierno". $contador?>"
                    id="<?php echo "Gobierno". $contador?>" required>
                    <option disabled selected value="">Seleccionar</option>
                    <?php    
                }elseif($ValTipoPregunta == 'MultiSelect'){
                ?>
                    <select data-placeholder="Seleccione uno o varios" multiselect-hide-x="true" multiple
                        class="chosen-select " name="<?php echo "Gobierno". $contador?>[]"
                        id="<?php echo "Gobierno" .$contador ?>">
                                                <?php    
                }
                $TraerRespuestas= "SELECT * FROM `bancorespuesta` WHERE TipoPregunta = '$TipoRespuesta'"; 
                $ResRespuestas=  mysqli_query($conn,$TraerRespuestas);
                if($ValTipoPregunta == 'Abierta'){
                ?>
                        <textarea class="Gobierno form-control" placeholder="Si/No Justifique su respuesta"
                            style="height: 100px" id="<?php echo "Gobierno". $contador ?>"
                            name="<?php echo "Gobierno".$contador ?>"></textarea>
                        <input type="hidden" name="<?php echo "PreguntaAbiertaGobierno". $contador ?>" value="Null"
                            class="Gobierno" id="<?php echo "PreguntaAbiertaGobierno". $contador ?>">
                        <input type="hidden" value="<?php echo $idPregunta?>"
                            id="<?php echo "PreguntaGobierno".$contador ?>"
                            id="<?php echo "PreguntaGobierno".$idPregunta ?>">
                        <?php  
                }elseif($ValTipoPregunta == 'Porcentaje'){
                ?>
                        <input type="number" class="Gobierno" placeholder="Agregue el porcentaje"
                            id="<?php echo "Gobierno". $contador ?>" name="<?php echo "Gobierno" .$contador ?>">
                        <input class="Gobierno" type="hidden" name="<?php echo "PreguntaAbiertaGobierno". $contador ?>"
                            value="Null" id="<?php echo "PreguntaAbiertaGobierno". $contador ?>">
                        <input type="hidden" value="<?php echo $idPregunta?>"
                            id="<?php echo "PreguntaGobierno".$contador ?>"
                            id="<?php echo "PreguntaGobierno".$idPregunta ?>">
                        <?php 
                }else{
                while ($filaBuscaRespuestas=mysqli_fetch_array($ResRespuestas)){
                    
                ?>
                        <option value="<?php echo $filaBuscaRespuestas['Valor']; ?>">
                            <?php echo $filaBuscaRespuestas['Respuesta']; }?></option>
                    </select>
                    <textarea class="Gobierno form-control" placeholder="Justifique su respuesta" style="height: 100px"
                        name="<?php echo "PreguntaAbiertaGobierno". $contador ?>"
                        id="<?php echo "PreguntaAbiertaGobierno". $contador ?>"></textarea>
                    <input type="hidden" value="<?php echo $idPregunta?>"
                        id="<?php echo "PreguntaGobierno".$contador ?>"
                        id="<?php echo "PreguntaGobierno".$idPregunta ?>">
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
    if(empty($prueba8)){
        $CambiarEstado = "UPDATE `persona` SET `repo8` = '1' WHERE idPersona = '$id'" ;
        $res2 =  mysqli_query($conn,$CambiarEstado);
        echo "<script>addClasses('btnli8');</script>";
    } 
    
?>
</div>