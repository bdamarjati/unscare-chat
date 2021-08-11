var options = {
    series: [44, 55, 41, 17, 15],
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