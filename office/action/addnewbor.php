<?php 
	include('../../connection/conn.php');
    session_start();

    $code; $name; $type; $bname; $address; $contact; $deadline; $purpose;
if(isset($_POST['save'])){
    $code = $_POST['code'];
 	$bname = $_POST['bname'];
    $purpose = $_POST['purpose'];
    $deadline = $_POST['deadline'];
    $office = $_SESSION['office_id'];

    if($bname != ""){
      $result = mysqli_query($conn,"SELECT bor_id FROM borrowers WHERE bname = '{$bname}';");
      $row = mysqli_num_rows($result);

      if($row > 0){
        $fetch = mysqli_fetch_assoc($result);
        $id = $fetch['bor_id'];
        
        $results = mysqli_query($conn, "
            INSERT INTO `borrowing` (`date`, `code`, `bor_id`, `purpose`, `deadline`, `office_id`, `active`) VALUES (NOW(), '{$code}', {$id}, '{$purpose}', '{$deadline}', '{$office}', 1);
                ");
        if ($results == TRUE) {
            die("<script>
                location.href = '../borrowers.php?id=".$id."&&added=1'; 
                </script>");
        }else{
            die("<script>
                location.href = '../borrowers.php?added=2'; 
                </script>");
        }



      }else{
        die("<script>
                location.href = '../borrowers.php?added=2'; 
                </script>");
      }
        
    }else{
        die("<script>
                location.href = '../borrowers.php?added=2'; 
            </script>");
    }


}
    ?>