<?php

require_once '../dbconfig_project.php';


// 查询语句
$query = "SELECT * FROM project_list order by id desc";
 
// 执行查询
$result = mysql_query($query);

 
// 准备数据以供 layui 表格渲染
$data = array();
$count = 0;

 
// 遍历查询结果
if ($result) {
    while ($row = mysql_fetch_assoc($result)) {
        $data[$count] = $row;
     
        $project_id=$row['project_id'];
        $query_progress = "SELECT * FROM progress_list WHERE project_id='$project_id' ORDER BY id DESC limit 1";
        $result_progress = mysql_query($query_progress);
        $row_progress = mysql_fetch_assoc($result_progress);
        if($row_progress){
        $data[$count] = $data[$count]+$row_progress;}
        $count++;
    }
}


 
// 返回数据
echo json_encode(array('code' => 0, 'msg' => '数据加载完毕', 'count' => $count, 'data' => $data),JSON_UNESCAPED_UNICODE);
 

?>
