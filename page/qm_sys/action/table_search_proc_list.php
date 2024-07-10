<?php
require_once '../dbconfig_qm_sys.php';
 
//获取前端传递的参数
$value = $_GET['value'] ;



 if($value){
$query = "SELECT * FROM guocheng_qingdan WHERE zeren_bumen='$value' ORDER BY id"; // ORDER前边有个空格！！
}else{
    $query = "SELECT * FROM guocheng_qingdan ORDER BY id"; // ORDER前边有个空格！！  
}


$data='';
// 执行 SQL 查询并输出结果
$result = mysql_query($query);

    while ($row = mysql_fetch_assoc($result)) {
        $data[] = $row;
        $count++;
    }
    echo json_encode(array('code' => 0, 'msg' => '数据加载完毕', 'count' => $count, 'data' => $data),JSON_UNESCAPED_UNICODE);

?>
