<?php 
  include('../../connection/conn.php');
  session_start();

  $id; $code; $name; $type; $bname; $address; $contact; $deadline; $date; 

  if(isset($_POST['delete'])){
  	$id = $_POST['id'];

  	$query = "UPDATE `borrowers` SET `dates`= NOW(), `active`='0' WHERE  `bor_id`={$id};";

 $rs = mysqli_query($conn, $query);

  if($rs == 1){
            die("<script>
                location.href = '../borrowers.php?archive=1'; 
            </script>");    
  }else{
            die("<script>
                location.href = '../borrowers.php?archive=2'; 
            </script>");  
  }

  }

?>