<!DOCTYPE html>
<html lang="es">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Selector de Multiplicaciones</title>
<style>
  .correct { color: green; }
  .incorrect { color: red; }
</style>
</head>
<body>
<h2>Tabla de Multiplicaciones</h2>
<div>
  <label for="num">Selecciona un número para multiplicar:</label>
  <input type="number" id="num">
</div>
<div>
  <label for="start">Desde:</label>
  <input type="number" id="start">
  <label for="end">Hasta:</label>
  <input type="number" id="end">
</div>
<button onclick="generarTabla()">Generar Tabla</button>
<br><br>
<div id="tabla"></div>
<button onclick="verificarRespuestas()">Verificar Respuestas</button>
<div id="resultado"></div>

<script>
  function generarTabla() {
    const num = parseInt(document.getElementById('num').value);
    const start = parseInt(document.getElementById('start').value);
    const end = parseInt(document.getElementById('end').value);
    let tablaHTML = '<table border="1">';
    for (let i = start; i <= end; i++) {
      tablaHTML += `<tr><td>${num} x ${i}</td><td><input type="number" id="respuesta${i}"></td></tr>`;
    }
    tablaHTML += '</table>';
    document.getElementById('tabla').innerHTML = tablaHTML;
  }

  function verificarRespuestas() {
    const start = parseInt(document.getElementById('start').value);
    const end = parseInt(document.getElementById('end').value);
    let resultadoHTML = '<p>Resultados:</p>';
    for (let i = start; i <= end; i++) {
      const respuesta = parseInt(document.getElementById(`respuesta${i}`).value);
      const resultado = i * parseInt(document.getElementById('num').value);
      if (respuesta === resultado) {
        resultadoHTML += `<p class="correct">${i} x ${document.getElementById('num').value} = ${respuesta}</p>`;
      } else {
        resultadoHTML += `<p class="incorrect">${i} x ${document.getElementById('num').value} = ${respuesta} (La respuesta correcta es ${resultado})</p>`;
      }
    }
    document.getElementById('resultado').innerHTML = resultadoHTML;
  }
</script>
</body>
</html>
