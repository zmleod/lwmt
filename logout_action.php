
<!DOCTYPE html>
<html>

<head>
  <meta charset="UTF-8">
  <title>数据管理</title>
  <script src="./assets/js/jquery.js"></script>
  <link rel="stylesheet" href="./assets/css/layui.css">
  <script src="./assets/js/layui.js"></script>
  <style> /* 弹窗主题 */

.pwd_wrong.layui-layer-title{background-color: #EDEFF2;}
.pwd_wrong .layui-layer-btn{padding: 5px 10px 10px;}
.pwd_wrong .layui-layer-btn a{background: #fff; border-color: #E9E7E7; color: #333;}
.pwd_wrong .layui-layer-btn .layui-layer-btn0{border-color: #FA584D; background-color: #FA584D; color: #fff;}
</style>
</head>
<?php
setcookie("lwmt_dm", "", time() - 3600);
setcookie("lwmt_dm", null);
setcookie('lwmt_dm','',0); //好像是这个能用
echo "<script>
   
layui.use(['element', 'layer', 'util'], function() {
  
  var layer = layui.layer;
 


 

        layer.alert('已退出登录', {
          title: 'LWMT',
          closeBtn: 0, 
          btn: ['确定'],
          yes: function() {
           
            location.href = 'index.php';
          },
          skin: 'pwd_wrong' 

        });





 
});
</script>";

?>

