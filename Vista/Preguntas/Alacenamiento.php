<div class="ContGracias">
    <h3 id="ContGraciasAlamacenamiento">
        No hay preguntas
    </h3>
</div>

<div id="Calidad" class="tabcontent">
    <?php
    $TraerPreguntas = 'SELECT * FROM preguntas INNER JOIN areaconocimiento ON preguntas.idAreaCon = areaconocimiento.idAreaConocimiento WHERE idAreaCon = 1' ;
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
        
        if($Report1 == 1){
            break;
        }else{
            if(in_array($Rolarray[0], $separada) || in_array($Rolarray[1], $separada) || in_array($Rolarray[2], $separada) || in_array($Rolarray[3], $separada) || in_array($Rolarray[4], $separada) ){
                $contador++;
                $prueba1 = 1;
                echo "<script>pruebita('ContGraciasAlamacenamiento');</script>";   
            ?>
    <div class="formularioQuestion linearBlue row">
        <div class="col">
            <div class="titleformul">Pregunta <?php echo $contador?>.</div>
            <div class="questionFrom"><?php echo $fila['pregunta']; ?></div>
            <div class="request requestAlama">
                <?php 
                        $TraerSelect= "SELECT * FROM `bancorespuesta` WHERE TipoPregunta = '$TipoRespuesta'"; 
                        $ResSelect=  mysqli_query($conn,$TraerSelect);
                            while ($filaBuscaSelect=mysqli_fetch_array($ResSelect)){
                                $ValTipoPregunta =  $filaBuscaSelect['ValTipoPregunta'];    
                            }
                            if($ValTipoPregunta == 'Select'){
                            ?>
                <select class="Almacenamiento" name="<?php echo "Alamace". $contador?>"
                    id="<?php echo "Alamace". $contador?>" required>
                    <option disabled selected value="">Seleccionar</option>
                    <?php    
                            }elseif($ValTipoPregunta == 'MultiSelect'){
                            ?>
                    <select data-placeholder="Seleccione uno o varios" multiselect-hide-x="true" multiple
                        class="chosen-select " name="<?php echo "Alamace". $contador?>[]"
                        id="<?php echo "Alamace". $contador ?>" tyle="color:black;" >
                        <!-- <select  multiple onchange="console.log(Array.from(this.selectedOptions).map(x=>x.value??x.text))" multiselect-hide-x="true"> -->
                        
                        <?php    
                            }
                            $TraerRespuestas= "SELECT * FROM `bancorespuesta` WHERE TipoPregunta = '$TipoRespuesta'"; 
                            $ResRespuestas=  mysqli_query($conn,$TraerRespuestas);
                            if($ValTipoPregunta == 'Abierta'){
                            ?>
                        <textarea class="Almacenamiento form-control" placeholder="Si/No Justifique su respuesta"
                            style="height: 100px" id="<?php echo "Alamace". $contador ?>"
                            name="<?php echo "Alamace".$contador ?>"></textarea>
                        <input type="hidden" name="<?php echo "PreguntaAbiertaAlamace". $contador ?>" value="Null"
                            class="Almacenamiento" id="<?php echo "PreguntaAbiertaAlamace". $contador ?>">
                        <input type="hidden" value="<?php echo $idPregunta?>"
                            id="<?php echo "PreguntaAlamace".$contador ?>" id="<?php echo "Pregunta".$idPregunta ?>">
                        <?php  
                            }elseif($ValTipoPregunta == 'Porcentaje'){
                            ?>
                        <input type="number" class="Almacenamiento" placeholder="Agregue el porcentaje"
                            id="<?php echo "Alamace". $contador ?>" name="<?php echo "Alamace". $contador ?>">
                        <input class="Almacenamiento" type="hidden"
                            name="<?php echo "PreguntaAbiertaAlamace". $contador ?>" value="Null"
                            id="<?php echo "PreguntaAbiertaAlamace". $contador ?>">
                        <input type="hidden" value="<?php echo $idPregunta?>"
                            id="<?php echo "PreguntaAlamace".$contador ?>" id="<?php echo "Pregunta".$idPregunta ?>">
                        <?php 
                            }else{
                            while ($filaBuscaRespuestas=mysqli_fetch_array($ResRespuestas)){
                                
                            ?>
                        <option value="<?php echo $filaBuscaRespuestas['Valor']; ?>">
                            <?php echo $filaBuscaRespuestas['Respuesta']; }?></option>
                    </select>
                    <textarea class="Almacenamiento form-control" placeholder="Justifique su respuesta"
                        style="height: 100px" name="<?php echo "PreguntaAbiertaAlamace". $contador ?>"
                        id="<?php echo "PreguntaAbiertaAlamace". $contador ?>"></textarea>
                    <input type="hidden" value="<?php echo $idPregunta?>" id="<?php echo "PreguntaAlamace".$contador ?>"
                        id="<?php echo "Pregunta".$idPregunta ?>">
                    <?php 
                            }
                            ?>


            </div>
        </div>
    </div>
    <?php 
        } 
        }


    }if(empty($prueba1)){
        $CambiarEstado = "UPDATE `persona` SET `repo1` = '1' WHERE idPersona = '$id'" ;
        $res2 =  mysqli_query($conn,$CambiarEstado);
        echo "<script>addClasses('btnli1');</script>";
    }  
    
?>
</div>
