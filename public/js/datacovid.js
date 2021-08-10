var number = [0,0,0];
var date = [0,0,0];

getData();

function getData(){
    $.ajax({
        url: '/api/graphPositif',
        success: function(data){
            number = data.number;
            date = data.day;
            renderChart();
            document.getElementById("debug").innerHTML = number;
        }
    });
}

function renderChart(){
    // chart 3
    var options = {
        series: [{
            name: 'Total Case',
            data: number
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
        colors: ["#0d6efd", '#f41127'],
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
            categories: date//["2018-09-19T00:00:00.000Z", "2018-09-19T01:30:00.000Z", "2018-09-19T02:30:00.000Z", "2018-09-19T03:30:00.000Z", "2018-09-19T04:30:00.000Z", "2018-09-19T05:30:00.000Z", "2018-09-19T06:30:00.000Z"]
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


