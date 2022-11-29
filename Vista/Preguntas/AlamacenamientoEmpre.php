<?php

if($Report2 == 1){
?>
<div id="ContGracias">
    <h1>No hay Preguntas para responder</h1>
    
</div>
<?php
}else{
?>

<div id="ContEmpre" class="tabcontent">
    
    <?php
    $TraerPreguntas = 'SELECT * FROM preguntas INNER JOIN areaconocimiento ON preguntas.idAreaCon = areaconocimiento.idAreaConocimiento WHERE idAreaCon = 2' ;
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
            <div class="request requestArquiEmpresarial">
                <?php 
                    $TraerSelect= "SELECT * FROM `bancorespuesta` WHERE TipoPregunta = '$TipoRespuesta'"; 
                    $ResSelect=  mysqli_query($conn,$TraerSelect);
                        while ($filaBuscaSelect=mysqli_fetch_array($ResSelect)){
                            $ValTipoPregunta =  $filaBuscaSelect['ValTipoPregunta'];    
                        }
                        if($ValTipoPregunta == 'Select'){
                        ?>
                <select class="ArquitectEmpresarial" name="<?php echo "ArquiEmpresa". $contador?>" id="<?php echo "ArquiEmpresa". $contador?>" required>
                    <option disabled selected value="">Seleccionar</option>
                    <?php    
                        }elseif($ValTipoPregunta == 'MultiSelect'){
                        ?>
                    <select data-placeholder="Seleccione uno o varios" multiple class="chosen-select " name="<?php echo "ArquiEmpresa". $contador?>[]"  id="<?php echo "ArquiEmpresa". $contador ?>">
                        <option disabled selected value="" required>Seleccione uno o varios</option>
                        <?php    
                        }
                        $TraerRespuestas= "SELECT * FROM `bancorespuesta` WHERE TipoPregunta = '$TipoRespuesta'"; 
                        $ResRespuestas=  mysqli_query($conn,$TraerRespuestas);
                        if($ValTipoPregunta == 'Abierta'){
                        ?>
                        <textarea class="ArquitectEmpresarial form-control" placeholder="Si/No Justifique su respuesta" style="height: 100px" id="<?php echo "ArquiEmpresa". $contador ?>" name="<?php echo "ArquiEmpresa". $contador ?>" ></textarea>
                        <input type="hidden" name="<?php echo "PreguntaAbiertaArquiEmpresa". $contador ?>" value="Null" class="ArquitectEmpresarial" id="<?php echo "PreguntaAbiertaArquiEmpresa". $contador ?>">        
                        <input type="hidden" value="<?php echo $idPregunta?>" id="<?php echo "PreguntaArquiEmpresa".$contador ?>" id="<?php echo "Pregunta".$idPregunta ?>">
                        <?php  
                        }elseif($ValTipoPregunta == 'Porcentaje'){
                        ?>
                        <input type="number" class="ArquitectEmpresarial" placeholder="Agregue el porcentaje" id="<?php echo $contador ?>"
                            name="<?php echo "ArquiEmpresa". $contador ?>">
                        <input class="ArquitectEmpresarial" type="hidden" name="<?php echo "PreguntaAbiertaArquiEmpresa". $contador ?>" value="Null" id="<?php echo "PreguntaAbiertaArquiEmpresa". $contador ?>">    
                        <input type="hidden" value="<?php echo $idPregunta?>" id="<?php echo "PreguntaArquiEmpresa".$contador ?>" id="<?php echo "Pregunta".$idPregunta ?>">
                        <?php 
                        }else{
                        while ($filaBuscaRespuestas=mysqli_fetch_array($ResRespuestas)){
                            
                        ?>
                        <option value="<?php echo $filaBuscaRespuestas['Valor']; ?>">
                            <?php echo $filaBuscaRespuestas['Respuesta']; }?></option>
                    </select> 
                    <textarea class="ArquitectEmpresarial form-control" placeholder="Justifique su respuesta" style="height: 100px" name="<?php echo "PreguntaAbiertaArquiEmpresa". $contador ?>" id="<?php echo "PreguntaAbiertaArquiEmpresa". $contador ?>" ></textarea>
                    <input type="hidden" value="<?php echo $idPregunta?>" id="<?php echo "PreguntaArquiEmpresa".$contador ?>" id="<?php echo "Pregunta".$idPregunta ?>">
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
<?php
}


?>


