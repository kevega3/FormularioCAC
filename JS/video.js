var vid = document.getElementById("VideoIntro");

var introduccion = document.getElementById("INTRODUCCION");

vid.onplay = function(){
    var Person = $("#Person").val();
    $.post("../Modelo/ActualizarIntro.php", {
        Person: Person
      },
        function (res) {
          if (res = 1) {
            introduccion.classList.add("respoIntro");
          } else {
            alert('Error, Porfavor contactar con el admin');
          }
        })
}
