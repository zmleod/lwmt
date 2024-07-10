<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>柏拉图</title>

    <script src="../../assets/js/charts/highcharts.js"></script>
		<script src="../../assets/js/charts/exporting.js"></script>
        <script src="../../assets/js/charts/pareto.js"></script>
        <script src="../../assets/js/charts/oldie.js"></script>
		<script src="../../assets/js/charts/zh_cn.js"></script>
		<link href="../../assets/css/layui.css" rel="stylesheet">
		<script src="../../assets/js/layui.js"></script>

        <style>
            #container {
    max-width: 800px;
    height: 400px;
}

        </style>
</head>
<body>
<div id="container"></div>
</body>
<script>
    Highcharts.chart('container', {
    chart: {
        renderTo: 'container',
        type: 'column'
    },
    title: {
        text: '抗拉强度＜350MPa原因'
    },
    subtitle: {
        // text: '帕拉图表示的是柏拉定律，即常说的 8/2 定律：20%的原因造成80%的问题'
    },
    xAxis: {
        categories: ['镁液温度过高', '甩带速度慢', 'XX', 'XX', 'XX', 'XX', 'XX', 'XX']
    },
    yAxis: [{
        title: {
            text: ''
        }
    }, {
        title: {
            text: ''
        },
        minPadding: 0,
        maxPadding: 0,
        max: 100,
        min: 0,
        opposite: true,
        labels: {
            format: "{value}%"
        }
    }],
    series: [{
        type: 'pareto',
        name: '累计比率',
        yAxis: 1,
        zIndex: 10,
        baseSeries: 1,
        tooltip: {
            pointFormat: '{series.name} {point.y:.2f} %'
        }
    }, {
        name: '发生次数',
        type: 'column',
        zIndex: 2,
        data: [755, 222, 151, 86, 72, 51, 36, 10]
    }]
});

</script>
</html>