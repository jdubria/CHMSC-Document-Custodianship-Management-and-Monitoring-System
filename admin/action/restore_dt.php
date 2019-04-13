<?php 

	include('../../connection/conn.php');
session_start();

if(isset($_GET['id'])){
    $id = $_GET['id'];  

  $query = "UPDATE `document_type` SET `active`='1' WHERE  `dt_id`={$id};";

  $rs = mysqli_query($conn, $query);

  if($rs == 1){
            die("<script>
                location.href = '../document_type.php?restore=1'; 
            </script>");

  }else{
            die("<script>
                location.href = '../document_type.php?restore=2'; 
            </script>");

  }    
}

?>