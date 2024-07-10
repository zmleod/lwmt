<?php

require_once '../dbconfig_ansys.php';
mysql_select_db('user');
$username = $_COOKIE['lwmt_dm'];


$yangjian_picihao=$_GET['yangjian_picihao'];
$user_db="all_by_batch_".$username;

$picihao_check="SELECT * FROM $user_db WHERE batch='$yangjian_picihao'";
 $check_result=mysql_query($picihao_check);
 $i=0;
 while($row_check=mysql_fetch_array($check_result)){
$i++;
	
 }
if($i>0)
{echo json_encode(array("message" =>$id, "code" => 1));}
else{
$sql = "INSERT INTO $user_db VALUES (null,'$yangjian_picihao')";
    
$result=mysql_query($sql);
	if($result){
		 echo json_encode(array("message" =>$id, "code" => 0));
	}
}
?>