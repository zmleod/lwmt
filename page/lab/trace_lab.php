<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Demo</title>
  <!-- 请勿在项目正式环境中引用该 layui.css 地址 -->
  <link href="../../assets/css/layui.css" rel="stylesheet">
</head>

<body>


  <?php

  $id = $_GET['id'];
  $exp = $_GET['exp'];
  require_once './dbconfig_lab.php'; //先输出实验数据
  $query_lab = "SELECT * FROM $exp where id = '$id'";
  $sql_lab = mysql_query($query_lab);
  $row_lab = mysql_fetch_array($sql_lab);

  switch ($exp) {

    case "chemcompo_exp":

      break;

    case "immercorro_exp":
      $title = "浸泡腐蚀";
      $field_str = "yangjian_picihao,yangjian_mingcheng,shizhongliang,pingjun_fushi_sulv,beizhu";
      $field_text = "样件批次号,名称/牌号,失重量,平均腐蚀速率,备注";
      break;


    case "metallograph_exp":
      $title = "金相实验";
      $field_str = "yangjian_picihao,yangjian_mingcheng,fenxi_panding";
      $field_text = "样件批次号,名称/牌号,分析判定";
      break;


    case "neusaltspray_exp":
      $title = "盐雾试验";
      $field_str = "yangjian_picihao,yangjian_mingcheng,shizhongliang,pingjun_fushi_sulv,beizhu";
      $field_text = "样件批次号,名称/牌号,失重量,平均腐蚀速率,备注";
      break;


    case "tensile_exp":
      $title = "拉伸试验";
      $field_str = "yangjian_picihao,yangjian_mingcheng,tanxing_moliang,kangla_qiangdu,suxing_yanshen,duanhou_shenchang,beizhu";
      $field_text = "样件批次号,名称/牌号,E,Rm,Rp0.2,A%,备注";
      break;
  }
  $field = explode(",", $field_str); //注意逗号是中文不是英文
  $field_text_explode = explode(",", $field_text);

  echo "<p><strong>$title</strong></p>";
  echo "<table class='layui-table'>";
  echo " <tr>";

  $i = 0;
  while ($field[$i]) {


    echo "<th>" . $field_text_explode[$i] . "</th>";


    $i++;
  }
  echo " </tr> ";
  echo " <tr>";
  $i = 0;
  while ($field[$i]) {


    echo "<td>" . $row_lab[$field[$i]] . "</td>";


    $i++;
  }
  echo " </tr></table> ";




  //下面是生产过程数据输出
  require_once '../prod_process/dbconfig_prod_process.php'; //追溯生产数据
  $yangjian_picihao = $_GET['yangjian_picihao'];
  $prod_code = substr($yangjian_picihao, 0, 2);


  function prod_trace($prod_code, $sql_value)
  {


    switch ($prod_code) {

      case "HA":
        $prod_tb = "prod_process_smelt";
        $sql_field = "ronglian_luhao";

        $title = "熔炼数据";
        $field_str = "laiyuan_picihao,ronglian_luhao,ronglian_paihao,Mg,Sn,Mg_20Ca,Al,Mg_30Ce,Zn,PN5,AZ91D,Mg20_Y,guore_wendu,jingzhi_shijian,jiaozhu_wendu,muju_wendu,ronglian_beizhu";
        $field_text = "溯源代码,熔炼炉号,牌号,Mg,Sn,Mg_20Ca,Al,Mg_30Ce,Zn,PN5,AZ91D,Mg20_Y,过热温度,静置时间,浇注温度,模具温度,备注";
        break;

      case "HB":
        $prod_tb = "prod_process_cool";
        $sql_field = "shuaidai_luhao";
        $title = "甩带数据";
        $field_str = "laiyuan_picihao,shuaidai_luhao,shuaidai_paihao,shuaidai_ganguo,shuaidai_fagan,shuaidai_penzui,shuaidai_xiansudu,shuaidai_shijian,shuaidai_liudao_shuliang,shuaidai_pendai_yali,shuaidai_gunzui_jianju,shuaidai_qishi_meiye_wendu,shuaidai_daicai_houdu,shuaidai_daicai_kuandu,shuaidai_jingzhi_shijian";
        $field_text = "溯源代码,甩带炉号,牌号,坩埚,阀杆,喷嘴,线速度,时间,流道数量,喷带压力,辊嘴间距,镁液起始温度,带材厚度,带材宽度,静置时间";
        break;


      case "ZL":
        $prod_tb = "";
        $sql_field = "";
        $title = "";
        $field_str = "";
        break;


      case "YD":
        $prod_tb = "prod_process_press";
        $sql_field = "yading_picihao";
        $title = "压锭数据";
        $field_str = "laiyuan_picihao,yading_picihao,yading_paihao,yading_guige_1,yading_zhongliang_1,yading_zhenkong_shijian,yading_zhenkongdu,yading_mujuwendu,yading_zhidingyali,yading_fending_zhongliang,yading_beizhu";
        $field_text = "溯源代码,压锭批次号,牌号,规格,重量(前),真空时间,真空度,模具温度,制锭压力,粉锭重量,备注";
        break;


      case "JC":
        $prod_tb = "prod_process_extrude";
        $sql_field = "jichu_picihao";
        $title = "挤出数据";
        $field_str = "laiyuan_picihao,jichu_picihao,jichu_paihao,jichu_xiaojichu,jichu_liaodanwendu,jichu_mujuwendu,jichu_jichudianwendu,jichu_jichukouwendu,jichu_qidongyali,jichu_wendingyali,jichu_jichusudu,jichu_liaodanguige,jichu_mujuchukouguige,jichu_piliaozhenkongtuoqi,jichu_cailiaowendu,jichu_baowenshijian,jichu_beizhu";
        $field_text = "溯源代码,挤出批次号,牌号,小挤出,料胆温度,模具温度,挤出垫温度,挤出口温度,启动压力,稳定压力,挤出速度,料胆规格,模具出口规格,坯料真空脱气,材料温度,保温时间,备注";
        break;

        
      case "GZ":
        $prod_tb = "prod_process_rolling";
        $sql_field = "zhazhi_picihao";
        $title = "轧制数据";
        $field_str = "laiyuan_picihao,zhazhi_picihao,yuanshi_houdu,daoci,shiyang_jiare_shijian,shiyang_wendu_pingjun,shang_zhagun_wendu,xia_zhagun_wendu,zhahou_banhou_pingjun,daoci_bianxingliang,zhongjian_tuihuo_wendu,zhongjian_tuihuo_shijian,yaping_tuihuo_wendu,yaping_tuihuo_shijian,beizhu";
        $field_text = "溯源代码,轧制批次号,原始厚度,道次,加热时间,温度平均值,上辊温度,下辊温度,轧后板厚平均,道次变形量,中间退火温度,中间退火时间,压平退火温度,压平退火时间,备注";
        break;
    }

    $field = explode(",", $field_str); //注意逗号是中文不是英文
    $field_text_explode = explode(",", $field_text);
    $query_prod = "SELECT * FROM $prod_tb where $sql_field = '$sql_value'";
    $sql_prod = mysql_query($query_prod);
    $row_prod = mysql_fetch_array($sql_prod);

    echo "<p><strong>$title</strong></p>";
    echo "<table class='layui-table'>";
    echo " <tr>";

    $i = 0;
    while ($field[$i]) {


      echo "<th>" . $field_text_explode[$i] . "</th>";


      $i++;
    }
    echo " </tr> ";
    echo " <tr>";
    $i = 0;
    while ($field[$i]) {


      echo "<td>" . $row_prod[$field[$i]] . "</td>";


      $i++;
    }
    echo " </tr></table> ";



    $prod_code_next = substr($row_prod[$field[0]], 0, 2);
    if ($prod_code_next) {

      prod_trace($prod_code_next, $row_prod[$field[0]]);
    }
  }


  if ($prod_code) {
    prod_trace($prod_code, $yangjian_picihao);
  } else {
    die("没有批次号，无法追溯");
  }
  ?>





</body>

</html>