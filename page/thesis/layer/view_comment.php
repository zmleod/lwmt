<!DOCTYPE html>
<html lang="en">
<head>
<?php
    require_once '../dbconfig_thesis.php';
    $id=$_GET['id'];
    $sql="SELECT * FROM thesis_comment WHERE thesis_id = '$id' ORDER BY id DESC";
    $result=mysql_query($sql);
   
    ?>
<link href="../../../assets/css/layui.css" rel="stylesheet">
  <script src="../../../assets/js/layui.js"></script>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>


    <?php
$i=1;
 while ( $row = mysql_fetch_array( $result ) ) {




echo '<div class="layui-timeline-item">
    <i class="layui-icon layui-timeline-axis"></i>
    <div class="layui-timeline-content layui-text">
      <h4 class="layui-timeline-title">'.$row['comment_person'].'发表于'.$row['comment_date'].':</h4>
      <p>'.$row['comment_content'].'</p>
    
    </div>
  </div>';

$i++;

 }
?>

   
</body>
</html>