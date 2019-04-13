<?php
 
//MySQLi Procedural
$conn = mysqli_connect("localhost","root","","new_dcmms");
if (!$conn) {
	die("Connection failed: " . mysqli_connect_error());
}
 
?>