<!DOCTYPE HTML>
<html>

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta http-equiv="x-ua-compatible" content="ie=edge">
	<link rel="icon" href="https://static.jianshukeji.com/hcode/images/favicon.ico">
	<style>
		#container {
			min-width: 300px;
			max-width: 800px;
			margin: 1em auto;
			border: 1px solid silver;
		}

		#container h4 {
			text-transform: none;
			font-size: 14px;
			font-weight: normal;
		}

		#container p {
			font-size: 13px;
			line-height: 16px;
		}
	</style>
	<script src="../../assets/js/charts/highcharts.js"></script>
	<script src="../../assets/js/charts/exporting.js"></script>
	<script src="../../assets/js/charts/sankey.js"></script>
	<script src="../../assets/js/charts/organization.js"></script>
</head>

<body>

	<div id="container"></div>
	<script>
		Highcharts.chart('container', {
			chart: {
				height: 600,
				inverted: true
			},
			title: {
				text: 'Highsoft 公司组织结构'
			},
			series: [{
				type: 'organization',
				name: 'Highsoft',
				keys: ['from', 'to'],
				data: [
					['股东', '董事会'],
					['董事会', 'CEO'],
					['CEO', 'CTO'],
					['CEO', 'CPO'],
					['CEO', 'CSO'],
					['CEO', 'CMO'],
					['CEO', 'HR'],
					['CTO', 'Product'],
					['CTO', 'Web'],
					['CSO', 'Sales'],
					['CMO', 'Market']
				],
				levels: [{
					level: 0,
					color: 'silver',
					dataLabels: {
						color: 'black'
					},
					height: 25
				}, {
					level: 1,
					color: 'silver',
					dataLabels: {
						color: 'black'
					},
					height: 25
				}, {
					level: 2,
					color: '#980104'
				}, {
					level: 4,
					color: '#359154'
				}],
				nodes: [{
					id: 'Shareholders'
				}, {
					id: 'Board'
				}, {
					id: 'CEO',
					title: 'CEO',
					name: 'Grethe Hjetland',
					image: 'https://wp-assets.highcharts.com/www-highcharts-com/blog/wp-content/uploads/2018/11/12132317/Grethe.jpg'
				}, {
					id: 'HR',
					title: 'HR/CFO',
					name: 'Anne Jorunn Fjærestad',
					color: '#007ad0',
					image: 'https://wp-assets.highcharts.com/www-highcharts-com/blog/wp-content/uploads/2018/11/12132314/AnneJorunn.jpg',
					column: 3,
					offset: '75%'
				}, {
					id: 'CTO',
					title: 'CTO',
					name: 'Christer Vasseng',
					column: 4,
					image: 'https://wp-assets.highcharts.com/www-highcharts-com/blog/wp-content/uploads/2018/11/12140620/Christer.jpg',
					layout: 'hanging'
				}, {
					id: 'CPO',
					title: 'CPO',
					name: 'Torstein Hønsi',
					column: 4,
					image: 'https://wp-assets.highcharts.com/www-highcharts-com/blog/wp-content/uploads/2018/11/12131849/Torstein1.jpg'
				}, {
					id: 'CSO',
					title: 'CSO',
					name: 'Anita Nesse',
					column: 4,
					image: 'https://wp-assets.highcharts.com/www-highcharts-com/blog/wp-content/uploads/2018/11/12132313/Anita.jpg',
					layout: 'hanging'
				}, {
					id: 'CMO',
					title: 'CMO',
					name: 'Vidar Brekke',
					column: 4,
					image: 'https://wp-assets.highcharts.com/www-highcharts-com/blog/wp-content/uploads/2018/11/13105551/Vidar.jpg',
					layout: 'hanging'
				}, {
					id: 'Product',
					name: '产品研发'
				}, {
					id: 'Web',
					name: '运维',
					description: '网站开发，系统维护'
				}, {
					id: 'Sales',
					name: '销售部'
				}, {
					id: 'Market',
					name: '市场部'
				}],
				colorByPoint: false,
				color: '#007ad0',
				dataLabels: {
					color: 'white'
				},
				borderColor: 'white',
				nodeWidth: 65
			}],
			tooltip: {
				outside: true
			},
			exporting: {
				allowHTML: true,
				sourceWidth: 800,
				sourceHeight: 600
			}
		});
	</script>
</body>

</html>