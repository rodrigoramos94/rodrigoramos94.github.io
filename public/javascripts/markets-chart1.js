var chartData = generateChartData();
var chart = AmCharts.makeChart("stocks-chart", {
    "type": "serial",
    "theme": "light",
    "legend": {
        "useGraphSettings": true
    },
    "dataProvider": chartData,
    "synchronizeGrid": true,
    "valueAxes": [{
            "id": "v1",
            "axisColor": "#000",
            "axisThickness": 2,
            "axisAlpha": 1,
            "position": "left"
        }],
    "graphs": [{
            "valueAxis": "v1",
            "lineColor": "#FF6600",
            "bullet": "round",
            "bulletBorderThickness": 1,
            "hideBulletsCount": 30,
            "title": "Repsol",
            "valueField": "company1",
            "fillAlphas": 0
        }, {
            "valueAxis": "v1",
            "lineColor": "#FCD202",
            "bullet": "square",
            "bulletBorderThickness": 1,
            "hideBulletsCount": 30,
            "title": "Ferrovial",
            "valueField": "company2",
            "fillAlphas": 0
        }, {
            "valueAxis": "v1",
            "lineColor": "#B0DE09",
            "bullet": "triangleUp",
            "bulletBorderThickness": 1,
            "hideBulletsCount": 30,
            "title": "OHL",
            "valueField": "company3",
            "fillAlphas": 0
        }],
    "chartScrollbar": {},
    "chartCursor": {
        "cursorPosition": "mouse"
    },
    "categoryField": "date",
    "categoryAxis": {
        "parseDates": true,
        "axisColor": "#DADADA",
        "minorGridEnabled": true
    },
    "export": {
        "enabled": true,
        "position": "bottom-right"
    }
});
chart.addListener("dataUpdated", zoomChart);
zoomChart();
// generate some random data, quite different range
function generateChartData() {
    var chartData = [];
    var firstDate = new Date();
    firstDate.setDate(firstDate.getDate() - 100);
    for (var i = 0; i < 100; i++) {
        // we create date objects here. In your data, you can have date strings
        // and then set format of your dates using chart.dataDateFormat property,
        // however when possible, use date objects, as this will speed up chart rendering.
        var newDate = new Date(firstDate);
        newDate.setDate(newDate.getDate() + i);
        var company1 = Math.round((Math.random() * 130) + i * 10);
        var company2 = Math.round(Math.random() * 150) + 300 + i * 3;
        var company3 = Math.round(Math.random() * 600) + 100 + i * 4;
        chartData.push({
            date: newDate,
            company1: company1,
            company2: company2,
            company3: company3
        });
    }
    return chartData;
}
function zoomChart() {
    chart.zoomToIndexes(chart.dataProvider.length - 20, chart.dataProvider.length - 1);
}
//# sourceMappingURL=markets-chart1.js.map