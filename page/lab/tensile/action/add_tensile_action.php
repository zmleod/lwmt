<?php

require_once '../../dbconfig_lab.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
$jsonData = file_get_contents("php://input");
$jsonObj = json_decode($jsonData,true);
    	$baogao_bianhao=$jsonObj['baogao_bianhao'];
    	$songjian_riqi=$jsonObj['songjian_riqi'];
    	$jiance_riqi=$jsonObj['jiance_riqi'];
        $baogao_riqi=$jsonObj['baogao_riqi'];
    	$yangjian_mingcheng=$jsonObj['yangjian_mingcheng'];
    	$yangjian_leixing=$jsonObj['yangjian_leixing'];
    	$yangjian_guige=$jsonObj['yangjian_guige'];
    	$yangjian_shuliang=$jsonObj['yangjian_shuliang'];
    	$yangjian_laiyuan=$jsonObj['yangjian_laiyuan'];
    	$yangjian_picihao=$jsonObj['yangjian_picihao'];
    	$weituo_bumen=$jsonObj['weituo_bumen'];
    	$weituo_danhao=$jsonObj['weituo_danhao'];
    	$quyang_fangxiang=$jsonObj['quyang_fangxiang'];
    	$ceshi_biaozhun=$jsonObj['ceshi_biaozhun'];
    	$wenshidu=$jsonObj['wenshidu'];
    
    
    	$cb_tanxingmoliang=$jsonObj['cb_tanxingmoliang'];
    	$cb_kangla=$jsonObj['cb_kangla'];
    	$cb_suxingyanshen=$jsonObj['cb_suxingyanshen'];
    	$cb_duanhoushenchang=$jsonObj['cb_duanhoushenchang'];
    
        $ceshi_xiangmu="|".$cb_tanxingmoliang."|".$cb_kangla."|".$cb_suxingyanshen."|".$cb_duanhoushenchang;
    $beizhu_zhengti=$jsonObj['beizhu_zhengti'];
    
         $yangjian_bianhao_nid="yangjian_bianhao_";
         $tanxing_moliang_nid="tanxing_moliang_";
         $kangla_qiangdu_nid="kangla_qiangdu_";
         $suxing_yanshen_nid="suxing_yanshen_";
         $duanhou_shenchang_nid="duanhou_shenchang_";
         $beizhu_nid="beizhu_";
        
    
    for ($i=1; $i<= $yangjian_shuliang; $i++) {
         $yangjian_bianhao_id="yangjian_bianhao_".$i;
         $tanxing_moliang_id="tanxing_moliang_".$i;
         $kangla_qiangdu_id="kangla_qiangdu_".$i;
         $suxing_yanshen_id="suxing_yanshen_".$i;
         $duanhou_shenchang_id="duanhou_shenchang_".$i;
         $beizhu_id="beizhu_".$i;
        
         $yangjian_bianhao=$jsonObj[$yangjian_bianhao_id];
          $tanxing_moliang=$jsonObj[$tanxing_moliang_id];
          $kangla_qiangdu=$jsonObj[$kangla_qiangdu_id];
          $suxing_yanshen=$jsonObj[$suxing_yanshen_id];
         $duanhou_shenchang=$jsonObj[$duanhou_shenchang_id];
          $beizhu=$jsonObj[$beizhu_id];
        
       $sql = "INSERT INTO tensile_exp  VALUES (null
       ,'$baogao_bianhao'
       ,'$songjian_riqi'
       ,'$jiance_riqi'
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
       ,'$ceshi_biaozhun'
       ,'$wenshidu'
       ,'$ceshi_xiangmu'
       ,'$beizhu_zhengti'
       ,'$yangjian_bianhao'
       ,'$tanxing_moliang'
       ,'$kangla_qiangdu'
       ,'$suxing_yanshen'
       ,'$duanhou_shenchang'
       ,'$beizhu'
       ,''
       ,''
       )"; 
        if($yangjian_bianhao){
        $result=mysql_query($sql);
            }
        
        
} 
    

     
    
 
    
    
    
    
    

		 echo json_encode(array("message" =>'数据编辑成功', "code" => 0));


    
}

?>
