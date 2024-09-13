$(document).ready(function(){
        // 基于准备好的dom，初始化echarts实例
        var myChart = echarts.init(document.getElementById('main'),"dark");
 
 
// 初始 option
option = {
    title: {
        text: '异步数据加载示例'
    },
    tooltip: {trigger: 'axis'},
    legend: {
        data:['销量']
    },
    toolbox: {
        show : true,
        feature : {
            mark : {show: true},
            dataView : {show: true, readOnly: false},
            magicType : {show: true, type: ['line', 'bar']},
            restore : {show: true},
            saveAsImage : {show: true}
        }
    },
    calculable : true,
 
 
    xAxis: {
        data: []
    },
    yAxis: {},
    series: [{
        name: '销量',
        type: 'bar',
        data: []
    },
    ]
};
 
//获取数据
$.getJSON("yibu.json",function(data11){
// fetchData(function (data11) {
    myChart.setOption({
        xAxis: {
            data: data11.categories
        },
        series: [{
            // 根据名字对应到相应的系列
            name: '销量',
            data: data11.data
        }]
    });
});
        // 使用刚指定的配置项和数据显示图表。
        myChart.setOption(option);
});