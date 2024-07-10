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
  <legend>浸泡腐蚀-新增数据</legend>
</fieldset>
     <button class="layui-btn" id="addElements">添加试样</button>  
<form class="layui-form"  action="">
  <div class="layui-form-item">
    <label class="layui-form-label">报告编号</label>
    <div class="layui-input-block">
      <input style="width: 300px;" type="text" name="baogao_bianhao" placeholder="" autocomplete="off" class="layui-input" lay-verify="required" >
    </div>
  </div>
  <div class="layui-form-item">
    <div class="layui-inline">
      <label class="layui-form-label">送检日期</label>
      <div class="layui-input-inline layui-input-wrap">
        <div class="layui-input-prefix"> <i class="layui-icon layui-icon-date"></i> </div>
        <input type="text" name="songjian_riqi" id="songjian_riqi" placeholder="yyyy-MM-dd" autocomplete="off" class="layui-input">
      </div>
    </div>
    <div class="layui-inline">
      <label class="layui-form-label">试验日期</label>
      <div class="layui-input-inline layui-input-wrap">
        <div class="layui-input-prefix"> <i class="layui-icon layui-icon-date"></i> </div>
        <input type="text" name="shiyan_riqi" id="shiyan_riqi" placeholder="yyyy-MM-dd" autocomplete="off" class="layui-input">
      </div>
    </div>
    <div class="layui-inline">
      <label class="layui-form-label">报告日期</label>
      <div class="layui-input-inline layui-input-wrap">
        <div class="layui-input-prefix"> <i class="layui-icon layui-icon-date"></i> </div>
        <input type="text" name="baogao_riqi" id="baogao_riqi" placeholder="yyyy-MM-dd" autocomplete="off" class="layui-input">
      </div>
    </div>
  </div>
  <div class="layui-form-item">
    <div class="layui-inline">
      <label class="layui-form-label">温度(℃)</label>
      <input style="width: 190px;" type="text" name="wendu" id="" placeholder="" autocomplete="off" class="layui-input">
    </div>
    <div class="layui-inline">
      <label class="layui-form-label">湿度(%RH)</label>
      <input style="width: 200px;" type="text" name="shidu" id="" placeholder="" autocomplete="off" class="layui-input">
    </div>
    <div class="layui-inline">
      <label class="layui-form-label">样品数量</label>
      <input style="width: 200px;" type="text" name="yangjian_shuliang" id="yangjian_shuliang" placeholder="" autocomplete="off" class="layui-input">
    </div>
  </div>
  <div class="layui-form-item">
    <div class="layui-inline">
      <label class="layui-form-label">试验项目</label>
      <input style="width: 190px;" type="text" name="shiyan_xiangmu" id="" placeholder="" autocomplete="off" class="layui-input">
    </div>
    <div class="layui-inline">
      <label class="layui-form-label">试验设备</label>
      <input style="width: 200px;" type="text" value="1000m1烧杯" name="shiyan_shebei" id="" placeholder="" autocomplete="off" class="layui-input">
    </div>
    <div class="layui-inline">
      <label class="layui-form-label">试验条件</label>
      <input style="width: 200px;" type="text" value="3.5wt% NaCl溶液" name="shiyan_tiaojian" id="" placeholder="" autocomplete="off" class="layui-input">
    </div>
  </div>
  <div class="layui-form-item">
    
    <div class="layui-inline">
    <label class="layui-form-label">试验标准</label>
      <input style="width: 515px;" type="text" name="shiyan_biaozhun" value="ASTM G31；JB/T 7901-2001" placeholder="" autocomplete="off" class="layui-input" >
    </div>
<!-- 
    <div class="layui-inline">
    <label class="layui-form-label">委托单号</label>
      <input style="width: 200px;" type="text" name="weituo_danhao" value="" placeholder="" autocomplete="off" class="layui-input" >
    </div> -->
  </div>
  <div class="layui-form-item">
    <label class="layui-form-label">试验结果备注</label>
    <div class="layui-input-block">
      <textarea name="beizhu_zhengti" placeholder="" class="layui-textarea"></textarea>
    </div>
  </div>
  <div  class="layui-form-item">
          <div class="layui-inline">
      <input style="width: 100px;margin-left: 110px;" type="text" name="yangjian_bianhao_1" id="" placeholder="样品编号" autocomplete="off" class="layui-input">
    </div>
    <div class="layui-inline">
      <input style="width: 100px;" type="text" name="yangjian_mingcheng_1" id="" placeholder="样品名称" autocomplete="off" class="layui-input">
    </div>
    <div class="layui-inline">
      <input style="width: 100px;" type="text" name="yangjian_leixing_1" id="" placeholder="样品类型" autocomplete="off" class="layui-input">
    </div>
    <div class="layui-inline">
      <input style="width: 100px;" type="text" name="yangjian_guige_1" id="" placeholder="样品规格" autocomplete="off" class="layui-input">
    </div>
     <div class="layui-inline">
      <input style="width: 100px;" type="text" name="yangjian_laiyuan_1" id="" placeholder="样品来源" autocomplete="off" class="layui-input">
    </div>
        <div class="layui-inline">
      <input style="width: 100px;" type="text" name="yangjian_picihao_1" id="" placeholder="样品批次号" autocomplete="off" class="layui-input">
    </div>
    <div class="layui-inline">
      <input style="width: 100px;" type="text" name="jinmo_shijian_1" id="" placeholder="浸没时间(h)" autocomplete="off" class="layui-input">
    </div>
    <div class="layui-inline">
      <input style="width: 100px;" type="text" name="zhongliang_jinmoqian_1" id="" placeholder="浸没前质量(g)" autocomplete="off" class="layui-input">
    </div>
    <div class="layui-inline">
      <input style="width: 100px;" type="text" name="zhongliang_jinmohou_1" id="" placeholder="去除腐蚀产物后质量(g)" autocomplete="off" class="layui-input">
    </div>
    <div class="layui-inline">
      <input style="width: 100px;" type="text" name="shizhongliang_1" id="" placeholder="失重量(g)" autocomplete="off" class="layui-input">
    </div>
    <div class="layui-inline">
      <input style="width: 100px;" type="text" name="pingjun_fushi_sulv_1" id="" placeholder="平均腐蚀速率" autocomplete="off" class="layui-input">
    </div>
    <div class="layui-inline">
      <input style="width: 300px;" type="text" name="beizhu_1" id="" placeholder="备注" autocomplete="off" class="layui-input">
    </div>
  </div>

     <div class="layui-form-item">

    <div id="container" style="margin-top: 10px;"></div>
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
    var today = new Date();
    

	
