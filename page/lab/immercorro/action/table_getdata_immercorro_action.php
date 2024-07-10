<?php

require_once '../../dbconfig_lab.php';


// 查询语句
$query = "SELECT * FROM immercorro_exp order by shiyan_riqi desc";
 
// 执行查询
$result = mysql_query($query);

 
// 准备数据以供 layui 表格渲染
$data = array();
$count = 0;

 
// 遍历查询结果
if ($result) {
    while ($row = mysql_fetch_assoc($result)) {
        $data[] = $row;
        $count++;
    }
}

 
// 返回数据
echo json_encode(array('code' => 0, 'msg' => '数据加载完毕', 'count' => $count, 'data' => $data),JSON_UNESCAPED_UNICODE);
 

?>
