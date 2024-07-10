<?php
require_once '../../dbconfig_prod_process.php';
 
//获取前端传递的参数
$shuaidai_luhao = $_GET['shuaidai_luhao'] ;
$date_start = $_GET['date_start'] ;
$date_end = $_GET['date_end'] ;

$where = [];
if (!empty($shuaidai_luhao)) {
    $where[] = "shuaidai_luhao LIKE '%{$shuaidai_luhao}%'";
}


if (!empty($date_start)) {
    $where[] = "shuaidai_riqi >= '$date_start'";

}
if (!empty($date_end)) {
    $where[] = "shuaidai_riqi <= '$date_end'";
}
      
$where_clause = count($where) ? ' WHERE ' . implode(' AND ', $where) : '';
 

 
$query = "SELECT * FROM prod_process_cool{$where_clause}"." order by shuaidai_riqi desc"; // ORDER前边有个空格！！



$data='';
// 执行 SQL 查询并输出结果
$result = mysql_query($query);

    while ($row = mysql_fetch_assoc($result)) {
        $data[] = $row;
        $count++;
    }
    echo json_encode(array('code' => 0, 'msg' => '数据加载完毕', 'count' => $count, 'data' => $data),JSON_UNESCAPED_UNICODE);

?>
