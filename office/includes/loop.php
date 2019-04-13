<?php
//date_default_timezone_set('Asia/Manila');
//echo date('F j, Y g:i:a  ');

//$data = array();

//$data = ['result'] = date('F j, Y g:i:a  ');

//echo json_encode($data);

include('../../connection/conn.php');

$currentTime;

$query = "SELECT NOW()";

$result = mysqli_query($conn, $query);

while ($row = mysqli_fetch_array($result)) {
	 
	 echo $row['NOW()'];

//	 $start = strpos($currentTime, " ");
//	 $time = substr($currentTime, $start);
//	 $date = strtok($currentTime, " ");

//	 echo $date;
//	 echo $time;
	
}
//$dataGGet = $_POST['dataGGet'];

//echo $dataGGet;

?>