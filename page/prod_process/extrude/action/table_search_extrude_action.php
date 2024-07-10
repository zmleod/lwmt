<?php
require_once '../../dbconfig_prod_process.php';
 
//获取前端传递的参数
$jichu_picihao = $_GET['jichu_picihao'] ;
$date_start = $_GET['date_start'] ;
$date_end = $_GET['date_end'] ;

$where = [];
if (!empty($jichu_picihao)) {
    $where[] = "jichu_picihao LIKE '%{$jichu_picihao}%'";
}


if (!empty($date_start)) {
    $where[] = "jichu_riqi >= '$date_start'";

}
if (!empty($date_end)) {
    $where[] = "jichu_riqi <= '$date_end'";
}
      
$where_clause = count($where) ? ' WHERE ' . implode(' AND ', $where) : '';
 
 
$query = "SELECT * FROM prod_process_extrude{$where_clause}"." order by jichu_riqi desc"; // ORDER前边有个空格！！



$data='';
// 执行 SQL 查询并输出结果
$result = mysql_query($query);

    while ($row = mysql_fetch_assoc($result)) {
        $data[] = $row;
        $count++;
    }
    echo json_encode(array('code' => 0, 'msg' => '数据加载完毕', 'count' => $count, 'data' => $data),JSON_UNESCAPED_UNICODE);

?>
