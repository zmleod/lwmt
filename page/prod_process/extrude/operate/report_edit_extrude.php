<!DOCTYPE html>
<html>
<head>

<?php
require_once '../../dbconfig_lab.php';
$id=$_GET['id'];
$query = "SELECT * FROM tensile_record where id = $id";
// 执行查询
$result = mysql_query( $query );
$row = mysql_fetch_assoc($result);
   
?>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Demo</title>
<!-- 请勿在项目正式环境中引用该 layui.css 地址 -->
<link href="../../../../assets/css/layui.css" rel="stylesheet">
<script src="../../../../assets/js/layui.js"></script> 
<script src="../../../../assets/js/jquery.min.js"></script>

    
</head>
<body>
<fieldset class="layui-elem-field layui-field-title">
  <legend>数据编辑</legend>
</fieldset>
<form class="layui-form"  action="">
    <input type="text" name="id" style="display: none;" value="<?php echo $row["id"];?>" >
  <div class="layui-form-item">
    <label class="layui-form-label">样件批次号</label>
    <div class="layui-input-block">
      <input type="text" name="yangjian_picihao" value="<?php echo $row["yangjian_picihao"];?>" placeholder="" autocomplete="off" class="layui-input">
    </div>
  </div>
  <div class="layui-form-item">
    <label class="layui-form-label">报告编号</label>
    <div class="layui-input-block">
      <input type="text" name="baogao_bianhao" value="<?php echo $row["baogao_bianhao"];?>" placeholder="" autocomplete="off" class="layui-input">
    </div>
  </div>
  <div class="layui-form-item">
    <div class="layui-inline">
      <label class="layui-form-label">送检日期</label>
      <div class="layui-input-inline layui-input-wrap">
        <div class="layui-input-prefix"> <i class="layui-icon layui-icon-date"></i> </div>
        <input type="text" name="songjian_riqi" id="songjian_riqi" value="<?php echo $row["songjian_riqi"];?>" placeholder="yyyy-MM-dd" autocomplete="off" class="layui-input">
      </div>
    </div>
    <div class="layui-inline">
      <label class="layui-form-label">检测日期</label>
      <div class="layui-input-inline layui-input-wrap">
        <div class="layui-input-prefix"> <i class="layui-icon layui-icon-date"></i> </div>
        <input type="text" name="jiance_riqi" id="jiance_riqi" value="<?php echo $row["jiance_riqi"];?>" placeholder="yyyy-MM-dd" autocomplete="off" class="layui-input">
      </div>
    </div>
  </div>
  <div class="layui-form-item">
    <label class="layui-form-label">材质</label>
    <div class="layui-input-block">
      <input type="text" name="caizhi"  value="<?php echo $row["caizhi"];?>" placeholder="" autocomplete="off" class="layui-input">
    </div>
  </div>
  <div class="layui-form-item">
    <label class="layui-form-label">试样类型</label>
    <div class="layui-input-block">
      <input type="text" name="shiyang_leixing"  value="<?php echo $row["shiyang_leixing"];?>" placeholder="" autocomplete="off" class="layui-input">
    </div>
  </div>
  <div class="layui-form-item">
    <label class="layui-form-label">试样规格</label>
    <div class="layui-input-block">
      <input type="text" name="shiyang_guige"  value="<?php echo $row["shiyang_guige"];?>" placeholder="" autocomplete="off" class="layui-input">
    </div>
  </div>
  <div class="layui-form-item">
    <label class="layui-form-label">试样编号</label>
    <div class="layui-input-inline" style="width: 100px;">
      <input type="text" name="shiyang_bianhao" value="<?php echo $row["shiyang_bianhao"];?>"   autocomplete="off" class="layui-input">
    </div>
   
  </div>
  <div class="layui-form-item" id="kangla_qiangdu">
    <label class="layui-form-label">抗拉强度</label>
    <div class="layui-input-inline" style="width: 100px;">
      <input type="number" name="kangla_qiangdu" value="<?php echo $row["kangla_qiangdu"];?>" placeholder="" autocomplete="off" class="layui-input kangla_qiangdu" min="0" step="1" lay-affix="number">
    </div>
  
    <div class="layui-input-inline" style="width: 100px;">
      <label class="layui-form-label">平均值</label>
    </div>
    <div class="layui-input-inline" style="width: 100px;">
      <input type="text" name="kangla_qiangdu_pingjunzhi"  value="<?php echo $row["kangla_qiangdu_pingjunzhi"];?>" placeholder="" autocomplete="off" class="layui-input">
    </div>
  </div>
  <div class="layui-form-item">
    <label class="layui-form-label">规定塑性延伸强度</label>
    <div class="layui-input-inline" style="width: 100px;">
      <input type="number" name="suxingyanshen_qiangdu" value="<?php echo $row["suxingyanshen_qiangdu"];?>" placeholder="" autocomplete="off" class="layui-input suxingyanshen_qiangdu" min="1" step="1" lay-affix="number">
    </div>
    
    <div class="layui-input-inline" style="width: 100px;">
      <label class="layui-form-label">平均值</label>
    </div>
    <div class="layui-input-inline" style="width: 100px;">
      <input type="text" name="suxingyanshen_qiangdu_pingjunzhi"  value="<?php echo $row["suxingyanshen_qiangdu_pingjunzhi"];?>" placeholder="" autocomplete="off" class="layui-input">
    </div>
  </div>
  <div class="layui-form-item">
    <label class="layui-form-label">断后伸长率</label>
    <div class="layui-input-inline" style="width: 100px;">
      <input type="number" name="duanhou_shenchanglv" value="<?php echo $row["duanhou_shenchanglv"];?>" placeholder="" autocomplete="off" class="layui-input duanhou_shenchanglv" min="0" step="1" lay-affix="number">
    </div>
   
    <div class="layui-input-inline" style="width: 100px;">
      <label class="layui-form-label">平均值</label>
    </div>
    <div class="layui-input-inline" style="width: 100px;">
      <input type="text" name="duanhou_shenchanglv_pingjunzhi" value="<?php echo $row["duanhou_shenchanglv_pingjunzhi"];?>" placeholder="" autocomplete="off" class="layui-input" readonly="true">
    </div>
  </div>
  <div class="layui-form-item layui-form-text">
    <label class="layui-form-label">备注</label>
    <div class="layui-input-block">
      <textarea name = "remark" placeholder="内容" value="<?php echo $row["baogao_bianhao"];?>"  class="layui-textarea"><?php echo $row["remark"];?></textarea>
    </div>
  </div>
  <div class="layui-form-item">
    <div class="layui-input-block">
      <button type="submit" class="layui-btn" lay-submit lay-filter="demo1">提交</button>
    </div>
  </div>
