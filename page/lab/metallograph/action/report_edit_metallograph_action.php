<?php

require_once '../../dbconfig_lab.php';


$jsonData = file_get_contents("php://input");
$jsonObj = json_decode($jsonData,true);
   
$baogao_bianhao=$jsonObj['baogao_bianhao'];
    	$songjian_riqi=$jsonObj['songjian_riqi'];
    	$jianyan_riqi=$jsonObj['jianyan_riqi'];
    	$baogao_riqi=$jsonObj['baogao_riqi'];
    	$yangjian_mingcheng=$jsonObj['yangjian_mingcheng'];
    	$yangjian_leixing=$jsonObj['yangjian_leixing'];
    	$yangjian_guige=$jsonObj['yangjian_guige'];
    	$yangjian_shuliang=$jsonObj['yangjian_shuliang'];
    	$yangjian_laiyuan=$jsonObj['yangjian_laiyuan'];
    	$yangjian_picihao=$jsonObj['yangjian_picihao'];
    	$weituo_ren=$jsonObj['weituo_ren'];
    	$weituo_danhao=$jsonObj['weituo_danhao'];
    	$quyang_fangxiang=$jsonObj['quyang_fangxiang'];
    	$jianyan_biaozhun=$jsonObj['jianyan_biaozhun'];
    	$jianyan_shebei=$jsonObj['jianyan_shebei'];
    
    	$cb_jinglidu=$jsonObj['cb_jinglidu'];
    	$cb_dierxiang=$jsonObj['cb_dierxiang'];
    	$cb_jiazha_qikong=$jsonObj['cb_jiazha_qikong'];
    	$cb_houdu=$jsonObj['cb_houdu'];
    	$cb_xijingqu=$jsonObj['cb_xijingqu'];
       $jianyan_xiangmu="|".$cb_jinglidu."|".$cb_dierxiang."|".$cb_jiazha_qikong."|".$cb_houdu."|".$cb_xijingqu; 
$fenxi_panding=$jsonObj['fenxi_panding'];

for ( $i = 1; $i <= $yangjian_shuliang; $i++ ) {
    $yangjian_bianhao_id = "yangjian_bianhao_" . $i;
    $beizhu_id = "beizhu_" . $i;
    $id_id = "id_" . $i;
    
    
    $yangjian_bianhao = $jsonObj[ $yangjian_bianhao_id ];
    $beizhu = $jsonObj[ $beizhu_id ];
    $id = $jsonObj[ $id_id ];


$sql = "UPDATE metallograph_exp SET songjian_riqi = '$songjian_riqi',
jianyan_riqi = '$jianyan_riqi',
baogao_riqi = '$baogao_riqi',
yangjian_mingcheng = '$yangjian_mingcheng',
yangjian_leixing = '$yangjian_leixing',
yangjian_guige = '$yangjian_guige',
yangjian_shuliang = '$yangjian_shuliang',
yangjian_laiyuan = '$yangjian_laiyuan',
yangjian_picihao = '$yangjian_picihao',
weituo_ren = '$weituo_ren',
weituo_danhao = '$weituo_danhao',
quyang_fangxiang = '$quyang_fangxiang',
jianyan_biaozhun = '$jianyan_biaozhun',
jianyan_shebei = '$jianyan_shebei',
jianyan_xiangmu = '$jianyan_xiangmu',
fenxi_panding='$fenxi_panding',
yangjian_bianhao='$yangjian_bianhao',
beizhu='$beizhu' where id = '$id' ";
    
$result=mysql_query($sql);
	
		
}
 echo json_encode(array("message" =>'数据编辑成功', "code" => 0));
?>