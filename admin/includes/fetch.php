<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

include('../../connection/conn.php');

if(isset($_POST['view'])){
$query = "SELECT DATE(NOW())";
$resultS = mysqli_query($conn, $query);
$currentdate = '';
while ($row = mysqli_fetch_array($resultS)) {
    $currentdate = $row['DATE(NOW())'];
}

 
$query = "SELECT * FROM document
INNER JOIN office ON document.office_id = office.office_id
INNER JOIN document_classification ON document.dc_id = document_classification.dc_id
INNER JOIN document_type ON document.dt_id = document_type.dt_id 
 WHERE document.`date-uploaded` BETWEEN DATE(NOW()) AND DATE(NOW()) ORDER BY id DESC";

$result = mysqli_query($conn, $query);
$output = '';
 
if(mysqli_num_rows($result) > 0){
 
while($row = mysqli_fetch_array($result)){
 
  $output .= '
  <li class=dropdown-content>
  <div class="dropdown-item">
  <p class="w3-text-xxsmall"><span class="text-success"><strong>New Document From: '.$row["office_name"].'</strong></span><br>
  <small>Document Name: <b>'.$row["name"].'</b></small><br/>
  <small>Document Type: <b>'.$row["type"].'</b></small><br/>
  <small>Classification: <b>'.$row["class"].'</b></small><br/>
  </p>
  <a href="messages.php?offices='.$row["office_id"].'" class="btn btn-sm btn-block btn-outline-info"><span class="fa fa-send"></span> Send Message</a>
  </div>  
  </li>
 
  ';
}

}else{
    $output .= '<li class="w3-margin"><a href="#" class="text-warning text-italic">No New Document Uploaded</a></li>';
}
 
$status_query = "SELECT * FROM document WHERE comment_status=1 AND active = 1";
$result_query = mysqli_query($conn, $status_query);
$count = mysqli_num_rows($result_query);
 
$data = array(
   'notification' => $output,
   'unseen_notification'  => $count
);


 if($_POST["view"] != '') {
   $update_query = "UPDATE document SET comment_status = 0 WHERE comment_status=1";
   mysqli_query($conn, $update_query);
} 
 
echo json_encode($data);
}
