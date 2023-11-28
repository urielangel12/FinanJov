function calcularInteres() {
  var principal = parseFloat(document.getElementById('principal').value);
  var months = parseFloat(document.getElementById('months').value);
  var selectedRate = parseFloat(document.getElementById('interestRate').value);

  var interesMensual = principal * (selectedRate ) * months;
  var total = principal + interesMensual;

  document.getElementById('result').innerHTML = 'El interés total es: ' + interesMensual.toFixed(2) + ' y el monto total es: ' + total.toFixed(2);
}
