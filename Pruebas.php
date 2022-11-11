 <script src="https://code.jquery.com/jquery-3.6.1.min.js"></script>

 <input type="text" class="validar" name="2" id="1">
 <h1 id="DOM"></h1>
 <button onclick="ValidValues()">enviar</button>
 <button onclick="addTEXT()">add</button>

 <script>
function ValidValues() {
    var arr = $(".validar");
    if (arr.length > 0) {
        for (i = 0; i < arr.length; i++) {


            if (arr[i].value === '' || arr[i].value === null) {
                var inputname = document.getElementById(arr.length).name
                // alert("La pregunta"+ inputname + "No esta contestada");
                document.getElementById("DOM").textContent += "La pregunta" + inputname + "No esta contestada";
                // document.getElementById("DOM").innerHTML = "La pregunta"+ inputname + "No esta contestada";
            } else {
                alert("Se supone que todo correcto");
            }
        }
    }
}

function addTEXT() {
    const lineBreak = document.createElement('p');
    lineBreak.innerHTML = "La pregunta No esta contestada";
    textContent = document.getElementById("DOM");
    textContent.appendChild(lineBreak);
    // var inputname = document.getElementById("1").name;
    // textos = document.getElementById("DOM");
    // const lineBreak = document.createElement('p');
    // textos.textContent += "La pregunta" + inputname + "No esta contestada";
    // const lineBreak = document.createElement('br');
    // textContent.appendChild(lineBreak);
}
 </script>