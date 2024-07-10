<!DOCTYPE html>
<html>
<head>

<?php
require_once '../../dbconfig_lab.php';
$baogao_bianhao=$_GET['baogao_bianhao'];

$query = "SELECT * FROM tensile_exp where baogao_bianhao = '$baogao_bianhao'";
// 执行查询
$sql = mysql_query( $query );

$get_row = mysql_fetch_array( $sql );
   
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
  <legend>拉伸试验-编辑数据</legend>
</fieldset>


    <form class="layui-form"  action="">
  <div class="layui-form-item">
    <label class="layui-form-label">报告编号</label>
    <div class="layui-input-block">
      <input style="width: 300px;" value="<?echo $get_row['baogao_bianhao'];?>" type="text" name="baogao_bianhao" placeholder="" autocomplete="off" class="layui-input" lay-verify="required"  readonly="true">
    </div>
  </div>
  <div class="layui-form-item">
    <div class="layui-inline">
      <label class="layui-form-label">送检日期</label>
      <div class="layui-input-inline layui-input-wrap">
        <div class="layui-input-prefix"> <i class="layui-icon layui-icon-date"></i> </div>
        <input type="text" name="songjian_riqi" value="<?echo $get_row['songjian_riqi'];?>" id="songjian_riqi" placeholder="yyyy-MM-dd" autocomplete="off" class="layui-input">
      </div>
    </div>
    <div class="layui-inline">
      <label class="layui-form-label">检测日期</label>
      <div class="layui-input-inline layui-input-wrap">
        <div class="layui-input-prefix"> <i class="layui-icon layui-icon-date"></i> </div>
        <input type="text" name="jiance_riqi" id="jiance_riqi" value="<?echo $get_row['jiance_riqi'];?>" placeholder="yyyy-MM-dd" autocomplete="off" class="layui-input">
      </div>
    </div>
    <div class="layui-inline">
      <label class="layui-form-label">报告日期</label>
      <div class="layui-input-inline layui-input-wrap">
        <div class="layui-input-prefix"> <i class="layui-icon layui-icon-date"></i> </div>
        <input type="text" name="baogao_riqi" id="baogao_riqi" value="<?echo $get_row['baogao_riqi'];?>" placeholder="yyyy-MM-dd" autocomplete="off" class="layui-input">
      </div>
    </div>
  </div>
  <div class="layui-form-item">
    <div class="layui-inline">
      <label class="layui-form-label">样品名称</label>
      <input style="width: 190px;" type="text" name="yangjian_mingcheng" value="<?echo $get_row['yangjian_mingcheng'];?>" id="" placeholder="" autocomplete="off" class="layui-input">
    </div>
    <div class="layui-inline">
      <label class="layui-form-label">样品类型</label>
      <input style="width: 200px;" type="text" name="yangjian_leixing" value="<?echo $get_row['yangjian_leixing'];?>" id="" placeholder="" autocomplete="off" class="layui-input">
    </div>
    <div class="layui-inline">
      <label class="layui-form-label">样品规格</label>
      <input style="width: 200px;" type="text" name="yangjian_guige" value="<?echo $get_row['yangjian_guige'];?>" id="" placeholder="" autocomplete="off" class="layui-input">
    </div>
  </div>
  <div class="layui-form-item">
    <div class="layui-inline">
      <label class="layui-form-label">样品数量</label>
      <input style="width: 190px;" type="text" name="yangjian_shuliang" value="<?echo $get_row['yangjian_shuliang'];?>" id="" placeholder="" autocomplete="off" class="layui-input">
    </div>
    <div class="layui-inline">
      <label class="layui-form-label">样品来源</label>
      <input style="width: 200px;" type="text" name="yangjian_laiyuan" value="<?echo $get_row['yangjian_laiyuan'];?>" id="" placeholder="" autocomplete="off" class="layui-input">
    </div>
    <div class="layui-inline">
      <label class="layui-form-label">批次号</label>
      <input style="width: 200px;" type="text" name="yangjian_picihao" value="<?echo $get_row['yangjian_picihao'];?>" id="" placeholder="" autocomplete="off" class="layui-input">
    </div>
  </div>
  <div class="layui-form-item">
    <div class="layui-inline">
      <label class="layui-form-label">委托部门</label>
      <input style="width: 190px;" type="text" name="weituo_bumen" value="<?echo $get_row['weituo_bumen'];?>" id="" placeholder="" autocomplete="off" class="layui-input">
    </div>
    <div class="layui-inline">
      <label class="layui-form-label">委托单号</label>
      <input style="width: 200px;" type="text" name="weituo_danhao" value="<?echo $get_row['weituo_danhao'];?>" id="" placeholder="" autocomplete="off" class="layui-input">
    </div>
    <div class="layui-inline">
      <label class="layui-form-label">取样方向</label>
      <input style="width: 200px;" type="text" name="quyang_fangxiang" value="<?echo $get_row['quyang_fangxiang'];?>" id="" placeholder="" autocomplete="off" class="layui-input">
    </div>
  </div>
  <div class="layui-form-item">
    <div class="layui-inline">
      <label class="layui-form-label">测试标准</label>
      <input style="width: 515px;" type="text" name="ceshi_biaozhun" value="<?echo $get_row['ceshi_biaozhun'];?>" id="" placeholder="" autocomplete="off" class="layui-input">
    </div>
    <div class="layui-inline">
      <label class="layui-form-label">温湿度</label>
      <input style="width: 200px;" type="text" name="wenshidu" value="<?echo $get_row['wenshidu'];?>" id="" placeholder="" autocomplete="off" class="layui-input">
    </div>
  </div>
  <div class="layui-form-item">
    <label class="layui-form-label">测试项目</label>
    <div class="layui-input-block">
        
       <input type="checkbox" name="cb_tanxingmoliang" value="弹性模量" title="弹性模量">
      <input type="checkbox" name="cb_kangla" value="抗拉强度" title="抗拉强度">
      <input type="checkbox" name="cb_suxingyanshen" value="规定塑性延伸强度" title="规定塑性延伸强度">
      <input type="checkbox" name="cb_duanhoushenchang" value="断后伸长率" title="断后伸长率">
  
    </div>
  </div>
    <div class="layui-form-item">

      <label class="layui-form-label">备注</label>
        <div class="layui-input-block">
      <input type="text" name="beizhu_zhengti" value="<?echo $get_row['beizhu_zhengti'];?>"  id="" placeholder="" autocomplete="off" class="layui-input">
    </div>
    </div>
    
 <?php
      
        $result = mysql_query( $query );
        $i=1;
      while ( $row = mysql_fetch_assoc( $result ) ) {
        echo
          ' <div>
    <div class="layui-inline">
     <input type="text" style="display: none;" value="'.$row['id'].'" name="id_'.$i.'" >
      <label class="layui-form-label">试样编号</label>
      <input style="width: 100px;" type="text" value="'.$row['yangjian_bianhao'].'" name="yangjian_bianhao_'.$i.'" placeholder="" autocomplete="off" class="layui-input">
    </div>
    <div class="layui-inline">
      <label class="layui-form-label">E</label>
      <input style="width: 100px;" type="text" value="'.$row['tanxing_moliang'].'" name="tanxing_moliang_'.$i.'" placeholder="" autocomplete="off" class="layui-input">
    </div>
    <div class="layui-inline">
      <label class="layui-form-label">R<sub>m</sub></label>
      <input style="width: 100px;" type="text" value="'.$row['kangla_qiangdu'].'" name="kangla_qiangdu_'.$i.'" placeholder="" autocomplete="off" class="layui-input">
    </div>
    <div class="layui-inline">
      <label class="layui-form-label">R<sub>p0.2</sub></label>
      <input style="width: 100px;" type="text" value="'.$row['suxing_yanshen'].'" name="suxing_yanshen_'.$i.'"  placeholder="" autocomplete="off" class="layui-input">
    </div>
    <div class="layui-inline">
      <label class="layui-form-label">A%</label>
      <input style="width: 100px;" type="text" value="'.$row['duanhou_shenchang'].'" name="duanhou_shenchang_'.$i.'"  placeholder="" autocomplete="off" class="layui-input">
    </div>
    <div class="layui-inline">
      <label class="layui-form-label">备注</label>
      <input style="width: 350px;" type="text" value="'.$row['beizhu'].'" name="beizhu_'.$i.'" placeholder="" autocomplete="off" class="layui-input">
    </div>
  </div>';
          $i++;
      }

      ?>
        <div class="layui-form-item">
    <div class="layui-input-block">
      <button type="submit" class="layui-btn" lay-submit lay-filter="demo1">提交</button>
    </div>
  </div>
