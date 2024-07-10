<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Demo</title>
<!-- 请勿在项目正式环境中引用该 layui.css 地址 -->
<link href="../../../assets/css/layui.css" rel="stylesheet">
<script src="../../../assets/js/layui.js"></script> 
<script src="../../../assets/js/jquery.js"></script>
</head>
<body>
<fieldset class="layui-elem-field layui-field-title">
  <legend>拉伸数据记录</legend>
</fieldset>
<form class="layui-form" action="">
  <div class="layui-form-item">
    <label class="layui-form-label">样件批次号</label>
    <div class="layui-input-block">
      <input type="text" name="yangjian_picihao" lay-verify="required" placeholder="" autocomplete="off" class="layui-input">
    </div>
  </div>
  <div class="layui-form-item">
    <label class="layui-form-label">报告编号</label>
    <div class="layui-input-block">
      <input type="text" name="baogao_bainhao" lay-verify="required" placeholder="" autocomplete="off" class="layui-input">
    </div>
  </div>
  <div class="layui-form-item">
    <div class="layui-inline">
      <label class="layui-form-label">送检日期</label>
      <div class="layui-input-inline layui-input-wrap">
        <div class="layui-input-prefix"> <i class="layui-icon layui-icon-date"></i> </div>
        <input type="text" name="songjian_riqi" id="songjian_riqi" lay-verify="required" placeholder="yyyy-MM-dd" autocomplete="off" class="layui-input">
      </div>
    </div>
    <div class="layui-inline">
      <label class="layui-form-label">检测日期</label>
      <div class="layui-input-inline layui-input-wrap">
        <div class="layui-input-prefix"> <i class="layui-icon layui-icon-date"></i> </div>
        <input type="text" name="jiance_riqi" id="jiance_riqi" lay-verify="required" placeholder="yyyy-MM-dd" autocomplete="off" class="layui-input">
      </div>
    </div>
  </div>
  <div class="layui-form-item">
    <label class="layui-form-label">材质</label>
    <div class="layui-input-block">
      <input type="text" name="caizhi" lay-verify="required" placeholder="" autocomplete="off" class="layui-input">
    </div>
  </div>
  <div class="layui-form-item">
    <label class="layui-form-label">试样类型</label>
    <div class="layui-input-block">
      <input type="text" name="shiyang_leixing" lay-verify="required" placeholder="" autocomplete="off" class="layui-input">
    </div>
  </div>
  <div class="layui-form-item">
    <label class="layui-form-label">试样规格</label>
    <div class="layui-input-block">
      <input type="text" name="shiyang_leiguige" lay-verify="required" placeholder="" autocomplete="off" class="layui-input">
    </div>
  </div>
  <div class="layui-form-item">
    <label class="layui-form-label">试样编号</label>
    <div class="layui-input-inline" style="width: 100px;">
      <input type="text" name="shiyang_bianhao_1" value="1"  autocomplete="off" class="layui-input"  readonly="true">
    </div>
    <div class="layui-input-inline" style="width: 100px;">
      <input type="text" name="shiyang_bianhao_2" value="2" autocomplete="off" class="layui-input" readonly="true">
    </div>
    <div class="layui-input-inline" style="width: 100px;">
      <input type="text" name="shiyang_bianhao_3" value="3" autocomplete="off" class="layui-input" readonly="true">
    </div>
    <div class="layui-input-inline" style="width: 100px;">
      <input type="text" name="shiyang_bianhao_4" value="4" autocomplete="off" class="layui-input" readonly="true">
    </div>
    <div class="layui-input-inline" style="width: 100px;">
      <input type="text" name="shiyang_bianhao_5" value="5" autocomplete="off" class="layui-input" readonly="true">
    </div>
  </div>
  <div class="layui-form-item" id="kangla_qiangdu">
    <label class="layui-form-label">抗拉强度</label>
    <div class="layui-input-inline" style="width: 100px;">
      <input type="number" name="kangla_qiangdu_1" placeholder="1#" autocomplete="off" class="layui-input kangla_qiangdu" min="0" step="1" lay-affix="number">
    </div>
    <div class="layui-input-inline" style="width: 100px;">
      <input type="number" name="kangla_qiangdu_2" placeholder="2#" autocomplete="off" class="layui-input kangla_qiangdu" min="0" step="1" lay-affix="number">
    </div>
    <div class="layui-input-inline" style="width: 100px;">
      <input type="number" name="kangla_qiangdu_3" placeholder="3#" autocomplete="off" class="layui-input kangla_qiangdu" min="0" step="1" lay-affix="number">
    </div>
    <div class="layui-input-inline" style="width: 100px;">
      <input type="number" name="kangla_qiangdu_4" placeholder="4#" autocomplete="off" class="layui-input kangla_qiangdu" min="0" step="1" lay-affix="number">
    </div>
    <div class="layui-input-inline" style="width: 100px;">
      <input type="number" name="kangla_qiangdu_5" placeholder="5#" autocomplete="off" class="layui-input kangla_qiangdu" min="0" step="1" lay-affix="number">
    </div>
    <div class="layui-input-inline" style="width: 100px;">
      <label class="layui-form-label">平均值</label>
    </div>
    <div class="layui-input-inline" style="width: 100px;">
      <input type="text" name="kangla_qiangdu_pingjunzhi"  placeholder="" autocomplete="off" class="layui-input" readonly="true">
    </div>
  </div>
  <div class="layui-form-item">
    <label class="layui-form-label">规定塑性延伸强度</label>
    <div class="layui-input-inline" style="width: 100px;">
      <input type="number" name="suxingyanshen_qiangdu_1" placeholder="1#" autocomplete="off" class="layui-input suxingyanshen_qiangdu" min="1" step="1" lay-affix="number">
    </div>
    <div class="layui-input-inline" style="width: 100px;">
      <input type="number" name="suxingyanshen_qiangdu_2" placeholder="2#" autocomplete="off" class="layui-input suxingyanshen_qiangdu" min="1" step="1" lay-affix="number">
    </div>
    <div class="layui-input-inline" style="width: 100px;">
      <input type="number" name="suxingyanshen_qiangdu_3" placeholder="3#" autocomplete="off" class="layui-input suxingyanshen_qiangdu" min="0" step="1" lay-affix="number">
    </div>
    <div class="layui-input-inline" style="width: 100px;">
      <input type="number" name="suxingyanshen_qiangdu_4" placeholder="4#" autocomplete="off" class="layui-input suxingyanshen_qiangdu" min="0" step="1" lay-affix="number">
    </div>
    <div class="layui-input-inline" style="width: 100px;">
      <input type="number" name="suxingyanshen_qiangdu_5" placeholder="5#" autocomplete="off" class="layui-input suxingyanshen_qiangdu" min="0" step="1" lay-affix="number">
    </div>
    <div class="layui-input-inline" style="width: 100px;">
      <label class="layui-form-label">平均值</label>
    </div>
    <div class="layui-input-inline" style="width: 100px;">
      <input type="text" name="suxingyanshen_qiangdu_pingjunzhi"  placeholder="" autocomplete="off" class="layui-input" readonly="true">
    </div>
  </div>
  <div class="layui-form-item">
    <label class="layui-form-label">断后伸长率</label>
    <div class="layui-input-inline" style="width: 100px;">
      <input type="number" name="duanhou_shenchanglv_1" placeholder="1#" autocomplete="off" class="layui-input duanhou_shenchanglv" min="0" step="1" lay-affix="number">
    </div>
    <div class="layui-input-inline" style="width: 100px;">
      <input type="number" name="duanhou_shenchanglv_2" placeholder="2#" autocomplete="off" class="layui-input duanhou_shenchanglv" min="0" step="1" lay-affix="number">
    </div>
    <div class="layui-input-inline" style="width: 100px;">
      <input type="number" name="duanhou_shenchanglv_3" placeholder="3#" autocomplete="off" class="layui-input duanhou_shenchanglv" min="0" step="1" lay-affix="number">
    </div>
    <div class="layui-input-inline" style="width: 100px;">
      <input type="number" name="duanhou_shenchanglv_4" placeholder="4#" autocomplete="off" class="layui-input duanhou_shenchanglv" min="0" step="1" lay-affix="number">
    </div>
    <div class="layui-input-inline" style="width: 100px;">
      <input type="number" name="duanhou_shenchanglv_5" placeholder="5#" autocomplete="off" class="layui-input duanhou_shenchanglv" min="0" step="1" lay-affix="number">
    </div>
    <div class="layui-input-inline" style="width: 100px;">
      <label class="layui-form-label">平均值</label>
    </div>
    <div class="layui-input-inline" style="width: 100px;">
      <input type="text" name="duanhou_shenchanglv_pingjunzhi" placeholder="" autocomplete="off" class="layui-input" readonly="true">
    </div>
  </div>
  <div class="layui-form-item layui-form-text">
    <label class="layui-form-label">备注</label>
    <div class="layui-input-block">
      <textarea name = "remark" placeholder="内容" class="layui-textarea"></textarea>
    </div>
  </div>
  <div class="layui-form-item">
    <div class="layui-input-block">
      <button type="submit" class="layui-btn" lay-submit lay-filter="demo1">提交</button>
    </div>
  </div>
</form>
<script>
layui.use(['form', 'laydate', 'util','jquery'], function(){
  var form = layui.form;
  var layer = layui.layer;
  var laydate = layui.laydate;
  var util = layui.util;
  
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
