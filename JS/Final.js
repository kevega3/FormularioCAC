window.onload = function() {
    var idPersona = $("#idPersona").val();
    $.post("../Modelo/Final.php", {
            idPersona: idPersona,
        },
        function(res) {
            if (res == 1) {
                location.href = "https://cuentadealtocosto.org/siscac_users/CUESTIONARIOCAC/Vista/Gracias.php";
            } else {
                alert("Error porfavor Comuniquese con el admin");
            }
        })
}