<?php
require_once '../../dbconfig_lab.php';
 
//获取前端传递的参数
$yangjian_picihao = $_GET['yangjian_picihao'] ;
$baogao_bianhao = $_GET['baogao_bianhao'] ;
$yangjian_mingcheng = $_GET['yangjian_mingcheng'] ;
$date_start = $_GET['date_start'] ;
$date_end = $_GET['date_end'] ;

$where = [];
if (!empty($yangjian_picihao)) {
    $where[] = "yangjian_picihao LIKE '%{$yangjian_picihao}%'";
}
if (!empty($baogao_bianhao)) {
    $where[] = "baogao_bianhao LIKE '%{$baogao_bianhao}%'";
}
if (!empty($yangjian_mingcheng)) {
    $where[] = "yangjian_mingcheng LIKE '%{$yangjian_mingcheng}%'";
}
if (!empty($date_start)) {
    $where[] = "baogao_riqi >= '$date_start'";

}
if (!empty($date_end)) {
    $where[] = "baogao_riqi <= '$date_end'";
}
      
$where_clause = count($where) ? ' WHERE ' . implode(' AND ', $where) : '';
 
$query = "SELECT * FROM tensile_exp{$where_clause}"." order by baogao_riqi desc"; // ORDER前边有个空格！！



$data='';
// 执行 SQL 查询并输出结果
$result = mysql_query($query);

    while ($row = mysql_fetch_assoc($result)) {
        $data[] = $row;
        $count++;
    }
    echo json_encode(array('code' => 0, 'msg' => '数据加载完毕', 'count' => $count, 'data' => $data),JSON_UNESCAPED_UNICODE);

?>
