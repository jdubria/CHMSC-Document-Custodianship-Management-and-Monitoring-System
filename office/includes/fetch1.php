<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
session_start();
$userid = $_SESSION['userid'];
include('../../connection/conn.php');
$query = "SELECT DATE(NOW())";
$resultS = mysqli_query($conn, $query);
while ($row = mysqli_fetch_array($resultS)) {
    $currentdate = $row['DATE(NOW())'];
}

if(isset($_POST['view'])){
 
if($_POST["view"] != ''){
   $update_query = "UPDATE messages SET message_status = 0 WHERE message_status=1";
   mysqli_query($conn, $update_query);
}
 
$query = "SELECT * FROM messages WHERE user_to = {$userid}  AND user_from = 1 OR user_to = 1 AND user_from = {$userid} ORDER BY id DESC LIMIT 5";
$result = mysqli_query($conn, $query);
$fetch = mysqli_fetch_array($result);
$from = $fetch['user_from'];

$sql1 = mysqli_query($conn, "SELECT * FROM user WHERE userid = {$from}");

$get = mysqli_fetch_array($sql1);

$from = $get['name'];
$output = '';
 
if(mysqli_num_rows($result) > 0)
{

while($row = mysqli_fetch_array($result))
 
{
 
 $output .= '
  <li class="dropdown-content list-group">
    <a class="dropdown-item list-group-item">
      <h6 class="list-group-item-heading"><b>'.$from.'</b></h6>
      <p class="list-group-item-text">'.$row["message"].'</p>

    </a>
    <a href="messages.php?office='.$row["user_from"].'" class="list-group-item btn btn-sm btn-outline-info"><span class="fa fa-reply"></span> Reply Message
    </a>
  <div class="border-bottom"></div>
  </li>

  ';
}
}
 
else{
    $output .= '<li class="w3-margin"><a href="#" class="text-warning text-italic">No New Message</a></li>';
}
 
$status_query = "SELECT * FROM messages WHERE message_status=1";
$result_query = mysqli_query($conn, $status_query);
$count = mysqli_num_rows($result_query);
 
$data = array(
   'notification' => $output,
   'unseen_notification'  => $count
);
 
echo json_encode($data);
}
