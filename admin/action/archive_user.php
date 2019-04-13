<?php
include('../../connection/conn.php');

if (isset($_POST['archive'])) {
	$userid = $_POST['userid'];

	$query = mysqli_query($conn, "
		UPDATE `user` SET `active`='0' WHERE  `userid`='{$userid}';
		");
	
	      if($query==1){
            die("<script>
                location.href = '../user.php?archive=1'; 
            </script>");
         }else{
            die("<script>
                location.href = '../user.php?archive=2'; 
            </script>");
        }
}


?>