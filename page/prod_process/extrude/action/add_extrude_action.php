

<?php

require_once '../../dbconfig_prod_process.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
$jsonData = file_get_contents("php://input");
$jsonObj = json_decode($jsonData,true);
    $jichu_tianbiaoren=$jsonObj['jichu_tianbiaoren'];
    $jichu_canyuren=$jsonObj['jichu_canyuren'];

  
    $jichu_paihao=$jsonObj['jichu_paihao'];
    $jichu_mudi_1=$jsonObj['jichu_mudi_1'];
    $jichu_mudi_2=$jsonObj['jichu_mudi_2'];
    $jichu_mudi_3=$jsonObj['jichu_mudi_3'];
     $jichu_mudi=$jichu_mudi_1."|".$jichu_mudi_2."|".$jichu_mudi_3;
    
   
    $laiyuan_picihao=$jsonObj['laiyuan_picihao'];
    $laiyuan_picihao_add=$jsonObj['laiyuan_picihao_add'];
   $jichu_shebei=$jsonObj['jichu_shebei'];
   

    $jichu_riqi=$jsonObj['jichu_riqi'];

    $jichu_picihao=$jsonObj['jichu_picihao'];

    $jichu_xiaojichu=$jsonObj['jichu_xiaojichu'];
    $jichu_jiarefangshi=$jsonObj['jichu_jiarefangshi'];
    $jichu_cailiaowendu=$jsonObj['jichu_cailiaowendu'];
    $jichu_baowenshijian=$jsonObj['jichu_baowenshijian'];
    $jichu_liaodanwendu=$jsonObj['jichu_liaodanwendu'];
    $jichu_mujuwendu=$jsonObj['jichu_mujuwendu'];
    $jichu_jichudianwendu=$jsonObj['jichu_jichudianwendu'];
    $jichu_jichukouwendu=$jsonObj['jichu_jichukouwendu'];
    $jichu_qidongyali=$jsonObj['jichu_qidongyali'];
    $jichu_wendingyali=$jsonObj['jichu_wendingyali'];
    $jichu_jichusudu=$jsonObj['jichu_jichusudu'];
    $jichu_liaodanguige=$jsonObj['jichu_liaodanguige'];
    $jichu_mujuchukouguige=$jsonObj['jichu_mujuchukouguige'];
    $jichu_piliaozhenkongtuoqi=$jsonObj['jichu_piliaozhenkongtuoqi'];
    $jichu_piliaozhongliang_shuliang=$jsonObj['jichu_piliaozhongliang_shuliang'];
    
    $jichu_jichu_zhongliang=$jsonObj['jichu_jichu_zhongliang'];
    
    $jichu_beizhu=$jsonObj['jichu_beizhu'];
    
    
}

$sql = "INSERT INTO prod_process_extrude (id,jichu_tianbiaoren,jichu_canyuren,jichu_paihao,jichu_shebei,jichu_mudi,jichu_riqi,laiyuan_picihao,laiyuan_picihao_add,jichu_picihao,jichu_xiaojichu,jichu_jiarefangshi,jichu_cailiaowendu,jichu_baowenshijian,jichu_liaodanwendu,jichu_mujuwendu,jichu_jichudianwendu,jichu_jichukouwendu,jichu_qidongyali,jichu_wendingyali,jichu_jichusudu,jichu_liaodanguige,jichu_mujuchukouguige,jichu_piliaozhenkongtuoqi,jichu_piliaozhongliang_shuliang,jichu_jichu_zhongliang,jichu_beizhu) VALUES (null,'$jichu_tianbiaoren','$jichu_canyuren','$jichu_paihao','$jichu_shebei','$jichu_mudi','$jichu_riqi','$laiyuan_picihao','$laiyuan_picihao_add','$jichu_picihao','$jichu_xiaojichu','$jichu_jiarefangshi','$jichu_cailiaowendu','$jichu_baowenshijian','$jichu_liaodanwendu','$jichu_mujuwendu','$jichu_jichudianwendu','$jichu_jichukouwendu','$jichu_qidongyali','$jichu_wendingyali','$jichu_jichusudu','$jichu_liaodanguige','$jichu_mujuchukouguige','$jichu_piliaozhenkongtuoqi','$jichu_piliaozhongliang_shuliang','$jichu_jichu_zhongliang','$jichu_beizhu')";


$p=mysql_query( $sql );
if ($p) {
    echo json_encode(array("message" =>'', "code" => 0));
   
} else {echo mysql_error();}
?>