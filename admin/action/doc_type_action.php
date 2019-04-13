<?php 
include('../../connection/conn.php');

if (isset($_POST['save'])) {
	$type = $_POST['type'];
	mysqli_query($conn, "INSERT INTO `new_dcmms`.`document_type` (`type`, `active`) VALUES ('".$type."', '1');");
		die("<script>
			location.href = '../document_type.php?added=1'; 
		</script>");

}elseif (isset($_POST['update'])) {
	$type = $_POST['type'];
	$id = $_POST['id'];

	mysqli_query($conn, "UPDATE `new_dcmms`.`document_type` SET `type`='".$type."' WHERE  `dt_id`=".$id.";");
		die("


			<script>
			location.href = '../document_type.php?success=1'; 
		</script>");		
	
	
}

?>