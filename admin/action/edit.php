<?php
	include('../../connection/conn.php');
	include('function.php');
	session_start();
 	
	$id=$_GET['id'];
 
 	$code = $_POST['code'];
 	$name = $_POST['name'];
    $class = $_POST['classification'];
 	$type = $_POST['type'];
 	$loc = $_POST['loc'];

    if($_FILES["file"]["name"] != ''){
        $file_name = $_FILES['file']['name'];
    	$file = upload_file();
    }else{
    	$file_name = $_POST['file_name'];
        $file =  $_POST['file_destination'];
    } 	   
 	
	$query = "UPDATE `document` SET `code`='{$code}', `name`='{$name}', `dc_id`='{$class}', `dt_id`='{$type}', `Doc_address`='{$loc}', `file`='{$file_name}', `file_destination`='{$file}' WHERE  `id`='{$id}';";

        $rs = mysqli_query($conn, $query);
         if($rs==1){ 
            die("<script>
                location.href = '../document.php?update=1'; 
            </script>");
         }else{
            die("<script>
                location.href = '../document.php?update=2'; 
            </script>");
        }	
 
?>         