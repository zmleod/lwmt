<?php

require_once '../../dbconfig_lab.php';


$jsonData = file_get_contents("php://input");
$jsonObj = json_decode($jsonData,true);
   
    
  $baogao_bianhao = $jsonObj[ 'baogao_bianhao' ];
  $songjian_riqi = $jsonObj[ 'songjian_riqi' ];
  $shiyan_riqi = $jsonObj[ 'shiyan_riqi' ];
  $baogao_riqi = $jsonObj[ 'baogao_riqi' ];
  $wendu = $jsonObj[ 'wendu' ];
  $shidu = $jsonObj[ 'shidu' ];
  $yangjian_shuliang = $jsonObj[ 'yangjian_shuliang' ];
  $shiyan_xiangmu = $jsonObj[ 'shiyan_xiangmu' ];
  $shiyan_shebei = $jsonObj[ 'shiyan_shebei' ];
  $shiyan_tiaojian = $jsonObj[ 'shiyan_tiaojian' ];
  $shiyan_biaozhun = $jsonObj[ 'shiyan_biaozhun' ];
     $beizhu_zhengti = $jsonObj[ 'beizhu_zhengti' ];
    
for ( $i = 1; $i <= $yangjian_shuliang; $i++ ) {
 
    $id_id = "id_" . $i;
    $id = $jsonObj[ $id_id ];
    
    $yangjian_mingcheng_id = "yangjian_mingcheng_" . $i;
    $yangjian_leixing_id = "yangjian_leixing_" . $i;
    $yangjian_guige_id = "yangjian_guige_" . $i;
    $yangjian_bianhao_id = "yangjian_bianhao_" . $i;
    $yangjian_laiyuan_id = "yangjian_laiyuan_" . $i;
    $yangjian_picihao_id = "yangjian_picihao_" . $i;

    $jinmo_shijian_id = "jinmo_shijian_" . $i;
    $zhongliang_jinmoqian_id = "zhongliang_jinmoqian_" . $i;
    $zhongliang_jinmohou_id = "zhongliang_jinmohou_" . $i;
    $shizhongliang_id = "shizhongliang_" . $i;


    $pingjun_fushi_sulv_id = "pingjun_fushi_sulv_" . $i;
    $beizhu_id = "beizhu_" . $i;
    
    
       $yangjian_mingcheng = $jsonObj[ $yangjian_mingcheng_id ];
    $yangjian_leixing = $jsonObj[ $yangjian_leixing_id ];
    $yangjian_guige = $jsonObj[ $yangjian_guige_id ];
    $yangjian_bianhao = $jsonObj[ $yangjian_bianhao_id ];
    $yangjian_laiyuan = $jsonObj[ $yangjian_laiyuan_id ];
    $yangjian_picihao = $jsonObj[ $yangjian_picihao_id ];
    $jinmo_shijian = $jsonObj[ $jinmo_shijian_id ];
    $zhongliang_jinmoqian = $jsonObj[ $zhongliang_jinmoqian_id ];
    $zhongliang_jinmohou = $jsonObj[ $zhongliang_jinmohou_id ];
    $shizhongliang = $jsonObj[ $shizhongliang_id ];
    $pingjun_fushi_sulv = $jsonObj[ $pingjun_fushi_sulv_id ];
    $beizhu = $jsonObj[ $beizhu_id ];


$sql = "UPDATE immercorro_exp SET baogao_bianhao = '$baogao_bianhao',
songjian_riqi='$songjian_riqi',
shiyan_riqi='$shiyan_riqi',
baogao_riqi='$baogao_riqi',
wendu='$wendu',
shidu='$shidu',
yangjian_shuliang='$yangjian_shuliang',
shiyan_xiangmu='$shiyan_xiangmu',
shiyan_shebei='$shiyan_shebei',
shiyan_tiaojian='$shiyan_tiaojian',
shiyan_biaozhun='$shiyan_biaozhun',
beizhu_zhengti='$beizhu_zhengti',
yangjian_mingcheng='$yangjian_mingcheng',
yangjian_leixing='$yangjian_leixing',
yangjian_guige='$yangjian_guige',
yangjian_bianhao='$yangjian_bianhao',
yangjian_laiyuan='$yangjian_laiyuan',
yangjian_picihao='$yangjian_picihao',
jinmo_shijian='$jinmo_shijian',
zhongliang_jinmoqian='$zhongliang_jinmoqian',
zhongliang_jinmohou='$zhongliang_jinmohou',
shizhongliang='$shizhongliang',
pingjun_fushi_sulv='$pingjun_fushi_sulv',
beizhu='$beizhu' where id = '$id' ";
    
$result=mysql_query($sql);
	
		
}
 echo json_encode(array("message" =>'数据编辑成功', "code" => 0));
?>