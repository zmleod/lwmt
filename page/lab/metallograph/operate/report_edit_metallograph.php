<!DOCTYPE html>
<html>
<head>
<?php
require_once '../../dbconfig_lab.php';
$baogao_bianhao=$_GET['baogao_bianhao'];

$query = "SELECT * FROM metallograph_exp where baogao_bianhao = '$baogao_bianhao'";
// 执行查询
$sql = mysql_query( $query );

$row = mysql_fetch_array( $sql );
   
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
  <legend>金相试验-编辑数据</legend>
</fieldset>

<form class="layui-form"  action="">
  <div class="layui-form-item">
    <label class="layui-form-label">报告编号</label>
    <div class="layui-input-block">
      <input style="width: 300px;" type="text" name="baogao_bianhao" value="<?php echo $row['baogao_bianhao'];?>" placeholder="" autocomplete="off" class="layui-input" lay-verify="required"  readonly="true">
    </div>
  </div>
  <div class="layui-form-item">
    <div class="layui-inline">
      <label class="layui-form-label">送检日期</label>
      <div class="layui-input-inline layui-input-wrap">
        <div class="layui-input-prefix"> <i class="layui-icon layui-icon-date"></i> </div>
        <input type="text" name="songjian_riqi" value="<?php echo $row['songjian_riqi'];?>" id="songjian_riqi" placeholder="yyyy-MM-dd" autocomplete="off" class="layui-input">
      </div>
    </div>
    <div class="layui-inline">
      <label class="layui-form-label">检验日期</label>
      <div class="layui-input-inline layui-input-wrap">
        <div class="layui-input-prefix"> <i class="layui-icon layui-icon-date"></i> </div>
        <input type="text" name="jianyan_riqi" value="<?php echo $row['jianyan_riqi'];?>" id="jianyan_riqi" placeholder="yyyy-MM-dd" autocomplete="off" class="layui-input">
      </div>
    </div>
    <div class="layui-inline">
      <label class="layui-form-label">报告日期</label>
      <div class="layui-input-inline layui-input-wrap">
        <div class="layui-input-prefix"> <i class="layui-icon layui-icon-date"></i> </div>
        <input type="text" name="baogao_riqi" value="<?php echo $row['baogao_riqi'];?>" id="baogao_riqi" placeholder="yyyy-MM-dd" autocomplete="off" class="layui-input">
      </div>
    </div>
  </div>
  <div class="layui-form-item">
    <div class="layui-inline">
      <label class="layui-form-label">样品名称</label>
      <input style="width: 190px;" type="text" name="yangjian_mingcheng" value="<?php echo $row['yangjian_mingcheng'];?>" id="" placeholder="" autocomplete="off" class="layui-input">
    </div>
    <div class="layui-inline">
      <label class="layui-form-label">样品类型</label>
      <input style="width: 200px;" type="text" name="yangjian_leixing" value="<?php echo $row['yangjian_leixing'];?>" id="" placeholder="" autocomplete="off" class="layui-input">
    </div>
    <div class="layui-inline">
      <label class="layui-form-label">样品规格</label>
      <input style="width: 200px;" type="text" name="yangjian_guige" value="<?php echo $row['yangjian_guige'];?>" id="" placeholder="" autocomplete="off" class="layui-input">
    </div>
  </div>
  <div class="layui-form-item">
    <div class="layui-inline">
      <label class="layui-form-label">样品数量</label>
      <input style="width: 190px;" type="text" name="yangjian_shuliang" value="<?php echo $row['yangjian_shuliang'];?>" id="" placeholder="" autocomplete="off" class="layui-input">
    </div>
    <div class="layui-inline">
      <label class="layui-form-label">样品来源</label>
      <input style="width: 200px;" type="text" name="yangjian_laiyuan" value="<?php echo $row['yangjian_laiyuan'];?>" id="" placeholder="" autocomplete="off" class="layui-input">
    </div>
    <div class="layui-inline">
      <label class="layui-form-label">批次号</label>
      <input style="width: 200px;" type="text" name="yangjian_picihao" value="<?php echo $row['yangjian_picihao'];?>" id="" placeholder="" autocomplete="off" class="layui-input">
    </div>
  </div>
  <div class="layui-form-item">
    <div class="layui-inline">
      <label class="layui-form-label">委托人</label>
      <input style="width: 190px;" type="text" name="weituo_ren" value="<?php echo $row['weituo_ren'];?>" id="" placeholder="" autocomplete="off" class="layui-input">
    </div>
    <div class="layui-inline">
      <label class="layui-form-label">委托单号</label>
      <input style="width: 200px;" type="text" name="weituo_danhao" value="<?php echo $row['weituo_danhao'];?>" id="" placeholder="" autocomplete="off" class="layui-input">
    </div>
    <div class="layui-inline">
      <label class="layui-form-label">取样方向</label>
      <input style="width: 200px;" type="text" name="quyang_fangxiang" value="<?php echo $row['quyang_fangxiang'];?>" id="" placeholder="" autocomplete="off" class="layui-input">
    </div>
  </div>
  <div class="layui-form-item">
    <div class="layui-inline">
      <label class="layui-form-label">检验标准</label>
      <input style="width: 515px;" type="text" name="jianyan_biaozhun" value="<?php echo $row['jianyan_biaozhun'];?>" id="" placeholder="" autocomplete="off" class="layui-input">
    </div>
    <div class="layui-inline">
      <label class="layui-form-label">检验设备</label>
      <input style="width: 200px;" type="text" name="jianyan_shebei" value="<?php echo $row['jianyan_shebei'];?>" id="" placeholder="" autocomplete="off" class="layui-input">
    </div>
  </div>
  <div class="layui-form-item">
    <label class="layui-form-label">检验项目</label>
    <div class="layui-input-block">
      <input type="checkbox" name="cb_jinglidu" value="晶粒度" title="晶粒度">
      <input type="checkbox" name="cb_dierxiang" value="第二相" title="第二相">
      <input type="checkbox" name="cb_jiazha_qikong" value="夹杂物or气孔" title="夹杂物or气孔">
      <input type="checkbox" name="cb_houdu" value="厚度" title="厚度">
       <input type="checkbox" name="cb_xijingqu" value="细晶区" title="细晶区"> 
    </div>
  </div>
 <div class="layui-form-item">
    <label class="layui-form-label">分析判定</label>
    <div class="layui-input-block">
     
          <textarea name="fenxi_panding" placeholder="" value="<?php echo $row['fenxi_panding'];?>" class="layui-textarea"><?php echo $row['fenxi_panding'];?></textarea>
      
    </div>
  </div>
    <?php
      
        $result = mysql_query( $query );
        $i=1;
      while ( $get_row = mysql_fetch_assoc( $result ) ) {
        echo
          ' <div>
    <div class="layui-inline">
     <input type="text" style="display: none;" value="'.$get_row['id'].'" name="id_'.$i.'" >
      <label class="layui-form-label">试样编号</label>
      <input style="width: 100px;" type="text" value="'.$get_row['yangjian_bianhao'].'" name="yangjian_bianhao_'.$i.'" placeholder="" autocomplete="off" class="layui-input">
    </div>
    <div class="layui-inline">
      <label class="layui-form-label">备注</label>
      <input style="width: 350px;" type="text" value="'.$get_row['beizhu'].'" name="beizhu_'.$i.'" placeholder="" autocomplete="off" class="layui-input">
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
		
	$.post('../action/report_edit_metallograph_action.php', JSON.stringify(data.field), function(res){
      // 处理PHP脚本返回的结果
     
        if(res.code=='0'){
            alert("数据编辑成功");
            window.location.href = "./report_view_metallograph.php?baogao_bianhao=<?php echo $baogao_bianhao;?>";
        }
    
    }, 'json');
    return false; // 阻止默认 form 跳转
  });
	
 

    
    
  // 日期
  laydate.render({
    elem: '#songjian_riqi'
  });
    
      laydate.render({
    elem: '#jianyan_riqi'
  });
        laydate.render({
    elem: '#baogao_riqi'
  });     
        
});
    </script>
  
</body>
</html>
