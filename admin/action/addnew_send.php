<?php
	include('../../connection/conn.php');

    session_start();
 	
    if (isset($_POST['submit'])) {
    include('function.php');
 	$code = $_POST['code'];
 	$name = $_POST['name'];
    $class = $_POST['classification'];
 	$type = $_POST['type'];
 	$loc = $_POST['loc'];
    $office = $_SESSION['office_id'];
    if($_FILES["file"]["name"] != ''){
    $file_name = $_FILES['file']['name'];
    $file = upload_file();
    }



    $rs = mysqli_query($conn, "
INSERT INTO `document` (`code`, `date-uploaded`, `name`, `dc_id`, `dt_id`, `file`, `file_destination`, `Doc_address`, `office_id`, `active`, `send_doc`, `comment_status`) VALUES ('{$code}', DATE(NOW()), '{$name}', '{$class}', '{$type}', '{$file_name}', '{$file}', '{$loc}', '{$office}', 1, 1, 1);
        ");
    
         if($rs==1){
            die("<script>
                location.href = '../send_document.php?added=1'; 
            </script>");
         }else{
            die("<script>
                location.href = '../send_document.php?added=2'; 
            </script>");
         }	

    
    }else{
             die("<script>
                location.href = '../send_document.php?added=2'; 
            </script>");      
    }
 
?>
