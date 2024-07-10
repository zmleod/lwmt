<?php

//获取表单各值

$date_start = $_POST['date_start'];
$date_end = $_POST['date_end'];
$paihao = $_POST['paihao'];
$leixing = $_POST['leixing'];

//最蠢的一段,$proc_name用来指定数据表，$code_sql用来终止递归函数，$proc_sql_field：递归结束后会返回一个批次号或者炉号，根据这个查字段，$proc_field_2，要查的字段。
if($_POST['canshu'] =="HA_guore_wendu" ){$HA_guore_wendu=1;$proc_name="smelt";$code_sql="HA";$proc_sql_field="ronglian_luhao";$proc_field_2="guore_wendu";$proc_field_2_text="过热温度";}
if($_POST['canshu'] =="HA_jingzhi_shijian"){$HA_jingzhi_shijian=1;$proc_name="smelt";$code_sql="HA";$proc_sql_field="ronglian_luhao";$proc_field_2="jingzhi_shijian";$proc_field_2_text="静置时间";}
if($_POST['canshu'] =="HB_shuaidai_qishi_meiye_wendu"){$HB_shuaidai_qishi_meiye_wendu=1;$proc_name="cool";$code_sql="HB";$proc_sql_field="shuaidai_luhao";$proc_field_2="shuaidai_qishi_meiye_wendu";$proc_field_2_text="镁液温度";}
if($_POST['canshu'] =="JC_jichu_cailiaowendu"){$JC_jichu_cailiaowendu=1;$proc_name="extrude";$code_sql="JC";$proc_sql_field="jichu_picihao";$proc_field_2="jichu_cailiaowendu";$proc_field_2_text="材料温度";}





$GZ_daoci = $_POST['GZ_daoci'];


if($_POST['canshu'] =="GZ_shang_zhagun_wendu"){$GZ_shang_zhagun_wendu=1;$proc_name="rolling";$code_sql="GZ";$proc_sql_field="zhazhi_picihao";$proc_field_2="shang_zhagun_wendu";$proc_field_2_text="上轧辊温度-道次".$GZ_daoci;}
if($_POST['canshu'] =="GZ_xia_zhagun_wendu"){$GZ_xia_zhagun_wendu=1;$proc_name="rolling";$code_sql="GZ";$proc_sql_field="zhazhi_picihao";$proc_field_2="xia_zhagun_wendu";$proc_field_2_text="下轧辊温度-道次".$GZ_daoci;}







$proc_table = "prod_process_" . $proc_name;//这里定义数据表





$proc_field_3 = $_POST['proc_field_3']; //暂时不做第二条曲线 
$proc_field_3_text = $_POST['proc_field_3_text']; //暂时不做第二条曲线 
//上面是POST来的，下面是查询来的
//先查LAB的数据
require_once '../lab/dbconfig_lab.php';
$sql = "SELECT * FROM tensile_exp WHERE baogao_riqi BETWEEN '$date_start' AND '$date_end'";
if($paihao){$sql=$sql." AND yangjian_mingcheng = '$paihao'";}
if($leixing){$sql=$sql." AND yangjian_leixing = '$leixing'";}
$sql=$sql." ORDER BY baogao_riqi ";
$result = mysql_query($sql);
$i = 0;
$j = 0;
$max_temp = "";
$min_temp = "";

while ($row = mysql_fetch_array($result)) {
	$kangla_qiangdu[$i] = $row['kangla_qiangdu'];
	$picihao_temp[$i] = $row['yangjian_picihao'];

	if ($picihao_temp[$i] == $picihao_temp[$i - 1]) { //如果批次号与前一个查找值相同，则比较其抗拉值

		$max_temp = max($kangla_qiangdu[$i], $kangla_qiangdu[$i - 1]);

		$min_temp = min($kangla_qiangdu[$i], $kangla_qiangdu[$i - 1]);
	} else { //出现了一个新的分组，把之前的数据整理好，再让$j增加！！！注意这个ELSE里取到的数组值都是从1开始的，0没有值

		$kangla_qiangdu_max[$j] = $max_temp; //注意第一次出现新分组时，值是空的，所以后面的循环从$j=1开始
		$kangla_qiangdu_min[$j] = $min_temp;
		$baogao_riqi[$j + 1] = str_replace("-", "", $row['baogao_riqi']); //后面这两个要放在$j+1里，不然给前面就不统一了
		$yangjian_picihao[$j + 1] = $row['yangjian_picihao'];

		$j++; //分组数，如果批次号与上一个不同则$j增加
		$max_temp = $kangla_qiangdu[$i]; //重新初始化一下，出现新分组后,max和min都====当前值。
		$min_temp = $kangla_qiangdu[$i];
	}
	$i++;
}
// php 数组拼接成字符串，最终的结果是 "2, 4, 5, 8" 这种形式
$x_cate = join($baogao_riqi, ','); //实验室数据的X轴坐标
$y_kangla_qiangdu_max = join($kangla_qiangdu_max, ','); //抗拉强度最大值
$y_kangla_qiangdu_max = ltrim($y_kangla_qiangdu_max, ',');
$y_kangla_qiangdu_min = join($kangla_qiangdu_min, ','); //抗拉强度最大值
$y_kangla_qiangdu_min = ltrim($y_kangla_qiangdu_min, ',');
require_once '../prod_process/dbconfig_prod_process.php';



