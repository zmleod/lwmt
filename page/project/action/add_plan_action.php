<?php

require_once '../dbconfig_project.php';

// if ( $_SERVER[ "REQUEST_METHOD" ] == "POST" ) {
$jsonData = file_get_contents("php://input");
$jsonObj = json_decode($jsonData, true);

$project_id = $jsonObj['project_id'];
$progress_name = $jsonObj['progress_name'];
$plan_start_date = $jsonObj['plan_start_date'];
$progress_content = $jsonObj['progress_content'];
$progress_content=nl2br($progress_content);
$progress_content=preg_replace('~(?<=\s)\s~', '&nbsp;', $progress_content);






$sql = "INSERT INTO progress_list
(id
,project_id
,progress_name
,plan_start_date
,progress_content
,is_plan

) VALUES (
null
,'$project_id'
,'$progress_name'
,'$plan_start_date'
,'$progress_content'
,'1'
)";


$result = mysql_query($sql) ;
if($result){
    echo json_encode(array("message" => '', "code" => 0));
}










