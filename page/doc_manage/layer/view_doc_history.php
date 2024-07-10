<!DOCTYPE html>
<html lang="en">
<head>
    <?php
    require_once '../dbconfig_doc.php';
    $doc_number=$_GET['doc_number'];
    $sql="SELECT * FROM doc WHERE doc_number = '$doc_number' AND is_effective='n' ORDER BY doc_number";
    $result=mysql_query($sql);
   
    ?>
<link href="../../../assets/css/layui.css" rel="stylesheet">
  <script src="../../../assets/js/layui.js"></script>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<table class="layui-table">
    <tr>
    <td>序号</td>    
   
   
        <td>版本</td>
        <td>作废日期</td>
       
      
        
    </tr>
<?php
$i=1;
 while ( $row = mysql_fetch_array( $result ) ) {
echo "<tr>";
echo "<td>$i</td>";
echo "<td><a target=_blank href=.".$row['dir'].">".$row['doc_version']."</a></td>";
echo "<td>".$row['nullify_date']."</td>";
$i++;

 }
?>
    
    
</body>
</html>