</form>
    
<!--  <div>
    <div class="layui-inline">
      <label class="layui-form-label">试样编号</label>
      <input style="width: 100px;" type="text" name="yangjian_bianhao_1" id="yangjian_bianhao_1" placeholder="" autocomplete="off" class="layui-input">
    </div>
    <div class="layui-inline">
      <label class="layui-form-label">E</label>
      <input style="width: 100px;" type="text" name="tanxing_moliang_1" id="tanxing_moliang_1" placeholder="" autocomplete="off" class="layui-input">
    </div>
    <div class="layui-inline">
      <label class="layui-form-label">R<sub>m</sub></label>
      <input style="width: 100px;" type="text" name="kangla_qiangdu_1" id="kangla_qiangdu_1" placeholder="" autocomplete="off" class="layui-input">
    </div>
    <div class="layui-inline">
      <label class="layui-form-label">R<sub>p0.2</sub></label>
      <input style="width: 100px;" type="text" name="suxing_yanshen_1" id="suxing_yanshen_1"  placeholder="" autocomplete="off" class="layui-input">
    </div>
    <div class="layui-inline">
      <label class="layui-form-label">A%</label>
      <input style="width: 100px;" type="text" name="duanhou_shenchang_1" id="duanhou_shenchang_1"  placeholder="" autocomplete="off" class="layui-input">
    </div>
    <div class="layui-inline">
      <label class="layui-form-label">备注</label>
      <input style="width: 350px;" type="text" name="beizhu_1" id="beizhu_1" placeholder="" autocomplete="off" class="layui-input">
    </div>
  </div>-->

 
  


    
    
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
		
	$.post('../action/report_edit_tensile_action.php', JSON.stringify(data.field), function(res){
      // 处理PHP脚本返回的结果
     
        if(res.code=='0'){
            alert("数据编辑成功");
            window.location.href = "./report_view_tensile.php?baogao_bianhao=<?php echo $baogao_bianhao;?>";
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
    laydate.render({
    elem: '#baogao_riqi'
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