form.on('submit(demo1)', function(data){
    var field = data.field; // 获取表单字段值
    var php_baogao_bianhao = field.baogao_bianhao;
    // 显示填写结果，仅作演示用
		
	$.post('../action/add_immercorro_action.php', JSON.stringify(data.field), function(res){
      // 处理PHP脚本返回的结果
      if(res.code=='0'){
            alert("数据新增成功");
            window.location.href = "./report_img_upload_immercorro.php?baogao_bianhao="+php_baogao_bianhao;
        }
    }, 'json');
    return false; // 阻止默认 form 跳转
  });
	
 

    
    
  // 日期
  laydate.render({
    elem: '#songjian_riqi',
       value: today // 设置默认值为今天
  });
    laydate.render({
    elem: '#shiyan_riqi',
       value: today // 设置默认值为今天
  });
laydate.render({
    elem: '#baogao_riqi',
       value: today // 设置默认值为今天
  });
    
    
     
});
     var count = 1;
document.getElementById('addElements').addEventListener('click', function() {
   
   count++; 
    
  var outerDiv = document.createElement('div');
  outerDiv.className = 'layui-form-item';
 
 
  var input1 = document.createElement('input');
  input1.type = 'text';
  input1.name= 'yangjian_bianhao_'+count;
  input1.className = 'layui-input';
  input1.style = 'width:100px;margin-left:110px; '
  input1.placeholder = '样品编号';
    
  var input2 = document.createElement('input');
  input2.type = 'text';
  input2.name= 'yangjian_mingcheng_'+count;
  input2.className = 'layui-input';
  input2.style = 'width:105px; '
  input2.placeholder = '样品名称';

  var input3 = document.createElement('input');
  input3.type = 'text';
  input3.name= 'yangjian_leixing_'+count;
  input3.className = 'layui-input';
  input3.style = 'width:105px; '
  input3.placeholder = '样品类型';
    
  var input4 = document.createElement('input');
  input4.type = 'text';
  input4.name= 'yangjian_guige_'+count;
  input4.className = 'layui-input';
  input4.style = 'width:105px; '
  input4.placeholder = '样品规格';  
    
  var input5 = document.createElement('input');
  input5.type = 'text';
  input5.name= 'yangjian_laiyuan_'+count;
  input5.className = 'layui-input';
  input5.style = 'width:100px; '
  input5.placeholder = '样品来源'; 
    
 var input6 = document.createElement('input');
  input6.type = 'text';
  input6.name= 'yangjian_picihao_'+count;
  input6.className = 'layui-input';
  input6.style = 'width:105px; '
  input6.placeholder = '样品批次号';    
    
    
  var input7 = document.createElement('input');
  input7.type = 'text';
  input7.name= 'jinmo_shijian_'+count;
  input7.className = 'layui-input';
  input7.style = 'width:105px; '
  input7.placeholder = '浸没时间'; 
    
  var input8 = document.createElement('input');
  input8.type = 'text';
  input8.name= 'zhongliang_jinmoqian_'+count;
  input8.className = 'layui-input';
  input8.style = 'width:105px; '
  input8.placeholder = '浸没前质量(g)'; 
    
  var input9 = document.createElement('input');
  input9.type = 'text';
  input9.name= 'zhongliang_jinmohou_'+count;
  input9.className = 'layui-input';
  input9.style = 'width:105px; '
  input9.placeholder = '去除腐蚀产物后质量(g)'; 

 var input10 = document.createElement('input');
  input10.type = 'text';
  input10.name= 'shizhongliang_'+count;
  input10.className = 'layui-input';
  input10.style = 'width:105px; '
  input10.placeholder = '失重量(g)'; 
    
  var input11 = document.createElement('input');
  input11.type = 'text';
  input11.name= 'pingjun_fushi_sulv_'+count;
  input11.className = 'layui-input';
  input11.style = 'width:105px; '
  input11.placeholder = '平均腐蚀速率'; 
   
  var input12 = document.createElement('input');
  input12.type = 'text';
  input12.name= 'beizhu_'+count;
  input12.className = 'layui-input';
  input12.style = 'width:300px; '
  input12.placeholder = '备注'; 
    
    
    var yangjian_shuliang = document.getElementById('yangjian_shuliang');
    yangjian_shuliang.value=count;
 


 
  // 将 input 添加到对应的 内层DIV 中
 
<?php
    for($i=1;$i<=12;$i++){
        
       echo "var innerDiv$i = document.createElement('div');

  innerDiv$i.className = 'layui-inline';";
 
        
   echo "innerDiv$i.appendChild(input$i);
  outerDiv.appendChild(innerDiv$i);";}
    ?>
  
    


    
  // 将外层 DIV 添加到容器中
  document.getElementById('container').appendChild(outerDiv);
 
});
</script>
</body>
</html>