function prod_trace($prod_code, $sql_value)
{


	switch ($prod_code) {

		case "HA":
			$prod_tb = "prod_process_smelt";
			$sql_field = "ronglian_luhao";

			break;

		case "HB":
			$prod_tb = "prod_process_cool";
			$sql_field = "shuaidai_luhao";
			break;


		case "ZL":
			$prod_tb = "";
			$sql_field = "";
			break;


		case "YD":
			$prod_tb = "prod_process_press";
			$sql_field = "yading_picihao";
			break;


		case "JC":
			$prod_tb = "prod_process_extrude";
			$sql_field = "jichu_picihao";
			break;

		case "GZ":
			$prod_tb = "prod_process_rolling";
			$sql_field = "zhazhi_picihao";
			break;
	}
	global $code_sql;

	$query_prod = "SELECT * FROM $prod_tb where $sql_field = '$sql_value'"; // 通过FUNCTION中的参数传递第一次的SQL_VALUE


	$sql_prod = mysql_query($query_prod);
	$row_prod = mysql_fetch_array($sql_prod);

	if ($code_sql == substr($sql_value, 0, 2)) { //如果传递来的sql_value就是本表里的，就不再查了

		return $row_prod[$sql_field];
	}

	$prod_code_next = substr($row_prod['laiyuan_picihao'], 0, 2);

	if ($prod_code_next ==  $code_sql) { //查到code_sql就停止 
		return $row_prod['laiyuan_picihao'];
	}
	if ($prod_code_next == "") {

		return "";
	}
	return prod_trace($prod_code_next, $row_prod['laiyuan_picihao']);
}




//FUNCTION结束，通过循环把生产过程的x轴(生产日期)和y轴(根据proc_field_2、3查y_data_2、3)值查到
for ($t = 1; $t < $j; $t++) {

	$prod_code = substr($yangjian_picihao[$t], 0, 2);


	$sql_prod_field = prod_trace($prod_code, $yangjian_picihao[$t]); //sql_prod_field就是循环找到的指定工序的批次号/炉号
	//辊轧要改一下查询语句，多一个道次限定
	if($prod_code=="GZ")
	{$sql_prod = "SELECT * FROM $proc_table  WHERE $proc_sql_field = '$sql_prod_field' AND daoci = '$GZ_daoci'";}
	else
	{$sql_prod = "SELECT * FROM $proc_table  WHERE $proc_sql_field = '$sql_prod_field'"; }//这里也可以通过case改成通用的

	$sql_prod_result = mysql_query($sql_prod);
	$row_prod = mysql_fetch_array($sql_prod_result);




	$y_data_2_array[$t] = $row_prod[$proc_field_2];
	if (!$y_data_2_array[$t]) {
		$y_data_2_array[$t] = 0;
	}


	$y_data_3_array[$t] = $row_prod[$proc_field_3];
	if (!$y_data_3_array[$t]) {
		$y_data_3_array[$t] = 0;
	}
}



$x_cate_proc = join($x_cate_proc_array, ',');


$y_data_2 = join($y_data_2_array, ',');

$y_data_3 = join($y_data_3_array, ',');

