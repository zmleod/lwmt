<?php

require_once '../dbconfig_project.php';

// if ( $_SERVER[ "REQUEST_METHOD" ] == "POST" ) {
$jsonData = file_get_contents("php://input");
$jsonObj = json_decode($jsonData, true);

$project_id = $jsonObj['project_id'];
$progress_name = $jsonObj['progress_name'];
$progress_date = $jsonObj['progress_date'];
$progress_content = $jsonObj['progress_content'];
$progress_content=nl2br($progress_content);
$progress_content=preg_replace('~(?<=\s)\s~', '&nbsp;', $progress_content);





$sql = "INSERT INTO progress_list
(id
,project_id
,progress_name
,progress_date
,progress_content

) VALUES (
null
,'$project_id'
,'$progress_name'
,'$progress_date'
,'$progress_content'

)";


$result = mysql_query($sql) ;
$get_insert_id=mysql_insert_id();
$progress_id="S".$progress_date.$get_insert_id;
$sql = "UPDATE progress_list SET progress_id = '$progress_id'  where id = '$get_insert_id' ";
$result = mysql_query($sql) ;

if($result){
    echo json_encode(array("message" => '', "code" => 0));
}










