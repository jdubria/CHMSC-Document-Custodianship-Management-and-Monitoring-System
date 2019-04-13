<?php

include('../../connection/conn.php');
session_start();

if (isset($_POST['submit'])) {
	$name = $_POST['bor_name'];
	$address = $_POST["address"];
	$contact = $_POST["contact"];
	$office = $_SESSION['office_id'];


	if (($name != "") && ($address != "") && ($contact != "")) {
		$rows = mysqli_query($conn, "
			INSERT INTO `borrowers` (`bname`, `address`, `contact`, `active`, `office_id`) VALUES ('{$name}', '{$address}', '{$contact}', 1, '{$office}');
			");

		if ($rows == TRUE) {
			die("<script>
                location.href = '../borrowers.php?added=1'; 
            </script>");
		}else{
			die("<script>
                location.href = '../borrowers.php?added=2'; 
            </script>");
		}
	}
	else{
		die("<script>
                location.href = '../borrowers.php?added=2'; 
            </script>");
	}

}

?>