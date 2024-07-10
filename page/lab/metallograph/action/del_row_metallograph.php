<?php

require_once '../../dbconfig_lab.php';


$id=$_GET['id'];
    	

$sql = "DELETE FROM metallograph_exp WHERE id = '$id' ";
    
$result=mysql_query($sql);
	if($result){
		 echo json_encode(array("message" =>$id, "code" => 0));
	}

?>