<?php
$zhazhi_picihao = $_GET['picihao'];
$shiyang_bianhao = $_GET['shiyang_bianhao'];

require_once '../../dbconfig_prod_process.php';


$sql = "SELECT * FROM prod_process_rolling WHERE zhazhi_picihao='$zhazhi_picihao' AND shiyang_bianhao='$shiyang_bianhao' ORDER BY id DESC LIMIT 1";
$result = mysql_query($sql);
$row = mysql_fetch_array($result);

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="../../../../assets/css/layui.css" rel="stylesheet">
<script src="../../../../assets/js/layui.js"></script> 
<style>
    
.my-center-div {
  margin: 0 auto;
  max-width: 600px; /* 根据需要设置最大宽度 */
  /* 其他样式 */
}
</style>
</head>
<body>
<div class="layui-btn-container my-center-div">
    <?php 
    echo "<br>";
    echo "<br>";
    echo "<br>";
    echo "当前试样编号：".$row['shiyang_bianhao'];
echo "<br>";
echo "当前道次：".$row['daoci'];
echo "<br>";
?>
<a href="add_rolling_pass.php?zhazhi_picihao=<?php echo $zhazhi_picihao; ?>&shiyang_bianhao=<?php echo $shiyang_bianhao; ?>" class="layui-btn" target="_blank">同试样增加道次</a>

    <br>
    <br>
    <br>
    <a href="add_rolling_sample.php?zhazhi_picihao=<?php echo $zhazhi_picihao; ?>" class="layui-btn layui-btn-warm layui-btn-radius" target="_blank">新增试样</a>
  
    </div>
</body>
</html>