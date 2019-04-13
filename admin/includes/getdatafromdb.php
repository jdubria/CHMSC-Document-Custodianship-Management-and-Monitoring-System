<?php
include('../../connection/conn.php');

if (isset($_POST['id'])) {

$query = sprintf("SELECT COUNT(id) AS num, document.`date-uploaded` AS date FROM document WHERE active = 1 GROUP BY document.`date-uploaded`");


//execute query
$result = $conn->query($query);

//loop through the returned data
$data = array();
foreach ($result as $row) {
	$data[] = $row;
} 

//free memory associated with result
$result->close();

//close connection
$conn->close();

//now print the data
print json_encode($data);	
	
}


// //query to get data from the table
