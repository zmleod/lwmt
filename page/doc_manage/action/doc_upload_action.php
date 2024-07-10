

<?php
require_once '../dbconfig_doc.php';




// $_FILES["file"]["name"]; //得到带后缀的文件名，如  XXX.xls 注意这里的文件名不一定是最终的，最终的要在doc_name手输
$doc_type = explode(".", $_FILES["file"]["name"])[1]; //通过.符号，截取 XXX.xls为两段，得到后一段xls

$doc_name = $_POST['doc_name']; //这是确定的文件名

$doc_number = $_POST['doc_number'];
$doc_version = $_POST['doc_version'];
$department = $_POST['department'];
$effective_date = $_POST['effective_date'];
$remark = $_POST['remark'];
$is_effective = "y";

 $dir_effective_old = "../doc/effective/" . $doc_name . "." . $doc_type; //这个是要存放文件的目录，展示的页面是这个相对路径,要改一下再插入数据库
 $dir_effective_new = iconv("UTF-8", "GB2312", $dir_effective_old); 
 $dir_effective_datatable="./doc/effective/" . $doc_name . "." . $doc_type;
// $dir_history = "../doc/history/" . $doc_name . "-".$doc_version."-".$effective_date."." . $doc_type;



if (is_file($dir_effective_new)) {    // 如果有同name文件，提示手动作废

    die("有同名文件，先作废后再增加") ;
  
    // rename($dir_effective, $dir_history);
    // //将同number，但is_effective还是y的改掉
    // $sql_history = "UPDATE doc SET is_effective='n',nullify_date='$effective_date',dir='$dir_history' WHERE doc_number='$doc_number'";
    // $result_history=mysql_query($sql_history);
} 

    move_uploaded_file($_FILES["file"]["tmp_name"], $dir_effective_new); //移动文件时要用转码后的字符串，不然乱码。插入数据库要用转码前的字符串，不然插不进！！！

    $sql_effective="INSERT INTO doc (id,doc_name,doc_number,doc_version,is_effective,effective_date,department,remark,dir) VALUES (null,'$doc_name','$doc_number','$doc_version','y','$effective_date','$department','$remark','$dir_effective_datatable')";
    $result_effective=mysql_query($sql_effective);

if( $result_effective){
echo "<script>
 alert('新增文件成功');
            window.location.href = '../index_doc.php';
</script>";
}









?>



		

