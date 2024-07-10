<?php

require_once '../../dbconfig_lab.php';

if ( $_SERVER[ "REQUEST_METHOD" ] == "POST" ) {
  $jsonData = file_get_contents( "php://input" );
  $jsonObj = json_decode( $jsonData, true );
    
    
  $baogao_bianhao = $jsonObj[ 'baogao_bianhao' ];
  $songjian_riqi = $jsonObj[ 'songjian_riqi' ];
  $shiyan_riqi = $jsonObj[ 'shiyan_riqi' ];
  $baogao_riqi = $jsonObj[ 'baogao_riqi' ];
    
 
    
  $yangjian_shuliang = $jsonObj[ 'yangjian_shuliang' ];

    
    
  $weituo_bumen = $jsonObj[ 'weituo_bumen' ];
  $weituo_danhao = $jsonObj[ 'weituo_danhao' ];
  $quyang_fangxiang = $jsonObj[ 'quyang_fangxiang' ];
    
    
  $shiyan_xiangmu = $jsonObj[ 'shiyan_xiangmu' ];
  $shiyan_shebei = $jsonObj[ 'shiyan_shebei' ];
  $shiyan_tiaojian = $jsonObj[ 'shiyan_tiaojian' ];
    
   
  $shiyan_biaozhun = $jsonObj[ 'shiyan_biaozhun' ];
    
   

  for ( $i = 1; $i <=  $yangjian_shuliang; $i++ ) {
       $yangjian_mingcheng_id = "yangjian_mingcheng_" . $i;
    $yangjian_leixing_id = "yangjian_leixing_" . $i;
    $yangjian_guige_id = "yangjian_guige_" . $i;
        
           $yanjian_laiyuan_id = "yangjian_laiyuan_" . $i;
    $yangjian_picihao_id = "yangjian_picihao_" . $i;
      
      
    $yangjian_bianhao_id = "yangjian_bianhao_" . $i;
    $shiyan_shijian_id = "shiyan_shijian_" . $i;
    $zhongliang_fushiqian_id = "zhongliang_fushiqian_" . $i;
    $zhongliang_fushihou_id = "zhongliang_fushihou_" . $i;
    $shizhongliang_id = "shizhongliang_" . $i;
    $pingjun_fushi_sulv_id = "pingjun_fushi_sulv_" . $i;
    $beizhu_id = "beizhu_" . $i;

       $yangjian_mingcheng = $jsonObj[ $yangjian_mingcheng_id ];
    $yangjian_leixing = $jsonObj[ $yangjian_leixing_id ];
    $yangjian_guige = $jsonObj[ $yangjian_guige_id ];
      
         $yangjian_laiyuan = $jsonObj[ $yangjian_laiyuan_id ];
    $yangjian_picihao = $jsonObj[ $yangjian_picihao_id ];
      
      
    $yangjian_bianhao = $jsonObj[ $yangjian_bianhao_id ];
    $shiyan_shijian = $jsonObj[ $shiyan_shijian_id ];
    $zhongliang_fushiqian = $jsonObj[ $zhongliang_fushiqian_id ];
    $zhongliang_fushihou = $jsonObj[ $zhongliang_fushihou_id ];
    $shizhongliang = $jsonObj[ $shizhongliang_id ];
    $pingjun_fushi_sulv = $jsonObj[ $pingjun_fushi_sulv_id ];
    $beizhu = $jsonObj[ $beizhu_id ];

    $sql = "INSERT INTO neusaltspray_exp 
(id
,baogao_bianhao
,songjian_riqi
,shiyan_riqi
,baogao_riqi
,yangjian_mingcheng
,yangjian_leixing
,yangjian_guige
,yangjian_shuliang
,yangjian_laiyuan
,yangjian_picihao
,weituo_bumen
,weituo_danhao
,quyang_fangxiang
,shiyan_xiangmu
,shiyan_shebei
,shiyan_tiaojian
,shiyan_biaozhun
,yangjian_bianhao
,shiyan_shijian
,zhongliang_fushiqian
,zhongliang_fushihou
,shizhongliang
,pingjun_fushi_sulv
,beizhu
) VALUES (
null
,'$baogao_bianhao'
,'$songjian_riqi'
,'$shiyan_riqi'
,'$baogao_riqi'
,'$yangjian_mingcheng'
,'$yangjian_leixing'
,'$yangjian_guige'
,'$yangjian_shuliang'
,'$yangjian_laiyuan'
,'$yangjian_picihao'
,'$weituo_bumen'
,'$weituo_danhao'
,'$quyang_fangxiang'
,'$shiyan_xiangmu'
,'$shiyan_shebei'
,'$shiyan_tiaojian'
,'$shiyan_biaozhun'
,'$yangjian_bianhao'
,'$shiyan_shijian'
,'$zhongliang_fushiqian'
,'$zhongliang_fushihou'
,'$shizhongliang'
,'$pingjun_fushi_sulv'
,'$beizhu'
)";

    if ( $yangjian_bianhao ) {
      $result = mysql_query( $sql );
    }


  }

echo json_encode(array("message" =>'', "code" => 0));
}
/*调试
if ($result === false) {
    // 查询失败
    $errorCode = mysql_errno();
    $errorMessage = mysql_error();
    die("查询出错：错误码 $errorCode - $errorMessage");
} else {
    // 查询成功
    // ... 处理查询结果 ...
}
echo $result;


*/
?>
