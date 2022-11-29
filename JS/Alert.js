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




function Alamacenamiento() {
  var arr = $(".Almacenamiento");
  var PreguntasHechas = $(".requestAlama");
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
          var Actualizar =  'repo1';
          n++;
          var cadena = $("#Alamace" + n).val();
          var RespuestaAbierta = $("#PreguntaAbiertaAlamace" + n).val();
          var Pregunta = $("#PreguntaAlamace" + n).val();

          var Respuesta = cadena.toString();
          $.post("../Modelo/InsertRespuesta.php", {
            idPersona: idPersona,
            Respuesta: Respuesta,
            RespuestaAbierta: RespuestaAbierta,
            Pregunta: Pregunta,Actualizar : Actualizar
          },
            function (res) {
               if (res == 1 || res === 1) {loader.classList.remove("active");
                Swal.fire({
                  position: 'center',
                  icon: 'success',
                  title: 'Se han guardado tus repuestas',
                  showConfirmButton: false,
                  timer: 1500
                })

                setTimeout("window.location='../Vista/'", 1500);
              }else{
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
      }
    }

}






function ArquitecturaEmpresarial() {
  
  var arr = $(".ArquitectEmpresarial");
  var PreguntasHechas = $(".requestArquiEmpresarial");
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
          var cadena = $("#ArquiEmpresa" + n).val();
          var RespuestaAbierta = $("#PreguntaAbiertaArquiEmpresa" + n).val();
          var Pregunta = $("#PreguntaArquiEmpresa" + n).val();
          var Actualizar =  'repo2';
          var Respuesta = cadena.toString();
          $.post("../Modelo/InsertRespuesta.php", {
            idPersona: idPersona,
            Respuesta: Respuesta,
            RespuestaAbierta: RespuestaAbierta,
            Pregunta: Pregunta,Actualizar : Actualizar,
          },
            function (res) {
              if (res == 1 || res === 1) {loader.classList.remove("active");
                Swal.fire({
                  position: 'center',
                  icon: 'success',
                  title: 'Se han guardado tus repuestas',
                  showConfirmButton: false,
                  timer: 1500
                })
                  setTimeout("window.location='../Vista/'", 1500);
              }else{
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
      }
    }

}











function ArquitecturadeDatos() {
  var arr = $(".ArquitectdeDatos");
  var PreguntasHechas = $(".requestArquitecturaDAtos");
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
          var Actualizar =  'repo3';
          n++;
          var cadena = $("#arqui" + n).val();
          var RespuestaAbierta = $("#PreguntaAbiertaarqui" + n).val();
          var Pregunta = $("#Preguntaarqui" + n).val();

          var Respuesta = cadena.toString();
          $.post("../Modelo/InsertRespuesta.php", {
            idPersona: idPersona,
            Respuesta: Respuesta,
            RespuestaAbierta: RespuestaAbierta,
            Pregunta: Pregunta,Actualizar : Actualizar
          },
            function (res) {
              if (res == 1 || res === 1) {loader.classList.remove("active");
                Swal.fire({
                  position:'center',
                  icon: 'success',
                  title: 'Se han guardado tus repuestas',
                  showConfirmButton: false,
                  timer: 1500
                })
                setTimeout("window.location='../Vista/'", 1500);
              }else{
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
      }
    }

}






function Ciberseguridad() {
  var arr = $(".Ciberseguridad");
  var PreguntasHechas = $(".requestCiberseguridad");
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
          var Actualizar =  'repo5';
          n++;
          var cadena = $("#Ciber" + n).val();
          var RespuestaAbierta = $("#PreguntaAbiertaCiber" + n).val();
          var Pregunta = $("#PreguntaCiber" + n).val();

          var Respuesta = cadena.toString();
          $.post("../Modelo/InsertRespuesta.php", {
            idPersona: idPersona,
            Respuesta: Respuesta,
            RespuestaAbierta: RespuestaAbierta,
            Pregunta: Pregunta,Actualizar : Actualizar
          },
            function (res) {
              if (res == 1 || res === 1) {loader.classList.remove("active");

                Swal.fire({
                  
                  position: 'center',
                  icon: 'success',
                  title: 'Se han guardado tus repuestas',
                  showConfirmButton: false,
                  timer: 1500
                })
                setTimeout("window.location='../Vista/'", 1500);
              }else{
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
      }
    }

}






function Calidad() {
  var arr = $(".Calidad");
  var PreguntasHechas = $(".requestCalidad");
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
          var Actualizar =  'repo4';
          n++;
          var cadena = $("#Calidad" + n).val();
          var RespuestaAbierta = $("#PreguntaAbiertaCalidad" + n).val();
          var Pregunta = $("#PreguntaCaidad" + n).val();

          var Respuesta = cadena.toString();
          $.post("../Modelo/InsertRespuesta.php", {
            idPersona: idPersona,
            Respuesta: Respuesta,
            RespuestaAbierta: RespuestaAbierta,
            Pregunta: Pregunta,Actualizar : Actualizar
          },
            function (res) {
               if (res == 1 || res === 1) {loader.classList.remove("active");


                Swal.fire({
                  position: 'center',
                  icon: 'success',
                  title: 'Se han guardado tus repuestas',
                  showConfirmButton: false,
                  timer: 1500
                })
setTimeout("window.location='../Vista/'", 1500);
              }else{
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
      }
    }

}






function Estrategia_de_datos() {
  var arr = $(".Estrategia_de_datos");
  var PreguntasHechas = $(".requestEstrategia_de_datos");
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
          var Actualizar =  'repo6';
          n++;
          var cadena = $("#Estrategia" + n).val();
          var RespuestaAbierta = $("#PreguntaAbiertaEstrategia" + n).val();
          var Pregunta = $("#PreguntaEstrategia" + n).val();

          var Respuesta = cadena.toString();
          $.post("../Modelo/InsertRespuesta.php", {
            idPersona: idPersona,
            Respuesta: Respuesta,
            RespuestaAbierta: RespuestaAbierta,
            Pregunta: Pregunta,Actualizar : Actualizar
          },
            function (res) {
              if (res == 1 || res === 1) {loader.classList.remove("active");
                Swal.fire({
                  position: 'center',
                  icon: 'success',
                  title: 'Se han guardado tus repuestas',
                  showConfirmButton: false,
                  timer: 1500
                })
              setTimeout("window.location='../Vista/'", 1500);
              }else{
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
      }
    }

}





function Gestión_datos_maestros() {
  var arr = $(".Gestión_datos_maestros");
  var PreguntasHechas = $(".requestGestión_datos");
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
          var Actualizar =  'repo7';
          n++;
          var cadena = $("#GestionDatos" + n).val();
          var RespuestaAbierta = $("#PreguntaAbiertaGestionDAtos" + n).val();
          var Pregunta = $("#PreguntaGestionDatos" + n).val();

          var Respuesta = cadena.toString();
          $.post("../Modelo/InsertRespuesta.php", {
            idPersona: idPersona,
            Respuesta: Respuesta,
            RespuestaAbierta: RespuestaAbierta,
            Pregunta: Pregunta,Actualizar : Actualizar
          },
            function (res) {
               if (res == 1 || res === 1) {loader.classList.remove("active");


                Swal.fire({
                  position: 'center',
                  icon: 'success',
                  title: 'Se han guardado tus repuestas',
                  showConfirmButton: false,
                  timer: 1500
                })
setTimeout("window.location='../Vista/'", 1500);
              }else{
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
      }
    }

}





function Gobierno() {
  var arr = $(".Gobierno");
  var PreguntasHechas = $(".requestGobierno");
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
          var Actualizar =  'repo8';
          n++;
          var cadena = $("#Gobierno" + n).val();
          var RespuestaAbierta = $("#PreguntaAbiertaGobierno" + n).val();
          var Pregunta = $("#PreguntaGobierno" + n).val();

          var Respuesta = cadena.toString();
          $.post("../Modelo/InsertRespuesta.php", {
            idPersona: idPersona,
            Respuesta: Respuesta,
            RespuestaAbierta: RespuestaAbierta,
            Pregunta: Pregunta,Actualizar : Actualizar
          },
            function (res) {
               if (res == 1 || res === 1) {loader.classList.remove("active");


                Swal.fire({
                  position: 'center',
                  icon: 'success',
                  title: 'Se han guardado tus repuestas',
                  showConfirmButton: false,
                  timer: 1500
                })
setTimeout("window.location='../Vista/'", 1500);
              }else{
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
      }
    }

}





function Mejora_de_Productividad() {
  var arr = $(".MejoraProduc");
  var PreguntasHechas = $(".requestMejoraProduc");
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
          var Actualizar =  'repo9';
          n++;
          var cadena = $("#Productiv" + n).val();
          var RespuestaAbierta = $("#PreguntaAbiertaProductiv" + n).val();
          var Pregunta = $("#PreguntaProductiv" + n).val();

          var Respuesta = cadena.toString();
          $.post("../Modelo/InsertRespuesta.php", {
            idPersona: idPersona,
            Respuesta: Respuesta,
            RespuestaAbierta: RespuestaAbierta,
            Pregunta: Pregunta,Actualizar : Actualizar
          },
            function (res) {
               if (res == 1 || res === 1) {loader.classList.remove("active");


                Swal.fire({
                  position: 'center',
                  icon: 'success',
                  title: 'Se han guardado tus repuestas',
                  showConfirmButton: false,
                  timer: 1500
                })
setTimeout("window.location='../Vista/'", 1500);
              }else{
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
      }
    }

}




function Seguridad_de_información() {
  var arr = $(".Seguridad_De_info");
  var PreguntasHechas = $(".requestSeguridadInfo");
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
          var Actualizar =  'repo10';
          n++;
          var cadena = $("#Seguirdadinfo" + n).val();
          var RespuestaAbierta = $("#PreguntaAbiertaSeguirdadinfo" + n).val();
          var Pregunta = $("#PreguntaSeguirdadinfo" + n).val();

          var Respuesta = cadena.toString();
          $.post("../Modelo/InsertRespuesta.php", {
            idPersona: idPersona,
            Respuesta: Respuesta,
            RespuestaAbierta: RespuestaAbierta,
            Pregunta: Pregunta,Actualizar : Actualizar
          },
            function (res) {
               if (res == 1 || res === 1) {loader.classList.remove("active");


                Swal.fire({
                  position: 'center',
                  icon: 'success',
                  title: 'Se han guardado tus repuestas',
                  showConfirmButton: false,
                  timer: 1500
                })
setTimeout("window.location='../Vista/'", 1500);
              }else{
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
      }
    }

}




function Gestión_documental() {
  var arr = $(".Gestión_documental");
  var PreguntasHechas = $(".requestGestionDocu");
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
          var Actualizar =  'repo11';
          n++;
          var cadena = $("#GestionDocu" + n).val();
          var RespuestaAbierta = $("#PreguntaAbiertaGestionDocu" + n).val();
          var Pregunta = $("#PreguntaGestionDocu" + n).val();

          var Respuesta = cadena.toString();
          $.post("../Modelo/InsertRespuesta.php", {
            idPersona: idPersona,
            Respuesta: Respuesta,
            RespuestaAbierta: RespuestaAbierta,
            Pregunta: Pregunta,Actualizar : Actualizar
          },
            function (res) {
               if (res == 1 || res === 1) {loader.classList.remove("active");


                Swal.fire({
                  position: 'center',
                  icon: 'success',
                  title: 'Se han guardado tus repuestas',
                  showConfirmButton: false,
                  timer: 1500
                })
setTimeout("window.location='../Vista/'", 1500);
              }else{
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
      }
    }

}




function Integracio_interoperabilidad() {
  var arr = $(".Integracio_interoperabilidad");
  var PreguntasHechas = $(".requestIntegracionInt");
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
          var Actualizar =  'repo12';
          n++;
          var cadena = $("#IntegracioInter" + n).val();
          var RespuestaAbierta = $("#PreguntaAbiertaIntegracioInter" + n).val();
          var Pregunta = $("#PreguntaIntegracioInter" + n).val();
          var Respuesta = cadena.toString();
          $.post("../Modelo/InsertRespuesta.php", {
            idPersona: idPersona,
            Respuesta: Respuesta,
            RespuestaAbierta: RespuestaAbierta,
            Pregunta: Pregunta,Actualizar : Actualizar
          },
            function (res) {
               if (res == 1 || res === 1) {loader.classList.remove("active");


                Swal.fire({
                  position: 'center',
                  icon: 'success',
                  title: 'Se han guardado tus repuestas',
                  showConfirmButton: false,
                  timer: 1500
                })
setTimeout("window.location='../Vista/'", 1500);
              }else{
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
      }
    }

}




function Modelos_de_transformacion() {
  var arr = $(".Modelos_de_transformacion");
  var PreguntasHechas = $(".requestModelosTrasform");
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
          var Actualizar =  'repo13';
          n++;
          var cadena = $("#" + n).val();
          var RespuestaAbierta = $("#PreguntaAbierta" + n).val();
          var Pregunta = $("#Pregunta" + n).val();

          var Respuesta = cadena.toString();
          $.post("../Modelo/InsertRespuesta.php", {
            idPersona: idPersona,
            Respuesta: Respuesta,
            RespuestaAbierta: RespuestaAbierta,
            Pregunta: Pregunta,Actualizar : Actualizar
          },
            function (res) {
               if (res == 1 || res === 1) {loader.classList.remove("active");


                Swal.fire({
                  position: 'center',
                  icon: 'success',
                  title: 'Se han guardado tus repuestas',
                  showConfirmButton: false,
                  timer: 1500
                })
setTimeout("window.location='../Vista/'", 1500);
              }else{
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
      }
    }

}




function Metadatos() {
  var arr = $(".Metadatos");
  var PreguntasHechas = $(".requestMetadatos");
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
          var Actualizar =  'repo14';
          n++;
          var cadena = $("#Metadatos" + n).val();
          var RespuestaAbierta = $("#PreguntaAbiertaMetadatos" + n).val();
          var Pregunta = $("#PreguntaMetadatos" + n).val();

          var Respuesta = cadena.toString();
          $.post("../Modelo/InsertRespuesta.php", {
            idPersona: idPersona,
            Respuesta: Respuesta,
            RespuestaAbierta: RespuestaAbierta,
            Pregunta: Pregunta,Actualizar : Actualizar
          },
            function (res) {
               if (res == 1 || res === 1) {loader.classList.remove("active");


                Swal.fire({
                  position: 'center',
                  icon: 'success',
                  title: 'Se han guardado tus repuestas',
                  showConfirmButton: false,
                  timer: 1500
                })
setTimeout("window.location='../Vista/'", 1500);
              }else{
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
      }
    }

}




function Almacenamiento_operaciones() {
  var arr = $(".Almacenamiento_operaciones");
  var PreguntasHechas = $(".requestAlacenamientoOpera");
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
          var Actualizar =  'repo15';
          n++;
          var cadena = $("#Almacenamiento" + n).val();
          var RespuestaAbierta = $("#PreguntaAbiertaAlmacenamiento" + n).val();
          var Pregunta = $("#PreguntaAlmacenamiento" + n).val();

          var Respuesta = cadena.toString();
          $.post("../Modelo/InsertRespuesta.php", {
            idPersona: idPersona,
            Respuesta: Respuesta,
            RespuestaAbierta: RespuestaAbierta,
            Pregunta: Pregunta,Actualizar : Actualizar
          },
            function (res) {
               if (res == 1 || res === 1) {loader.classList.remove("active");


                Swal.fire({
                  position: 'center',
                  icon: 'success',
                  title: 'Se han guardado tus repuestas',
                  showConfirmButton: false,
                  timer: 1500
                })
setTimeout("window.location='../Vista/'", 1500);
              }else{
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
      }
    }

}





function Datos_MaestrosRefe() {
  var arr = $(".Almacenamiento_operaciones");
  var PreguntasHechas = $(".requestDatosMaestros");
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
          var Actualizar =  'repo16';
          n++;
          var cadena = $("#DatosMaestros" + n).val();
          var RespuestaAbierta = $("#PreguntaAbiertaDatosMaestros" + n).val();
          var Pregunta = $("#PreguntaDatosMaestros" + n).val();

          var Respuesta = cadena.toString();
          $.post("../Modelo/InsertRespuesta.php", {
            idPersona: idPersona,
            Respuesta: Respuesta,
            RespuestaAbierta: RespuestaAbierta,
            Pregunta: Pregunta,Actualizar : Actualizar
          },
            function (res) {
               if (res == 1 || res === 1) {loader.classList.remove("active");


                Swal.fire({
                  position: 'center',
                  icon: 'success',
                  title: 'Se han guardado tus repuestas',
                  showConfirmButton: false,
                  timer: 1500
                })
setTimeout("window.location='../Vista/'", 1500);
              }else{
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
      }
    }

}




function Gestion_Arquitectura () {
  var arr = $(".Gestion_Arquitectura");
  var PreguntasHechas = $(".requestGestionArqui");
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
          var Actualizar =  'repo17';
          n++;
          var cadena = $("#GestionArquitec" + n).val();
          var RespuestaAbierta = $("#PreguntaAbiertaGestionArquitec" + n).val();
          var Pregunta = $("#PreguntaGestionArquitec" + n).val();

          var Respuesta = cadena.toString();
          $.post("../Modelo/InsertRespuesta.php", {
            idPersona: idPersona,
            Respuesta: Respuesta,
            RespuestaAbierta: RespuestaAbierta,
            Pregunta: Pregunta,Actualizar : Actualizar
          },
            function (res) {
               if (res == 1 || res === 1) {loader.classList.remove("active");


                Swal.fire({
                  position: 'center',
                  icon: 'success',
                  title: 'Se han guardado tus repuestas',
                  showConfirmButton: false,
                  timer: 1500
                })
setTimeout("window.location='../Vista/'", 1500);
              }else{
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
      }
    }

}





function Gestión_metadatos () {
  var arr = $(".Gestión_metadatos");
  var PreguntasHechas = $(".requestGestionMetadaDAtos");
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
          var Actualizar =  'repo18';
          n++;
          var cadena = $("#GestionMetadatoss" + n).val();
          var RespuestaAbierta = $("#PreguntaAbiertaGestionMetadatoss" + n).val();
          var Pregunta = $("#PreguntaGestionMetadatoss" + n).val();

          var Respuesta = cadena.toString();
          $.post("../Modelo/InsertRespuesta.php", {
            idPersona: idPersona,
            Respuesta: Respuesta,
            RespuestaAbierta: RespuestaAbierta,
            Pregunta: Pregunta,Actualizar : Actualizar
          },
            function (res) {
               if (res == 1 || res === 1) {loader.classList.remove("active");


                Swal.fire({
                  position: 'center',
                  icon: 'success',
                  title: 'Se han guardado tus repuestas',
                  showConfirmButton: false,
                  timer: 1500
                })
setTimeout("window.location='../Vista/'", 1500);
              }else{
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
      }
    }

}