

<?php

require_once '../../dbconfig_prod_process.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $jsonData = file_get_contents("php://input");
    $jsonObj = json_decode($jsonData, true);
    $shuaidai_tianbiaoren = $jsonObj['shuaidai_tianbiaoren'];
    $shuaidai_canyuren = $jsonObj['shuaidai_canyuren'];
    $shuaidai_shebei = $jsonObj['shuaidai_shebei'];
    /*  $laiyuan_daima=$jsonObj['laiyuan_daima'];*/
    $laiyuan_picihao = $jsonObj['laiyuan_picihao'];
    $laiyuan_picihao_add = $jsonObj['laiyuan_picihao_add'];

    $shuaidai_riqi = $jsonObj['shuaidai_riqi'];
    $shuaidai_luhao = $jsonObj['shuaidai_luhao'];
    $shuaidai_paihao = $jsonObj['shuaidai_paihao'];
    $shuaidai_hejin_zhongliang = $jsonObj['shuaidai_hejin_zhongliang'];
    $shuaidai_zhifen_zhongliang = $jsonObj['shuaidai_zhifen_zhongliang'];
    $shuaidai_ganguo = $jsonObj['shuaidai_ganguo'];
    $shuaidai_fagan = $jsonObj['shuaidai_fagan'];
    $shuaidai_penzui = $jsonObj['shuaidai_penzui'];
    $shuaidai_xiansudu = $jsonObj['shuaidai_xiansudu'];
    $shuaidai_shijian = $jsonObj['shuaidai_shijian'];
    $shuaidai_liudao_shuliang = $jsonObj['shuaidai_liudao_shuliang'];
    $shuaidai_pendai_yali = $jsonObj['shuaidai_pendai_yali'];
    $shuaidai_gunzui_jianju = $jsonObj['shuaidai_gunzui_jianju'];
    $shuaidai_qishi_meiye_wendu = $jsonObj['shuaidai_qishi_meiye_wendu'];
    $shuaidai_daicai_houdu = $jsonObj['shuaidai_daicai_houdu'];
    $shuaidai_daicai_kuandu = $jsonObj['shuaidai_daicai_kuandu'];
    $shuaidai_jingzhi_shijian = $jsonObj['shuaidai_jingzhi_shijian'];
    $shuaidai_yangqi_nongdu = $jsonObj['shuaidai_yangqi_nongdu'];



    $shuaidai_gunlun_zhuansu_xiansudu = $jsonObj['shuaidai_gunlun_zhuansu_xiansudu'];
    $shuaidai_paoguang_zhuansu = $jsonObj['shuaidai_paoguang_zhuansu'];
    $shuaidai_paoguanglun_mushu = $jsonObj['shuaidai_paoguanglun_mushu'];
    $shuaidai_kongzai_fuzeren = $jsonObj['shuaidai_kongzai_fuzeren'];



    $shuaidai_beizhu = $jsonObj['shuaidai_beizhu'];

    $ganguo_pinci = $jsonObj['ganguo_pinci'];
    $fagan_pinci = $jsonObj['fagan_pinci'];
    $penzui_pinci = $jsonObj['penzui_pinci'];
    $tanhuang_pinci = $jsonObj['tanhuang_pinci'];


    $shuaidai_pendai_yali_2 = $jsonObj['shuaidai_pendai_yali_2'];
    $shuaidai_yangqi_nongdu_2 = $jsonObj['shuaidai_yangqi_nongdu_2'];
    $CO2_1 = $jsonObj['CO2_1'];
    $CO2_2 = $jsonObj['CO2_2'];

    //2024.9.10 毛微信

    $penzuijiemian = $jsonObj['penzuijiemian'];
    $gunluncaizhi = $jsonObj['gunluncaizhi'];
    $gunlunzhijing = $jsonObj['gunlunzhijing'];
    $jinshuiliuliang = $jsonObj['jinshuiliuliang'];
    $jinshuiwendu = $jsonObj['jinshuiwendu'];
 
    
}

$sql = "INSERT INTO prod_process_cool (id,shuaidai_tianbiaoren,shuaidai_canyuren,shuaidai_shebei,laiyuan_picihao,laiyuan_picihao_add,shuaidai_riqi,shuaidai_luhao,shuaidai_paihao,shuaidai_hejin_zhongliang,shuaidai_zhifen_zhongliang,shuaidai_ganguo,shuaidai_fagan,shuaidai_penzui,shuaidai_xiansudu,shuaidai_shijian,shuaidai_liudao_shuliang,shuaidai_pendai_yali,shuaidai_gunzui_jianju,shuaidai_qishi_meiye_wendu,shuaidai_daicai_houdu,shuaidai_daicai_kuandu,shuaidai_jingzhi_shijian,shuaidai_yangqi_nongdu,shuaidai_beizhu,shuaidai_gunlun_zhuansu_xiansudu,shuaidai_paoguang_zhuansu,shuaidai_paoguanglun_mushu,shuaidai_kongzai_fuzeren,ganguo_pinci,fagan_pinci,penzui_pinci,tanhuang_pinci,shuaidai_pendai_yali_2,shuaidai_yangqi_nongdu_2,CO2_1,CO2_2,penzuijiemian,gunluncaizhi,gunlunzhijing,jinshuiliuliang,jinshuiwendu) VALUES (null,'$shuaidai_tianbiaoren','$shuaidai_canyuren','$shuaidai_shebei','$laiyuan_picihao','$laiyuan_picihao_add','$shuaidai_riqi','$shuaidai_luhao','$shuaidai_paihao','$shuaidai_hejin_zhongliang','$shuaidai_zhifen_zhongliang','$shuaidai_ganguo','$shuaidai_fagan','$shuaidai_penzui','$shuaidai_xiansudu','$shuaidai_shijian','$shuaidai_liudao_shuliang','$shuaidai_pendai_yali','$shuaidai_gunzui_jianju','$shuaidai_qishi_meiye_wendu','$shuaidai_daicai_houdu','$shuaidai_daicai_kuandu','$shuaidai_jingzhi_shijian','$shuaidai_yangqi_nongdu','$shuaidai_beizhu','$shuaidai_gunlun_zhuansu_xiansudu','$shuaidai_paoguang_zhuansu','$shuaidai_paoguanglun_mushu','$shuaidai_kongzai_fuzeren','$ganguo_pinci','$fagan_pinci','$penzui_pinci','$tanhuang_pinci','$shuaidai_pendai_yali_2','$shuaidai_yangqi_nongdu_2','$CO2_1','$CO2_2','$penzuijiemian','$gunluncaizhi','$gunlunzhijing','$jinshuiliuliang','$jinshuiwendu')";


$p = mysql_query($sql);
if ($p) {
    echo json_encode(array("message" => '', "code" => 0));
} else {
    echo mysql_error();
}
?>