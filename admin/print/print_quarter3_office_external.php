
<?php
include '../../connection/conn.php'; 
?>
<!DOCTYPE html>
<html>
<head>
	<title>CHMSC-Binalbagan DCMMS Third Quarter Print</title>

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
    <h3 class="text-center">All Document Available</h3>
    <table class="table table-sm table-user-information table-bordered">
    	<thead>

    		  <th>No</th>
    		  <th>Date Uploaded</th>
              <th>Document Code</th>
              <th>Office</th>
              <th>Document Name</th>
              <th>Document Type</th>
              <th>Document Classification</th>
              <th>Document Location</th>    			
    	
    	</thead>
    <tbody>
            <?php
            if (isset($_GET['office'])) {
                $office = $_GET['office'];

            $x = 1;
            $sql = mysqli_query($conn, "
SELECT *
FROM document 
INNER JOIN office ON document.office_id = office.office_id
INNER JOIN document_classification ON document.dc_id = document_classification.dc_id
INNER JOIN document_type ON document.dt_id = document_type.dt_id 
WHERE document.active = 1 AND month(document.`date-uploaded`) BETWEEN 7 AND 9
AND year(document.`date-uploaded`) = year(now()) AND document_classification.dc_id = 2 AND office.office_id = $office;
                ");

$num = mysqli_num_rows($sql);
if ($num > 0) {
    
                while ($row = mysqli_fetch_array($sql)) { ?>
            <tr>
                <td><?php echo $x++; ?></td>
                <td><?php echo $row['date-uploaded']; ?></td>
                <td><?php echo $row['code']; ?></td>
                <td><?php echo $row['office_name']; ?></td>
                <td><?php echo $row['name']; ?></td>
                <td><?php echo $row['type']; ?></td>
                <td><?php echo $row['class']; ?></td>
                <td><?php echo $row['Doc_address']; ?></td>
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