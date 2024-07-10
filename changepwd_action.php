<?
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


    if (isset($_COOKIE['lwmt_dm'])) {
        $password=md5($_POST['password']);
    $username=$_COOKIE['lwmt_dm'];
        $sql="UPDATE user SET password = '$password' where username = '$username'";
      $result=mysql_query($sql);
        if($result){
            
            echo "<script> window.location.href = \"./logout_action.php\";</script>";
        }
        
        
} else{
    die("未登录");
}