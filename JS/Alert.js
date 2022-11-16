function CerrarSesion() {
  Swal.fire({
    title: '¿Desea Cerrar la sesion?',
    text: "Si la desea cerrar no se guardara cambios o respuestas",
    icon: 'warning',
    showCancelButton: true,
    confirmButtonColor: '#3085d6',
    cancelButtonColor: '#d33',
    confirmButtonText: 'Cerrar Sesion'
  }).then((result) => {
    if (result.isConfirmed) {
      Swal.fire({
        position: 'center',
        icon: 'success',
        title: '¡Te vere luego !',
        showConfirmButton: false,
        timer: 1500
      })
      setTimeout(() => {
        window.location.href = "../index.php";
      }, 1500)

    }
  })
}




function ValidValues() {
  var arr = $(".validar");
  var control = true;
  if (arr.length > 0) {
    for (i = 0; i < arr.length; i++) {
      if (arr[i].value === '' || arr[i].value === null) {
        Swal.fire({
          icon: 'error',
          title: 'Debes llenar todo el formulario',
          text: 'No podemos seguir si no llenas todos los campos',
        })
        control = false;
        break;
      }
      if (control) {
        let loader = document.querySelector(".loader");
        loader.classList.add("active");
        var idPersona = $("#Person").val();
        for (j = 0; j < arr.length; j++) {
          var idPregunta = $("#".j).val();
          var Respuesta = $("#").val();
          var RespuestaAbierta = $("#").val();
          $.post("../Modelo/InsertRespuesta.php", {
            idPersona:idPersona,
            
            
          },
            function (data, status) {
              loader.classList.remove("active");

              // setTimeout("window.location='../Solicitudes.php'", 1500);
            })
        }


      }
    }

  }
}