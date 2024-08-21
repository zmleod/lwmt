<?php
$db = array (
		'server' => 'localhost',
		'port' => '3306',
		'username' => 'root',
		'password' => '123456',
		'database' => 'user' 
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

$jsonData = file_get_contents("php://input");
$jsonObj = json_decode($jsonData,true);
$username=$jsonObj['username'];
$password= md5($jsonObj['password']);



$sql="SELECT * FROM user WHERE username = '$username' AND password = '$password'";
$result= mysql_query($sql);
$get_row = mysql_fetch_array( $result );



if($get_row['username']){
    
 $cookie_name = 'lwmt_dm';
 $cookie_value = $username;
 $cookie_expire = time() + (86400 * 30); // 设置cookie过期时间为30天
 $cookie_path='/';

  setcookie($cookie_name, $cookie_value, $cookie_expire);

  // setcookie('wikiUserName',$cookie_value,$cookie_expire,$cookie_path,'');
    
 echo json_encode(array("message" =>'123', "code" => 0));
    
    }
else {
    
  echo json_encode(array("message" =>'123', "code" => 1));
}

?>