<?php

require_once '../dbconfig_project.php';

// if ( $_SERVER[ "REQUEST_METHOD" ] == "POST" ) {
$jsonData = file_get_contents("php://input");
$jsonObj = json_decode($jsonData, true);

$father_id = $jsonObj['project_id'];
$project_name = $jsonObj['project_name'];
$date_start = $jsonObj['date_start'];
$date_end_plan = $jsonObj['date_end_plan'];
$fuzeren = $jsonObj['fuzeren'];



$sql = "INSERT INTO project_list
(id
,project_id
,project_name
,date_start
,date_end_plan
,fuzeren
) VALUES (
null
,null
,'$project_name'
,'$date_start'
,'$date_end_plan'
,'$fuzeren'
)";
$result = mysql_query($sql) ;
$get_insert_id=mysql_insert_id();
$project_id="P".$date_start.$get_insert_id;

$sql = "UPDATE project_list SET project_id = '$project_id'  where id = '$get_insert_id' ";
$result = mysql_query($sql) ;







if($result){
    echo json_encode(array("message" => $project_id, "code" => 0));
}










