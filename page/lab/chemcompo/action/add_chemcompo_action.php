<?php

require_once '../../dbconfig_lab.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
$jsonData = file_get_contents("php://input");
$jsonObj = json_decode($jsonData,true);
    	
        $yangjian_laiyuan=$jsonObj['yangjian_laiyuan'];
        $yangjian_picihao=$jsonObj['yangjian_picihao'];
    
	  
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
$sql = "INSERT INTO chemcompo_exp (id,
yangjian_laiyuan,
yangjian_picihao,
songjian_riqi,
jiance_riqi,
jiance_jigou,
yangpin_paihao,
yangpin_guige,
yangpin_bianhao,
baogao_bianhao_sanfang,
baogao_bianhao,
jiance_chengfen,
beizhu,
Mg,
Al,
Zn,
Ce,
Cu,
Fe,
Mn,
Ni,
Si,
Ca,
Zr,
S,
Cr,
Be) VALUES (null,
'$yangjian_laiyuan',
'$yangjian_picihao',
'$songjian_riqi',
'$jiance_riqi',
'$jiance_jigou',
'$yangpin_paihao',
'$yangpin_guige',
'$yangpin_bianhao',
'$baogao_bianhao_sanfang',
'$baogao_bianhao',
'$jiance_chengfen',
'$beizhu',
'$Mg',
'$Al',
'$Zn',
'$Ce',
'$Cu',
'$Fe',
'$Mn',
'$Ni',
'$Si',
'$Ca',
'$Zr',
'$S',
'$Cr',
'$Be')";
    
$result = mysql_query($sql).mysql_error();
   
}
echo json_encode(array("message" =>'123', "code" => 0));
?>
