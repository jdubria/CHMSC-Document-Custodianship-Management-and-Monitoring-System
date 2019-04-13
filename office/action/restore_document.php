<?php 

include('../../connection/conn.php');
if(isset($_POST['restore'])){
	$id = $_POST['id'];

	  $query = "UPDATE `document` SET `active`='1' WHERE  `id`={$id};";

  $rs = mysqli_query($conn, $query);

  if($rs == 1){
            die("<script>
                location.href = '../document.php?restore=1'; 
            </script>");
  }else{
            die("<script>
                location.href = '../document.php?restore=2'; 
            </script>");  	
  }

}



















?>