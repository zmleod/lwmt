<?php
require_once '../../dbconfig_lab.php';
 
//获取前端传递的参数
$baogao_bianhao_sanfang = $_GET['baogao_bianhao_sanfang'] ;
$baogao_bianhao = $_GET['baogao_bianhao'] ;

$where = [];
if (!empty($baogao_bianhao_sanfang)) {
    $where[] = "baogao_bianhao_sanfang LIKE '%{$baogao_bianhao_sanfang}%'";
}
if (!empty($baogao_bianhao)) {
    $where[] = "baogao_bianhao LIKE '%{$baogao_bianhao}%'";
}
 
$where_clause = count($where) ? ' WHERE ' . implode(' AND ', $where) : '';
 
$query = "SELECT * FROM chemcompo_exp{$where_clause}";
 
// 执行 SQL 查询并输出结果
$result = mysql_query($query);
if ($result) {
    while ($row = mysql_fetch_assoc($result)) {
        $data[] = $row;
        $count++;
    }
}
echo json_encode(array('code' => 0, 'msg' => '数据加载完毕', 'count' => $count, 'data' => $data),JSON_UNESCAPED_UNICODE);
?>
