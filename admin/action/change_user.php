<?php
include('../../connection/conn.php');

if (isset($_POST['save'])) {
	$userid = $_POST['userid'];
	$user_name = $_POST['user_name'];
	$name = $_POST['name'];
	$password = $_POST['password'];
	$password2 = $_POST['password2'];



	$result = mysqli_query($conn, "SELECT user_name, password FROM user WHERE user_name = '{$user_name}' 
		AND password = SHA1('{$password}')");

	$num_row = mysqli_fetch_row($result);

	if ($num_row > 0) {
	
		if (!empty($name) && !empty($password2)) {
			$rs = mysqli_query($conn, "
		UPDATE `new_dcmms`.`user` SET `user_name`='{$name}', `password`=SHA1('{$password2}') WHERE  `userid`={$userid};
			");
			die("<script>
                location.href = '../user.php?update=1'; 
            </script>");
		}elseif (empty($name) && !empty($password2)) {
			$rs = mysqli_query($conn, "
		UPDATE `new_dcmms`.`user` SET `user_name`='{$user_name}', `password`=SHA1('{$password2}') WHERE  `userid`={$userid};
			");
			die("<script>
                location.href = '../user.php?update=1'; 
            </script>");
		}else{
		die("<script>
                location.href = '../user.php?error=1'; 
            </script>");		
		}

	}else {
		die("<script>
                location.href = '../user.php?error=2'; 
            </script>");
	}
}

?>