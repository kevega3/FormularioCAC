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




function ValidValuesAlamacenamientos() {
  var arr = $(".Almacenamiento");
  var PreguntasHechas = $(".request");
  var control = true;
  var controlValues = true;
  var idPersona = $("#Person").val();
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
      }
      if (control) {
        let loader = document.querySelector(".loader");
        loader.classList.add("active");

        var n = 0;
        for (j = 0; j < PreguntasHechas.length; j++) {

          n++;
          var cadena = $("#" + n).val();
          var RespuestaAbierta = $("#PreguntaAbierta" + n).val();
          var Pregunta = $("#Pregunta" + n).val();

          var Respuesta = cadena.toString();
          $.post("../Modelo/InsertRespuesta.php", {
            idPersona: idPersona,
            Respuesta: Respuesta,
            RespuestaAbierta: RespuestaAbierta,
            Pregunta: Pregunta
          },
            function (res) {
              if (res == 'Success') {

              } else {
                loader.classList.remove("active");
                controlValues = false;
                Swal.fire({
                  icon: 'error',
                  title: 'Tenemos un error inesperado',
                  text: 'Intentalo mas tarde o comunicate con el admin',
                })
              }
            })
        }
        // $.post("../Modelo/TerminarForm.php", {
        //   idPersona: idPersona,
        // }, function (res2) {
        //   if (res2 == 'Success') {
        //     window.location.replace("../Vista/Gracias.php");
        //   } else {
        //     Swal.fire({
        //       icon: 'error',
        //       title: 'Tenemos un error inesperado',
        //       text: 'Intentalo mas tarde o comunicate con el admin',
        //     })
        //   }
        // })
      }
    }

}