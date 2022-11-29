
<?php

if($Report6 == 1){
?>
<div id="ContGracias">
    <h1>No hay Preguntas para responder</h1>
    
</div>
<?php
}else{
?>

<div id="Calidad" class="tabcontent">
    
    <?php
    $TraerPreguntas = 'SELECT * FROM preguntas INNER JOIN areaconocimiento ON preguntas.idAreaCon = areaconocimiento.idAreaConocimiento WHERE idAreaCon = 6' ;
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
            <div class="titleformul">PreguntaEstrategia <?php echo $contador?>.</div>
            <div class="questionFrom"><?php echo $fila['pregunta']; ?></div>
            <div class="request requestEstrategia_de_datos">
                <?php 
                    $TraerSelect= "SELECT * FROM `bancorespuesta` WHERE TipoPregunta = '$TipoRespuesta'"; 
                    $ResSelect=  mysqli_query($conn,$TraerSelect);
                        while ($filaBuscaSelect=mysqli_fetch_array($ResSelect)){
                            $ValTipoPregunta =  $filaBuscaSelect['ValTipoPregunta'];    
                        }
                        if($ValTipoPregunta == 'Select'){
                        ?>
                <select class="Estrategia_de_datos" name="<?php echo "Estrategia". $contador?>" id="<?php echo "Estrategia". $contador?>" required>
                    <option disabled selected value="">Seleccionar</option>
                    <?php    
                        }elseif($ValTipoPregunta == 'MultiSelect'){
                        ?>
                    <select data-placeholder="Seleccione uno o varios" multiple class="chosen-select " name="<?php echo "Estrategia". $contador?>[]"  id="<?php echo "Estrategia". $contador ?>">
                        <option disabled selected value="" required>Seleccione uno o varios</option>
                        <?php    
                        }
                        $TraerRespuestas= "SELECT * FROM `bancorespuesta` WHERE TipoPregunta = '$TipoRespuesta'"; 
                        $ResRespuestas=  mysqli_query($conn,$TraerRespuestas);
                        if($ValTipoPregunta == 'Abierta'){
                        ?>
                        <textarea class="Estrategia_de_datos form-control" placeholder="Si/No Justifique su respuesta" style="height: 100px" id="<?php echo "Estrategia". $contador ?>" name="<?php echo "Estrategia". $contador ?>" ></textarea>
                        <input type="hidden" name="<?php echo "PreguntaAbiertaEstrategia". $contador ?>" value="Null" class="Estrategia_de_datos" id="<?php echo "PreguntaAbiertaEstrategia". $contador ?>">        
                        <input type="hidden" value="<?php echo $idPregunta?>" id="<?php echo "PreguntaEstrategia".$contador ?>" id="<?php echo "PreguntaEstrategia".$idPregunta ?>">
                        <?php  
                        }elseif($ValTipoPregunta == 'Porcentaje'){
                        ?>
                        <input type="number" class="Estrategia_de_datos" placeholder="Agregue el porcentaje" id="<?php echo "Estrategia". $contador ?>"
                            name="<?php echo "Estrategia". $contador ?>">
                        <input class="Estrategia_de_datos" type="hidden" name="<?php echo "PreguntaAbiertaEstrategia". $contador ?>" value="Null" id="<?php echo "PreguntaAbiertaEstrategia". $contador ?>">    
                        <input type="hidden" value="<?php echo $idPregunta?>" id="<?php echo "PreguntaEstrategia".$contador ?>" id="<?php echo "PreguntaEstrategia".$idPregunta ?>">
                        <?php 
                        }else{
                        while ($filaBuscaRespuestas=mysqli_fetch_array($ResRespuestas)){
                            
                        ?>
                        <option value="<?php echo $filaBuscaRespuestas['Valor']; ?>">
                            <?php echo $filaBuscaRespuestas['Respuesta']; }?></option>
                    </select> 
                    <textarea class="Estrategia_de_datos form-control" placeholder="Justifique su respuesta" style="height: 100px" name="<?php echo "PreguntaAbiertaEstrategia". $contador ?>" id="<?php echo "PreguntaAbiertaEstrategia". $contador ?>" ></textarea>
                    <input type="hidden" value="<?php echo $idPregunta?>" id="<?php echo "PreguntaEstrategia".$contador ?>" >
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
