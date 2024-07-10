<?php
require_once '../../dbconfig_prod_process.php';
 
//获取前端传递的参数
$yading_picihao = $_GET['yading_picihao'] ;
$date_start = $_GET['date_start'] ;
$date_end = $_GET['date_end'] ;

$where = [];
if (!empty($yading_picihao)) {
    $where[] = "yading_picihao LIKE '%{$yading_picihao}%'";
}


if (!empty($date_start)) {
    $where[] = "yading_riqi >= '$date_start'";

}
if (!empty($date_end)) {
    $where[] = "yading_riqi <= '$date_end'";
}
      
$where_clause = count($where) ? ' WHERE ' . implode(' AND ', $where) : '';
 
$query = "SELECT * FROM prod_process_press{$where_clause}"." order by yading_riqi desc"; // ORDER前边有个空格！！



$data='';
// 执行 SQL 查询并输出结果
$result = mysql_query($query);

    while ($row = mysql_fetch_assoc($result)) {
        $data[] = $row;
        $count++;
    }
    echo json_encode(array('code' => 0, 'msg' => '数据加载完毕', 'count' => $count, 'data' => $data),JSON_UNESCAPED_UNICODE);

?>
