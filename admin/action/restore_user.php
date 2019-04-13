<?php 

	include('../../connection/conn.php');
session_start();

if(isset($_GET['id'])){
    $id = $_GET['id'];  

  $query = "UPDATE `user` SET `active`='1' WHERE  `userid`={$id};";

  $rs = mysqli_query($conn, $query);

  if($rs == 1){
            die("<script>
                location.href = '../user.php?restore=1'; 
            </script>");

  }else{
            die("<script>
                location.href = '../user.php?restore=2'; 
            </script>");

  }    
}

?>