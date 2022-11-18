<form action="../../Modelo/AgregarPregunta.php" method="POST">
    <!-- <input type="text" name="pregunta" placeholder="Pregunta"> -->
    <p><label for="w3review">Pregunta:</label></p>
    <textarea id="w3review" name="w3review" rows="4" cols="100" required> </textarea>

    <br>
    <br>

    <input type="text" name="prioPreg" required placeholder="Prioridad Pregunta">

    <br>
    <br>

    <!-- <select name="consultora" >
        <option disabled selected value="">Consultora</option>
        <option value="Tinysoft">Tinysoft</option>
        <option value="CAC">CAC</option>
    </select> -->



<br>
<br>

    <!-- <select name="idAreaCon">
        <option disabled selected value="">Consultora</option>
        <option value="1">Almacenamiento</option>
        <option value="2">Arquitecrura empresarial</option>
        <option value="3">Arquitectura de datos</option>
        <option value="4">Calidad</option>
        <option value="5">Ciberseguridad</option>
        <option value="6">Estrategia de datos</option>
        <option value="7">Gestión de datos maestros</option>
        <option value="8">Gobierno</option>
        <option value="9">Mejora de Productividad</option>
        <option value="10">Seguridad de información y de los datos</option>
        <option value="11">Gestión documental y de contenidos</option>
        <option value="12">Integracion e interoperabilidad</option>
        <option value="13">Modelos de transformacion digital</option>
    </select> -->
    <br>
    <br>




  <select data-placeholder="¿Aquien se le va a preguntar?" multiple class="chosen-select" name="Rol[]" required>
    <option disabled selected value="" required>¿Aquien se le va a preguntar?</option>
        <option value="1">1</option>
        <option value="2">2</option>
        <option value="3">3</option>
        <option value="4">4</option>
        <option value="5">5</option>
    </select>





    
    <br>
    <br>

    <input type="text" name="TipoRespuesta" placeholder="TipoRespuesta" required>
    

    <input type="submit">
</form>


<script>
     $(".chosen-select").chosen({
  no_results_text: "Oops, nothing found!"
})
</script>