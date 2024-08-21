

<?php
require_once '../dbconfig_project.php';

$project_id=$_POST["project_id"];
$progress_id=$_POST["progress_id"];


for($i=1;;$i++){
    if($_FILES["file_".$i]["name"]){
        $file_name=$_FILES["file_".$i]["name"];
    
        
        $fileType = explode(".",$file_name)[1];
   
       
 
         $file_src= "../upload/".time().md5($file_name).'.'.$fileType;
        
       
        	
	    move_uploaded_file($_FILES["file_".$i]["tmp_name"], $file_src);
        
   $temp_src=str_replace("..",".", $file_src);
        $sql="INSERT INTO file_list (id,progress_id,file_name,file_dir) VALUES (null,'$progress_id', '$file_name','$temp_src' )";
        
        
       $result = mysql_query( $sql );
        
        
    }
    else{
        break;
    }
    
}
echo "<script>
 alert('附件增加成功');
            window.location.href = '../project.php?project_id=$project_id';
</script>";

?>



		

