

<?php
require_once '../dbconfig_doc.php';

$id = $_GET['id'];
$dir = $_GET['dir'];
$doc_version=$_GET['doc_version'];
$nullify_date = date("Y-m-d");
// 获取当前时间戳（秒）
$time = microtime(true);
// 将当前时间戳转换为毫秒
$milliseconds = round($time * 1000);
// 输出当前时间（精确到毫秒）

$dir_history_datatable = str_replace("effective", "history", $dir)."-作废日期-".$milliseconds."-作废版本-".$doc_version;//插入数据表中的路径，要跟原来的路径一致

$dir_effective = "." . $dir; //在原来的路径前增加.符号，不然rename时路径有误
$dir_history = str_replace("effective", "history", $dir_effective)."-作废日期-".$milliseconds."-作废版本-".$doc_version;


$dir_effective_new = iconv("UTF-8", "GB2312", $dir_effective); //要转码才能rename
$dir_history_new = iconv("UTF-8", "GB2312", $dir_history);
rename($dir_effective_new, $dir_history_new);














//将同number，但is_effective还是y的改掉
$sql_history = "UPDATE doc SET is_effective='n',nullify_date='$nullify_date',dir='$dir_history_datatable' WHERE id='$id'";
$result_history = mysql_query($sql_history);



if ($result_history) {
    echo json_encode(array("message" => $id, "code" => 0));
}










?>



		

