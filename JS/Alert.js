function CerrarSesion(){
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




function ValidValues(){
    var arr = $(".validar");
    var control = true;
    if (arr.length > 0) {
        for (i = 0; i < arr.length; i++) {
                if (arr[i].value === '' || arr[i].value === null) {
                  // const lineBreak = document.createElement('p');
                  // lineBreak.innerHTML = "La pregunta No esta contestada"+ i;
                  // textContent = document.getElementById("DOM");
                  // textContent.appendChild(lineBreak);
                  // textContent.classList.add("replay");

                  Swal.fire({
                    icon: 'error',
                    title: 'Debes llenar todo el formulario',
                    text: 'No podemos seguir si no llenas todos los campos',
                  })
                    control = false;
                    break;
                }
                if(control){
                  for(j = 0; j < arr.length; j++){
                    var j = $("#".j).val();
                  }
                  let loader = document.querySelector(".loader");
                  loader.classList.add("active");
                }
        }
        
    }
}