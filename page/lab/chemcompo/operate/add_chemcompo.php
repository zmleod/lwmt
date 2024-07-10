<!DOCTYPE html>
<html>
<head>
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
  <legend>化学成分-新增数据</legend>
</fieldset>
<form class="layui-form"  action="">
  <div class="layui-form-item">
    <label class="layui-form-label">样件来源</label>
    <div class="layui-input-block">
      <select name="yangjian_laiyuan">
        <option value="cn_050">挤压过程</option>
        <option value="cw_001">厂外1分类</option>
        <option value="qt">其它</option>
      </select>
    </div>
  </div>
  <div class="layui-form-item">
    <label class="layui-form-label">样件批次号</label>
    <div class="layui-input-block">
      <input type="text" name="yangjian_picihao" lay-verify="required" placeholder="" autocomplete="off" class="layui-input">
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
    <label class="layui-form-label">检测机构</label>
    <div class="layui-input-block">
      <input type="text" name="jiance_jigou" lay-verify="required" placeholder="" autocomplete="off" class="layui-input">
    </div>
  </div>
  <div class="layui-form-item">
    <label class="layui-form-label">样品牌号</label>
    <div class="layui-input-block">
      <input type="text" name="yangpin_paihao" lay-verify="required" placeholder="" autocomplete="off" class="layui-input">
    </div>
  </div>
  <div class="layui-form-item">
    <label class="layui-form-label">样品规格</label>
    <div class="layui-input-block">
      <input type="text" name="yangpin_guige" lay-verify="required" placeholder="" autocomplete="off" class="layui-input">
    </div>
  </div>
  <div class="layui-form-item">
    <label class="layui-form-label">样品编号</label>
    <div class="layui-input-block">
      <input type="text" name="yangpin_bianhao" lay-verify="required" placeholder="" autocomplete="off" class="layui-input">
    </div>
  </div>
  <div class="layui-form-item">
    <label class="layui-form-label">报告编号(第三方)</label>
    <div class="layui-input-block">
      <input type="text" name="baogao_bianhao_sanfang" lay-verify="required" placeholder="" autocomplete="off" class="layui-input">
    </div>
  </div>
  <div class="layui-form-item">
    <label class="layui-form-label">报告编号</label>
    <div class="layui-input-block">
      <input type="text" name="baogao_bianhao" lay-verify="required" placeholder="" autocomplete="off" class="layui-input">
    </div>
  </div>
  <div class="layui-form-item">
    <label class="layui-form-label">需检测成分</label>
    <div class="layui-input-block">
      <input type="text" name="jiance_chengfen" lay-verify="required" placeholder="" autocomplete="off" class="layui-input">
    </div>
  </div>
  <div class="layui-form-item layui-row">
    <label class="layui-form-label">元素/成分</label>
    <div class="layui-col-md1">
      <div class="grid-demo grid-demo-bg1">
        <input type="text" name="Mg" placeholder="Mg" class="layui-input">
      </div>
    </div>
    <div class="layui-col-md1">
      <div class="grid-demo grid-demo-bg1">
        <input type="text" name="Al" placeholder="Al" class="layui-input">
      </div>
    </div>
    <div class="layui-col-md1">
      <div class="grid-demo grid-demo-bg1">
        <input type="text" name="Zn" placeholder="Zn" class="layui-input">
      </div>
    </div>
    <div class="layui-col-md1">
      <div class="grid-demo grid-demo-bg1">
        <input type="text" name="Ce" placeholder="Ce" class="layui-input">
      </div>
    </div>
    <div class="layui-col-md1">
      <div class="grid-demo grid-demo-bg1">
        <input type="text" name="Cu" placeholder="Cu" class="layui-input">
      </div>
    </div>
    <div class="layui-col-md1">
      <div class="grid-demo grid-demo-bg1">
        <input type="text" name="Fe" placeholder="Fe" class="layui-input">
      </div>
    </div>
    <div class="layui-col-md1">
      <div class="grid-demo grid-demo-bg1">
        <input type="text" name="Mn" placeholder="Mn" class="layui-input">
      </div>
    </div>
    <div class="layui-col-md1">
      <div class="grid-demo grid-demo-bg1">
        <input type="text" name="Ni" placeholder="Ni" class="layui-input">
      </div>
    </div>
    <div class="layui-col-md1">
      <div class="grid-demo grid-demo-bg1">
        <input type="text" name="Si" placeholder="Si" class="layui-input">
      </div>
    </div>
    <div class="layui-col-md1">
      <div class="grid-demo grid-demo-bg1">
        <input type="text" name="Ca" placeholder="Ca" class="layui-input">
      </div>
    </div>
  </div>
  <div class="layui-form-item layui-row">
    <label class="layui-form-label"> </label>
    <div class="layui-col-md1">
      <div class="grid-demo grid-demo-bg1">
        <input type="text" name="Zr" placeholder="Zr" class="layui-input">
      </div>
    </div>
    <div class="layui-col-md1">
      <div class="grid-demo grid-demo-bg1">
        <input type="text" name="S" placeholder="S" class="layui-input">
      </div>
    </div>
    <div class="layui-col-md1">
      <div class="grid-demo grid-demo-bg1">
        <input type="text" name="Cr" placeholder="Cr" class="layui-input">
      </div>
    </div>
    <div class="layui-col-md1">
      <div class="grid-demo grid-demo-bg1">
        <input type="text" name="Be" placeholder="Be" class="layui-input">
      </div>
    </div>
  </div>
  <div class="layui-form-item layui-form-text">
    <label class="layui-form-label">备注</label>
    <div class="layui-input-block">
      <textarea name = "beizhu" placeholder="内容" class="layui-textarea"></textarea>
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
		
	$.post('../action/add_chemcompo_action.php', JSON.stringify(data.field), function(res){
      // 处理PHP脚本返回的结果
      if(res.code=='0'){
            alert("数据新增成功");
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
