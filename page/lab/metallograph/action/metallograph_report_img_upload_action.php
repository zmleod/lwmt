

<?php
require_once '../../dbconfig_lab.php';


$baogao_bianhao=$_POST["baogao_bianhao"];

for($i=1;;$i++){
    if($_FILES["file_".$i]["name"]){
        $text[$i]=$_POST["text_".$i];
        $imgType[$i] = explode("/",$_FILES["file_".$i]["type"])[1];
         $img_src[$i] = "../upload/metallograph_img_2024/".time().md5($_FILES["file_".$i]["name"]).'.'.$imgType[$i];
        
      
        	
	    move_uploaded_file($_FILES["file_".$i]["tmp_name"], $img_src[$i]);
        
   
        $sql="INSERT INTO metallograph_exp_img (id,baogao_bianhao,text,img_src) VALUES (null,'$baogao_bianhao', '$text[$i]','$img_src[$i]' )";
        
        
       $result = mysql_query( $sql );
        
        
    }
    else{
        break;
    }
    
}
echo "<script>
 alert('图片插入成功');
            window.location.href = '../operate/report_view_metallograph.php?baogao_bianhao=$baogao_bianhao';
</script>";

?>



		

