var number = [0, 0, 0];
var label = [0, 0, 0];

getData();

function getData(){
    $.ajax({
        url: '../api/graphVaccine',
        success: function(data){
            number = data.number;
            label = data.labels;
            renderChart();
        }
    });
}

function renderChart(){
    var options = {
        series: number,
        labels: label,
        chart: {
            foreColor: '#9ba7b2',
            height: 380,
            type: 'donut',
        },
        colors: ["#0d6efd", "#212529", "#17a00e", "#f41127", "#ffc107"],
        responsive: [{
            breakpoint: 480,
            options: {
                chart: {
                    height: 320
                },
                legend: {
                    position: 'bottom'
                }
            }
        }]
    };
    var chart = new ApexCharts(document.querySelector("#chart9"), options);
    chart.render();
}