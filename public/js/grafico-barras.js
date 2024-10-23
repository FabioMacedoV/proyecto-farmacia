const ctx = document.getElementById("myChart").getContext("2d")

const myChart = new Chart(ctx, {
    type: 'bar', 
    data: {
        labels: ['Enero', 'Febrero', 'Marzo', 'Abril', 'Mayo'], 
        datasets: [{
            label: 'Meses', 
            data: [12, 19, 3, 5, 2], 
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

const ctxDount = document.getElementById('donut').getContext('2d');

const myDonutChart = new Chart(ctxDount, {
    type: 'doughnut', 
    data: {
        labels: dataGraficos,
        datasets: [{
            label: 'Colores',
            data: cantidades, 
            backgroundColor: [
                'rgba(255, 99, 132, 0.2)',
                'rgba(54, 162, 235, 0.2)',
                'rgba(255, 206, 86, 0.2)'
            ],
            borderColor: [
                'rgba(255, 99, 132, 1)',
                'rgba(54, 162, 235, 1)',
                'rgba(255, 206, 86, 1)'
            ],
            borderWidth: 1
        }]
    },
    options: {
        plugins: {
            legend: {
                position: 'top', 
            }
        }
    }
});

