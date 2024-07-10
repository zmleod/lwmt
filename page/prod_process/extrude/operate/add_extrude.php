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
  <legend>挤出数据填报</legend>
</fieldset>
<form class="layui-form"  action="">
  <div class="layui-form-item">
    <label class="layui-form-label">填表人</label>
    <div class="layui-input-block">
      <input type="radio" name="jichu_tianbiaoren" value="林德文" title="林德文"  checked>
      <input type="radio" name="jichu_tianbiaoren" value="鄢锐" title="鄢锐">
      <input type="radio" name="jichu_tianbiaoren" value="梁国军" title="梁国军" >
    </div>
  </div>
    
  <div class="layui-form-item">
    <label class="layui-form-label">参与人</label>
    <div class="layui-input-block">
      <input type="text" name="jichu_canyuren" placeholder="参与人" autocomplete="off" class="layui-input" lay-verify="required" >
    </div>
  </div>

 <!-- <div class="layui-form-item">
    <label class="layui-form-label">前序工艺</label>
    <div class="layui-input-block">
      <select name="laiyuan_daima">
        <option value="cn_040">压坯</option>
        <option value="其它选项联系管理员更改">其它选项联系管理员更改</option>
       </select>
    </div>
  </div>-->
    
 <div class="layui-form-item">
    <label class="layui-form-label">前序批次号(主要)</label>
    <div class="layui-input-block">
      <input type="text" name="laiyuan_picihao" placeholder="如：YD01-240503-01，其中YD为压锭工序号，01为压锭设备号，240503为生产日期，01为顺序号" autocomplete="off" class="layui-input" lay-verify="required" >
    </div>
  </div>
      <div class="layui-form-item">
    <label class="layui-form-label">前序批次号(补充)</label>
    <div class="layui-input-block">
      <input type="text" name="laiyuan_picihao_add" placeholder="如：YD01-240503-02、03；YD01-240326-01、02。" autocomplete="off" class="layui-input" lay-verify="required" >
    </div>
  </div>
    
      <div class="layui-form-item">
    <div class="layui-inline">
      <label class="layui-form-label">挤出设备</label>
        <div class="layui-input-block">
      <select name="jichu_shebei" id="jichu_shebei"  lay-filter="jichu_shebei">
        <option value="01">1#</option>
        <option value="02">2#</option>
       </select>
    </div>
    </div>
    <div class="layui-inline">
      <label class="layui-form-label">挤出日期</label>
    <div class="layui-input-inline layui-input-wrap">
      <div class="layui-input-prefix"> <i class="layui-icon layui-icon-date"></i> </div>
      <input type="text" name="jichu_riqi" id="jichu_riqi" placeholder="" autocomplete="off" class="layui-input">
    </div>
    </div>
    <div class="layui-inline">
     <label class="layui-form-label">挤出批次号</label>
    <div class="layui-input-block">
      <input type="text" name="jichu_picihao" id="jichu_picihao" placeholder="" autocomplete="off" class="layui-input">
    </div>
  </div>
  </div>
    
     
     <div class="layui-form-item">
    <label class="layui-form-label">牌号</label>
    <div class="layui-input-block">
      <input type="text" name="jichu_paihao" placeholder="" autocomplete="off" class="layui-input" lay-verify="required" >
    </div>
 </div> 
 
    
  <div class="layui-form-item">
    <label class="layui-form-label">挤出目的</label>
    <div class="layui-input-block">
      <input type="checkbox" name="jichu_mudi_1" value="工艺验证" title="工艺验证" checked>
      <input type="checkbox" name="jichu_mudi_2" value="客户样品" title="客户样品">
      <input type="checkbox" name="jichu_mudi_3" value="量产" title="量产">   
    </div>
  </div>



    
  <div class="layui-form-item">
    <label class="layui-form-label">是否小挤压</label>
    <div class="layui-input-block">
      <input type="radio" name="jichu_xiaojichu" value="小挤压" title="是"  checked>
      <input type="radio" name="jichu_xiaojichu" value="非小挤压" title="否" >
    </div>
  </div>    
    
  <div class="layui-form-item">
    <label class="layui-form-label">加热方式</label>
    <div class="layui-input-block">
      <select name="jichu_jiarefangshi">
        <option value="中频">中频</option>
        <option value="电阻">电阻</option>
     
       </select>
    </div>
  </div>
    
     <div class="layui-form-item">
    <label class="layui-form-label">坯料重量/数量</label>
    <div class="layui-input-block">
      <input type="text" name="jichu_piliaozhongliang_shuliang" placeholder="坯料数量/重量" autocomplete="off" class="layui-input" lay-verify="required" >
    </div>
 </div> 
  <div class="layui-form-item">
    <label class="layui-form-label">材料温度</label>
    <div class="layui-input-block">
      <input type="number" name="jichu_cailiaowendu" placeholder="材料温度(℃)" autocomplete="off" class="layui-input" lay-verify="required" >
    </div>
  </div>    
    
  <div class="layui-form-item">
    <label class="layui-form-label">保温时间</label>
    <div class="layui-input-block">
      <input type="number" name="jichu_baowenshijian" placeholder="保温时间(min)" autocomplete="off" class="layui-input">
    </div>
  </div>      

  <div class="layui-form-item">
    <label class="layui-form-label">料胆温度</label>
    <div class="layui-input-block">
      <input type="number" name="jichu_liaodanwendu" placeholder="料胆温度(℃)" autocomplete="off" class="layui-input" lay-verify="required" >
    </div>
  </div>      
    
 <div class="layui-form-item">
    <label class="layui-form-label">模具温度</label>
    <div class="layui-input-block">
      <input type="number" name="jichu_mujuwendu" placeholder="模具温度(℃)" autocomplete="off" class="layui-input" lay-verify="required" >
    </div>
 </div>   
    
 <div class="layui-form-item">
    <label class="layui-form-label">挤出垫温度</label>
    <div class="layui-input-block">
      <input type="number" name="jichu_jichudianwendu" placeholder="挤出垫温度(℃)" autocomplete="off" class="layui-input">
    </div>
 </div> 
    
