<html>
    <?php
    $progress_id=$_GET['progress_id'];
    $project_id=$_GET['project_id'];
    ?>
<body>

<button id="addElements">加一个文件</button>
<link href="../../../assets/css/layui.css" rel="stylesheet"   media="all">
<script src="../../../assets/js/layui.js"></script> 
<script src="../../../assets/js/jquery.min.js"></script>
<form action="../action/add_file_action.php" method="post" enctype="multipart/form-data">
  <input type="text" name="progress_id" value="<? echo $progress_id;?>" hidden="true">.
  <input type="text" name="project_id" value="<? echo $project_id;?>" hidden="true">
  <div class="layui-form-item" style="margin-top: 10px;">
    <div class="layui-inline">
      <input type="file" class= "layui-input" style="width:350px;margin-left:110px;" name="file_1" />
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
 
 

 
  var input1 = document.createElement('input');
  input1.type = 'file';

  input1.name= 'file_'+count;
  input1.className = 'layui-input';
  input1.style = 'width:350px;margin-left:110px; '
  


 
  // 内层 DIV
  var innerDiv1 = document.createElement('div');

  innerDiv1.className = 'layui-inline';


 
  // 将 input 添加到对应的 内层DIV 中
 
  innerDiv1.appendChild(input1);
  outerDiv.appendChild(innerDiv1);
    
    


    
  // 将外层 DIV 添加到容器中
  document.getElementById('container').appendChild(outerDiv);
 
});
</script>
</html>