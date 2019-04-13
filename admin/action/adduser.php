<?php
	include('../../connection/conn.php');
    include('function.php');
    session_start();
 	
 	$user_level = $_POST['user_level'];
    $office = $_POST['office'];
    $uname = $_POST['u_name'];
    $password1 = $_POST['password1'];
    $password2 = $_POST['password2'];
 	$name = $_POST['name'];
 	$address = $_POST['address'];
    $contact = $_POST['contact'];

    if ($password1 == $password2) {
            $rs = mysqli_query($conn, "
INSERT INTO `new_dcmms`.`user` (`user_level`, `user_name`, `password`, `register`, `office_id`, `name`, `address`, `contact`, `active`) VALUES ('{$user_level}', '{$uname}', SHA1('$password1'), DATE(NOW()), '{$office}', '{$name}', '{$address}', '{$contact}', 1);
        ");
    
         if($rs==1){
            die("<script>
                location.href = '../user.php?added=1'; 
            </script>");
         }else{
            die("<script>
                location.href = '../user.php?added=2'; 
            </script>");
         }  
    }else{
        die("<script>
                location.href = '../user.php?error=1'; 
            </script>");
    }
    


    
 
?>
