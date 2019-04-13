<?php 
include('../../connection/conn.php');

if (isset($_POST['edit'])) {
	$office_id = $_POST['office_id'];
	$office_name = $_POST['office_name'];
	$default = $_POST['default'];

	$query = mysqli_query($conn, "
	UPDATE `office` SET `office_name`='{$office_name}', `default`='{$default}' WHERE  `office_id`={$office_id};");

	      if($query==1){
            die("<script>
                location.href = '../settings.php?update=1'; 
            </script>");
         }else{
            die("<script>
                location.href = '../settings.php?update=2'; 
            </script>");
         }
}


?>