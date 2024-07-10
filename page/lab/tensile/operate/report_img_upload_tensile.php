<html>
    <?php
    $baogao_bianhao=$_GET['baogao_bianhao'];
    ?>
<body>
<a href="javascript:;" onClick="javascript:history.back(-1);" class="layui-btn layui-btn-sm">取消修改</a>
<button class="layui-btn" id="addElements">添加图片</button>
<link href="../../../../assets/css/layui.css" rel="stylesheet"   media="all">
<script src="../../../../assets/js/layui.js"></script> 
<script src="../../../../assets/js/jquery.min.js"></script>
<form action="../action/tensile_report_img_upload_action.php" method="post" enctype="multipart/form-data">
  <input type="text" name="baogao_bianhao" value="<? echo $baogao_bianhao;?>" hidden="true">
  <div class="layui-form-item" style="margin-top: 10px;">
    <div class="layui-inline">
      <input type="file" class= "layui-input" style="width:350px;margin-left:110px;" name="file_1" />
    </div>
    <div class="layui-inline">
      <input type="text" placeholder="图片附加文本" class= "layui-input"   style= "width:300px;" name="text_1">
    </div>
  </div>
  <div id="container" style="margin-top: 10px;"></div>
  <input type="submit" class="layui-btn"  name="submit" value="提交"/>
</form>
</body>
<script>

  var count = 1;
document.getElementById('addElements').addEventListener('click', function() {
   
   count++; 
    
  var outerDiv = document.createElement('div');
  outerDiv.className = 'layui-form-item';
 
 
  var input2 = document.createElement('input');
  input2.type = 'text';
  input2.name= 'text_'+count;
  input2.className = 'layui-input';
  input2.style = 'width:300px;'
  input2.placeholder = '图片附加文本';
 
  var input1 = document.createElement('input');
  input1.type = 'file';

  input1.name= 'file_'+count;
  input1.className = 'layui-input';
  input1.style = 'width:350px;margin-left:110px; '
  


 
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
</html>