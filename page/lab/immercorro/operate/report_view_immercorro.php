<!DOCTYPE html>
<html>
<head>
<?php
require_once '../../dbconfig_lab.php';
$baogao_bianhao = $_GET[ 'baogao_bianhao' ];


$query = "SELECT * FROM immercorro_exp where baogao_bianhao = '$baogao_bianhao'";
$query_img = "SELECT * FROM immercorro_exp_img where baogao_bianhao = '$baogao_bianhao'";
// 执行查询
$sql = mysql_query( $query );

$get_row = mysql_fetch_array( $sql );


?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0" />
<meta http-equiv="X-UA-Compatible" content="ie=edge" />
<title>中性盐雾腐蚀试验报告</title>
</head>

<style>
@media print {
tr {
    page-break-inside: avoid;
}
</style>
<style>
body {
    background: rgb(255, 255, 255);
}
page[size="A4"] {
    background: white;
    width: 21cm;
    height: 29.7cm;
    display: block;
    margin: 0 auto;
    margin-bottom: 0.5cm;
}

@media print {
body, page[size="A4"] {
    margin: 0;
    box-shadow: 0;
}
}
</style>
<style>
.songti {
    font-family: 'Songti SC', 'SimSun', serif;
}
h1 {
    font-size: 24px; /* 设置h1标题的字体大小为24像素 */
    text-align: center;
    margin-bottom: 30px;
    font-family: 'Songti SC', 'SimSun', serif;
}
h2 {
    font-size: 15px; /* 设置h1标题的字体大小为24像素 */
    text-align: center;
    margin-bottom: 5px;
    font-family: 'Songti SC', 'SimSun', serif;
}
h3 {
    font-size: 15px; /* 设置h1标题的字体大小为24像素 */
    margin-left: 50px;
    margin-bottom: 0px;
    font-family: 'Songti SC', 'SimSun', serif;
}
}
</style>
<style>
table {
    border: 2px solid black; /* 表格外框线宽度*/
    border-collapse: collapse; /* 边框合并为单一边框 */
    margin-top: 0px;
}
tr, td {
    border: 1px solid black; /*单元格内框线宽度 */
    height: 35px;
    text-align: center;
}
    
 
.head_table {
  margin-left: auto;
  margin-right: auto;
border: none;
}
 
/* 内容靠左对齐 */
.left_td{
  text-align: left;
    border: none;
} 
    
    /* 内容靠右对齐 */
.right_td{
  text-align: right;
    border: none;
}   

    /* 内容居中对齐 */
.center_td{
  text-align: center;
    border: none;
}   
    .noline_tr{
        
       border: none; 
    }
    
  a {
    text-decoration: none;
         color: black;
}  
     a:hover {
        color: red; /* 改变颜色为红色 */
    }
</style>

