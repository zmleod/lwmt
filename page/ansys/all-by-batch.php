<!DOCTYPE html>
<html>
<button type="button" class="layui-btn layui-btn-primary" lay-on="edit">修改对比库</button>


<style>
  .container {
    display: flex;
    flex-wrap: nowrap;
    /* 防止自动换行 */
    overflow: auto;
    /* 容器超出部分可滚动 */
  }

  .outer {
    display: inline-block;
    vertical-align: top;

  }

  .inner {}
</style>
<?php //定义追溯函数

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

  echo "<div class=inner>
  <table class=layui-table>
  <tr> 
  <td align=center> 
  <strong>$title</strong>
  </td>
  </tr>
  </table>";
  echo "<table class='layui-table'>";


  $i = 1; //从1开始就不再显示溯源代码了
  while ($field[$i]) {

    echo " <tr>";
    echo "<td>" . $field_text_explode[$i] . "</td>" . "<td>" . $row_prod[$field[$i]] . "</td>";
    echo " </tr> ";

    $i++;
  }


  echo " </table> </div>";



  $prod_code_next = substr($row_prod[$field[0]], 0, 2);
  if ($prod_code_next) {

    prod_trace($prod_code_next, $row_prod[$field[0]]);
  }
}
?>

  <head>
    <link href="../../assets/css/layui.css" rel="stylesheet">
    <script src="../../assets/js/layui.js"></script>


    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Demo</title>
    <!-- 请勿在项目正式环境中引用该 layui.css 地址 -->
    <link href="../../../assets/css/layui.css" rel="stylesheet">
  </head>

  <body>
    <div class="container">

      <?php




      require_once './dbconfig_ansys.php';
      $username = $_COOKIE['lwmt_dm'];


      mysql_select_db('user');

      $user_table = "all_by_batch_" . $username;


      $sql = "SELECT * FROM $user_table";
      $result = mysql_query($sql);

      $b = 0; //竖向DIV的数量,也就是批次号的数量
      while ($row = mysql_fetch_array($result)) {
        $b++;
        $batch[$b] = $row['batch'];
      }




      //根据各个batch,分别查一次各表,存下来
      // $yangjian_bianhao_tensile[$i][$i_tensile] = $row_tensile['yangjian_bianhao']; //用$i_tensile存储同一批次号里的不同编号
      //  $kangla_qiangdu[$i][$i_tensile] = $row_tensile['kangla_qiangdu'];
      // $tanxing_moliang[$i][$i_tensile] = $row_tensile['tanxing_moliang'];
      // $suxing_yanshen[$i][$i_tensile] = $row_tensile['suxing_yanshen'];
      // $duanhou_shenchang[$i][$i_tensile] = $row_tensile['duanhou_shenchang'];

      for ($i = 1; $i <= $b; $i++) {
        echo "<div class=outer>";
        echo "   
      <div class=inner><table class=layui-table>
      <tr>
        <td align=center>
          <strong>样件批次号:$batch[$i]</strong></td>
      </tr>
    </table>";
        mysql_select_db('lab'); //先查实验数据





        //拉伸实验
        $sql_tensile = "SELECT * FROM tensile_exp WHERE yangjian_picihao = '$batch[$i]'";
        $result_tensile = mysql_query($sql_tensile);
        $i_tensile = 1;
        echo "<table class=layui-table>
      <tr>
        <td align=center>
          <strong>拉伸实验</strong></td>
      </tr>
    </table>";
        echo " <table class=layui-table>
     
      <tr>
        <td></td>"; //这是拉伸实验的表头
        while ($row_tensile = mysql_fetch_array($result_tensile)) {

          $i_tensile++;
          echo "<td>$row_tensile[yangjian_bianhao]</td>";
        }
        echo "<td>平均值</td>";
        echo " </tr>"; //先把拉伸实验的表头输出出来


        mysql_data_seek($result_tensile, 0); //指针复位
        echo "<tr><td>Rm</td>"; //然后开始输出各行
        $num = 0; //需要求平均值的个数先归0
        $tensile_total = 0; //不归零会影响下一次循环
        while ($row_tensile = mysql_fetch_array($result_tensile)) {


          echo "<td>$row_tensile[kangla_qiangdu]</td>";
          $tensile_total = $tensile_total + $row_tensile['kangla_qiangdu'];
          $num++;
          $pingjun = $tensile_total / $num;
        }
        echo "<td>$pingjun</td>";
        echo "</tr>";




        mysql_data_seek($result_tensile, 0); //指针复位
        echo "<tr><td>Rp0.2</td>"; //然后开始输出各行
        $num = 0; //需要求平均值的个数先归0
        $tensile_total = 0; //不归零会影响下一次循环
        while ($row_tensile = mysql_fetch_array($result_tensile)) {


          echo "<td>$row_tensile[suxing_yanshen]</td>";
          $tensile_total = $tensile_total + $row_tensile['suxing_yanshen'];
          $num++;
          $pingjun = $tensile_total / $num;
        }
        echo "<td>$pingjun</td>";
        echo "</tr>";




        mysql_data_seek($result_tensile, 0); //指针复位
        echo "<tr><td>E</td>"; //然后开始输出各行
        $num = 0; //需要求平均值的个数先归0
        $tensile_total = 0; //不归零会影响下一次循环
        while ($row_tensile = mysql_fetch_array($result_tensile)) {


          echo "<td>$row_tensile[tanxing_moliang]</td>";
          $tensile_total = $tensile_total + $row_tensile['tanxing_moliang'];
          $num++;
          $pingjun = $tensile_total / $num;
        }
        echo "<td>$pingjun</td>";
        echo "</tr>";

        mysql_data_seek($result_tensile, 0); //指针复位
        echo "<tr><td>A%</td>"; //然后开始输出各行
        $num = 0; //需要求平均值的个数先归0
        $tensile_total = 0; //不归零会影响下一次循环
        while ($row_tensile = mysql_fetch_array($result_tensile)) {


          echo "<td>$row_tensile[duanhou_shenchang]</td>";
          $tensile_total = $tensile_total + $row_tensile['duanhou_shenchang'];
          $num++;
          $pingjun = $tensile_total / $num;
        }
        echo "<td>$pingjun</td>";
        echo "</tr>";

        echo "</table></div>"; //拉伸实验数据结束

        $pingjun = 0; //平均值复位



        //盐雾实验
        $sql_neusaltspray = "SELECT * FROM neusaltspray_exp WHERE yangjian_picihao = '$batch[$i]'";
        $result_neusaltspray = mysql_query($sql_neusaltspray);
        $i_neusaltspray = 1;
        echo " <div class=inner><table class=layui-table>
      <tr>
        <td align=center>
          <strong>盐雾实验</strong></td>
      </tr>
    </table>";
        echo " <table class=layui-table>
     
      <tr>
        <td></td>"; //这是盐雾实验的表头
        while ($row_neusaltspray = mysql_fetch_array($result_neusaltspray)) {


          $i_neusaltspray++;
          echo "<td>$row_neusaltspray[yangjian_bianhao]</td>";
        }
        echo "<td>平均值</td>";
        echo " </tr>"; //先把盐雾实验的表头输出出来

        mysql_data_seek($result_neusaltspray, 0); //指针复位
        echo "<tr><td>腐蚀速率</td>"; //然后开始输出各行
        $num = 0; //需要求平均值的个数先归0
        $total = 0; //不归零会影响下一次循环
        while ($row_neusaltspray = mysql_fetch_array($result_neusaltspray)) {


          echo "<td>$row_neusaltspray[pingjun_fushi_sulv]</td>";
          $total = $total + $row_neusaltspray['pingjun_fushi_sulv'];
          $num++;
          $pingjun = $total / $num;
        }
        echo "<td>$pingjun</td>";
        echo "</tr>";
        echo "</table></div>"; //盐雾实验数据结束
        $pingjun = 0; //平均值复位




        //浸泡腐蚀
        $sql_immercorro = "SELECT * FROM immercorro_exp WHERE yangjian_picihao = '$batch[$i]'";
        $result_immercorro = mysql_query($sql_immercorro);
        $i_immercorro = 1;
        echo " <div class=inner><table class=layui-table>
      <tr>
        <td align=center>
          <strong>浸泡腐蚀</strong></td>
      </tr>
    </table>";
        echo " <table class=layui-table>
     
      <tr>
        <td></td>"; //这是浸泡腐蚀的表头
        while ($row_immercorro = mysql_fetch_array($result_immercorro)) {


          $i_immercorro++;
          echo "<td>$row_immercorro[yangjian_bianhao]</td>";
        }
        echo "<td>平均值</td>";
        echo " </tr>"; //先把浸泡腐蚀的表头输出出来

        mysql_data_seek($result_immercorro, 0); //指针复位
        echo "<tr><td>腐蚀速率</td>"; //然后开始输出各行
        $num = 0; //需要求平均值的个数先归0
        $total = 0; //不归零会影响下一次循环
        while ($row_immercorro = mysql_fetch_array($result_immercorro)) {


          echo "<td>$row_immercorro[pingjun_fushi_sulv]</td>";
          $total = $total + $row_immercorro['pingjun_fushi_sulv'];
          $num++;
          $pingjun = $total / $num;
        }
        echo "<td>$pingjun</td>";
        echo "</tr>";
        echo "</table></div>"; //浸泡腐蚀数据结束
        $pingjun = 0; //平均值复位




        //金相实验
        $sql_metallograph = "SELECT * FROM metallograph_exp WHERE yangjian_picihao = '$batch[$i]'";
        $result_metallograph = mysql_query($sql_metallograph);
        $i_metallograph = 1;
        while ($row_metallograph = mysql_fetch_array($result_metallograph)) {
          $yangjian_bianhao_metallograph[$i][$i_metallograph] = $row_metallograph['yangjian_bianhao']; //用$i_metallograph存储同一批次号里的不同编号
          $baogao_bianhao[$i][$i_metallograph] = $row_metallograph['baogao_bianhao'];

          $i_metallograph++;
        }



        mysql_select_db('prod_process'); //生产数据
        $prod_code = substr($batch[$i], 0, 2);
        if ($prod_code) {
          prod_trace($prod_code, $batch[$i]);
        }
        echo "</div>";
      }
      ?>

    </div>

    <script>
      layui.use(function() {
        var layer = layui.layer;
        var util = layui.util;
        // 批量事件
        util.on('lay-on', {

          edit: function() {
            // iframe 层
            layer.open({
              type: 2,
              title: '修改对比库',
              shadeClose: true,
              shade: 0.8,
              area: ['380px', '80%'],
              content: './layer/all-by-batch-edit.php' // iframe 的 url
            });
          },


        });
      });
    </script>
  </body>

</html>