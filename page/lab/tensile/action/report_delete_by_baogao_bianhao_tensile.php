<?php
require_once '../../dbconfig_lab.php';


$baogao_bianhao=$_GET["baogao_bianhao"];

$sql_1="DELETE FROM tensile_exp where baogao_bianhao='$baogao_bianhao'";
$sql_2="DELETE FROM tensile_exp_img where baogao_bianhao='$baogao_bianhao'";

$result_1=mysql_query($sql_1);
$result_2=mysql_query($sql_2);

	if($result_1 && $result_2){
		echo "<script>
 alert('报告删除完成');
 window.parent.location.reload();//刷新父页面
</script>";

    }
else
{echo "??";}

	
        ?>