<div class="layui-form-item">
    <label class="layui-form-label">挤出口温度</label>
    <div class="layui-input-block">
      <input type="number" name="jichu_jichukouwendu" placeholder="挤出口温度(℃)" autocomplete="off" class="layui-input">
    </div>
 </div>   
    
 <div class="layui-form-item">
    <label class="layui-form-label">启动压力</label>
    <div class="layui-input-block">
      <input type="number" name="jichu_qidongyali" placeholder="启动压力(MPa)" autocomplete="off" class="layui-input" lay-verify="required" >
    </div>
 </div> 
    
  <div class="layui-form-item">
    <label class="layui-form-label">稳定压力</label>
    <div class="layui-input-block">
      <input type="number" name="jichu_wendingyali" placeholder="稳定压力(MPa)" autocomplete="off" class="layui-input" lay-verify="required" >
    </div>
 </div>    
    
  <div class="layui-form-item">
    <label class="layui-form-label">挤出速度</label>
    <div class="layui-input-block">
      <input type="number" name="jichu_jichusudu" placeholder="挤出速度(m/min)" autocomplete="off" class="layui-input">
    </div>
 </div>    
    
 <div class="layui-form-item">
    <label class="layui-form-label">料胆规格</label>
    <div class="layui-input-block">
      <input type="text" name="jichu_liaodanguige" placeholder="料胆规格" autocomplete="off" class="layui-input" lay-verify="required" >
    </div>
 </div> 
    
 <div class="layui-form-item">
    <label class="layui-form-label">模具出口规格</label>
    <div class="layui-input-block">
      <input type="text" name="jichu_mujuchukouguige" placeholder="模具出口规格" autocomplete="off" class="layui-input" lay-verify="required" >
    </div>
 </div> 
    
  <div class="layui-form-item">
    <label class="layui-form-label">坯料真空脱气</label>
    <div class="layui-input-block">
      <input type="text" name="jichu_piliaozhenkongtuoqi" placeholder="坯料真空脱气" autocomplete="off" class="layui-input" lay-verify="required" >
        </div>
  </div>  


    
    <div class="layui-form-item">
    <label class="layui-form-label">挤出重量</label>
    <div class="layui-input-block">
      <input type="text" name="jichu_jichu_zhongliang" placeholder="" autocomplete="off" class="layui-input" lay-verify="required" >
    </div>
 </div> 

    
  
  <div class="layui-form-item layui-form-text">
    <label class="layui-form-label">备注</label>
    <div class="layui-input-block">
      <textarea name = "jichu_beizhu" placeholder="结果、问题或其它需要补充的信息" class="layui-textarea"></textarea>
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
		
	$.post('../action/add_extrude_action.php', JSON.stringify(data.field), function(res){
      // 处理PHP脚本返回的结果
      if(res.code=='0'){
            alert("数据新增成功");
            window.location.href = "../index_extrude.php";
        }
    }, 'json');
    return false; // 阻止默认 form 跳转
  });
	
 

    
    
     
  // 日期
  laydate.render({
    elem: '#jichu_riqi',
       value: today // 设置默认值为今天
       ,done: function(value, date, endDate){
      // 当日期改变时，更新其他文本框的值
           value = value.substring(2);//去掉前两位
      value  = value .replace(/-/g, "");//f去掉“-”
       document.getElementById('jichu_picihao').value ='JC'+document.getElementById('jichu_shebei').value+'-'+value +'-' ; 
    }
  });
    
    
    form.on('select(jichu_shebei)', function(data){
    var select_value = data.value; // 获取下拉框选中的值
    var date_value =  document.getElementById('jichu_riqi').value; //获取日期值准备格式化
      date_value = date_value.substring(2);//去掉前两位
      date_value  = date_value .replace(/-/g, "");//f去掉“-”
      
    document.getElementById('jichu_picihao').value ='JC'+select_value+'-'+date_value +'-' ; // 将值设置到文本框
  });

    
  
});
var jichu_shebei=document.getElementById('jichu_shebei').value;
    let date = new Date();
let formattedDate = date.toISOString().slice(2, 10).replace(/-/g, '')
    
    document.getElementById('jichu_picihao').value='JC01-'+formattedDate+'-';
    </script>
</body>
</html>
