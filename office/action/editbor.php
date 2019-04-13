<?php 
    include('../../connection/conn.php');
	$code; $name; $type; $bname; $address; $contact; $deadline;
    if(isset($_POST['update'])){
	 $id=$_POST['id'];
   $name = $_POST['bor_name'];
   $address = $_POST["address"];
   $contact = $_POST["contact"]; 



 	$query = "UPDATE `borrowers` SET `bname`='{$name}', `address`='{$address}', `contact`='{$contact}' WHERE  `bor_id`={$id};";
     $rs = mysqli_query($conn, $query);

          if($rs==1){
            die("<script>
                location.href = '../borrowers.php?update=1'; 
            </script>");
          }else{
            die("<script>
                location.href = '../borrowers.php?update=2'; 
            </script>");
          } 	
}
