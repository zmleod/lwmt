<!DOCTYPE html>
<html lang="en">
<head>


<?php
    require_once '../dbconfig_thesis.php';

    if (!isset($_COOKIE['lwmt_dm'])) {
      die("没有登录");
     
 } 

 if (isset($_COOKIE['lwmt_dm'])) {
  $username=$_COOKIE['lwmt_dm'];


  $db_user = array (
		'server' => 'localhost',
		'port' => '3306',
		'username' => 'root',
		'password' => '123456',
		'database' => 'user' 
);

$conn_user = @mysql_connect($db_user['server'].':'.$db_user['port'],$db_user['username'],$db_user['password']);
mysql_set_charset('utf8', $conn_user);
// 选择数据库
mysql_select_db($db_user['database'], $conn_user);

$sql="SELECT * FROM user WHERE username = '$username'";
$result=mysql_query($sql);
$row=mysql_fetch_array($result);

$comment_person=$row['realname'];



 }
    $id=$_GET['id'];
 
    $result=mysql_query($sql);
   
    ?>
<link href="../../../assets/css/layui.css" rel="stylesheet">
  <script src="../../../assets/js/layui.js"></script>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<form class="layui-form" action="">
 

 <div class="layui-form-item">

   <div class="layui-input-block">
     <input type="text" style="display: none;" name="riqi" id="riqi" placeholder="" autocomplete="off" class="layui-input">
   </div>
 </div>

 <div class="layui-form-item">

   <div class="layui-input-block">
     <input type="text" style="display: none;" name="thesis_id" id="thesis_id" value="<?php echo $id;?>"  autocomplete="off" class="layui-input">
   </div>
 </div>

 <div class="layui-form-item">
 
   <div class="layui-input-block">
     <input type="text" style="display: none;" name="comment_person" id="comment_person" value="<?php echo $comment_person;?>"  autocomplete="off" class="layui-input">
   </div>
 </div>









 <div class="layui-form-item layui-form-text">
   <label class="layui-form-label">留言内容</label>
   <div class="layui-input-block">
     <textarea name="comment_content" placeholder="" class="layui-textarea"></textarea>
   </div>
 </div>
 <div class="layui-form-item">
   <div class="layui-input-block">
     <button type="submit" class="layui-btn" lay-submit lay-filter="demo1">提交</button>
   </div>
 </div>
</form>



   
</body>

<script>
    layui.use(function() {
      var form = layui.form;
      var layer = layui.layer;
      var laydate = layui.laydate;
      var util = layui.util;
      var $ = layui.jquery;
      var today = new Date();


      form.on('submit(demo1)', function(data) {
        var field = data.field; // 获取表单字段值
        // 显示填写结果，仅作演示用

        $.post('../action/add_comment_action.php', JSON.stringify(data.field), function(res) {
          // 处理PHP脚本返回的结果
          if (res.code == '0') {
            alert("留言已发布");
            window.location.href = "view_comment.php?id="+document.getElementById('thesis_id').value;
          }
        }, 'json');
        return false; // 阻止默认 form 跳转
      });





      // 日期
      laydate.render({
        elem: '#riqi',
        value: today,
        // 设置默认值为今天
          
      });





    });

  </script>
</html>