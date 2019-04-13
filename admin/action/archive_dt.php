<?php
include('../../connection/conn.php');

if (isset($_POST['archive'])) {
	$dt_id = $_POST['dt_id'];

	$query = mysqli_query($conn, "
		UPDATE `document_type` SET `active`='0' WHERE  `dt_id`={$dt_id};
		");
	
	      if($query==1){
            die("<script>
                location.href = '../document_type.php?archive=1'; 
            </script>");
         }else{
            die("<script>
                location.href = '../document_type.php?archive=2'; 
            </script>");
        }
}


?>