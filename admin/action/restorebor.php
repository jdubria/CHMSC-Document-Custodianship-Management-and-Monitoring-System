<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

	include('../../connection/conn.php');
session_start();

if(isset($_POST['restore'])){
    $id = $_POST['id'];  

  $query = "UPDATE `borrowers` SET `active`='1' WHERE  `bor_id`={$id};";

  $rs = mysqli_query($conn, $query);

  if($rs == 1){
            die("<script>
                location.href = '../borrowers.php?restore=1'; 
            </script>");

  }else{
            die("<script>
                location.href = '../borrowers.php?restore=2'; 
            </script>");

  }    
}
