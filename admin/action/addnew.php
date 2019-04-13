<?php
	include('../../connection/conn.php');
    include '../../connection/session.php';
    include('function.php');
    
 	$office = $_SESSION['office_id'];
 	$code = $_POST['code'];
 	$name = $_POST['name'];
    $class = $_POST['classification'];
 	$type = $_POST['type'];
 	$loc = $_POST['loc'];
    if($_FILES["file"]["name"] != ''){
    $file_name = $_FILES['file']['name'];
    $file = upload_file();
    }


    $rs = mysqli_query($conn, "
INSERT INTO `document` (`code`, `date-uploaded`, `name`, `dc_id`, `dt_id`, `file`, `file_destination`, `Doc_address`, `office_id`, `active`, `comment_status`) VALUES ('{$code}', DATE(NOW()), '{$name}', '{$class}', '{$type}', '{$file_name}', '{$file}', '{$loc}', '{$office}', 1, 1);
        ");
    
         if($rs==1){
            die("<script>
                location.href = '../document.php?added=1'; 
            </script>");
         }else{
            die("<script>
                location.href = '../document.php?added=2'; 
            </script>");
         }	

    
 
?>
