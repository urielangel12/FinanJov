document.addEventListener("DOMContentLoaded", function () {
  var ctx = document.getElementById("trading-chart").getContext("2d");

  var chartData = {
    labels: ["Ene", "Feb", "Mar", "Abr", "May", "Jun", "Jul"],
    datasets: [
      {
        label: "Precio",
        borderColor: "#3498db",
        backgroundColor: "rgba(52, 152, 219, 0.2)",
        data: [50, 60, 45, 70, 55, 80, 65],
      },
    ],
  };

  var myLineChart = new Chart(ctx, {
    type: "line",
    data: chartData,
  });
});
