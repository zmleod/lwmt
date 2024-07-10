

<?php

require_once '../../dbconfig_prod_process.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
$jsonData = file_get_contents("php://input");
$jsonObj = json_decode($jsonData,true);
    $yading_tianbiaoren=$jsonObj['yading_tianbiaoren'];
    $yading_canyuren=$jsonObj['yading_canyuren'];
    /*$laiyuan_daima=$jsonObj['laiyuan_daima'];*/
    $laiyuan_picihao=$jsonObj['laiyuan_picihao'];
    $laiyuan_picihao_add=$jsonObj['laiyuan_picihao_add'];
    $yading_picihao=$jsonObj['yading_picihao'];
    $yading_shebei=$jsonObj['yading_shebei'];
    $yading_riqi=$jsonObj['yading_riqi'];
    $yading_paihao=$jsonObj['yading_paihao'];
    $yading_guige_1=$jsonObj['yading_guige_1'];
    $yading_zhongliang_1=$jsonObj['yading_zhongliang_1'];
    $yading_zhenkong_shijian=$jsonObj['yading_zhenkong_shijian'];
    $yading_zhenkongdu=$jsonObj['yading_zhenkongdu'];
    $yading_mujuwendu=$jsonObj['yading_mujuwendu'];
    $yading_zhidingyali=$jsonObj['yading_zhidingyali'];
    $yading_fending_zhongliang=$jsonObj['yading_fending_zhongliang'];
    $yading_beizhu=$jsonObj['yading_beizhu'];
   
    
    
    
    
    
    
}

$sql = "INSERT INTO prod_process_press (id,yading_tianbiaoren,yading_canyuren,laiyuan_picihao,laiyuan_picihao_add,yading_picihao,yading_shebei,yading_riqi,yading_paihao,yading_guige_1,yading_zhongliang_1,yading_zhenkong_shijian,yading_zhenkongdu,yading_mujuwendu,yading_zhidingyali,yading_fending_zhongliang,yading_beizhu) VALUES (null,'$yading_tianbiaoren','$yading_canyuren','$laiyuan_picihao','$laiyuan_picihao_add', '$yading_picihao','$yading_shebei','$yading_riqi','$yading_paihao','$yading_guige_1','$yading_zhongliang_1','$yading_zhenkong_shijian','$yading_zhenkongdu','$yading_mujuwendu','$yading_zhidingyali','$yading_fending_zhongliang','$yading_beizhu')";


$p=mysql_query( $sql );
if ($p) {
    echo json_encode(array("message" =>'', "code" => 0));
   
} else {echo mysql_error();}
?>