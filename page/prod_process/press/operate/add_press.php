<!DOCTYPE html>
<html>
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
  <legend>压锭数据填报</legend>
</fieldset>
<form class="layui-form"  action="">
  <div class="layui-form-item">
    <label class="layui-form-label">填表人</label>
    <div class="layui-input-block">
         <input type="radio" name="yading_tianbiaoren" value="鄢锐" title="鄢锐"  checked>
        <input type="radio" name="yading_tianbiaoren" value="林德文" title="林德文">
      <input type="radio" name="yading_tianbiaoren" value="梁国军" title="梁国军" >
    </div>
  </div>
    
  <div class="layui-form-item">
    <label class="layui-form-label">参与人</label>
    <div class="layui-input-block">
      <input type="text" name="yading_canyuren" placeholder="" autocomplete="off" class="layui-input">
    </div>
  </div>
<!--
  <div class="layui-form-item">
    <label class="layui-form-label">前序工艺</label>
    <div class="layui-input-block">
      <select name="laiyuan_daima">
        <option value="cn_030">造粒</option>
        <option value="其它选项联系管理员更改">其它选项联系管理员更改</option>
       </select>
    </div>
  </div>
    -->
 <div class="layui-form-item">
    <label class="layui-form-label">前序批次号(主要)</label>
    <div class="layui-input-block">
      <input type="text" name="laiyuan_picihao" placeholder="如：HB01-240503-01，其中HB为甩带工序号，如果不是甩带先问再填" autocomplete="off" class="layui-input">
    </div>
  </div>
     <div class="layui-form-item">
    <label class="layui-form-label">前序批次号(补充)</label>
    <div class="layui-input-block">
      <input type="text" name="laiyuan_picihao_add" placeholder="" autocomplete="off" class="layui-input">
    </div>
  </div>

    
      <div class="layui-form-item">
    <div class="layui-inline">
      <label class="layui-form-label">压锭设备</label>
        <div class="layui-input-block">
      <select name="yading_shebei" id="yading_shebei"  lay-filter="yading_shebei">
        <option value="01">1#</option>
        <option value="02">2#</option>
       </select>
    </div>
    </div>
    <div class="layui-inline">
      <label class="layui-form-label">压锭日期</label>
    <div class="layui-input-inline layui-input-wrap">
      <div class="layui-input-prefix"> <i class="layui-icon layui-icon-date"></i> </div>
      <input type="text" name="yading_riqi" id="yading_riqi" placeholder="" autocomplete="off" class="layui-input">
    </div>
    </div>
    <div class="layui-inline">
     <label class="layui-form-label">压锭批次号</label>
    <div class="layui-input-block">
      <input type="text" name="yading_picihao" id="yading_picihao" placeholder="" autocomplete="off" class="layui-input">
    </div>
  </div>
  </div>
   

     
  
 <div class="layui-form-item">
    <label class="layui-form-label">牌号</label>
    <div class="layui-input-block">
      <input type="text" name="yading_paihao" placeholder="" autocomplete="off" class="layui-input">
    </div>
 </div>    

    <div class="layui-form-item">
    <label class="layui-form-label">规格</label>
    <div class="layui-input-block">
      <input type="text" name="yading_guige_1" placeholder="" autocomplete="off" class="layui-input">
    </div>
 </div>    
 
 <div class="layui-form-item">
    <label class="layui-form-label">重量(Kg)</label>
    <div class="layui-input-block">
      <input type="number" name="yading_zhongliang_1" placeholder="" autocomplete="off" class="layui-input">
    </div>
 </div>    
 <div class="layui-form-item">
    <label class="layui-form-label">压锭抽真空时间(min)</label>
    <div class="layui-input-block">
      <input type="number" name="yading_zhenkong_shijian" placeholder="" autocomplete="off" class="layui-input">
    </div>
 </div>   
   <div class="layui-form-item">
    <label class="layui-form-label">真空度</label>
    <div class="layui-input-block">
      <input type="number" name="yading_zhenkongdu" placeholder="" autocomplete="off" class="layui-input">
    </div>
 </div>    
   <div class="layui-form-item">
    <label class="layui-form-label">模具温度(℃)</label>
    <div class="layui-input-block">
      <input type="number" name="yading_mujuwendu" placeholder="" autocomplete="off" class="layui-input">
    </div>
 </div>    
 <div class="layui-form-item">
    <label class="layui-form-label">制锭压力(MPa)</label>
    <div class="layui-input-block">
      <input type="number" name="yading_zhidingyali" placeholder="" autocomplete="off" class="layui-input">
    </div>
 </div>    
     <div class="layui-form-item">
    <label class="layui-form-label">粉锭重量(Kg)</label>
    <div class="layui-input-block">
      <input type="number" name="yading_fending_zhongliang" placeholder="" autocomplete="off" class="layui-input">
    </div>
 </div>    
  <div class="layui-form-item layui-form-text">
    <label class="layui-form-label">备注</label>
    <div class="layui-input-block">
      <textarea name = "yading_beizhu" placeholder="结果、问题或其它需要补充的信息" class="layui-textarea"></textarea>
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
    var today = new Date();

	
form.on('submit(demo1)', function(data){
    var field = data.field; // 获取表单字段值
    // 显示填写结果，仅作演示用
		
	$.post('../action/add_press_action.php', JSON.stringify(data.field), function(res){
      // 处理PHP脚本返回的结果
      if(res.code=='0'){
            alert("数据新增成功");
            window.location.href = "../index_press.php";
        }
    }, 'json');
    return false; // 阻止默认 form 跳转
  });
	
 

    
    
  // 日期
  laydate.render({
    elem: '#yading_riqi',
       value: today // 设置默认值为今天
       ,done: function(value, date, endDate){
      // 当日期改变时，更新其他文本框的值
           value = value.substring(2);//去掉前两位
      value  = value .replace(/-/g, "");//f去掉“-”
       document.getElementById('yading_picihao').value ='YD'+document.getElementById('yading_shebei').value+'-'+value +'-' ; 
    }
  });
    
    
    form.on('select(yading_shebei)', function(data){
    var select_value = data.value; // 获取下拉框选中的值
    var date_value =  document.getElementById('yading_riqi').value; //获取日期值准备格式化
      date_value = date_value.substring(2);//去掉前两位
      date_value  = date_value .replace(/-/g, "");//f去掉“-”
      
    document.getElementById('yading_picihao').value ='YD'+select_value+'-'+date_value +'-' ; // 将值设置到文本框
  });

    
  
});
var yading_shebei=document.getElementById('yading_shebei').value;
    let date = new Date();
let formattedDate = date.toISOString().slice(2, 10).replace(/-/g, '')
    
    document.getElementById('yading_picihao').value='YD01-'+formattedDate+'-';
    </script>
</body>
</html>
