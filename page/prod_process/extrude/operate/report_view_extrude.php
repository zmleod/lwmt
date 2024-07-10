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
  <legend>详细数据</legend>
</fieldset>
   <a href="../index_tensile.php" class="layui-btn layui-btn-sm">返回</a>
  <div class="layui-form-item">
    <label class="layui-form-label">样件批次号</label>
    <div class="layui-input-block">
      <input type="text" name="yangjian_picihao" lay-verify="required" value="<?php echo $row["yangjian_picihao"];?>" placeholder="" autocomplete="off" class="layui-input" readonly="true">
    </div>
  </div>
  <div class="layui-form-item">
    <label class="layui-form-label">报告编号</label>
    <div class="layui-input-block">
      <input type="text" name="baogao_bianhao" lay-verify="required" value="<?php echo $row["baogao_bianhao"];?>" placeholder="" autocomplete="off" class="layui-input" readonly="true">
    </div>
  </div>
  <div class="layui-form-item">
    <div class="layui-inline">
      <label class="layui-form-label">送检日期</label>
      <div class="layui-input-inline layui-input-wrap">
        <div class="layui-input-prefix"> <i class="layui-icon layui-icon-date"></i> </div>
        <input type="text" name="songjian_riqi" id="songjian_riqi" lay-verify="required" value="<?php echo $row["songjian_riqi"];?>" placeholder="" autocomplete="off" class="layui-input" readonly="true">
      </div>
    </div>
    <div class="layui-inline">
      <label class="layui-form-label">检测日期</label>
      <div class="layui-input-inline layui-input-wrap">
        <div class="layui-input-prefix"> <i class="layui-icon layui-icon-date"></i> </div>
        <input type="text" name="jiance_riqi" id="jiance_riqi" lay-verify="required" value="<?php echo $row["jiance_riqi"];?>" placeholder="" autocomplete="off" class="layui-input" readonly="true">
      </div>
    </div>
  </div>
  <div class="layui-form-item">
    <label class="layui-form-label">材质</label>
    <div class="layui-input-block">
      <input type="text" name="caizhi" lay-verify="required" value="<?php echo $row["caizhi"];?>" placeholder="" autocomplete="off" class="layui-input" readonly="true">
    </div>
  </div>
  <div class="layui-form-item">
    <label class="layui-form-label">试样类型</label>
    <div class="layui-input-block">
      <input type="text" name="shiyang_leixing" lay-verify="required" value="<?php echo $row["shiyang_leixing"];?>" placeholder="" autocomplete="off" class="layui-input" readonly="true">
    </div>
  </div>
  <div class="layui-form-item">
    <label class="layui-form-label">试样规格</label>
    <div class="layui-input-block">
      <input type="text" name="shiyang_guige" lay-verify="required" value="<?php echo $row["shiyang_guige"];?>" placeholder="" autocomplete="off" class="layui-input" readonly="true">
    </div>
  </div>
  <div class="layui-form-item">
    <label class="layui-form-label">试样编号</label>
    <div class="layui-input-inline" style="width: 100px;">
      <input type="text" name="shiyang_bianhao" value="<?php echo $row["shiyang_bianhao"];?>"   autocomplete="off" class="layui-input" readonly="true">
    </div>
  
  </div>
  <div class="layui-form-item" id="kangla_qiangdu">
    <label class="layui-form-label">抗拉强度</label>
    <div class="layui-input-inline" style="width: 100px;">
      <input type="number" name="kangla_qiangdu" value="<?php echo $row["kangla_qiangdu"];?>" placeholder="" autocomplete="off" class="layui-input kangla_qiangdu" min="0" step="1" lay-affix="number" readonly="true">
    </div>
   <label class="layui-form-label">平均值</label>
    <div class="layui-input-inline" style="width: 100px;">
      <input type="text" name="kangla_qiangdu_pingjunzhi"  value="<?php echo $row["kangla_qiangdu_pingjunzhi"];?>" placeholder="" autocomplete="off" class="layui-input" readonly="true" readonly="true">
    </div>
  </div>
  <div class="layui-form-item">
    <label class="layui-form-label">规定塑性延伸强度</label>
    <div class="layui-input-inline" style="width: 100px;">
      <input type="number" name="suxingyanshen_qiangdu" value="<?php echo $row["suxingyanshen_qiangdu"];?>" placeholder="" autocomplete="off" class="layui-input suxingyanshen_qiangdu" min="1" step="1" lay-affix="number" readonly="true">
    </div>
   
    <div class="layui-input-inline" style="width: 100px;">
      <label class="layui-form-label">平均值</label>
    </div>
    <div class="layui-input-inline" style="width: 100px;">
      <input type="text" name="suxingyanshen_qiangdu_pingjunzhi"  value="<?php echo $row["suxingyanshen_qiangdu_pingjunzhi"];?>" placeholder="" autocomplete="off" class="layui-input" readonly="true" readonly="true">
    </div>
  </div>
  <div class="layui-form-item">
    <label class="layui-form-label">断后伸长率</label>
    <div class="layui-input-inline" style="width: 100px;">
      <input type="number" name="duanhou_shenchanglv" value="<?php echo $row["duanhou_shenchanglv"];?>" placeholder="" autocomplete="off" class="layui-input duanhou_shenchanglv" min="0" step="1" lay-affix="number" readonly="true">
    </div>
  
    <div class="layui-input-inline" style="width: 100px;">
      <label class="layui-form-label">平均值</label>
    </div>
    <div class="layui-input-inline" style="width: 100px;">
      <input type="text" name="duanhou_shenchanglv_pingjunzhi" value="<?php echo $row["duanhou_shenchanglv_pingjunzhi"];?>" placeholder="" autocomplete="off" class="layui-input" readonly="true" readonly="true">
    </div>
  </div>
  <div class="layui-form-item layui-form-text">
    <label class="layui-form-label">备注</label>
    <div class="layui-input-block">
      <textarea name = "remark" placeholder="" class="layui-textarea" readonly="true"><?php echo $row["remark"];?></textarea>
    </div>
  </div>
  
   <a href="./edit_report_tensile.php?id=<?php echo $row["id"];?>" class="layui-btn layui-btn-sm">修改</a>


</body>
</html>
