<?php

require_once '../../dbconfig_prod_process.php';


$id=$_GET['id'];
    	

$sql = "DELETE FROM prod_process_press WHERE id = '$id' ";
    
$result=mysql_query($sql);
	if($result){
		 echo json_encode(array("message" =>$id, "code" => 0));
	}

?>