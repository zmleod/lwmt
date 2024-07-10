
<!DOCTYPE html>
	<html lang="en">

	<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<title>Document</title>
		<script src="../../assets/js/charts/highcharts.js"></script>
		<script src="../../assets/js/charts/exporting.js"></script>
		<script src="../../assets/js/charts/zh_cn.js"></script>
		<link href="../../assets/css/layui.css" rel="stylesheet">
		<script src="../../assets/js/layui.js"></script>
	</head>


	<body>
		<div id="chart_container" style="min-width:400px;height:400px"></div>

		<form class="layui-form" method="post" action="tensile-else.php">
			<div class="layui-form-item">

				<div class="layui-inline">
					<label class="layui-form-label">起始时间</label>
					<div class="layui-input-inline layui-input-wrap">
						<div class="layui-input-prefix"> <i class="layui-icon layui-icon-date"></i> </div>
						<input type="text" name="date_start" id="date_start" placeholder="" autocomplete="off" class="layui-input" value=2024-01-01>
					</div>
				</div>

				<div class="layui-inline">
					<label class="layui-form-label">结束时间</label>
					<div class="layui-input-inline layui-input-wrap">
						<div class="layui-input-prefix"> <i class="layui-icon layui-icon-date"></i> </div>
						<input type="text" name="date_end" id="date_end" placeholder="" autocomplete="off" class="layui-input" value=2024-05-23>
					</div>
				</div>
				<div class="layui-inline">
					<label class="layui-form-label">牌号</label>
					<div class="layui-input-inline">
						<select name="paihao">

							<option value="">不限</option>
							<option value="B91C2" >B91C2</option>
							<option value="PN6" >PN6</option>
							<option value="6Zn3Ce" >6Zn3Ce</option>

						</select>
					</div>
				</div>
				<div class="layui-inline">
					<label class="layui-form-label">类型</label>
					<div class="layui-input-inline">
						<select name="leixing">
							<option value="">不限</option>
							<option value="挤压板材" >挤压板材</option>
							<option value="轧制板材" >轧制板材</option>

						</select>
					</div>
				</div>
			</div>
			<div class="layui-form-item">
				<label class="layui-form-label">熔炼参数</label>
				<input type="radio" name="canshu" value="HA_guore_wendu" title="过热温度" >
				<input type="radio" name="canshu" value="HA_jingzhi_shijian" title="静置时间" >
			</div>
			<div class="layui-form-item">
				<label class="layui-form-label">甩带参数</label>
				<input type="radio" name="canshu" value="HB_shuaidai_qishi_meiye_wendu" title="镁液温度" >
			
				
			</div>
			<div class="layui-form-item">
				<label class="layui-form-label">压锭参数</label>
				<input type="radio" name="canshu" value="YD_yading_zhongliang_1" disabled title="原料重量" >
				
			</div>
			<div class="layui-form-item">
				<label class="layui-form-label">挤出参数</label>
				<input type="radio" name="canshu" value="JC_jichu_cailiaowendu" title="材料温度" >
				
			</div>
			<div class="layui-form-item">

				<div class="layui-inline">
					<label class="layui-form-label">辊轧参数</label>
					<div class="layui-input-inline">
						<select name="GZ_daoci">
							<option value="1">道次1</option>
							<option value="2" >道次2</option>
							<option value="3" >道次3</option>
							<option value="4" >道次4</option>
							<option value="5" >道次5</option>
						</select>
					</div>
				</div>

				<div class="layui-inline">
					<input type="radio" name="canshu" value="GZ_shang_zhagun_wendu" title="上辊温度" >
					<input type="radio" name="canshu" value="GZ_xia_zhagun_wendu" title="下辊温度" >
				</div>

			</div>

			<div class="layui-form-item">
				<div class="layui-input-block">
					<button type="submit" class="layui-btn" lay-submit lay-filter="demo1">提交</button>
				</div>
			</div>

		</form>


	</body>
	<script>
		var charts = Highcharts.chart('chart_container', {

			title: { //主标题
				text: '抗拉强度--'
			},
			subtitle: {
				text: '2024-01-01--2024-05-23'
			},
			xAxis: [{ //第一X轴
					title: {
						text: '实验时间'
					},
					categories: [
						20240411,20240411,20240412,20240412,20240412,20240415,20240415,20240415,20240415,20240423,20240506,20240506,20240506,20240506,20240509,20240510,20240511,20240511,20240511,20240511,20240513,20240514,20240514,20240515,20240515,20240517,20240517,20240517,20240520,20240520,20240522,20240523 // 每个数据记得加引号如'20240105', '20240203', '20240228'
					],


				},

			],



			yAxis: [{ // 第一Y轴

					title: {
						text: '抗拉强度MAX',
						style: {
							color: Highcharts.getOptions().colors[0]
						}
					},
					labels: {
						format: '{value} MPa',
						style: {
							color: Highcharts.getOptions().colors[0]
						}
					},

				}, { // 第二Y轴
					gridLineWidth: 0,
					title: {
						text: '抗拉强度Min',
						style: {
							color: Highcharts.getOptions().colors[1]
						}
					},
					labels: {
						format: '{value}MPa',
						style: {
							color: Highcharts.getOptions().colors[1]
						}
					},

				},
				{ // 第三Y轴
					gridLineWidth: 0,
					title: {
						text: '',
						style: {
							color: Highcharts.getOptions().colors[1]
						}
					},
					labels: {
						format: '{value}',
						style: {
							color: Highcharts.getOptions().colors[1]
						}
					},
					opposite: true,
				},
			],

			tooltip: {
				shared: true
			},
			legend: {
				layout: 'vertical',
				align: 'left',
				x: 80,
				verticalAlign: 'top',
				y: 55,
				floating: true,
				backgroundColor: (Highcharts.theme && Highcharts.theme.legendBackgroundColor) || '#FFFFFF'
			},
			series: [{
					name: '抗拉强度MAX',
					type: 'spline',
					xAxis: 0, //选x轴
					yAxis: 0, //选y轴

					data: [361,339,404,370,396,394,386,411,379,316,334,314,372,406,336,无效试样,396,356,362,389,389,360,337,412,423,379,401,363,392,389,384],
					tooltip: {
						valueSuffix: 'Mpa'
					}
				},

				{
					name: '抗拉强度MIN',
					type: 'spline',
					xAxis: 0, //选x轴
					yAxis: 0,
					data: [354,338,404,369,396,335,354,411,361,267,317,286,365,402,335,376,382,329,352,381,350,356,337,406,419,369,389,363,377,361,290],
					tooltip: {
						valueSuffix: 'MPa'
					}
				},
				{
					name: '',
					type: 'spline',
					xAxis: 0, //选x轴
					yAxis: 2, //2表示第三个Y轴
					data: [0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0],
					tooltip: {
						valueSuffix: '' // 这里是单位，以后可以做
					}
				},
			]
		});
	</script>

	<script>
		//layui的
		layui.use(function() {
			var laydate = layui.laydate;
			var form = layui.form;
			var $ = layui.$;
			var today = new Date();
			// 日期
			laydate.render({
				elem: '#date_start',
			});
			laydate.render({
								// 设置默认值为今天
				elem: '#date_end',
			});



			//这一是段单选框取值代码
			//单选框是这样的 <input type="radio" lay-filter="demo-radio-filter" name="proc_name" value="cool" title="甩带" checked>
			// 文本框是这样的 <input type="text" name="proc_name_text" id="proc_name_text" autocomplete="off" class="layui-input">
			// 	var elem = data.elem; // 获得 radio 原始 DOM 对象
			// form.on('radio(demo-radio-filter)', function(data) {   
			// 	var checked = elem.checked; // 获得 radio 选中状态
			// 	var value = elem.value; // 获得 radio 值
			// 	var othis = data.othis; // 获得 radio 元素被替换后的 jQuery 对象
			// 	$('#proc_name_text').val(data.value);

			// });

		});
	</script>


	</html>