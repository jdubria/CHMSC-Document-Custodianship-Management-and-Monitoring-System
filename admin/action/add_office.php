<?php 
include('../../connection/conn.php');

if (isset($_POST['save'])) {
	$office_name = $_POST['office_name'];
	$default = $_POST['default'];

	$rs = mysqli_query($conn, "INSERT INTO `office` (`office_name`, `default`) VALUES ('{$office_name}', '{$default}')");
	if ($rs == TRUE) {
            die("<script>
                location.href = '../settings.php?added=1'; 
            </script>");		
	}else{
            die("<script>
                location.href = '../settings.php?added=2'; 
            </script>");
	}

}


?>