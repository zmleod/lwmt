<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Demo</title>
<!-- 请勿在项目正式环境中引用该 layui.css 地址 -->
<link href="../../../../assets/css/layui.css" rel="stylesheet"   media="all">
<script src="../../../../assets/js/layui.js"></script> 
<script src="../../../../assets/js/jquery.min.js"></script>
</head>
<body>
<fieldset class="layui-elem-field layui-field-title">
  <legend>金相检验-新增数据</legend>
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
      <label class="layui-form-label">检验日期</label>
      <div class="layui-input-inline layui-input-wrap">
        <div class="layui-input-prefix"> <i class="layui-icon layui-icon-date"></i> </div>
        <input type="text" name="jianyan_riqi" id="jianyan_riqi" placeholder="yyyy-MM-dd" autocomplete="off" class="layui-input">
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
      <label class="layui-form-label">样品名称</label>
      <input style="width: 190px;" type="text" name="yangjian_mingcheng" id="" placeholder="" autocomplete="off" class="layui-input">
    </div>
    <div class="layui-inline">
      <label class="layui-form-label">样品类型</label>
      <input style="width: 200px;" type="text" name="yangjian_leixing" id="" placeholder="" autocomplete="off" class="layui-input">
    </div>
    <div class="layui-inline">
      <label class="layui-form-label">样品规格</label>
      <input style="width: 200px;" type="text" name="yangjian_guige" id="" placeholder="" autocomplete="off" class="layui-input">
    </div>
  </div>
  <div class="layui-form-item">
    <div class="layui-inline">
      <label class="layui-form-label">样品数量</label>
      <input style="width: 190px;" type="text" name="yangjian_shuliang" value="1" id="yangjian_shuliang" placeholder="" autocomplete="off" class="layui-input">
    </div>
    <div class="layui-inline">
      <label class="layui-form-label">样品来源</label>
      <input style="width: 200px;" type="text" name="yangjian_laiyuan" id="" placeholder="" autocomplete="off" class="layui-input">
    </div>
    <div class="layui-inline">
      <label class="layui-form-label">批次号</label>
      <input style="width: 200px;" type="text" name="yangjian_picihao" id="" placeholder="" autocomplete="off" class="layui-input">
    </div>
  </div>
  <div class="layui-form-item">
    <div class="layui-inline">
      <label class="layui-form-label">委托人</label>
      <input style="width: 190px;" type="text" name="weituo_ren" id="" placeholder="" autocomplete="off" class="layui-input">
    </div>
    <div class="layui-inline">
      <label class="layui-form-label">委托单号</label>
      <input style="width: 200px;" type="text" name="weituo_danhao" id="" placeholder="" autocomplete="off" class="layui-input">
    </div>
    <div class="layui-inline">
      <label class="layui-form-label">取样方向</label>
      <input style="width: 200px;" type="text" name="quyang_fangxiang" id="" placeholder="" autocomplete="off" class="layui-input">
    </div>
  </div>
  <div class="layui-form-item">
    <div class="layui-inline">
      <label class="layui-form-label">检验标准</label>
      <input style="width: 515px;" type="text" name="jianyan_biaozhun" id="" value="GB/T 4296-2022 变形镁合金显微组织检验方法" placeholder="" autocomplete="off" class="layui-input">
    </div>
    <div class="layui-inline">
      <label class="layui-form-label">检验设备</label>
      <input style="width: 200px;" type="text" name="jianyan_shebei" id="" placeholder="" autocomplete="off" class="layui-input">
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
     
          <textarea name="fenxi_panding" placeholder="" class="layui-textarea"></textarea>
      
    </div>
  </div>

   <div  class="layui-form-item">
    <div class="layui-inline">
 <label class="layui-form-label">试样：</label>
      <input style="width: 100px;" type="text" name="yangjian_bianhao_1" id="yangjian_bianhao_1" placeholder="试样编号" autocomplete="off" class="layui-input">
    </div>
   
    <div class="layui-inline">
 
      <input style="width: 350px;" type="text" name="beizhu_1" id="beizhu_1" placeholder="备注" autocomplete="off" class="layui-input">
    </div>
  </div> 
       <div class="layui-form-item">

    <div id="container" style="margin-top: 10px;"></div>
  </div> 
   
 
  <div class="layui-form-item">
   
    <div class="layui-input-block">
      <button type="submit" class="layui-btn" lay-submit lay-filter="demo1">提交</button>

  </div>
      
</form>
 
    <script>
layui.use(function(){
  var form = layui.form;
  var layer = layui.layer;
  var laydate = layui.laydate;
 
    var $ = layui.jquery;
    var today = new Date();
    
    

	
form.on('submit(demo1)', function(data){
    var field = data.field; // 获取表单字段值
    var php_baogao_bianhao = field.baogao_bianhao;
    // 显示填写结果，仅作演示用
		
	$.post('../action/add_metallograph_action.php', JSON.stringify(data.field), function(res){
      // 处理PHP脚本返回的结果
      if(res.code=='0'){
            alert("数据新增成功");
            window.location.href = "./report_img_upload_metallograph.php?baogao_bianhao="+php_baogao_bianhao;
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
    elem: '#jianyan_riqi',
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
  input1.placeholder = '试样编号';
 
  var input2 = document.createElement('input');
  input2.type = 'text';
  input2.name= 'beizhu_'+count;
  input2.className = 'layui-input';
  input2.style = 'width:350px;'
  input2.placeholder = '备注';

var yangjian_shuliang = document.getElementById('yangjian_shuliang');
    yangjian_shuliang.value=count;
 
  // 内层 DIV
  var innerDiv1 = document.createElement('div');

  innerDiv1.className = 'layui-inline';
  var innerDiv2 = document.createElement('div');

  innerDiv2.className = 'layui-inline';

 
  // 将 input 添加到对应的 内层DIV 中
 
  innerDiv1.appendChild(input1);
  outerDiv.appendChild(innerDiv1);
    
    
  innerDiv2.appendChild(input2);
  outerDiv.appendChild(innerDiv2);


    
  // 将外层 DIV 添加到容器中
  document.getElementById('container').appendChild(outerDiv);
 
});
</script>

</body>
</html>
