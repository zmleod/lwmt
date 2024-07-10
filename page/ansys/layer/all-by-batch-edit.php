<!DOCTYPE html>
<html lang="en">
<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<link href="../../../assets/css/layui.css" rel="stylesheet">
<script src="../../../assets/js/layui.js"></script> 
<table class="layui-table">
    <tr>    
        <td>
            批次号
        </td>
        <td>
            操作
        </td>
    </tr>

<?php

require_once '../dbconfig_ansys.php';
mysql_select_db('user');
$username = $_COOKIE['lwmt_dm'];
$user_db="all_by_batch_".$username;
$sql = "SELECT * FROM $user_db";
$result=mysql_query($sql);

while($row = mysql_fetch_array($result)){

echo "<tr><td>$row[batch]</td>";
echo "<td><a href=../action/all-by-batch-del-action.php?id=$row[id]>删除</a></td></tr>";
}
?>
</table>
</body>
</html>
