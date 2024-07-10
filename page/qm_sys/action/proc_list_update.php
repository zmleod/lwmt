<?php

require_once '../dbconfig_qm_sys.php';

$id=$_POST['id'];
$field=$_POST['field'];
$value=$_POST['value'];

// 查询语句
$query = "UPDATE guocheng_qingdan SET $field='$value' where id='$id'";
 
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
    echo json_encode(array('code' => 1, 'msg' => '编辑成功', 'count' => $count, 'data' => $data),JSON_UNESCAPED_UNICODE);
}else{
    echo json_encode(array('code' => 0, 'msg' => '编辑不成功失败', 'count' => $count, 'data' => $data),JSON_UNESCAPED_UNICODE);
}

 
// 返回数据

 

?>
