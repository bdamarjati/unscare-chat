var number = [0, 0, 0];
var date = [0, 0, 0];
var healthy = [0,0,0];

getData();

function getData() {
    $.ajax({
        url: 'api/graphPositif',
        success: function (data) {
            number = data.number;
            healthy = data.healthy;
            date = data.day;
            renderChart();
        }
    });
}

function renderChart() {
    // chart 3
    var options = {
        series: [{
            name: 'Total Case',
            data: number
        },{
            name: 'Recovered',
            data: healthy
        }],
        chart: {
            foreColor: '#9ba7b2',
            height: 360,
            type: 'area',
            zoom: {
                enabled: false
            },
            toolbar: {
                show: true
            },
        },
        colors: ['#f41127', "#0d6efd"],
        title: {
            text: '',
            align: 'left',
            style: {
                fontSize: "16px",
                color: '#666'
            }
        },
        dataLabels: {
            enabled: true
        },
        stroke: {
            curve: 'smooth'
        },
        xaxis: {
            // type: 'datetime',
            categories: date //["2018-09-19T00:00:00.000Z", "2018-09-19T01:30:00.000Z", "2018-09-19T02:30:00.000Z", "2018-09-19T03:30:00.000Z", "2018-09-19T04:30:00.000Z", "2018-09-19T05:30:00.000Z", "2018-09-19T06:30:00.000Z"]
        },
        // tooltip: {
        //     x: {
        //         format: 'dd/MM/yy HH:mm'
        //     },
        // },
    };
    var chart = new ApexCharts(document.querySelector("#chart3"), options);
    chart.render();
}

var numbervaksin = [0, 0, 0];
var labelvaksin = [0, 0, 0];

getDataVaksin();

function getDataVaksin() {
    $.ajax({
        url: 'api/graphVaccine',
        success: function (data) {
            numbervaksin = data.number;
            labelvaksin = data.labels;
            renderChart2();
        }
    });
}

function renderChart2() {
    var options2 = {
        series: numbervaksin,
        labels: labelvaksin,
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
    var chart2 = new ApexCharts(document.querySelector("#chart9"), options2);
    chart2.render();
}