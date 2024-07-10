 

<?php

require_once '../dbconfig_thesis.php';

$jsonData = file_get_contents("php://input");
$jsonObj = json_decode($jsonData, true);


$username = $_COOKIE['lwmt_dm'];
$thesis_id=$jsonObj['thesis_id'];
$comment_date=$jsonObj['riqi'];
$comment_content=$jsonObj['comment_content'];
$comment_person=$jsonObj['comment_person'];

   $sql="INSERT INTO thesis_comment (id,thesis_id,comment_content,comment_date,comment_person) VALUES (null,'$thesis_id','$comment_content','$comment_date','$comment_person')" ;
$result=mysql_query($sql);

echo json_encode(array("message" => '', "code" => 0));
    
?>
