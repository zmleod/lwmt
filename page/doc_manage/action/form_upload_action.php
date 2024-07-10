

<?php
require_once '../dbconfig_doc.php';




// $_FILES["file"]["name"]; //得到带后缀的文件名，如  XXX.xls 注意这里的文件名不一定是最终的，最终的要在doc_name手输
$form_type = explode(".", $_FILES["form"]["name"])[1]; //通过.符号，截取 XXX.xls为两段，得到后一段xls
$doc_number = $_POST['doc_number'];  //上级文件
$form_name = $_POST['form_name']; //这是确定的文件名

$form_number = $_POST['form_number'];



$remark = $_POST['remark'];


 $dir_old = "../form/" . $form_name . "." . $form_type; //这个是要存放文件的目录，展示的页面是这个相对路径,要改一下再插入数据库
 $dir_new = iconv("UTF-8", "GB2312", $dir_old); 
 $dir_datatable="./form/" . $form_name . "." . $form_type;



    move_uploaded_file($_FILES["form"]["tmp_name"], $dir_new); //移动文件时要用转码后的字符串，不然乱码。插入数据库要用转码前的字符串，不然插不进！！！

    $sql="INSERT INTO form (id,doc_number,form_name,form_number,dir,remark) VALUES (null,'$doc_number','$form_name','$form_number','$dir_datatable','$remark')";
    $result=mysql_query($sql);

if( $result){
echo "<script>
 alert('新增表单成功');
            window.location.href = '../index_doc.php';
</script>";
}









?>



		

