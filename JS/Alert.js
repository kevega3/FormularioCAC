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
  var PreguntasHechas = $(".request");
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
    }
      if (control) {
        let loader = document.querySelector(".loader");
        loader.classList.add("active");
        var idPersona = $("#Person").val();
        var n = 0;
        for (j = 0; j < PreguntasHechas.length; j++) {
          n++;
          var Respuesta = $("#"+n).val();
          var RespuestaAbierta = $("#PreguntaAbierta"+n).val();
          var Pregunta = $("#Pregunta"+n).val();

          if(Array.isArray(Respuesta)){
            var Respuesta2 = Respuesta.join()
          }else{
            var Respuesta2 = Respuesta;
          }
          $.post("../Modelo/InsertRespuesta.php", {
            idPersona:idPersona,
            Respuesta2 :  Respuesta2,
            RespuestaAbierta : RespuestaAbierta,
            Pregunta : Pregunta
          },
            function (data, status) {
              loader.classList.remove("active");
            })
        }
      }
    }
}