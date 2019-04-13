<?php 
include('../../connection/conn.php');

if (isset($_POST['send'])) {
    $code = $_POST['code'];
	
	$user_id = array();
	$idd = array();
	$result = mysqli_query($conn, "SELECT * FROM user WHERE active = 1");
    while ($rows = mysqli_fetch_assoc($result)) {
    	$user_id[] = $rows['userid'];
    }


    foreach ($user_id as $id) {
       if (!empty($_POST['recipients'.$id.''])) {
           $idd[] = $_POST['recipients'.$id.''];
        }     	
    }

    $a = count($idd);
    if ($a > 0) {
        foreach ($idd as $ids) {
        mysqli_query($conn, "INSERT INTO `sent_document` (`code`, `user_name`) VALUES ('{$code}', '{$ids}');");

    }

    die("<script>
                location.href = '../send_document.php?sent=1'; 
         </script>");
    }else{
      die("<script>
                location.href = '../send_document.php?sent=2'; 
         </script>");   
    }
    
}

?>