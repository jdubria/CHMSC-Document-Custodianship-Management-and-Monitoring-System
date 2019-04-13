<?php 

include('../../connection/conn.php');
if (isset($_GET['id'])) {
	$id = $_GET['id'];

	$success = mysqli_query($conn, "UPDATE `borrowing` SET `active`='0' WHERE  `borrowing_id`={$id};");

	if ($success == 1) {
            die("<script>
                location.href = '../borrowing.php?archive=1'; 
            </script>");
	}else{
            die("<script>
                location.href = '../borrowing.php?archive=2'; 
            </script>");
	}
}



?>