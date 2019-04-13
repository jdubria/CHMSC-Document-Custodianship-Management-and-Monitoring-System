<?php
include '../../connection/conn.php'; 
?>
<!DOCTYPE html>
<html>
<head>
	<title>CHMSC-Binalbagan DCMMS Annual Print</title>

	<link rel="shortcut icon" type="image/x-icon" href="../favicon.ico">
	<link rel="stylesheet" href="../../assets/src/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="../../assets/src/css/w3.css">
    <link rel="stylesheet" type="text/css" href="../../assets/src/fa-font/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="../../assets/src/css/sidebar.css">
    <link rel="stylesheet" type="text/css" href="../../assets/srcs/dataTables.bootstrap4.min.css">
    <link rel="stylesheet" type="text/css" href="../../assets/srcs/datatable.css">
    <link rel="stylesheet" type="text/css" href="../../assets/srcs/datatables.css">
    <link rel="stylesheet" type="text/css" href="../../assets/srcs/datatables.css">

    <script src="../../assets/src/js/jquery.min.js"></script>
    <script src="../../assets/src/js/jquery-2.1.4.min.js"></script>
    <script src="../../assets/src/js/run_prettify.min.js"></script>
    <script src="../../assets/src/js/popper.min.js"></script>
    <script src="../../assets/src/js/bootstrap.min.js"></script>
    <script src="../../assets/src/chart/Chart.js"></script>
    <script src="../../assets/src/chart/Chart.min.js"></script>
    <script src="../../assets/src/chart/Chart.bundle.js"></script>
    <script src="../../assets/src/chart/Chart.bundle.min.js"></script>
    <script src="../../assets/srcs/dataTables.min.js"></script>
    <script src="../../assets/srcs/jquery.dataTables.min.js"></script> 	
</head>
<body onload="window.print();">
    <div class="align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h2>CARLOS HILADO MEMORIAL STATE COLLEGE - BINALBAGAN CAMPUS</h2>
    </div><br>
    <h3 class="text-center">All Active Borrowing Records</h3>
    <table class="table table-sm table-user-information table-bordered">
    	<thead>

    		  <th>No</th>
    		  <th>Date Borrowed</th>
              <th>Document Code</th>
              <th>Document Name</th>
              <th>Document Type</th>
              <th>Document Classification</th>
              <th>Office</th>
              <th>Borrower's Name</th>
              <th>Borrower's Contact</th>
              <th>Borrower's Address</th>
              <th>Deadline</th>    			
    	
    	</thead>
    	<tbody>
    		<?php
            if (isset($_GET['office'])) {
                $office = $_GET['office'];
    		$x = 1;
    		$sql = mysqli_query($conn, "
SELECT * FROM borrowing
INNER JOIN document ON borrowing.code = document.code
INNER JOIN borrowers ON borrowing.bor_id = borrowers.bor_id
INNER JOIN office ON borrowing.office_id = office.office_id
INNER JOIN document_classification ON document.dc_id = document_classification.dc_id
INNER JOIN document_type ON document.dt_id = document_type.dt_id
WHERE borrowing.active = 1 AND borrowing.remarks IS NULL AND YEAR(borrowing.date) = YEAR(NOW()) AND office.office_id = $office
ORDER BY borrowers.bname ASC;
    			");
$num = mysqli_num_rows($sql);
if ($num > 0) {            
    			while ($row = mysqli_fetch_array($sql)) { ?>
    		<tr>
    			<td><?php echo $x++; ?></td>
    			<td><?php echo $row['date']; ?></td>
    			<td><?php echo $row['code']; ?></td>
    			<td><?php echo $row['name']; ?></td>
    			<td><?php echo $row['type']; ?></td>
    			<td><?php echo $row['class']; ?></td>
    			<td><?php echo $row['office_name']; ?></td>
    			<td><?php echo $row['bname']; ?></td>
                <td><?php echo $row['contact']; ?></td>
                <td><?php echo $row['address']; ?></td>
                <td><?php echo $row['dates']; ?></td>
    		</tr>
    		<?php 
    		}
        }else{
         ?>
            <script type="text/javascript">
                alert("No record to be print");
                window.close();
            </script>
            <?php             
        }

        }
    		 ?>
    	</tbody>
    </table>
</body>
</html>