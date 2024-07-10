

<?php

require_once '../../dbconfig_prod_process.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
$jsonData = file_get_contents("php://input");
$jsonObj = json_decode($jsonData,true);
     $ronglian_tianbiaoren=$jsonObj['ronglian_tianbiaoren'];
     $ronglian_canyuren=$jsonObj['ronglian_canyuren'];
    
     $laiyuan_picihao=$jsonObj['laiyuan_picihao'];
     $laiyuan_picihao_add=$jsonObj['laiyuan_picihao_add'];
     $ronglian_riqi=$jsonObj['ronglian_riqi'];
     $ronglian_luhao=$jsonObj['ronglian_luhao'];
    /* $ronglian_picihao=$jsonObj['ronglian_picihao'];
     $ronglian_caizhi=$jsonObj['ronglian_caizhi'];*/
     $ronglian_paihao=$jsonObj['ronglian_paihao'];
     $ronglian_shebei=$jsonObj['ronglian_shebei'];
     $Mg=$jsonObj['Mg'];
     $Sn=$jsonObj['Sn'];
     $Mg_20Ca=$jsonObj['Mg_20Ca'];
     $Al=$jsonObj['Al'];
     $Mg_30Ce=$jsonObj['Mg_30Ce'];
     $Zn=$jsonObj['Zn'];
     $PN5=$jsonObj['PN5'];
     $AZ91D=$jsonObj['AZ91D'];
     $Mg_20_Y=$jsonObj['Mg_20_Y'];
     $hejinding_zhongliang=$jsonObj['hejinding_zhongliang'];
     $guore_wendu=$jsonObj['guore_wendu'];
     $jingzhi_shijian=$jsonObj['jingzhi_shijian'];
     $jiaozhu_wendu=$jsonObj['jiaozhu_wendu'];
     $muju_wendu=$jsonObj['muju_wendu'];
     $ronglian_beizhu=$jsonObj['ronglian_beizhu'];


     $ronglian_ganguo=$jsonObj['ronglian_ganguo'];
     $shifou_honglu=$jsonObj['shifou_honglu'];

  

$sql = "INSERT INTO prod_process_smelt 
(id
,ronglian_tianbiaoren
,ronglian_canyuren
,laiyuan_picihao
,laiyuan_picihao_add
,ronglian_riqi
,ronglian_luhao

,ronglian_paihao
,ronglian_shebei
,Mg
,Sn
,Mg_20Ca
,Al
,Mg_30Ce
,Zn
,PN5
,AZ91D
,Mg_20_Y
,hejinding_zhongliang
,guore_wendu
,jingzhi_shijian
,jiaozhu_wendu
,muju_wendu
,ronglian_beizhu
,ronglian_ganguo
,shifou_honglu
) VALUES (
null
,'$ronglian_tianbiaoren'
,'$ronglian_canyuren'
,'$laiyuan_picihao'
,'$laiyuan_picihao_add'
,'$ronglian_riqi'
,'$ronglian_luhao'

,'$ronglian_paihao'
,'$ronglian_shebei'
,'$Mg'
,'$Sn'
,'$Mg_20Ca'
,'$Al'
,'$Mg_30Ce'
,'$Zn'
,'$PN5'
,'$AZ91D'
,'$Mg_20_Y'
,'$hejinding_zhongliang'
,'$guore_wendu'
,'$jingzhi_shijian'
,'$jiaozhu_wendu'
,'$muju_wendu'
,'$ronglian_beizhu'
,'$ronglian_ganguo'
,'$shifou_honglu'
)";


$p=mysql_query( $sql );
if ($p) {
    echo json_encode(array("message" =>'', "code" => 0));
   
} else {echo mysql_error();}
    }
?>