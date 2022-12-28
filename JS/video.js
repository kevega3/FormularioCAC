var vid = document.getElementById("VideoIntro");

vid.onplay = function(){
    var Person = $("#Person").val();
    $.post("../Modelo/ActualizarIntro.php", {
        Person: Person
      },
        function (res) {
          if (res = 1) {
            console.log('Se visualiza video');
          } else {
            alert('No Actualizado');
          }
        })
}
