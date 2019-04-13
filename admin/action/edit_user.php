<?php 
include('../../connection/conn.php');

if (isset($_POST['edit'])) {
	$userid = $_POST['userid'];
	$user_level = $_POST['user_level'];
	$name = $_POST['name'];
	$office = $_POST['office'];
	$address = $_POST['address'];
	$contact = $_POST['contact'];

	$query = mysqli_query($conn, "
	UPDATE `user` SET `office_id`='{$office}', `name`='{$name}', `address`='{$address}', `contact`='{$contact}', `user_level`={$user_level} WHERE  `userid`={$userid};	
		");
	      if($query==1){
            die("<script>
                location.href = '../user.php?update=1'; 
            </script>");
         }else{
            die("<script>
                location.href = '../user.php?update=2'; 
            </script>");
         }
}


?>