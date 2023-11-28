
<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="cssprestamos.css/prestamos.css">
  <title>Calculadora de Tasa de Interés</title>
</head>
<body>
  <div class="calculator">
    <h2>Calculadora de Tasa de Interés</h2>
    <form id="interestForm">
      <label for="principal">Monto Principal:</label>
      <input type="number" id="principal" required>

      <label for="months">Plazo en meses:</label>
      <input type="number" id="months" required>

      <label for="interestRate">Tasa de Interés:</label>
      <select id="interestRate">
        <option value="0.10">10%</option>
        <option value="0.40">40%</option>
        <option value="0.60">60%</option>
        <option value="0.80">80%</option>
      </select> 

      <button type="button" onclick="calcularInteres()">Calcular</button>
    </form>

    <div id="result"></div>
  </div>

  <script src="js/prestamos.js"></script>
</body>
</html>
