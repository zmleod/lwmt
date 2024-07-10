<?php

require_once '../../dbconfig_prod_process.php';

// if ( $_SERVER[ "REQUEST_METHOD" ] == "POST" ) {
$jsonData = file_get_contents("php://input");
$jsonObj = json_decode($jsonData, true);


$tianbiaoren = $jsonObj['tianbiaoren'];
$canyuren = $jsonObj['canyuren'];
$laiyuan_mingcheng = $jsonObj['laiyuan_mingcheng'];
$baogao_riqi = $jsonObj['baogao_riqi'];
$yangjian_mingcheng = $jsonObj['yangjian_mingcheng'];
$laiyuan_picihao = $jsonObj['laiyuan_picihao'];
$riqi = $jsonObj['riqi'];
$shebei = $jsonObj['shebei'];
$zhazhi_picihao = $jsonObj['zhazhi_picihao'];
$shiyang_bianhao = $jsonObj['shiyang_bianhao'];
$yuanshi_houdu = $jsonObj['yuanshi_houdu'];
$daoci = $jsonObj['daoci'];
$shiyang_jiare_shijian = $jsonObj['shiyang_jiare_shijian'];
$shiyang_wendu_1 = $jsonObj['shiyang_wendu_1'];
$shiyang_wendu_2 = $jsonObj['shiyang_wendu_2'];

$shiyang_wendu_3 = $jsonObj['shiyang_wendu_3'];
$shiyang_wendu_pingjun = $jsonObj['shiyang_wendu_pingjun'];
$shang_zhagun_wendu = $jsonObj['shang_zhagun_wendu'];
$xia_zhagun_wendu = $jsonObj['xia_zhagun_wendu'];
$zhazhi_sudu = $jsonObj['zhazhi_sudu'];
$zhahou_banhou_1 = $jsonObj['zhahou_banhou_1'];
$zhahou_banhou_2 = $jsonObj['zhahou_banhou_2'];
$zhahou_banhou_3 = $jsonObj['zhahou_banhou_3'];
$zhahou_banhou_pingjun = $jsonObj['zhahou_banhou_pingjun'];
$daoci_bianxingliang = $jsonObj['daoci_bianxingliang'];

$zong_yaxialiang = $jsonObj['zong_yaxialiang'];
$zhongjian_daoci_tuihuo = $jsonObj['zhongjian_daoci_tuihuo'];
$zhongjian_tuihuo_wendu = $jsonObj['zhongjian_tuihuo_wendu'];
$zhongjian_tuihuo_shijian = $jsonObj['zhongjian_tuihuo_shijian'];
$yaping_tuihuo_wendu = $jsonObj['yaping_tuihuo_wendu'];
$yaping_tuihuo_shijian = $jsonObj['yaping_tuihuo_shijian'];
$jinxiang_quyang = $jsonObj['jinxiang_quyang'];


$lashen_quyang = $jsonObj['lashen_quyang'];
$beizhu = $jsonObj['beizhu'];



$tianbiaoren = "123";


$sql = "INSERT INTO prod_process_rolling 
(id
,tianbiaoren
,canyuren
,laiyuan_mingcheng
,laiyuan_picihao
,riqi
,shebei
,zhazhi_picihao
,shiyang_bianhao
,yuanshi_houdu
,daoci
,shiyang_jiare_shijian
,shiyang_wendu_1
,shiyang_wendu_2
,shiyang_wendu_3
,shiyang_wendu_pingjun
,shang_zhagun_wendu
,xia_zhagun_wendu
,zhazhi_sudu
,zhahou_banhou_1
,zhahou_banhou_2
,zhahou_banhou_3
,zhahou_banhou_pingjun
,daoci_bianxingliang
,zong_yaxialiang
,zhongjian_daoci_tuihuo
,zhongjian_tuihuo_wendu
,zhongjian_tuihuo_shijian
,yaping_tuihuo_wendu
,yaping_tuihuo_shijian
,jinxiang_quyang
,lashen_quyang
,beizhu
) VALUES (
null
,'$tianbiaoren'
,'$canyuren'
,'$laiyuan_mingcheng'
,'$laiyuan_picihao'
,'$riqi'
,'$shebei'
,'$zhazhi_picihao'
,'$shiyang_bianhao'
,'$yuanshi_houdu'
,'$daoci'
,'$shiyang_jiare_shijian'
,'$shiyang_wendu_1'
,'$shiyang_wendu_2'
,'$shiyang_wendu_3'
,'$shiyang_wendu_pingjun'
,'$shang_zhagun_wendu'
,'$xia_zhagun_wendu'
,'$zhazhi_sudu'
,'$zhahou_banhou_1'
,'$zhahou_banhou_2'
,'$zhahou_banhou_3'
,'$zhahou_banhou_pingjun'
,'$daoci_bianxingliang'
,'$zong_yaxialiang'
,'$zhongjian_daoci_tuihuo'
,'$zhongjian_tuihuo_wendu'
,'$zhongjian_tuihuo_shijian'
,'$yaping_tuihuo_wendu'
,'$yaping_tuihuo_shijian'
,'$jinxiang_quyang'
,'$lashen_quyang'
,'$beizhu'
)";


$result = mysql_query($sql) . mysql_error();
//     }
// else{
//     break;
// }









echo json_encode(array("message" => '', "code" => 0));
