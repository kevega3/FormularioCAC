<div class="tab">
    <?php 
        if(str_contains($AreasCono, '1')){
            
    ?>

    <button class="tablinks" onclick="openCity(event, 'Almacenamiento')">Almacenamiento
        <buttom class="circulo">2</buttom>
    </button>

    <?php 
        }if(str_contains($AreasCono, '2')){
    ?>
    <button class="tablinks" onclick="openCity(event, 'Arquitectura Empresarial')">Arquitectura Empresarial
        <buttom class="circulo">2</buttom>
    </button>
    <?php 
        }if(str_contains($AreasCono, '3')){
    ?>
    <button class="tablinks" onclick="openCity(event, 'Arquitectura de datos')">Arquitectura de datos
        <buttom class="circulo">2</buttom>
    </button>
    <?php 
    }if(str_contains($AreasCono, '4')){
    ?>
    <button class="tablinks" onclick="openCity(event, 'Calidad')">Calidad
        <buttom class="circulo">3</buttom>
    </button>
    <?php 
    }if(str_contains($AreasCono, '5')){
    ?>
    <button class="tablinks" onclick="openCity(event, 'Ciberseguridad')">Ciberseguridad
        <buttom class="circulo">2</buttom>
    </button>
    <?php 
    }if(str_contains($AreasCono, '6')){
    ?>
    <button class="tablinks" onclick="openCity(event, 'Estrategia de datos')">Estrategia de datos
        <buttom class="circulo">2</buttom>
    </button>
    <?php 
    }if(str_contains($AreasCono, '7')){
    ?>
    <button class="tablinks" onclick="openCity(event, 'Gestión de datos maestros')">Gestión de datos maestros
        <buttom class="circulo">2</buttom>
    </button>
    <?php 
    }if(str_contains($AreasCono, '8')){
    ?>
    <button class="tablinks" onclick="openCity(event, 'Gobierno')">Gobierno
        <buttom class="circulo">2</buttom>
    </button>
    <?php 
    }if(str_contains($AreasCono, '9')){
    ?>
    <button class="tablinks" onclick="openCity(event, 'Mejora de Productividad')">Mejora de Productividad
        <buttom class="circulo">2</buttom>
    </button>
    
    <?php }?>

</div>




<div class="tab">
<?php 
    if(str_contains($AreasCono, 'segurInfo')){
    ?>
    <button class="tablinks" onclick="openCity(event, 'Seguridad de información y de los datos')">Seguridad de
        información y de los datos
        <buttom class="circulo">2</buttom>
    </button>
    <?php 
}if(str_contains($AreasCono, 'GestionDocu')){
?>
    <button class="tablinks" onclick="openCity(event, 'Gestión documental y de contenidos')">Gestión documental y de
        contenidos
        <buttom class="circulo">2</buttom>
    </button>
    <?php 
}if(str_contains($AreasCono, 'IntegraIntero')){
?>
    <button class="tablinks" onclick="openCity(event, 'Integracion e interoperabilidad')">Integracion e
        interoperabilidad
        <buttom class="circulo">2</buttom>
    </button>
    <?php 
}if(str_contains($AreasCono, 'ModeloTras')){
?>
    <button class="tablinks" onclick="openCity(event, 'Modelos de transformacion digital')">Modelos de transformacion
        digital
        <buttom class="circulo">2</buttom>
    </button>
    <?php 
}
?>
</div>