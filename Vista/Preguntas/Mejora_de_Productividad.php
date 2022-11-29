<?php

if($Report9 == 1){
?>
<div id="ContGracias">
    <h1>No hay Preguntas para responder</h1>
    
</div>
<?php
}else{
?>

<div id="Calidad" class="tabcontent">
    
    <?php
    $TraerPreguntas = 'SELECT * FROM preguntas INNER JOIN areaconocimiento ON preguntas.idAreaCon = areaconocimiento.idAreaConocimiento WHERE idAreaCon = 9' ;
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
        

        if(in_array($Rolarray[0], $separada) || in_array($Rolarray[1], $separada) || in_array($Rolarray[2], $separada) || in_array($Rolarray[3], $separada) || in_array($Rolarray[4], $separada) ){
            $contador++;
        ?>
    <div class="formularioQuestion linearBlue row">
        <div class="col">
            <div class="titleformul">Pregunta <?php echo $contador?>.</div>
            <div class="questionFrom"><?php echo $fila['pregunta']; ?></div>
            <div class="request requestMejoraProduc">
                <?php 
                    $TraerSelect= "SELECT * FROM `bancorespuesta` WHERE TipoPregunta = '$TipoRespuesta'"; 
                    $ResSelect=  mysqli_query($conn,$TraerSelect);
                        while ($filaBuscaSelect=mysqli_fetch_array($ResSelect)){
                            $ValTipoPregunta =  $filaBuscaSelect['ValTipoPregunta'];    
                        }
                        if($ValTipoPregunta == 'Select'){
                        ?>
                <select class="MejoraProduc" name="<?php echo "Productiv". $contador?>" id="<?php echo "Productiv". $contador?>" required>
                    <option disabled selected value="">Seleccionar</option>
                    <?php    
                        }elseif($ValTipoPregunta == 'MultiSelect'){
                        ?>
                    <select data-placeholder="Seleccione uno o varios" multiple class="chosen-select " name="<?php echo "Productiv". $contador?>[]"  id="<?php echo "Productiv". $contador ?>">
                        <option disabled selected value="" required>Seleccione uno o varios</option>
                        <?php    
                        }
                        $TraerRespuestas= "SELECT * FROM `bancorespuesta` WHERE TipoPregunta = '$TipoRespuesta'"; 
                        $ResRespuestas=  mysqli_query($conn,$TraerRespuestas);
                        if($ValTipoPregunta == 'Abierta'){
                        ?>
                        <textarea class="MejoraProduc form-control" placeholder="Si/No Justifique su respuesta" style="height: 100px" id="<?php echo "Productiv". $contador ?>" name="<?php echo "Productiv". $contador ?>" ></textarea>
                        <input type="hidden" name="<?php echo "PreguntaAbiertaProductiv". $contador ?>" value="Null" class="MejoraProduc" id="<?php echo "PreguntaAbiertaProductiv". $contador ?>">        
                        <input type="hidden" value="<?php echo $idPregunta?>" id="<?php echo "PreguntaProductiv".$contador ?>" id="<?php echo "PreguntaProductiv".$idPregunta ?>">
                        <?php  
                        }elseif($ValTipoPregunta == 'Porcentaje'){
                        ?>
                        <input type="number" class="MejoraProduc" placeholder="Agregue el porcentaje" id="<?php echo "Productiv". $contador ?>"
                            name="<?php echo "Productiv". $contador ?>">
                        <input class="MejoraProduc" type="hidden" name="<?php echo "PreguntaAbiertaProductiv". $contador ?>" value="Null" id="<?php echo "PreguntaAbiertaProductiv". $contador ?>">    
                        <input type="hidden" value="<?php echo $idPregunta?>" id="<?php echo "PreguntaProductiv".$contador ?>" id="<?php echo "PreguntaProductiv".$idPregunta ?>">
                        <?php 
                        }else{
                        while ($filaBuscaRespuestas=mysqli_fetch_array($ResRespuestas)){
                            
                        ?>
                        <option value="<?php echo $filaBuscaRespuestas['Valor']; ?>">
                            <?php echo $filaBuscaRespuestas['Respuesta']; }?></option>
                    </select> 
                    <textarea class="MejoraProduc form-control" placeholder="Justifique su respuesta" style="height: 100px" name="<?php echo "PreguntaAbiertaProductiv". $contador ?>" id="<?php echo "PreguntaAbiertaProductiv". $contador ?>" ></textarea>
                    <input type="hidden" value="<?php echo $idPregunta?>" id="<?php echo "PreguntaProductiv".$contador ?>" id="<?php echo "PreguntaProductiv".$idPregunta ?>">
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
<?php } ?>