</form>
    <script>
layui.use(function(){
  var form = layui.form;
  var layer = layui.layer;
  var laydate = layui.laydate;
  var util = layui.util;
    var $ = layui.jquery;

	
form.on('submit(demo1)', function(data){
    var field = data.field; // 获取表单字段值
    // 显示填写结果，仅作演示用
		
	$.post('../action/tensile_report_update.php', JSON.stringify(data.field), function(res){
      // 处理PHP脚本返回的结果
     
        if(res.code=='0'){
            alert("数据编辑成功");
            window.location.href = "../tensile_record.php";
        }
    
    }, 'json');
    return false; // 阻止默认 form 跳转
  });
	
 

    
    
  // 日期
  laydate.render({
    elem: '#songjian_riqi'
  });
    
      laydate.render({
    elem: '#jiance_riqi'
  });
});
    
$(document).ready(function(){
  //抗拉强度平均值计算
   var $inputs = $('input[class="layui-input kangla_qiangdu"]');
  // 计算平均值的函数
       function calculateAverage_kangla(count) {
          var sum = 0;
          var count = $('input[class="layui-input kangla_qiangdu"]').filter(function() {
              return $(this).val() !== '';
                }).length;
     
           $inputs.each(function() {
             sum += parseFloat($(this).val()) || 0;
           });
         var average = sum / count;
    $('input[name="kangla_qiangdu_pingjunzhi"]').val(average.toFixed(0)); // 保留0位小数
  }
  // 监听 input 值的变化，实时更新平均值
  $inputs.on('input', function() {
    calculateAverage_kangla();
  });
});
    
$(document).ready(function(){
  //塑性延伸平均值计算
   var $inputs = $('input[class="layui-input suxingyanshen_qiangdu"]');
  // 计算平均值的函数
       function calculateAverage_suxing(count) {
          var sum = 0;
          var count = $('input[class="layui-input suxingyanshen_qiangdu"]').filter(function() {
              return $(this).val() !== '';
                }).length;
     
           $inputs.each(function() {
             sum += parseFloat($(this).val()) || 0;
           });
         var average = sum / count;
    $('input[name="suxingyanshen_qiangdu_pingjunzhi"]').val(average.toFixed(0)); // 保留0位小数
  }
  // 监听 input 值的变化，实时更新平均值
  $inputs.on('input', function() {
    calculateAverage_suxing();
  });
}); 
    
$(document).ready(function(){
  //断后伸长平均值计算
   var $inputs = $('input[class="layui-input duanhou_shenchanglv"]');
  // 计算平均值的函数
       function calculateAverage_duanhou_shenchanglv(count) {
          var sum = 0;
          var count = $('input[class="layui-input duanhou_shenchanglv"]').filter(function() {
              return $(this).val() !== '';
                }).length;
     
           $inputs.each(function() {
             sum += parseFloat($(this).val()) || 0;
           });
         var average = sum / count;
    $('input[name="duanhou_shenchanglv_pingjunzhi"]').val(average.toFixed(0)); // 保留0位小数
  }
  // 监听 input 值的变化，实时更新平均值
  $inputs.on('input', function() {
    calculateAverage_duanhou_shenchanglv();
  });
});    
</script>

</body>
</html>
