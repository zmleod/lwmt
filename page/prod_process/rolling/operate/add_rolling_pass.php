<!DOCTYPE html>
<html>
<?php

require_once '../../dbconfig_prod_process.php';
$zhazhi_picihao = $_GET['zhazhi_picihao'];
$shiyang_bianhao = $_GET['shiyang_bianhao'];

$sql = "SELECT * FROM prod_process_rolling WHERE zhazhi_picihao='$zhazhi_picihao' AND shiyang_bianhao='$shiyang_bianhao' ORDER BY id DESC LIMIT 1";
$result = mysql_query($sql);
$row = mysql_fetch_array($result);

?>

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>生产过程数据追溯系统</title>
  <!-- 请勿在项目正式环境中引用该 layui.css 地址 -->
  <link href="../../../../assets/css/layui.css" rel="stylesheet">
  <script src="../../../../assets/js/layui.js"></script>
  <script src="../../../../assets/js/jquery.min.js"></script>
</head>

<body>
  <fieldset class="layui-elem-field layui-field-title">
    <legend>同试样增加道次</legend>
  </fieldset>
  <form class="layui-form" action="">
    <div class="layui-form-item">
      <label class="layui-form-label">填表人</label>
      <div class="layui-input-block">
        <input type="text" name="tianbiaoren" value="<?php echo $row['tianbiaoren']; ?>" disabled class="layui-input">


      </div>
    </div>

    <div class="layui-form-item">
      <label class="layui-form-label">参与人</label>
      <div class="layui-input-block">
        <input type="text" name="canyuren" placeholder="" value="<?php echo $row['canyuren']; ?>" disabled autocomplete="off" class="layui-input">
      </div>
    </div>
    <div class="layui-form-item">
      <label class="layui-form-label">原料名称</label>
      <div class="layui-input-block">
        <input type="text" name="laiyuan_mingcheng" value="<?php echo $row['laiyuan_mingcheng']; ?>" disabled placeholder="" autocomplete="off" class="layui-input">
      </div>
    </div>
    <div class="layui-form-item">
      <label class="layui-form-label">来源批次号</label>
      <div class="layui-input-block">
        <input type="text" name="laiyuan_picihao" value="<?php echo $row['laiyuan_picihao']; ?>" disabled placeholder="" autocomplete="off" class="layui-input">
      </div>
    </div>

    <!-- <div class="layui-form-item">
    <label class="layui-form-label">来源规格</label>
    <div class="layui-input-block">
      <input type="text" name="laiyuan_guige" placeholder="" autocomplete="off" class="layui-input">
    </div>
  </div> -->
    <!-- <div class="layui-form-item">
    <label class="layui-form-label">前序批次号(补充)</label>
    <div class="layui-input-block">
      <input type="text" name="laiyuan_picihao_add" placeholder="" autocomplete="off" class="layui-input">
    </div>
  </div> -->


    <div class="layui-form-item">
      <div class="layui-inline">
        <label class="layui-form-label">轧制设备</label>
        <div class="layui-input-block">
          <input type="text" name="shebei" value="<?php echo $row['shebei']; ?>" disabled placeholder="" autocomplete="off" class="layui-input">
        </div>
      </div>
      <div class="layui-inline">
        <label class="layui-form-label">轧制日期</label>
        <div class="layui-input-inline layui-input-wrap">
          <div class="layui-input-prefix"> <i class="layui-icon layui-icon-date"></i> </div>
          <input type="text" name="riqi" value="<?php echo $row['riqi']; ?>" disabled placeholder="" autocomplete="off" class="layui-input">
        </div>
      </div>
      <div class="layui-inline">
        <label class="layui-form-label">轧制批次号</label>
        <div class="layui-input-block">
          <input type="text" name="zhazhi_picihao" id="zhazhi_picihao" value="<?php echo $row['zhazhi_picihao']; ?>" disabled placeholder="" autocomplete="off" class="layui-input">
        </div>
      </div>
    </div>
    <div class="layui-form-item">
      <div class="layui-inline">
        <label class="layui-form-label">试样编号</label>
        <div class="layui-input-block">
          <input type="text" name="shiyang_bianhao" id="shiyang_bianhao"  value="<?php echo $row['shiyang_bianhao']; ?>" disabled  placeholder="" autocomplete="off" class="layui-input">
        </div>
      </div>

      <div class="layui-inline">
        <label class="layui-form-label">原始厚度</label>
        <div class="layui-input-block">
          <input type="text" name="yuanshi_houdu" value="<?php echo $row['yuanshi_houdu']; ?>" disabled placeholder="" autocomplete="off" class="layui-input">
        </div>
      </div>
    </div>

    <div class="layui-form-item">
      <label class="layui-form-label">轧制道次</label>
      <div class="layui-input-block">
        <input type="text" name="daoci" placeholder="" value="<?php echo $row['daoci']+1; ?>" disabled autocomplete="off" class="layui-input">
      </div>
    </div>

    <div class="layui-form-item">
      <label class="layui-form-label">试样加热时间</label>
      <div class="layui-input-block">
        <input type="text" name="shiyang_jiare_shijian" placeholder="试样加热时间" autocomplete="off" class="layui-input">
      </div>
    </div>

    <div class="layui-form-item">
      <label class="layui-form-label">试样温度_1</label>
      <div class="layui-input-block">
        <input type="number" name="shiyang_wendu_1" placeholder="" autocomplete="off" class="layui-input">
      </div>
    </div>
    <div class="layui-form-item">
      <label class="layui-form-label">试样温度_2</label>
      <div class="layui-input-block">
        <input type="number" name="shiyang_wendu_2" placeholder="" autocomplete="off" class="layui-input">
      </div>
    </div>
    <div class="layui-form-item">
      <label class="layui-form-label">试样温度_3</label>
      <div class="layui-input-block">
        <input type="number" name="shiyang_wendu_3" placeholder="" autocomplete="off" class="layui-input">
      </div>
    </div>
    <div class="layui-form-item">
      <label class="layui-form-label">试样温度平均</label>
      <div class="layui-input-block">
        <input type="number" name="shiyang_wendu_pingjun" placeholder="试样温度平均" autocomplete="off" class="layui-input">
      </div>
    </div>
    <div class="layui-form-item">
      <label class="layui-form-label">上轧辊温度</label>
      <div class="layui-input-block">
        <input type="number" name="shang_zhagun_wendu" placeholder="" autocomplete="off" class="layui-input">
      </div>
    </div>
    <div class="layui-form-item">
      <label class="layui-form-label">下轧辊温度</label>
      <div class="layui-input-block">
        <input type="number" name="xia_zhagun_wendu" placeholder="" autocomplete="off" class="layui-input">
      </div>
    </div>
    <div class="layui-form-item">
      <label class="layui-form-label">轧制速度</label>
      <div class="layui-input-block">
        <input type="number" name="zhazhi_sudu" placeholder="" autocomplete="off" class="layui-input">
      </div>
    </div>
    <div class="layui-form-item">
      <label class="layui-form-label">轧后板厚_1</label>
      <div class="layui-input-block">
        <input type="number" name="zhahou_banhou_1" placeholder="" autocomplete="off" class="layui-input">
      </div>
    </div>
    <div class="layui-form-item">
      <label class="layui-form-label">轧后板厚_2</label>
      <div class="layui-input-block">
        <input type="number" name="zhahou_banhou_2" placeholder="" autocomplete="off" class="layui-input">
      </div>
    </div>
    <div class="layui-form-item">
      <label class="layui-form-label">轧后板厚_3</label>
      <div class="layui-input-block">
        <input type="number" name="zhahou_banhou_3" placeholder="" autocomplete="off" class="layui-input">
      </div>
    </div>
    <div class="layui-form-item">
      <label class="layui-form-label">轧后板厚平均</label>
      <div class="layui-input-block">
        <input type="number" name="zhahou_banhou_pingjun" placeholder="轧后板厚平均" autocomplete="off" class="layui-input">
      </div>
    </div>
    <div class="layui-form-item">
      <label class="layui-form-label">道次变形量</label>
      <div class="layui-input-block">
        <input type="number" name="daoci_bianxingliang" placeholder="" autocomplete="off" class="layui-input">
      </div>
    </div>
    <div class="layui-form-item">
      <label class="layui-form-label">总压下量</label>
      <div class="layui-input-block">
        <input type="number" name="zong_yaxialiang" placeholder="" autocomplete="off" class="layui-input">
      </div>
    </div>
    <div class="layui-form-item">
      <label class="layui-form-label">中间道次退火</label>
      <div class="layui-input-block">
        <input type="radio" name="zhongjian_daoci_tuihuo" value="是" title="是" placeholder="" autocomplete="off" class="layui-input">
        <input type="radio" name="zhongjian_daoci_tuihuo" value="否" title="否" placeholder="" autocomplete="off" class="layui-input">
      </div>
    </div>

    <div class="layui-form-item">
      <label class="layui-form-label">中间退火温度</label>
      <div class="layui-input-block">
        <input type="number" name="zhongjian_tuihuo_wendu" placeholder="中间退火温度" autocomplete="off" class="layui-input">
      </div>
    </div>

    <div class="layui-form-item">
      <label class="layui-form-label">中间退火时间</label>
      <div class="layui-input-block">
        <input type="number" name="zhongjian_tuihuo_shijian" placeholder="中间退火时间" autocomplete="off" class="layui-input">
      </div>
    </div>
    <div class="layui-form-item">
      <label class="layui-form-label">压平退火温度</label>
      <div class="layui-input-block">
        <input type="number" name="yaping_tuihuo_wendu" placeholder="压平退火温度" autocomplete="off" class="layui-input">
      </div>
    </div>
    <div class="layui-form-item">
      <label class="layui-form-label">压平退火时间</label>
      <div class="layui-input-block">
        <input type="number" name="yaping_tuihuo_shijian" placeholder="压平退火时间" autocomplete="off" class="layui-input">
      </div>
    </div>
    <div class="layui-form-item">
      <label class="layui-form-label">金相取样</label>
      <div class="layui-input-block">
        <input type="checkbox" name="jinxiang_quyang" value="已取样" placeholder="" autocomplete="off" class="layui-input">
      </div>
    </div>
    <div class="layui-form-item">
      <label class="layui-form-label">拉伸取样</label>
      <div class="layui-input-block">
        <input type="checkbox" name="lashen_quyang" value="已取样" placeholder="" autocomplete="off" class="layui-input">
      </div>
    </div>
    <div class="layui-form-item layui-form-text">
      <label class="layui-form-label">备注</label>
      <div class="layui-input-block">
        <textarea name="beizhu" placeholder="结果、问题或其它需要补充的信息" class="layui-textarea"></textarea>
      </div>
    </div>
    <div class="layui-form-item">
      <div class="layui-input-block">
        <button type="submit" class="layui-btn" lay-submit lay-filter="demo1">提交</button>
      </div>
    </div>
  </form>
  <script>
    layui.use(function() {
      var form = layui.form;
      var layer = layui.layer;
      var laydate = layui.laydate;
      var util = layui.util;
      var $ = layui.jquery;
      var today = new Date();


      form.on('submit(demo1)', function(data) {
        var field = data.field; // 获取表单字段值
        // 显示填写结果，仅作演示用

        $.post('../action/add_rolling_action.php', JSON.stringify(data.field), function(res) {
          // 处理PHP脚本返回的结果
          if (res.code == '0') {
            alert("数据新增成功");
            window.location.href = "add_rolling_select.php?picihao="+document.getElementById('zhazhi_picihao').value+"&shiyang_bianhao="+document.getElementById('shiyang_bianhao').value;
          }
        }, 'json');
        return false; // 阻止默认 form 跳转
      });
    });
  </script>
</body>

</html>