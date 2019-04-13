<?php 
include('../../connection/conn.php');

 if (isset($_GET['id'])) {
 	$id = $_GET['id'];
 	$idd = $_GET['idd'];

$result = mysqli_query($conn, "
	UPDATE `borrowing` SET `remarks`='Returned', `dates` = NOW() WHERE  `borrowing_id`={$id};
	");

if($result == TRUE){
	die("<script>
                location.href = '../borrowers.php?id=".$idd."&&update=1'; 
            </script>");
}else{
	die("<script>
                location.href = '../borrowers.php?id=".$idd."&&update=2'; 
            </script>");
} 	
 }




?>