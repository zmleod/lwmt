<style>
  .pre-line {
   	white-space: pre-line;
  }
  p {
    line-height: 2.5;
  }

</style>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  

<?
require_once '../dbconfig_qm_sys.php';
$id=$_GET['id'];

$query = "SELECT * FROM guocheng_qingdan WHERE id='$id'";
 
// 执行查询
$result = mysql_query($query);
$row = mysql_fetch_array($result);
echo "<title>".$row['tiaokuan']."_".$row['tiaokuan_biaoti']."</title>
</head>
<body>";
echo "<div style=\"display: flex; justify-content: center;\"><p class=pre-line>".$row['tiaokuan_neirong']."</p></div>";

?>

  
</body>
</html>