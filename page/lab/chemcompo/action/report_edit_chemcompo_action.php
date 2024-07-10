<?php

require_once '../../dbconfig_lab.php';


$jsonData = file_get_contents("php://input");
$jsonObj = json_decode($jsonData,true);
    	
        $yangjian_laiyuan=$jsonObj['yangjian_laiyuan'];
        $yangjian_picihao=$jsonObj['yangjian_picihao'];
    
	    $id=$jsonObj['id'];
	    $songjian_riqi=$jsonObj['songjian_riqi'];
	    $jiance_riqi=$jsonObj['jiance_riqi'];
	    $jiance_jigou=$jsonObj['jiance_jigou'];
	    $yangpin_paihao=$jsonObj['yangpin_paihao'];
	    $yangpin_guige=$jsonObj['pangpin_guige'];
	    $yangpin_bianhao=$jsonObj['yangpin_bianhao'];
	    $baogao_bianhao_sanfang=$jsonObj['baogao_bianhao_sanfang'];
        $baogao_bianhao=$jsonObj['baogao_bianhao'];
	    $jiance_chengfen=$jsonObj['jiance_chengfen'];
	    $beizhu=$jsonObj['beizhu'];	
    
        $Mg=$jsonObj['Mg'];	
        $Al=$jsonObj['Al'];	
        $Zn=$jsonObj['Zn'];	
        $Ce=$jsonObj['Ce'];	
        $Cu=$jsonObj['Cu'];	
        $Fe=$jsonObj['Fe'];	
        $Mn=$jsonObj['Mn'];	
        $Ni=$jsonObj['Ni'];	
        $Si=$jsonObj['Si'];	
        $Ca=$jsonObj['Ca'];	
        $Zr=$jsonObj['Zr'];	
        $S=$jsonObj['S'];	
        $Cr=$jsonObj['Cr'];	
        $Be=$jsonObj['Be'];	


$sql = "UPDATE chemcompo_exp SET yangjian_laiyuan = '$yangjian_laiyuan',
yangjian_picihao = '$yangjian_picihao',
songjian_riqi = '$songjian_riqi',
jiance_riqi = '$jiance_riqi',
jiance_jigou = '$jiance_jigou',
yangpin_paihao = '$yangpin_paihao',
yangpin_guige = '$yangpin_guige',
yangpin_bianhao = '$yangpin_bianhao',
baogao_bianhao_sanfang = '$baogao_bianhao_sanfang',
baogao_bianhao = '$baogao_bianhao',
jiance_chengfen = '$jiance_chengfen',
beizhu = '$beizhu',
Mg = '$Mg',
Al = '$Al',
Zn = '$Zn',
Ce = '$Ce',
Cu = '$Cu',
Fe = '$Fe',
Mn = '$Mn',
Ni = '$Ni',
Si = '$Si',
Ca = '$Ca',
Zr = '$Zr',
S = '$S',
Cr = '$Cr',
Be = '$Be' where id = '$id' ";
    
$result=mysql_query($sql);
	if($result){
		 echo json_encode(array("message" =>'数据编辑成功', "code" => 0));
	}
?>
