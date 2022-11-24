<div class="container-fluid ">

    <div class="tituloConsultasToken">
        <img src="../../img/simbolo_cac_color.png" alt="" style="width:60px;">
        <h1>Generar Token</h1>
    </div>
    <br>

    <button type="button" class="btn btn-success ms-3" data-bs-toggle="modal" data-bs-target="#AgregarToken">
        Agregar <i class="fas fa-user-plus"></i>
    </button>

    <!-- Modal -->
    <div class="modal fade" id="AgregarToken" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header menu">
                    <h5 class="modal-title" id="exampleModalLabel">Generar Token</h5>
                    <button type="button" class="btn-close bg-white" data-bs-dismiss="modal"
                        aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form class="formulario" id="formulario">

                        <!-- Grupo: NombreEntidad -->
                        <div class="formulario__grupo" id="grupo__NombreEntidad">
                            <label for="NombreEntidad" class="formulario__label">Nombre Entidad</label>
                            <div class="formulario__grupo-input">
                                <input type="text" class="formulario__input" name="NombreEntidad" id="NombreEntidad"
                                    placeholder="Digite el  Nombre de la entidad" />
                                <i class="formulario__validacion-estado fas fa-times-circle"></i>
                            </div>
                            <p class="formulario__input-error">
                                El Nombre de la Entidad debe tener 5 a 16 dígitos y solo puede contener numeros y
                                letras.
                            </p>
                        </div>

                        <!-- Grupo: Nombre Persona-->
                        <div class="formulario__grupo " id="grupo__NombrePersona">
                            <label for="NombreNotificador" class="formulario__label">Nombre</label>
                            <div class="formulario__grupo-input">
                                <input type="text" class="formulario__input" name="NombrePersona" id="NombrePersona"
                                    placeholder="Digite el nombre de la persona" />
                                <i class="formulario__validacion-estado fas fa-times-circle"></i>
                            </div>
                            <p class="formulario__input-error">
                                el Nombre de la persona debe tener 10 a 40 dígitos
                            </p>
                        </div>


                        <!-- Grupo: CorreoNotificador -->
                        <div class="formulario__grupo campo" id="grupo__CorreoNotificador">
                            <label for="CorreoNotificador" class="formulario__label">Correo</label>
                            <div class="formulario__grupo-input">
                                <input type="text" class="formulario__input" name="CorreoNotificador"
                                    id="CorreoNotificador" placeholder="Digite su CorreoNotificador" />
                                <i class="formulario__validacion-estado fas fa-times-circle"></i>
                            </div>
                            <p class="formulario__input-error">
                                el Correo Notificador debe tener 10 a 40 dígitos
                            </p>
                        </div>

                        <!-- Grupo: SelectRol -->
                        <div class="formulario__grupo campo" id="grupo__SelectRol">
                            <label for="SelectRol" class="formulario__label">Rol</label>
                            <div class="formulario__grupo-input">
                                <select name="SelectRol" id="SelectRol" class="formulario__input" required>
                                    <option disabled selected value="">Seleccionar</option>
                                    <option value="1">Líderes negocio</option>
                                    <option value="2">Usuarios negocio</option>
                                    <option value="3">Líderes Tecnología</option>
                                    <option value="4">Equipo tecnología</option>
                                    <option value="5">Equipo Seguridad y privacidad</option>

                                </select>
                                <i class="formulario__validacion-estado fas fa-times-circle"></i>
                            </div>
                        </div>
                        <br>
                        <div class="formulario__mensaje" id="formulario__mensaje">
                            <p>
                                <i class="fas fa-exclamation-triangle"></i> <b>Error:</b> Por favor
                                rellena el formulario correctamente.
                            </p>
                        </div>


                        <br>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Cerrar</button>

                            <button type="submit" class="formulario__btn">Crear</button>
                        </div>
                    </form>
                </div>

            </div>
        </div>
    </div>
</div>






































<div class="Container-Tables">

    <div class="BordeTabla">
        <table id="Tablas" class="table table-striped" style="width:100%">
            <thead class="">
                <tr class="tablaCol bg-primary text-white">
                    <th>Entidad</th>
                    <th>Nombres</th>
                    <th>Correo</th>
                    <th>
                        <center>
                            Reenviar
                        </center>
                    </th>

                </tr>
            </thead>
            <tbody>

                <?php
                    
                    $query ="SELECT * FROM persona"  ;
                    $res = mysqli_query($conn, $query);
                    while ($row = mysqli_fetch_array($res)) { ?>
                <tr class="columnas">
                    <td><?php echo $row['nombreEntidad']; ?></td>
                    <td><?php echo $row['nombre1']; ?></td>
                    <td><?php echo $row['correo']; ?></td>
                    <td>
                        <center>
                            <button class="btn btn-success"
                                onclick="ReenviarCodigo('<?php echo $row['correo']?>','<?php echo $row['idPersona']; ?>')">
                                <i class="fas fa-reply"></i>
                            </button>
                        </center>
                    </td>
                    <?php }
                    ?>
                </tr>
            </tbody>
        </table>
    </div>

</div>
<!-- Tabla -->
</div>


<button onclick="clikme()">clikcme</button>

