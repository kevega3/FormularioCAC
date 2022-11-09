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


