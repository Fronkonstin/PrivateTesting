
function crearH2() {
  var h2 = document.createElement("h2");
  var texto = document.createTextNode("Esto es JS puro");
  h2.appendChild(texto);
  h2.style.color = "#801515";
  document.getElementById("land").appendChild(h2);
}

crearH2();

