<?php
include('../../connection/conn.php');

if (isset($_POST['archive'])) {
	$office_id = $_POST['office_id'];


    $query = mysqli_query($conn, "
    UPDATE `office` SET `active`='0' WHERE  `office_id`='{$office_id}';
        ");
	
	      if($query==1){
            die("<script>
                location.href = '../settings.php?archive=1'; 
            </script>");
         }else{
            die("<script>
                location.href = '../settings.php?archive=2'; 
            </script>");
        }
}


?>