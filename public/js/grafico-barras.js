const barClientesFrecuentes = document.getElementById("clientesFrecuentes").getContext("2d")

const myChart = new Chart(barClientesFrecuentes, {
    type: 'bar', 
    data: {
        labels: nombresClientes, 
        datasets: [{
            label: 'Compras del mes', 
            data: totalCompras, 
            backgroundColor: [
                'rgba(255, 99, 132, 0.2)',
                'rgba(54, 162, 235, 0.2)',
                'rgba(255, 206, 86, 0.2)',
                'rgba(75, 192, 192, 0.2)',
                'rgba(153, 102, 255, 0.2)'
            ],
            borderColor: [
                'rgba(255, 99, 132, 1)',
                'rgba(54, 162, 235, 1)',
                'rgba(255, 206, 86, 1)',
                'rgba(75, 192, 192, 1)',
                'rgba(153, 102, 255, 1)'
            ],
            borderWidth: 1
        }]
    },
    options: {
        scales: {
            y: {
                beginAtZero: true
            }
        }
    }
});

const barVentasMes = document.getElementById('ventasMes').getContext('2d');

const myLineChar = new Chart(barVentasMes, {
    type: 'line', 
    data: {
        labels: nombreMeses, 
        datasets: [{
            label: 'Ventas por Mes', 
            data: datosVentas, 
            borderColor: 'rgba(10, 239, 113, 1)',
            backgroundColor: 'rgba(10, 239, 113, 0.8)',
            borderWidth: 2
        }]
    },
    options: {
        scales: {
            y: {
                beginAtZero: true
            }
        }
    }
});

