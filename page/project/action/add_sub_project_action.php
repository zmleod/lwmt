<?php

require_once '../dbconfig_project.php';

// if ( $_SERVER[ "REQUEST_METHOD" ] == "POST" ) {
$jsonData = file_get_contents("php://input");
$jsonObj = json_decode($jsonData, true);

$father_id = $jsonObj['project_id'];
$progress_name = $jsonObj['progress_name'];
$progress_date = $jsonObj['progress_date'];
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
,'$progress_name'
,'$progress_date'
,'$date_end_plan'
,'$fuzeren'
)";
$result = mysql_query($sql) ;
$get_insert_id=mysql_insert_id();
$son_id="P".$progress_date.$get_insert_id;

$sql = "UPDATE project_list SET project_id = '$son_id'  where id = '$get_insert_id' ";
$result = mysql_query($sql) ;

$sql = "INSERT INTO progress_list
(id
,project_id
,progress_id
,progress_date
,progress_name
,sub_project_id
) VALUES (
null
,'$father_id'
,null
,'$progress_date'
,'$progress_name'
,'$son_id'
)";
$result = mysql_query($sql) ;
$get_insert_id=mysql_insert_id();
$me_id="S".$progress_date.$get_insert_id;
$sql = "UPDATE progress_list SET progress_id = '$me_id'  where id = '$get_insert_id' ";
$result = mysql_query($sql) ;





if($result){
    echo json_encode(array("message" => '', "code" => 0));
}