//$proc_unit_2= 数据库里没存单位，后面再加
//$proc_unit_3=
?>
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
						<input type="text" name="date_start" id="date_start" placeholder="" autocomplete="off" class="layui-input" <?php if ($date_start) echo "value=$date_start";
																																	else echo "value=2024-01-01"; ?>>
					</div>
				</div>

				<div class="layui-inline">
					<label class="layui-form-label">结束时间</label>
					<div class="layui-input-inline layui-input-wrap">
						<div class="layui-input-prefix"> <i class="layui-icon layui-icon-date"></i> </div>
						<input type="text" name="date_end" id="date_end" placeholder="" autocomplete="off" class="layui-input" <?php if ($date_end) echo "value=$date_end"; ?>>
					</div>
				</div>
				<div class="layui-inline">
					<label class="layui-form-label">牌号</label>
					<div class="layui-input-inline">
						<select name="paihao">

							<option value="">不限</option>
							<option value="B91C2" <?php if ($paihao == "B91C2") echo "selected "; ?>>B91C2</option>
							<option value="PN6" <?php if ($paihao == "PN6") echo "selected "; ?>>PN6</option>
							<option value="6Zn3Ce" <?php if ($paihao == "6Zn3Ce") echo "selected "; ?>>6Zn3Ce</option>

						</select>
					</div>
				</div>
				<div class="layui-inline">
					<label class="layui-form-label">类型</label>
					<div class="layui-input-inline">
						<select name="leixing">
							<option value="">不限</option>
							<option value="挤压板材" <?php if ($leixing == "挤压板材") echo "selected "; ?>>挤压板材</option>
							<option value="轧制板材" <?php if ($leixing == "轧制板材") echo "selected "; ?>>轧制板材</option>

						</select>
					</div>
				</div>
			</div>
			<div class="layui-form-item">
				<label class="layui-form-label">熔炼参数</label>
				<input type="radio" name="canshu" value="HA_guore_wendu" title="过热温度" <?php if ($HA_guore_wendu) echo "checked"; ?>>
				<input type="radio" name="canshu" value="HA_jingzhi_shijian" title="静置时间" <?php if ($HA_jingzhi_shijian) echo "checked"; ?>>
			</div>
			<div class="layui-form-item">
				<label class="layui-form-label">甩带参数</label>
				<input type="radio" name="canshu" value="HB_shuaidai_qishi_meiye_wendu" title="镁液温度" <?php if ($HB_shuaidai_qishi_meiye_wendu) echo "checked"; ?>>
			
				
			</div>
			<div class="layui-form-item">
				<label class="layui-form-label">压锭参数</label>
				<input type="radio" name="canshu" value="YD_yading_zhongliang_1" disabled title="原料重量" <?php if ($YD_yading_zhongliang_1) echo "checked"; ?>>
				
			</div>
			<div class="layui-form-item">
				<label class="layui-form-label">挤出参数</label>
				<input type="radio" name="canshu" value="JC_jichu_cailiaowendu" title="材料温度" <?php if ($JC_jichu_cailiaowendu) echo "checked"; ?>>
				
			</div>
			<div class="layui-form-item">

				<div class="layui-inline">
					<label class="layui-form-label">辊轧参数</label>
					<div class="layui-input-inline">
						<select name="GZ_daoci">
							<option value="1">道次1</option>
							<option value="2" <?php if ($GZ_daoci == "2") echo "selected "; ?>>道次2</option>
							<option value="3" <?php if ($GZ_daoci == "3") echo "selected "; ?>>道次3</option>
							<option value="4" <?php if ($GZ_daoci == "4") echo "selected "; ?>>道次4</option>
							<option value="5" <?php if ($GZ_daoci == "5") echo "selected "; ?>>道次5</option>
						</select>
					</div>
				</div>

				<div class="layui-inline">
					<input type="radio" name="canshu" value="GZ_shang_zhagun_wendu" title="上辊温度" <?php if ($GZ_shang_zhagun_wendu) echo "checked"; ?>>
					<input type="radio" name="canshu" value="GZ_xia_zhagun_wendu" title="下辊温度" <?php if ($GZ_xia_zhagun_wendu) echo "checked"; ?>>
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
				text: '抗拉强度--<?php echo $proc_field_2_text; ?>'
			},
			subtitle: {
				text: '<?php echo $date_start; ?>--<?php echo $date_end; ?>'
			},
			xAxis: [{ //第一X轴
					title: {
						text: '实验时间'
					},
					categories: [
						<?php echo $x_cate; ?> // 每个数据记得加引号如'20240105', '20240203', '20240228'
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
						text: '<?php echo $proc_field_2_text; ?>',
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

					data: [<?php echo $y_kangla_qiangdu_max; ?>],
					tooltip: {
						valueSuffix: 'Mpa'
					}
				},

				{
					name: '抗拉强度MIN',
					type: 'spline',
					xAxis: 0, //选x轴
					yAxis: 0,
					data: [<?php echo $y_kangla_qiangdu_min; ?>],
					tooltip: {
						valueSuffix: 'MPa'
					}
				},
				{
					name: '<?php echo $proc_field_2_text; ?>',
					type: 'spline',
					xAxis: 0, //选x轴
					yAxis: 2, //2表示第三个Y轴
					data: [<?php echo $y_data_2; ?>],
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
				<?php if (!$date_end) echo "value: today,"; ?>
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