<body>
<page size="A4">
  <h2>&nbsp; </h2>
  <h1>浸泡腐蚀试验报告</h1>
  <table   class="head_table songti" width="698">
    <tr class="noline_tr">
      <td class="left_td" width="210px">报告编号：<? echo $baogao_bianhao;?> </td>
      
           <td class="right_td"><a href="./report_edit_immercorro.php?baogao_bianhao=<? echo $baogao_bianhao;?>">修改报告</a> </td>
         <td class="right_td"> <a href="./report_img_upload_immercorro.php?baogao_bianhao=<? echo $baogao_bianhao;?>">增加图片</a>  </td>
           <td class="right_td"> <a href="#" onclick="rptconfirm();">删除报告</a></td>
    </tr>
  </table>
    
  <div >
    <table  class="songti" align="center" width="698">
      <tr>
        <td style="width:16.6%">送检日期</td>
        <td style="width:16.7%"><?echo $get_row['songjian_riqi'];?></td>
        <td style="width:16.6%">试验日期</td>
        <td style="width:16.7%"><?echo $get_row['shiyan_riqi'];?></td>
        <td style="width:16.6%">报告日期</td>
        <td><?echo $get_row['baogao_riqi'];?></td>
      </tr>
     
      <tr>
        <td>温度(℃)</td>
        <td><?echo $get_row['wendu'];?></td>
        <td>湿度(%RH)</td>
        <td><?echo $get_row['shidu'];?></td>
        <td>数量</td>
        <td><?echo $get_row['yangjian_shuliang'];?></td>
      </tr>
     
      <tr>
        <td>试验项目</td>
        <td><?echo $get_row['shiyan_xiangmu'];?></td>
        <td>试验设备</td>
        <td><?echo $get_row['shiyan_shebei'];?></td>
        <td>试验条件</td>
        <td><?echo $get_row['shiyan_tiaojian'];?></td>
      </tr>
      <tr>
        <td>试验标准</td>
        <td colspan="9"><?echo $get_row['shiyan_biaozhun'];?></td>
      </tr>
     </table>
     <h3>试验结果</h3>
    <table  class="songti" align="center" width="698">
    
          <tr>
        <td style="width:11.1%">样品名称</td>
              <td style="width:11.1%">样品类型</td>
              <td style="width:11.1%">样品规格(mm)</td>
              <td style="width:11.1%">样品编号</td>
                      <td style="width:11.1%">浸没时间(h)</td>
                      <td style="width:11.1%">浸没前质量(g)</td>
                      <td style="width:11.1%">去除腐蚀产物质量(g)</td>
                      <td style="width:11.1%">失重量(g)</td>
                      <td>平均腐蚀速率R(mm/a)</td>
      </tr>
      
      <?php
      $result = mysql_query( $query );
      while ( $row = mysql_fetch_assoc( $result ) ) {
        echo
          '<tr>
        <td>' . $row[ 'yangjian_mingcheng' ] . '</td>
        <td>' . $row[ 'yangjian_leixing' ] . '</td>
        <td>' . $row[ 'yangjian_guige' ] . '</td>
        <td>' . $row[ 'yangjian_bianhao' ] . '</td>
        <td>' . $row[ 'jinmo_shijian' ] . '</td>
        <td>' . $row[ 'zhongliang_jinmoqian' ] . '</td>
        <td>' . $row[ 'zhongliang_jinmohou' ] . '</td>
         <td>' . $row[ 'shizhongliang' ] . '</td>
         <td>' . $row[ 'pingjun_fushi_sulv' ] . '</td>
      </tr>';
      }

      ?>
          <tr>
       <td colspan="9">注：<?echo $get_row['beizhu_zhengti'];?></td>
             </tr>
    </table>
  </div>
  <div >
    <h2>&nbsp; </h2>
    <h3>附图：</h3>
    <table  class="songti" align="center" width="698">
      <tr>
        <td>
            
            
            <?

        $sql_img = mysql_query( $query_img );

        while ( $row_img = mysql_fetch_assoc( $sql_img ) ) {
        $img_id=$row_img[ 'id' ]; 
          echo "<h3>" . $row_img[ 'text' ] . "&nbsp;&nbsp;&nbsp;&nbsp;<a href=\"#\" onclick=\"imgconfirm('确认删除图片吗？', $img_id)\">删除单张图片</a></h3>";
        
            
 
          echo '<br>';
          echo '<img src= ' . $row_img[ 'img_src' ] . ' width="500" height="" alt=""/><br><br><br>';


        }
        ?>
          
          </td>
      </tr>
    </table>
  </div>
</page>
</body>
     <script>
    
function imgconfirm(message, param) {
  var result = confirm(message);
  
  if (result) {
    // 用户点击了"确定"
    // 可以在这里执行确认后的操作
    window.location.href = '../action/img_delete_immercorro.php?baogao_bianhao=<?php echo $baogao_bianhao;?>&id='+param;
  } else {
    // 用户点击了"取消"
    // 可以在这里执行取消后的操作
    console.log("用户点击了取消。");
  }
}
         
         function rptconfirm() {
  var result = confirm("确定删除报告吗？");
  
  if (result) {
    // 用户点击了"确定"
    // 可以在这里执行确认后的操作
    window.location.href = '../action/report_delete_by_baogao_bianhao_immercorro.php?baogao_bianhao=<? echo $baogao_bianhao;?>';
  } else {
    // 用户点击了"取消"
    // 可以在这里执行取消后的操作
    console.log("用户点击了取消。");
  }
}
    </script>
</html>
