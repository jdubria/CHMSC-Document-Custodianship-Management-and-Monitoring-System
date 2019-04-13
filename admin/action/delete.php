<?php 
include('../../connection/conn.php');

if (isset($_GET['id'])) {
	$id = $_GET['id'];
	$rs = mysqli_query($conn, "UPDATE `new_dcmms`.`document` SET `active`='0', `date_archive`='2018-09-13' WHERE  `id`={$id};");

	if ($rs == TRUE) {
            die("<script>
                location.href = '../document.php?archive=1'; 
            </script>");		
	}else{
            die("<script>
                location.href = '../document.php?archive=1'; 
            </script>");		
	}
}

?>