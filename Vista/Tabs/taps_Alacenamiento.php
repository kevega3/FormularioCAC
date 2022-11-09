<?php 
    $varQuery2 = "select persona.*,roles.* from persona,roles where persona.idRol = roles.idRol";
    $res =  mysqli_query($conn,$varQuery2);
    while ($fila=mysqli_fetch_array($res)) {
        $Rol=$fila['idRol']; 
        $AreasCono = $fila['AreasCono']; 
    }
?>


<div id="Almacenamiento" class="tabcontent">

<div class="formularioQuestion linearBlue row">
                <div class="col-6">
                    <div class="titleformul">Pregunta 1.</div>
                    <div class="questionFrom"></div>
                    <div class="request">
                        <select name="" id="">
                            <option value="">sadas</option>
                            <option value="">sadas</option>
                            <option value="">sadas</option>
                        </select>
                        <input type="text" placeholder = "Justifique su respuesta">
                    </div>
                </div>
                <div class="col-6">
                    <div class="titleformul">titke title</div>
                    <div class="questionFrom">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Veniam
                        incidunt
                        fuga reiciendis voluptate accusamus aut assumenda at corrupti, amet architecto sint
                        repudiandae?
                        Vel veniam temporibus dolores ut consectetur? Impedit, fugit!</div>
                    <div class="request">
                        <select name="" id="">
                            <option value="">sadas</option>
                            <option value="">sadas</option>
                            <option value="">sadas</option>
                        </select>
                        
                        <input type="text" placeholder = "Justifique su respuesta">
                    </div>
                </div>

            </div>









            <div class="formularioQuestion linearBlue row">
                <div class="col-6">
                    <div class="titleformul">titke title</div>
                    <div class="questionFrom">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Veniam
                        incidunt
                        fuga reiciendis voluptate accusamus aut assumenda at corrupti, amet architecto sint
                        repudiandae?
                        Vel veniam temporibus dolores ut consectetur? Impedit, fugit!</div>
                    <div class="request">
                        <input type="radio" name="" id="">
                        <input type="text" placeholder = "Justifique su respuesta">
                    </div>
                </div>
                <div class="col-6">
                    <div class="titleformul">titke title</div>
                    <div class="questionFrom">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Veniam
                        incidunt
                        fuga reiciendis voluptate accusamus aut assumenda at corrupti, amet architecto sint
                        repudiandae?
                        Vel veniam temporibus dolores ut consectetur? Impedit, fugit!</div>
                    <div class="request">
                        <select name="" id="">
                            <option value="">sadas</option>
                            <option value="">sadas</option>
                            <option value="">sadas</option>
                        </select>
                        <input type="text" placeholder = "Justifique su respuesta">
                    </div>
                </div>

            </div>

            </div>