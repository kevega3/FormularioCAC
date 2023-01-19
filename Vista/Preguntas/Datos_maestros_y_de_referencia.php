<div class="ContGracias">  
    <h3 id="ContGraciasDatosMaestrosReferencias">
        No hay preguntas
    </h3>
</div>



<div id="Calidad" class="tabcontent">
    
    <?php
    $TraerPreguntas = 'SELECT * FROM preguntas INNER JOIN areaconocimiento ON preguntas.idAreaCon = areaconocimiento.idAreaConocimiento WHERE idAreaCon = 16' ;
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
        

        if($Report16 == 1 ){
            break;
        }else{
            if(in_array($Rolarray[0], $separada) || in_array($Rolarray[1], $separada) || in_array($Rolarray[2], $separada) || in_array($Rolarray[3], $separada) || in_array($Rolarray[4], $separada) ){
                $contador++;
$prueba16 = 1;
echo "<script>pruebita('ContGraciasDatosMaestrosReferencias');</script>"; 
            ?>
        <div class="formularioQuestion linearBlue row">
            <div class="col">
                <div class="titleformul">Pregunta <?php echo  $contador?>.</div>
                <div class="questionFrom"><?php echo $fila['pregunta']; ?></div>
                <div class="request requestDatosMaestros">
                    <?php 
                        $TraerSelect= "SELECT * FROM `bancorespuesta` WHERE TipoPregunta = '$TipoRespuesta'"; 
                        $ResSelect=  mysqli_query($conn,$TraerSelect);
                            while ($filaBuscaSelect=mysqli_fetch_array($ResSelect)){
                                $ValTipoPregunta =  $filaBuscaSelect['ValTipoPregunta'];    
                            }
                            if($ValTipoPregunta == 'Select'){
                            ?>
                    <select class="Datos_MaestrosRefe" name="<?php echo "DatosMaestros" . $contador?>" id="<?php echo "DatosMaestros" . $contador?>" required>
                        <option disabled selected value="">Seleccionar</option>
                        <?php    
                            }elseif($ValTipoPregunta == 'MultiSelect'){
                            ?>
                        <select data-placeholder="Seleccione uno o varios"  multiselect-hide-x="true"  multiple class="chosen-select " name="<?php echo "DatosMaestros" . $contador?>[]"  id="<?php echo "DatosMaestros" . $contador ?>">
                                                        <?php    
                            }
                            $TraerRespuestas= "SELECT * FROM `bancorespuesta` WHERE TipoPregunta = '$TipoRespuesta'"; 
                            $ResRespuestas=  mysqli_query($conn,$TraerRespuestas);
                            if($ValTipoPregunta == 'Abierta'){
                            ?>
                            <textarea class="Datos_MaestrosRefe form-control" placeholder="Si/No Justifique su respuesta" style="height: 100px" id="<?php echo "DatosMaestros" . $contador ?>" name="<?php echo "DatosMaestros" .  $contador ?>" ></textarea>
                            <input type="hidden" name="<?php echo "PreguntaAbiertaDatosMaestros". $contador ?>" value="Null" class="Datos_MaestrosRefe" id="<?php echo "PreguntaAbiertaDatosMaestros". $contador ?>">        
                            <input type="hidden" value="<?php echo $idPregunta?>" id="<?php echo "PreguntaDatosMaestros".$contador ?>" id="<?php echo "PreguntaDatosMaestros".$idPregunta ?>">
                            <?php  
                            }elseif($ValTipoPregunta == 'Porcentaje'){
                            ?>
                            <input type="number" class="Datos_MaestrosRefe" placeholder="Agregue el porcentaje" id="<?php echo "DatosMaestros" . $contador ?>"
                                name="<?php echo "DatosMaestros" . $contador ?>">
                            <input class="Datos_MaestrosRefe" type="hidden" name="<?php echo "PreguntaAbiertaDatosMaestros". $contador ?>" value="Null" id="<?php echo "PreguntaAbiertaDatosMaestros". $contador ?>">    
                            <input type="hidden" value="<?php echo $idPregunta?>" id="<?php echo "PreguntaDatosMaestros".$contador ?>" id="<?php echo "PreguntaDatosMaestros".$idPregunta ?>">
                            <?php 
                            }else{
                            while ($filaBuscaRespuestas=mysqli_fetch_array($ResRespuestas)){
                                
                            ?>
                            <option value="<?php echo $filaBuscaRespuestas['Valor']; ?>">
                                <?php echo $filaBuscaRespuestas['Respuesta']; }?></option>
                        </select> 
                        <textarea class="Datos_MaestrosRefe form-control" placeholder="Justifique su respuesta" style="height: 100px" name="<?php echo "PreguntaAbiertaDatosMaestros". $contador ?>" id="<?php echo "PreguntaAbiertaDatosMaestros". $contador ?>" ></textarea>
                        <input type="hidden" value="<?php echo $idPregunta?>" id="<?php echo "PreguntaDatosMaestros".$contador ?>" id="<?php echo "PreguntaDatosMaestros".$idPregunta ?>">
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
    if(empty($prueba16)){
        $CambiarEstado = "UPDATE `persona` SET `repo16` = '1' WHERE idPersona = '$id'" ;
        $res2 =  mysqli_query($conn,$CambiarEstado);
        echo "<script>addClasses('btnli16');</script>";
    } 
    
?>
</div>