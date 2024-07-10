<?php

require_once '../../dbconfig_lab.php';

if ( $_SERVER[ "REQUEST_METHOD" ] == "POST" ) {
  $jsonData = file_get_contents( "php://input" );
  $jsonObj = json_decode( $jsonData, true );
  $baogao_bianhao = $jsonObj[ 'baogao_bianhao' ];
  $songjian_riqi = $jsonObj[ 'songjian_riqi' ];
  $jianyan_riqi = $jsonObj[ 'jianyan_riqi' ];
  $baogao_riqi = $jsonObj[ 'baogao_riqi' ];
  $yangjian_mingcheng = $jsonObj[ 'yangjian_mingcheng' ];
  $yangjian_leixing = $jsonObj[ 'yangjian_leixing' ];
  $yangjian_guige = $jsonObj[ 'yangjian_guige' ];
  $yangjian_shuliang = $jsonObj[ 'yangjian_shuliang' ];
  $yangjian_laiyuan = $jsonObj[ 'yangjian_laiyuan' ];
  $yangjian_picihao = $jsonObj[ 'yangjian_picihao' ];
  $weituo_ren = $jsonObj[ 'weituo_ren' ];
  $weituo_danhao = $jsonObj[ 'weituo_danhao' ];
  $quyang_fangxiang = $jsonObj[ 'quyang_fangxiang' ];
  $jianyan_biaozhun = $jsonObj[ 'jianyan_biaozhun' ];
  $jianyan_shebei = $jsonObj[ 'jianyan_shebei' ];

  $cb_jinglidu = $jsonObj[ 'cb_jinglidu' ];
  $cb_dierxiang = $jsonObj[ 'cb_dierxiang' ];
  $cb_jiazha_qikong = $jsonObj[ 'cb_jiazha_qikong' ];
  $cb_houdu = $jsonObj[ 'cb_houdu' ];
  $cb_xijingqu = $jsonObj[ 'cb_xijingqu' ];
  $jianyan_xiangmu = "|" . $cb_jinglidu . "|" . $cb_dierxiang . "|" . $cb_jiazha_qikong . "|" . $cb_houdu . "|" . $cb_xijingqu;
 $fenxi_panding = $jsonObj[ 'fenxi_panding' ];

  for ( $i = 1; ; $i++ ) {
         $yangjian_bianhao_id = "yangjian_bianhao_" . $i;
    $beizhu_id = "beizhu_" . $i;

    $yangjian_bianhao = $jsonObj[ $yangjian_bianhao_id ];
    $beizhu = $jsonObj[ $beizhu_id ];

       if ( $yangjian_bianhao ) {
 
    $sql = "INSERT INTO metallograph_exp 
(id
,baogao_bianhao
,songjian_riqi
,jianyan_riqi
,baogao_riqi
,yangjian_mingcheng
,yangjian_leixing
,yangjian_guige
,yangjian_shuliang
,yangjian_laiyuan
,yangjian_picihao
,weituo_ren
,weituo_danhao
,quyang_fangxiang
,jianyan_biaozhun
,jianyan_shebei
,jianyan_xiangmu
,fenxi_panding
,yangjian_bianhao
,beizhu
) VALUES (
null
,'$baogao_bianhao'
,'$songjian_riqi'
,'$jianyan_riqi'
,'$baogao_riqi'
,'$yangjian_mingcheng'
,'$yangjian_leixing'
,'$yangjian_guige'
,'$yangjian_shuliang'
,'$yangjian_laiyuan'
,'$yangjian_picihao'
,'$weituo_ren'
,'$weituo_danhao'
,'$quyang_fangxiang'
,'$jianyan_biaozhun'
,'$jianyan_shebei'
,'$jianyan_xiangmu'
,'$fenxi_panding'
,'$yangjian_bianhao'
,'$beizhu'
)";

   
      $result = mysql_query( $sql );
    }
else{
    break;
}

  }


}




echo json_encode( array( "message" => '', "code" => 0 ) );
?>
