
<?php

if($Report7 == 1){
?>
<div id="ContGracias">
    <h1>No hay Preguntas para responder</h1>
    
</div>
<?php
}else{
?>

<div id="Calidad" class="tabcontent">
    
    <?php
    $TraerPreguntas = 'SELECT * FROM preguntas INNER JOIN areaconocimiento ON preguntas.idAreaCon = areaconocimiento.idAreaConocimiento WHERE idAreaCon = 7' ;
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
            <div class="request requestGestión_datos">
                <?php 
                    $TraerSelect= "SELECT * FROM `bancorespuesta` WHERE TipoPregunta = '$TipoRespuesta'"; 
                    $ResSelect=  mysqli_query($conn,$TraerSelect);
                        while ($filaBuscaSelect=mysqli_fetch_array($ResSelect)){
                            $ValTipoPregunta =  $filaBuscaSelect['ValTipoPregunta'];    
                        }
                        if($ValTipoPregunta == 'Select'){
                        ?>
                <select class="Gestión_datos_maestros" name="<?php echo "GestionDatos". $contador?>" id="<?php echo "GestionDatos". $contador?>" required>
                    <option disabled selected value="">Seleccionar</option>
                    <?php    
                        }elseif($ValTipoPregunta == 'MultiSelect'){
                        ?>
                    <select data-placeholder="Seleccione uno o varios" multiple class="chosen-select " name="<?php echo "GestionDatos". $contador?>[]"  id="<?php echo "GestionDatos". $contador ?>">
                        <option disabled selected value="" required>Seleccione uno o varios</option>
                        <?php    
                        }
                        $TraerRespuestas= "SELECT * FROM `bancorespuesta` WHERE TipoPregunta = '$TipoRespuesta'"; 
                        $ResRespuestas=  mysqli_query($conn,$TraerRespuestas);
                        if($ValTipoPregunta == 'Abierta'){
                        ?>
                        <textarea class="Gestión_datos_maestros form-control" placeholder="Si/No Justifique su respuesta" style="height: 100px" id="<?php echo "GestionDatos". $contador ?>" name="<?php echo "GestionDatos".$contador ?>" ></textarea>
                        <input type="hidden" name="<?php echo "PreguntaAbiertaGestionDAtos". $contador ?>" value="Null" class="Gestión_datos_maestros" id="<?php echo "PreguntaAbiertaGestionDAtos". $contador ?>">        
                        <input type="hidden" value="<?php echo $idPregunta?>" id="<?php echo "PreguntaGestionDatos".$contador ?>" id="<?php echo "PreguntaGestionDatos".$idPregunta ?>">
                        <?php  
                        }elseif($ValTipoPregunta == 'Porcentaje'){
                        ?>
                        <input type="number" class="Gestión_datos_maestros" placeholder="Agregue el porcentaje" id="<?php echo "GestionDatos". $contador ?>"
                            name="<?php echo "GestionDatos".$contador ?>">
                        <input class="Gestión_datos_maestros" type="hidden" name="<?php echo "PreguntaAbiertaGestionDAtos". $contador ?>" value="Null" id="<?php echo "PreguntaAbiertaGestionDAtos". $contador ?>">    
                        <input type="hidden" value="<?php echo $idPregunta?>" id="<?php echo "PreguntaGestionDatos".$contador ?>" id="<?php echo "PreguntaGestionDatos".$idPregunta ?>">
                        <?php 
                        }else{
                        while ($filaBuscaRespuestas=mysqli_fetch_array($ResRespuestas)){
                            
                        ?>
                        <option value="<?php echo $filaBuscaRespuestas['Valor']; ?>">
                            <?php echo $filaBuscaRespuestas['Respuesta']; }?></option>
                    </select> 
                    <textarea class="Gestión_datos_maestros form-control" placeholder="Justifique su respuesta" style="height: 100px" name="<?php echo "PreguntaAbiertaGestionDAtos". $contador ?>" id="<?php echo "PreguntaAbiertaGestionDAtos". $contador ?>" ></textarea>
                    <input type="hidden" value="<?php echo $idPregunta?>" id="<?php echo "PreguntaGestionDatos".$contador ?>" id="<?php echo "PreguntaGestionDatos".$idPregunta ?>">
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

<?php }?>
