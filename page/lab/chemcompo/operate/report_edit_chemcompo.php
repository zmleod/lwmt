<!DOCTYPE html>
<html>
<head>

<?php
require_once '../../dbconfig_lab.php';
$id=$_GET['id'];
$query = "SELECT * FROM chemcompo_exp where id = $id";
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
  <legend>化学成分-编辑数据</legend>
</fieldset>
   <a href="../index_chemcompo.php" class="layui-btn layui-btn-sm">取消修改</a>
<form class="layui-form"  action="">
    <input type="text" name="id" style="display: none;" value="<?php echo $row["id"];?>" >
    <div class="layui-form-item">
    <label class="layui-form-label">样件来源</label>
    <div class="layui-input-block">
      <input type="text" name="yangjian_laiyuan" value="<?php echo $row["yangjian_laiyuan"];?>" placeholder="" autocomplete="off" class="layui-input">
    </div>
  </div>
  <div class="layui-form-item">
    <label class="layui-form-label">样件批次号</label>
    <div class="layui-input-block">
      <input type="text" name="yangjian_picihao" value="<?php echo $row["yangjian_picihao"];?>" placeholder="" autocomplete="off" class="layui-input">
    </div>
  </div>
  <div class="layui-form-item">
    <div class="layui-inline">
      <label class="layui-form-label">送检日期</label>
      <div class="layui-input-inline layui-input-wrap">
        <div class="layui-input-prefix"> <i class="layui-icon layui-icon-date"></i> </div>
        <input type="text" name="songjian_riqi" value="<?php echo $row["songjian_riqi"];?>" id="songjian_riqi" placeholder="yyyy-MM-dd" autocomplete="off" class="layui-input">
      </div>
    </div>
    <div class="layui-inline">
      <label class="layui-form-label">检测日期</label>
      <div class="layui-input-inline layui-input-wrap">
        <div class="layui-input-prefix"> <i class="layui-icon layui-icon-date"></i> </div>
        <input type="text" name="jiance_riqi" value="<?php echo $row["jiance_riqi"];?>" id="jiance_riqi" placeholder="yyyy-MM-dd" autocomplete="off" class="layui-input">
      </div>
    </div>
  </div>
  <div class="layui-form-item">
    <label class="layui-form-label">检测机构</label>
    <div class="layui-input-block">
      <input type="text" name="jiance_jigou" value="<?php echo $row["jiance_jigou"];?>" placeholder="" autocomplete="off" class="layui-input">
    </div>
  </div>
  <div class="layui-form-item">
    <label class="layui-form-label">样品牌号</label>
    <div class="layui-input-block">
      <input type="text" name="yangpin_paihao" value="<?php echo $row["yangpin_paihao"];?>" placeholder="" autocomplete="off" class="layui-input">
    </div>
  </div>
  <div class="layui-form-item">
    <label class="layui-form-label">样品规格</label>
    <div class="layui-input-block">
      <input type="text" name="yangpin_guige" placeholder="" autocomplete="off" class="layui-input">
    </div>
  </div>
  <div class="layui-form-item">
    <label class="layui-form-label">样品编号</label>
    <div class="layui-input-block">
      <input type="text" name="yangpin_bianhao" value="<?php echo $row["yangpin_bianhao"];?>" placeholder="" autocomplete="off" class="layui-input">
    </div>
  </div>
  <div class="layui-form-item">
    <label class="layui-form-label">报告编号(第三方)</label>
    <div class="layui-input-block">
      <input type="text" name="baogao_bianhao_sanfang" value="<?php echo $row["baogao_bianhao_sanfang"];?>" placeholder="" autocomplete="off" class="layui-input">
    </div>
  </div>
  <div class="layui-form-item">
    <label class="layui-form-label">报告编号</label>
    <div class="layui-input-block">
      <input type="text" name="baogao_bianhao" value="<?php echo $row["baogao_bianhao"];?>" placeholder="" autocomplete="off" class="layui-input">
    </div>
  </div>
  <div class="layui-form-item">
    <label class="layui-form-label">需检测成分</label>
    <div class="layui-input-block">
      <input type="text" name="jiance_chengfen" value="<?php echo $row["jiance_chengfen"];?>" placeholder="" autocomplete="off" class="layui-input">
    </div>
  </div>
  <div class="layui-form-item layui-row">
    <label class="layui-form-label">元素/成分</label>
    <div class="layui-col-md1">
      <div class="grid-demo grid-demo-bg1">
        <input type="text" name="Mg" value="<?php echo $row["Mg"];?>" placeholder="Mg" class="layui-input">
      </div>
    </div>
    <div class="layui-col-md1">
      <div class="grid-demo grid-demo-bg1">
        <input type="text" name="Al" value="<?php echo $row["Al"];?>" placeholder="Al" class="layui-input">
      </div>
    </div>
    <div class="layui-col-md1">
      <div class="grid-demo grid-demo-bg1">
        <input type="text" name="Zn" value="<?php echo $row["Zn"];?>" placeholder="Zn" class="layui-input">
      </div>
    </div>
    <div class="layui-col-md1">
      <div class="grid-demo grid-demo-bg1">
        <input type="text" name="Ce" value="<?php echo $row["Ce"];?>" placeholder="Ce" class="layui-input">
      </div>
    </div>
    <div class="layui-col-md1">
      <div class="grid-demo grid-demo-bg1">
        <input type="text" name="Cu" value="<?php echo $row["Cu"];?>" placeholder="Cu" class="layui-input">
      </div>
    </div>
    <div class="layui-col-md1">
      <div class="grid-demo grid-demo-bg1">
        <input type="text" name="Fe" value="<?php echo $row["Fe"];?>" placeholder="Fe" class="layui-input">
      </div>
    </div>
    <div class="layui-col-md1">
      <div class="grid-demo grid-demo-bg1">
        <input type="text" name="Mn" value="<?php echo $row["Mn"];?>" placeholder="Mn" class="layui-input">
      </div>
    </div>
    <div class="layui-col-md1">
      <div class="grid-demo grid-demo-bg1">
        <input type="text" name="Ni" value="<?php echo $row["Ni"];?>" placeholder="Ni" class="layui-input">
      </div>
    </div>
    <div class="layui-col-md1">
      <div class="grid-demo grid-demo-bg1">
        <input type="text" name="Si" value="<?php echo $row["Si"];?>" placeholder="Si" class="layui-input">
      </div>
    </div>
    <div class="layui-col-md1">
      <div class="grid-demo grid-demo-bg1">
        <input type="text" name="Ca" value="<?php echo $row["Ca"];?>" placeholder="Ca" class="layui-input">
      </div>
    </div>
  </div>
  <div class="layui-form-item layui-row">
    <label class="layui-form-label"> </label>
    <div class="layui-col-md1">
      <div class="grid-demo grid-demo-bg1">
        <input type="text" name="Zr" value="<?php echo $row["Zr"];?>" placeholder="Zr" class="layui-input">
      </div>
    </div>
    <div class="layui-col-md1">
      <div class="grid-demo grid-demo-bg1">
        <input type="text" name="S" value="<?php echo $row["S"];?>" placeholder="S" class="layui-input">
      </div>
    </div>
    <div class="layui-col-md1">
      <div class="grid-demo grid-demo-bg1">
        <input type="text" name="Cr" value="<?php echo $row["Cr"];?>" placeholder="Cr" class="layui-input">
      </div>
    </div>
    <div class="layui-col-md1">
      <div class="grid-demo grid-demo-bg1">
        <input type="text" name="Be" value="<?php echo $row["Be"];?>" placeholder="Be" class="layui-input">
      </div>
    </div>
  </div>
  <div class="layui-form-item layui-form-text">
    <label class="layui-form-label">备注</label>
    <div class="layui-input-block">
      <textarea name = "beizhu" value="<?php echo $row["beizhu"];?>" placeholder="内容" class="layui-textarea"><?php echo $row["beizhu"];?></textarea>
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
		
	$.post('../action/report_edit_chemcompo_action.php', JSON.stringify(data.field), function(res){
      // 处理PHP脚本返回的结果
      if(res.code=='0'){
            alert("数据编辑成功");
            window.location.href = "../index_chemcompo.php";
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
    

</script>
</body>
</html>
