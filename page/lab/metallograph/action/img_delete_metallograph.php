<?php
require_once '../../dbconfig_lab.php';


$id=$_GET["id"];
$baogao_bianhao=$_GET["baogao_bianhao"];


$sql="DELETE FROM metallograph_exp_img where id='$id'";


$result=mysql_query($sql);

	if($result){
		echo "<script>
 alert('图片已删除');
            window.location.href = '../operate/report_view_metallograph.php?baogao_bianhao=$baogao_bianhao';
</script>";

    }
else
{echo "??";}

	
        ?>