<link href="../../../assets/css/layui.css" rel="stylesheet">
<script src="../../../assets/js/layui.js"></script> 
<script>
    var index = parent.layer.getFrameIndex(window.name); 
</script>
<?php

require_once '../dbconfig_ansys.php';
mysql_select_db('user');
$username = $_COOKIE['lwmt_dm'];
$id=$_GET['id'];
$user_db="all_by_batch_".$username;
$sql = "DELETE FROM $user_db WHERE id = '$id' ";
    
$result=mysql_query($sql);
	if($result){
        echo "<script> window.parent.location.reload();</script>";//刷新父页面
        //   echo "<script>  parent.layer.close(index);</script>";
    }
?>
</table>
</body>
</html>
