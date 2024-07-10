<?php

//  if (!isset($_COOKIE['lwmt_dm'])) {
//      die("没有登录");
    
// // } 
//  if (isset($_COOKIE['lwmt_dm'])) {
//     $username=$_COOKIE['lwmt_dm'];

//      $db_user = array (
// 		'server' => 'localhost',
// 		'port' => '3306',
// 		'username' => 'root',
// 		'password' => '123456',
// 		'database' => 'user' 
// );
//      $conn_user = @mysql_connect($db_user['server'].':'.$db_user['port'],$db_user['username'],$db_user['password']);
//      mysql_set_charset('utf8', $conn_user);
// 	// 选择数据库
// 	mysql_select_db($db_user['database'], $conn_user);
     
//      $sql="SELECT * FROM user WHERE username = '$username'";
//      $result=mysql_query($sql);
//      $row=mysql_fetch_array($result);
 
//      if($row['authority']!="all")
//      {
//         die("没有权限");  
//      }
     
// } 



$db = array (
		'server' => 'localhost',
		'port' => '3306',
		'username' => 'root',
		'password' => '123456',
		'database' => 'thesis_manage' 
);


$conn = @mysql_connect($db['server'].':'.$db['port'],$db['username'],$db['password']);
if (! $conn) {
	echo "服务器无法连接！" . mysql_error();
} else {
	        // 声明字符集
	mysql_set_charset('utf8', $conn);
	// 选择数据库
	mysql_select_db($db['database'], $conn);
}
error_reporting(0);

?>