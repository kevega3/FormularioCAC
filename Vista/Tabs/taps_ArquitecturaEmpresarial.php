
<div id="Arquitectura Empresarial" class="tabcontent">
<?php 
    $TraerCalida = "SELECT * FROM `preguntas` WHERE idAreaCon = 1 and TipoRespuesta ='SelectAlmacenamiento'";
    $res =  mysqli_query($conn,$TraerCalida);
    $contador = 0;
    while ($fila=mysqli_fetch_array($res)) { 
        $contador++;
        ?>
    <div class="formularioQuestion linearBlue row">
        <div class="col-12">
            <div class="titleformul">Pregunta <?php echo $contador?>.</div>
            <div class="questionFrom"><?php echo $fila['pregunta']; ?></div>
            <div class="request">
                <select class="select" name="Pregunta1" id="Pregunta1" required>
                    <option disabled selected value="">Seleccionar</option>
                    <?php
                        $NuPregunta2 = $fila['idPregunta'];
                        
                        $sqlPregunta2 = "SELECT * FROM `bancorespuesta` WHERE idPregunta = 3"; 

                        $Pregunta2res =  mysqli_query($conn,$sqlPregunta2);
                        while ($filaPre2=mysqli_fetch_array($Pregunta2res)){
                    ?>
                    <option value="<?php echo $filaPre2['Respuesta'] ?>">
                        <?php echo $filaPre2['Respuesta']; }?></option>

                    <input type="text" class="AbiertaCalidad" name="Justifique su respuesta"
                        placeholder="Justifique su respuesta">


            </div>
        </div>
    </div>


    <?php 
    }
    
?>
</div>