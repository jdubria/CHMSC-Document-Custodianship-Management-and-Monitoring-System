<?php
include 'htmlparts/header.php';
include("../connection/conn.php");
include('modals/add_modal.php');
$message =FALSE;
$messages =FALSE;
$messagess = FALSE;
$messagesss = FALSE;
$office = 'all';

if (isset($_GET["added"]) && !empty($_GET["added"])) {
    $message = TRUE;    
}else{  
    echo "";
}

if (isset($_GET["update"]) && !empty($_GET["update"])) {
    $messages = TRUE;    
}else{  
    echo "";
}	            

if (isset($_GET["archive"]) && !empty($_GET["archive"])) {
    $messagess = TRUE;    
}else{  
    echo "";
}

if (isset($_GET["restore"]) && !empty($_GET["restore"])) {
    $messagesss = TRUE;    
}else{  
    echo "";
}

?>

<style type="text/css">
#myInput {
    background-image: url('../assets/src/img/search.png'); /* Add a search icon to input */
    background-size: 27px;
    background-position: 10px 12px; /* Position the search icon */
    background-repeat: no-repeat; /* Do not repeat the icon image */
    width: 100%; /* Full-width */
    font-size: 16px; /* Increase font-size */
    padding: 12px 20px 12px 40px; /* Add some padding */
    border: 1px solid #ddd; /* Add a grey border */
    margin-bottom: 12px; /* Add some space below the input */
}
#myUL li a:hover:not(.header) {
    background-color: #eee; /* Add a hover effect to all links, except for headers */
}	
.fixed-box {
    position:inherit;
    top: inherit;
    width: 100%;
    overflow:auto;
    min-height: 5%;
}
.box{
	position:relative;
    top: inherit;
    width: 100%;
    overflow:auto;  
    height: 50%;	
}
#dialogmessage{
  position: fixed;
  top: 15%;
  left: 2%;
  width: 100%;
} 
#inner-meesage{
  margin: 0 auto;
}
</style>

        <nav class="navbar navbar-expand-md navbar-dark fixed-top flex-md-nowrap px-0 bg-dark shadow">
            <a class="navbar-brand col-sm-3 col-md-2 mr-0" href="dashboard.php"><img class="img img-responsive" src="../assets/src/img/chmsc logo.png" style="width: 20%;">CHMSC DCMMS</a>
            <button class="navbar-toggler d-md-none" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
        <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
            <ul class="navbar-nav mr-auto mt-2 mt-lg-1">
                <span class="navbar-text">
                </span>
            </ul>
            <ul class="navbar-nav px-3">
                <li class="nav-item d-sm-block d-md-none text-nowrap">
                    <span class="w3-text-white text-center">
                        <p><b><span id="dates"></span></b><span> | </span>Time: <b><span id="times"></span></b></p>  
                    </span>
                  </li>                
                   <li class="nav-item d-sm-block d-md-none text-nowrap">
                    <a class="nav-link active" href="dashboard.php">
                      Dashboard <span class="sr-only">(current)</span>
                    </a>
                  </li>
                  <li class="nav-item d-sm-block d-md-none text-nowrap">
                      <a class="nav-link" href="document.php">
                      Document Management
                    </a>
                  </li>
                  <li class="nav-item d-sm-block d-md-none text-nowrap">
                      <a class="nav-link" href="borrowers.php">
                      Borrowers Management
                    </a>
                  </li>
                  <li class="nav-item d-sm-block d-md-none text-nowrap">
                    <a class="nav-link" href="#">
                      Settings
                    </a>
                  </li>
                  <li class="nav-item d-sm-block d-md-none text-nowrap">
                      <a class="nav-link" href="archives.php">
                      Archives
                    </a>
                  </li>
               <li class="nav-item dropdown text-nowrap">
                    <a href="#" class="dropdown-toggle btn btn-primary" id="dropdownni" data-toggle="dropdown"><span class="label label-pill label-danger count" style="border-radius:10px;"></span> <span class="fa fa-bell" style="font-size:18px;"></span></a>
                    <ul class="dropdown-menu dropdown-menu-right scrollable-menu" id="menu"></ul>
                </li>
                  </ul>
            <ul class="navbar-nav px-2">  
                  <button class="btn btn-outline-primary my-2 my-sm-0" id="logout"><li class="fa fa-sign-out"></li>Log-out</button>
            </ul>
                  
          </div>  
            
        </nav>
        
        <div class="container-fluid">
        <div class="row" style="margin-top: 22px;">
        <nav class="col-md-2 d-none d-md-block sidebar" style="margin-top: 22px;">
            <div class="sidebar-sticky">
                <ul class="nav flex-column">
                    <div class="container border-bottom bg-primary">
                        <div class="text-center">
                            <br>
                            <div class="img-responsive">
                            <img src="../assets/src/img/admin.png" class="img" style="width: 50%;">
                            <a class="w3-text-white">
                              <br>
                            <?php echo $_SESSION['user_level']; ?><br>
                                <b> <?php echo $_SESSION['name']; ?></b>
                            </a>
                            </div>
                            <span class="w3-text-white">
                            <p style="margin-bottom: 0px;"><b><span id="date"></span></b></p>
                            <p style="margin-top: 0px;">Time: <b><span id="time"></span></b></p>
                            </span>
                        </div>
                    </div>    
                    <li class="nav-item">
                        <a class="nav-link" href="dashboard.php">
                      Dashboard 
                    </a>
                  </li>
                  <li class="nav-item">
                      <a class="nav-link active" href="document.php">
                      Document Management <span class="sr-only">(current)</span>
                    </a>
                  </li>
                  <li class="nav-item">
                      <a class="nav-link" href="borrowers.php">
                      Borrowers Management
                    </a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="settings.php">
                      Settings
                    </a>
                  </li>
                  <li class="nav-item">
                      <a class="nav-link" href="archives.php">
                      Archives
                    </a>
                  </li>
            </ul>
          </div>  
        </nav>
              
        
        <main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-4" style="margin-top: 90px;">
	<?php if($message == TRUE){ 
		    if($_GET['added'] == 1){ ?>
	          <div id="dialogmessage">
	            <div class="alert alert-primary fade show" id="inner-meesage" style="width: 30%;">
	              <center>Successfully Added</center>
	              <script type="text/javascript">
	              	history.pushState('', document.title, window.location.pathname);
	              </script>
	            </div>
	          </div>		    	
		   <?php }
		    else if($_GET['added'] == 2){ ?>
	          <div id="dialogmessage">
	            <div class="alert alert-danger fade show" id="inner-meesage" style="width: 30%;">
	              <center>No Data Added</center>
	              <script type="text/javascript">
	              	history.pushState('', document.title, window.location.pathname);
	              </script>	              
	            </div>
	          </div>
		   <?php } ?>

   
          <?php }elseif($messages == TRUE){
		    if($_GET['update'] == 1){ ?>
	          <div id="dialogmessage">
	            <div class="alert alert-success fade show" id="inner-meesage" style="width: 30%;">
	              <center>Successfully Updated</center>
	              <script type="text/javascript">
	              	history.pushState('', document.title, window.location.pathname);
	              </script>
	            </div>
	          </div>		    	
		   <?php }
		    else if($_GET['update'] == 2){ ?>
	          <div id="dialogmessage">
	            <div class="alert alert-danger fade show" id="inner-meesage" style="width: 30%;">
	              <center>No Data Updated</center>
	              <script type="text/javascript">
	              	history.pushState('', document.title, window.location.pathname);
	              </script>	              
	            </div>
	          </div>
		   <?php } ?>
      <?php }elseif($messagess == TRUE){
        if($_GET['archive'] == 1){ ?>
            <div id="dialogmessage">
              <div class="alert alert-success fade show" id="inner-meesage" style="width: 30%;">
                <center>Successfully Archived</center>
                <script type="text/javascript">
                  history.pushState('', document.title, window.location.pathname);
                </script>
              </div>
            </div>          
       <?php }
        else if($_GET['archive'] == 2){ ?>
            <div id="dialogmessage">
              <div class="alert alert-danger fade show" id="inner-meesage" style="width: 30%;">
                <center>No Data Archived</center>
                <script type="text/javascript">
                  history.pushState('', document.title, window.location.pathname);
                </script>               
              </div>
            </div>
       <?php } ?>
       <?php }elseif($messagesss == TRUE){
        if($_GET['restore'] == 1){ ?>
            <div id="dialogmessage">
              <div class="alert alert-success fade show" id="inner-meesage" style="width: 30%;">
                <center>One Document Restored</center>
                <script type="text/javascript">
                  history.pushState('', document.title, window.location.pathname);
                </script>
              </div>
            </div>          
       <?php }
        else if($_GET['restore'] == 2){ ?>
            <div id="dialogmessage">
              <div class="alert alert-danger fade show" id="inner-meesage" style="width: 30%;">
                <center>No Document Restored</center>
                <script type="text/javascript">
                  history.pushState('', document.title, window.location.pathname);
                </script>               
              </div>
            </div>
       <?php } ?>
        <?php }?>



            <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
                <h1 class="h2">Document Management<span><br><p class="h6"><?php echo $_SESSION['office']; ?></p></span></h1>
                
              </div>         
    
      <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3">
          <div class="btn-toolbar mb-2 mb-md-0">
                    <div class="btn-group mr-2">
                        <a href="#addnew" data-toggle="modal" data-tooltip="tooltip" title="Upload New Document" class="btn btn-sm btn-outline-primary"><span class="fa fa-plus"></span> Document</a>
                    </div>    	
                </div>
      </div>

                <nav class="navbar navbar-expand-md navbar-primary flex-md-nowrap px-0 shadow">
                	<div class="w3-margin">
                	<button class="navbar-toggler d-md-none" type="button" data-toggle="collapse" data-target="#navbarni" aria-controls="navbarni" aria-expanded="false" aria-label="Toggle navigation">
                		<span class="fa fa-bars"></span>
            		</button>
            		</div>
            		<div class="collapse navbar-collapse" id="navbarni">
                	<ul class="navbar-nav">
                		<li class="nav-item text-nowrap">
                    		<a class="nav-link active" href="document.php">
                    			<span class="fa fa-list-ul"></span>
                      			<strong>CHMSC Documents<span class="sr-only">(current)</span></strong>
                    		</a>
                  		</li>
                  		<li class="nav-item text-nowrap">
                      		<a class="nav-link" href="send_document.php">
                      			<span class="fa fa-send"></span>
                      			Send Documents
                    		</a>
                  		</li>
                	</ul>
                	</div>
                </nav>
                <br>

               
                <br>
                <div class="row">
                	<div class="col-sm-2 fixed-box">
                		<center><strong>OFFICE</strong></center>
								<input type="text" id="myInput" onkeyup="myFunction()" class="list-group-item">

								<ul id="myUL" class="list-group box">
								  
								  <li class="list-group-item"><a href="?office=all">All Documents</a></li>
							<?php $result = mysqli_query($conn, "SELECT * FROM office WHERE active = 1");
								while ($row = mysqli_fetch_array($result)) { ?>
										  
								  <li class="list-group-item"><a href="?office=<?php echo $row['office_id'] ?>"><?php echo $row['office_name'] ?></a></li>
					  		<?php } ?>			  
								</ul>                		
                	</div>
                	<div class="col-sm-10">
	                	<ul class="nav nav-tabs shadow">
	                		<li class="nav-item btn-md">
	                			<a class="nav-link active" href="#InternalDocuments"><span class="fa fa-file-text-o"></span> Internal Documents</a>
	                		</li>
	                		<li class="nav-item btn-md">
				              <a class="nav-link" href="#ExternalDocuments"><span class="fa fa-external-link"></span> External Documents</a>
				            </li>
	                	</ul>
                    
	                	<div class="tab-content">
	                		<div id="InternalDocuments" class="tab-pane active">
	              <?php 
					if (empty($_GET["office"])) { 
	               $result = mysqli_query($conn, "
					SELECT * FROM document 
          INNER JOIN office ON document.office_id = office.office_id
          INNER JOIN document_classification ON document.dc_id = document_classification.dc_id
          INNER JOIN document_type ON document.dt_id = document_type.dt_id 
          WHERE document.dc_id = 1 AND document.active = 1	  
	              "); ?>  			
	            		<br>
	                			<div class="table-responsive">
                <div class="pull-left">
                  <button class="btn btn-sm btn-outline-secondary dropdown-toggle" data-toggle="dropdown" title="Print Document"><span class="fa fa-print"></span> Print Record<span class="caret"></span></button>
                        <ul class="dropdown-menu dropdown-menu-right">
                          <li class="dropdown-item"><a tabindex="-1" onclick="window.open('print/print_annual.php', '_blank', 'location=yes, height=470, width=740, scrollbars=yes, status=yes');">Annual Report</a></li>
                          <li class="dropdown-divider"></li>
                          <li class="dropdown-item dropdown-submenu">
                            <a class="test" tabindex="-1" href="#">Quarterly Report <span class="fa fa-toggle-right"></span></a>
                            <ul class="dropdown-menu">
                              <li class="dropdown-item ><a tabindex="-1" onclick="window.open('print/print_quarter1.php', '_blank', 'location=yes, height=470, width=740, scrollbars=yes, status=yes');">1st Quarter</a></li>
                              <li class="dropdown-item ><a tabindex="-1" onclick="window.open('print/print_quarter2.php', '_blank', 'location=yes, height=470, width=740, scrollbars=yes, status=yes');">2nd Quarter</a></li>
                              <li class="dropdown-item ><a tabindex="-1" onclick="window.open('print/print_quarter3.php', '_blank', 'location=yes, height=470, width=740, scrollbars=yes, status=yes');">3rd Quarter</a></li>
                              <li class="dropdown-item ><a tabindex="-1" onclick="window.open('print/print_ quarter4.php', '_blank', 'location=yes, height=470, width=740, scrollbars=yes, status=yes');">4th Quarter</a></li>
                            </ul>
                          </li>  
                        </ul>                  
                </div>
                           <br><br><br>
			                		<table id="myTable" class="table table-striped table-bordered table-sm">
			                		  <thead>
			                			<tr>
			                				<th class="text-center"></th>
				                            <th class="text-center">Date Uploaded</th>
			                            	<th class="text-center">Code</th>
			                            	<th class="text-center">Name</th>
			                            	<th class="text-center">Type</th>
			                            	<th class="text-center">Address</th>
			                            	<th class="text-center">File</th>
			                            	<th class="text-center">Action</th>
			                            	<th class="text-center">Add Borrower</th>
			                			</tr>
			                	 	  </thead>

			                	 	  <tbody>
			                	 	  		<?php while ($rows = mysqli_fetch_array($result)) { 
                                $files = $rows['file'];
                                $start = strpos($files, ".");
                                $fileExt = substr($files, $start);
                                $filesExt = '';

                                if ($fileExt == '.docx'){
                                  $filesExt = "word.png";
                                }elseif ($fileExt == '.doc'){
                                  $filesExt = "word.png";
                                }elseif ($fileExt == '.pptx'){
                                  $filesExt = "ppt.png";  
                                }elseif ($fileExt == '.pptm'){
                                  $filesExt = "ppt.png";  
                                }elseif ($fileExt == '.ppt'){
                                  $filesExt = "ppt.png";  
                                }elseif($fileExt == '.xlsx'){
                                  $filesExt = "excel.png";
                                }elseif($fileExt == '.xlsb'){
                                  $filesExt = "excel.png";
                                }elseif($fileExt == '.xls'){
                                  $filesExt = "excel.png";
                                }elseif($fileExt == '.xl'){
                                  $filesExt = "excel.png";
                                }elseif($fileExt == '.pdf'){
                                  $filesExt = "pdf.png";
                                }elseif($fileExt == '.zip'){
                                  $filesExt = "rar.png";
                                }elseif($fileExt == '.rar'){
                                  $filesExt = "rar.png";
                                }elseif($fileExt == '.txt'){
                                  $filesExt = "notepad.png";
                                }else{
                                  $filesExt = $rows['file'];
                                }
                                  ?>
			                	 	  		<tr>
			                	 	  			<td class="text-center"><img class="img-responsive" src="../upload/<?php echo $filesExt ?>" alt="<?php echo $rows['file'] ?>" style="width: 30px"></td>
			                	 	  			<td><?php echo $rows['date-uploaded']; ?></td>
			                	 	  			<td><?php echo $rows['code']; ?></td>
			                	 	  			<td><?php echo $rows['name']; ?></td>
			                	 	  			<td><?php echo $rows['type']; ?></td>
			                	 	  			<td><?php echo $rows['Doc_address']; ?></td>
			                	 	  			<td><?php echo $rows['file']; ?></td>
			                	 	  			
			                	 	  			<td class="text-center">
                             					 <div class="btn-group mr-2">
                              						<a href="#edit<?php echo $rows['id']; ?>" data-toggle="modal" data-tooltip="tooltip" title="Update <?php echo $row['name']; ?> Information" class="btn btn-sm btn-outline-primary"><span class="fa fa-edit"></span></a>
                              						<a href="#del<?php echo $rows['id']; ?>" data-toggle="modal" data-tooltip="tooltip" title="Archive document: <?php echo $row['name']; ?>" class="btn btn-sm btn-outline-primary"><span class="fa fa-archive"></span></a>
  					                            </div>
                        					</td>
                        					<td class="text-center"><a href="#addnewborrower<?php echo $rows['id']; ?>" data-toggle="modal" data-tooltip="tooltip" title="Add borrower document: <?php echo $rows['name']; ?>" class="btn btn-success rounded-circle btn-sm"><span class="fa fa-user-plus"></span></a></td>

                        					<?php 
                        						 include('modals/button.php'); 
                                		include('modals/addborrower_modal.php');
                          						?>

			                	 	  		</tr>
			                	 	  	<?php	} ?>
			                	 	  </tbody>
			                	 	</table>
		                		</div>

					
				<?php
					}	              	

	              ?>  			

	              <?php
	              
	              if (isset($_GET['office']) && !empty($_GET['office'])) {
	                	$office = $_GET['office'];

	                if ($office == "all") {    			
	               $result = mysqli_query($conn, "
SELECT * FROM document 
INNER JOIN office ON document.office_id = office.office_id
INNER JOIN document_classification ON document.dc_id = document_classification.dc_id
INNER JOIN document_type ON document.dt_id = document_type.dt_id 
WHERE document.dc_id = 1 AND document.active = 1	  
	              "); ?>  			
	            		<br>
	                			<div class="table-responsive">
                <div class="pull-left">
                  <button class="btn btn-sm btn-outline-secondary dropdown-toggle" data-toggle="dropdown" title="Print Document"><span class="fa fa-print"></span> Print Record<span class="caret"></span></button>
                        <ul class="dropdown-menu dropdown-menu-right">
                          <li class="dropdown-item"><a tabindex="-1" onclick="window.open('print/print_annual.php', '_blank', 'location=yes, height=470, width=740, scrollbars=yes, status=yes');">Annual Report</a></li>
                          <li class="dropdown-divider"></li>
                          <li class="dropdown-item dropdown-submenu">
                            <a class="test" tabindex="-1" href="#">Quarterly Report <span class="fa fa-toggle-right"></span></a>
                            <ul class="dropdown-menu">
                              <li class="dropdown-item ><a tabindex="-1" onclick="window.open('print/print_quarter1.php', '_blank', 'location=yes, height=470, width=740, scrollbars=yes, status=yes');">1st Quarter</a></li>
                              <li class="dropdown-item ><a tabindex="-1" onclick="window.open('print/print_quarter2.php', '_blank', 'location=yes, height=470, width=740, scrollbars=yes, status=yes');">2nd Quarter</a></li>
                              <li class="dropdown-item ><a tabindex="-1" onclick="window.open('print/print_quarter3.php', '_blank', 'location=yes, height=470, width=740, scrollbars=yes, status=yes');">3rd Quarter</a></li>
                              <li class="dropdown-item ><a tabindex="-1" onclick="window.open('print/print_ quarter4.php', '_blank', 'location=yes, height=470, width=740, scrollbars=yes, status=yes');">4th Quarter</a></li>
                            </ul>
                          </li>  
                        </ul>                  
                </div>
                           <br><br><br>                          
			                		<table id="myTable" class="table table-striped table-bordered table-sm">
			                		  <thead>
			                			<tr>
			                				<th class="text-center"></th>
				                            <th class="text-center">Date Uploaded</th>
			                            	<th class="text-center">Code</th>
			                            	<th class="text-center">Name</th>
			                            	<th class="text-center">Type</th>
			                            	<th class="text-center">Address</th>
			                            	<th class="text-center">File</th>
			                            	<th class="text-center">Action</th>
			                            	<th class="text-center">Add Borrower</th>
			                			</tr>
			                	 	  </thead>

			                	 	  <tbody>
			                	 	  		<?php while ($rows = mysqli_fetch_array($result)) { 
                    $files = $rows['file'];
                                $start = strpos($files, ".");
                                $fileExt = substr($files, $start);
                                $filesExt = '';

                                if ($fileExt == '.docx'){
                                  $filesExt = "word.png";
                                }elseif ($fileExt == '.doc'){
                                  $filesExt = "word.png";
                                }elseif ($fileExt == '.pptx'){
                                  $filesExt = "ppt.png";  
                                }elseif ($fileExt == '.pptm'){
                                  $filesExt = "ppt.png";  
                                }elseif ($fileExt == '.ppt'){
                                  $filesExt = "ppt.png";  
                                }elseif($fileExt == '.xlsx'){
                                  $filesExt = "excel.png";
                                }elseif($fileExt == '.xlsb'){
                                  $filesExt = "excel.png";
                                }elseif($fileExt == '.xls'){
                                  $filesExt = "excel.png";
                                }elseif($fileExt == '.xl'){
                                  $filesExt = "excel.png";
                                }elseif($fileExt == '.pdf'){
                                  $filesExt = "pdf.png";
                                }elseif($fileExt == '.zip'){
                                  $filesExt = "rar.png";
                                }elseif($fileExt == '.rar'){
                                  $filesExt = "rar.png";
                                }elseif($fileExt == '.txt'){
                                  $filesExt = "notepad.png";
                                }else{
                                  $filesExt = $rows['file'];
                                }
                                  ?>
			                	 	  		<tr>
			                	 	  			<td class="text-center"><img class="img-responsive" src="../upload/<?php echo $filesExt ?>" alt="<?php echo $rows['file'] ?>" style="width: 30px"></td>
			                	 	  			<td><?php echo $rows['date-uploaded']; ?></td>
			                	 	  			<td><?php echo $rows['code']; ?></td>
			                	 	  			<td><?php echo $rows['name']; ?></td>
			                	 	  			<td><?php echo $rows['type']; ?></td>
			                	 	  			<td><?php echo $rows['Doc_address']; ?></td>
			                	 	  			<td><?php echo $rows['file']; ?></td>
			                	 	  			
			                	 	  			<td class="text-center">
                             					 <div class="btn-group mr-2">
                              						<a href="#edit<?php echo $rows['id']; ?>" data-toggle="modal" data-tooltip="tooltip" title="Update <?php echo $row['name']; ?> Information" class="btn btn-sm btn-outline-primary"><span class="fa fa-edit"></span></a>
                              						<a href="#del<?php echo $rows['id']; ?>" data-toggle="modal" data-tooltip="tooltip" title="Archive document: <?php echo $row['name']; ?>" class="btn btn-sm btn-outline-primary"><span class="fa fa-archive"></span></a>
  					                            </div>
                        					</td>
                        					<td class="text-center"><a href="#addnewborrower<?php echo $rows['id']; ?>" data-toggle="modal" data-tooltip="tooltip" title="Add borrower document: <?php echo $rows['name']; ?>" class="btn btn-success rounded-circle btn-sm"><span class="fa fa-user-plus"></span></a></td>

                        					<?php 
                        						 include('modals/button.php'); 
                                     include('modals/addborrower_modal.php');
                          						?>

			                	 	  		</tr>
			                	 	  	<?php	} ?>
			                	 	  </tbody>
			                	 	</table>
		                		</div>

		                		<?php }elseif ($office == $office) { 
         $result = mysqli_query($conn, "
                  SELECT * FROM document 
        INNER JOIN office ON document.office_id = office.office_id
        INNER JOIN document_classification ON document.dc_id = document_classification.dc_id
        INNER JOIN document_type ON document.dt_id = document_type.dt_id 
        WHERE document.dc_id = 1 AND document.active = 1 AND document.office_id = {$office}	  
	              "); ?>  			
	            		<br>
	                			<div class="table-responsive">
                <div class="pull-left">
                  <button class="btn btn-sm btn-outline-secondary dropdown-toggle" data-toggle="dropdown" title="Print Document"><span class="fa fa-print"></span> Print Record<span class="caret"></span></button>
                        <ul class="dropdown-menu dropdown-menu-right">
                          <li class="dropdown-item"><a tabindex="-1" onclick="window.open('print/print_annual_office.php?office=<?php echo $office ?>', '_blank', 'location=yes, height=470, width=740, scrollbars=yes, status=yes');">Annual Report</a></li>
                          <li class="dropdown-divider"></li>
                          <li class="dropdown-item dropdown-submenu">
                            <a class="test" tabindex="-1" href="#">Quarterly Report <span class="fa fa-toggle-right"></span></a>
                            <ul class="dropdown-menu">
                              <li class="dropdown-item ><a tabindex="-1" onclick="window.open('print/print_quarter1_office.php?office=<?php echo $office ?>', '_blank', 'location=yes, height=470, width=740, scrollbars=yes, status=yes');">1st Quarter</a></li>
                              <li class="dropdown-item ><a tabindex="-1" onclick="window.open('print/print_quarter2_office.php?office=<?php echo $office ?>', '_blank', 'location=yes, height=470, width=740, scrollbars=yes, status=yes');">2nd Quarter</a></li>
                              <li class="dropdown-item ><a tabindex="-1" onclick="window.open('print/print_quarter3_office.php?office=<?php echo $office ?>', '_blank', 'location=yes, height=470, width=740, scrollbars=yes, status=yes');">3rd Quarter</a></li>
                              <li class="dropdown-item ><a tabindex="-1" onclick="window.open('print/print_ quarter4_office.php?office=<?php echo $office ?>', '_blank', 'location=yes, height=470, width=740, scrollbars=yes, status=yes');">4th Quarter</a></li>
                            </ul>
                          </li>  
                        </ul>                  
                </div>
                           <br><br><br>                            
			                		<table id="myTable" class="table table-striped table-bordered table-sm">
			                		  <thead>
			                			<tr>
			                				<th class="text-center"></th>
				                            <th class="text-center">Date Uploaded</th>
			                            	<th class="text-center">Code</th>
			                            	<th class="text-center">Name</th>
			                            	<th class="text-center">Type</th>
			                            	<th class="text-center">Address</th>
			                            	<th class="text-center">File</th>
			                            	<th class="text-center">Action</th>
			                            	<th class="text-center">Add Borrower</th>
			                			</tr>
			                	 	  </thead>

			                	 	  <tbody>
			                	 	  		<?php while ($rows = mysqli_fetch_array($result)) { 
                    $files = $rows['file'];
                                $start = strpos($files, ".");
                                $fileExt = substr($files, $start);
                                $filesExt = '';

                                if ($fileExt == '.docx'){
                                  $filesExt = "word.png";
                                }elseif ($fileExt == '.doc'){
                                  $filesExt = "word.png";
                                }elseif ($fileExt == '.pptx'){
                                  $filesExt = "ppt.png";  
                                }elseif ($fileExt == '.pptm'){
                                  $filesExt = "ppt.png";  
                                }elseif ($fileExt == '.ppt'){
                                  $filesExt = "ppt.png";  
                                }elseif($fileExt == '.xlsx'){
                                  $filesExt = "excel.png";
                                }elseif($fileExt == '.xlsb'){
                                  $filesExt = "excel.png";
                                }elseif($fileExt == '.xls'){
                                  $filesExt = "excel.png";
                                }elseif($fileExt == '.xl'){
                                  $filesExt = "excel.png";
                                }elseif($fileExt == '.pdf'){
                                  $filesExt = "pdf.png";
                                }elseif($fileExt == '.zip'){
                                  $filesExt = "rar.png";
                                }elseif($fileExt == '.rar'){
                                  $filesExt = "rar.png";
                                }elseif($fileExt == '.txt'){
                                  $filesExt = "notepad.png";
                                }else{
                                  $filesExt = $rows['file'];
                                }                                    
                                  ?>
			                	 	  		<tr>
			                	 	  			<td class="text-center"><img class="img-responsive" src="../upload/<?php echo $filesExt ?>" alt="<?php echo $rows['file'] ?>" style="width: 30px"></td>
			                	 	  			<td><?php echo $rows['date-uploaded']; ?></td>
			                	 	  			<td><?php echo $rows['code']; ?></td>
			                	 	  			<td><?php echo $rows['name']; ?></td>
			                	 	  			<td><?php echo $rows['type']; ?></td>
			                	 	  			<td><?php echo $rows['Doc_address']; ?></td>
			                	 	  			<td><?php echo $rows['file']; ?></td>
			                	 	  			
			                	 	  			<td class="text-center">
                             					 <div class="btn-group mr-2">
                              						<a href="#edit<?php echo $rows['id']; ?>" data-toggle="modal" data-tooltip="tooltip" title="Update <?php echo $row['name']; ?> Information" class="btn btn-sm btn-outline-primary"><span class="fa fa-edit"></span></a>
                              						<a href="#del<?php echo $rows['id']; ?>" data-toggle="modal" data-tooltip="tooltip" title="Archive document: <?php echo $row['name']; ?>" class="btn btn-sm btn-outline-primary"><span class="fa fa-archive"></span></a>
  					                            </div>
                        					</td>
                        					<td class="text-center"><a href="#addnewborrower<?php echo $rows['id']; ?>" data-toggle="modal" data-tooltip="tooltip" title="Add borrower document: <?php echo $rows['name']; ?>" class="btn btn-success rounded-circle btn-sm"><span class="fa fa-user-plus"></span></a></td>

                        					<?php 
                        						 include('modals/button.php'); 
                                		 include('modals/addborrower_modal.php');
                          						?>

			                	 	  		</tr>
			                	 	  	<?php	} ?>
			                	 	  </tbody>
			                	 	</table>
		                		</div>		                			
		                		

		                		<?php } ?>
		                		<?php } ?>

	                		</div>

	                		<div id="ExternalDocuments" class="tab-pane fade">
	              <?php 
					if (empty($_GET["office"])) { 
	               $result = mysqli_query($conn, "
SELECT * FROM document 
INNER JOIN office ON document.office_id = office.office_id
INNER JOIN document_classification ON document.dc_id = document_classification.dc_id
INNER JOIN document_type ON document.dt_id = document_type.dt_id 
WHERE document.dc_id = 2 AND document.active = 1	  
	              "); ?>  			
	            		<br>
	                			<div class="table-responsive">
                <div class="pull-left">
                  <button class="btn btn-sm btn-outline-secondary dropdown-toggle" data-toggle="dropdown" title="Print Document"><span class="fa fa-print"></span> Print Record<span class="caret"></span></button>
                        <ul class="dropdown-menu dropdown-menu-right">
                          <li class="dropdown-item"><a tabindex="-1" onclick="window.open('print/print_annual_external.php', '_blank', 'location=yes, height=470, width=740, scrollbars=yes, status=yes');">Annual Report</a></li>
                          <li class="dropdown-divider"></li>
                          <li class="dropdown-item dropdown-submenu">
                            <a class="test" tabindex="-1" href="#">Quarterly Report <span class="fa fa-toggle-right"></span></a>
                            <ul class="dropdown-menu">
                              <li class="dropdown-item ><a tabindex="-1" onclick="window.open('print/print_quarter1_external.php', '_blank', 'location=yes, height=470, width=740, scrollbars=yes, status=yes');">1st Quarter</a></li>
                              <li class="dropdown-item ><a tabindex="-1" onclick="window.open('print/print_quarter2_external.php', '_blank', 'location=yes, height=470, width=740, scrollbars=yes, status=yes');">2nd Quarter</a></li>
                              <li class="dropdown-item ><a tabindex="-1" onclick="window.open('print/print_quarter3_external.php', '_blank', 'location=yes, height=470, width=740, scrollbars=yes, status=yes');">3rd Quarter</a></li>
                              <li class="dropdown-item ><a tabindex="-1" onclick="window.open('print/print_quarter4_external.php', '_blank', 'location=yes, height=470, width=740, scrollbars=yes, status=yes');">4th Quarter</a></li>
                            </ul>
                          </li>  
                        </ul>                  
                </div>
                           <br><br><br>                          
			                		<table id="myTables" class="table table-striped table-bordered table-sm">
			                		  <thead>
			                			<tr>
			                				<th class="text-center"></th>
				                            <th class="text-center">Date Uploaded</th>
			                            	<th class="text-center">Code</th>
			                            	<th class="text-center">Name</th>
			                            	<th class="text-center">Type</th>
			                            	<th class="text-center">Address</th>
			                            	<th class="text-center">File</th>
			                            	<th class="text-center">Action</th>
			                            	<th class="text-center">Add Borrower</th>
			                			</tr>
			                	 	  </thead>

			                	 	  <tbody>
			                	 	  		<?php while ($rows = mysqli_fetch_array($result)) { 
                    $files = $rows['file'];
                                $start = strpos($files, ".");
                                $fileExt = substr($files, $start);
                                $filesExt = '';

                                if ($fileExt == '.docx'){
                                  $filesExt = "word.png";
                                }elseif ($fileExt == '.doc'){
                                  $filesExt = "word.png";
                                }elseif ($fileExt == '.pptx'){
                                  $filesExt = "ppt.png";  
                                }elseif ($fileExt == '.pptm'){
                                  $filesExt = "ppt.png";  
                                }elseif ($fileExt == '.ppt'){
                                  $filesExt = "ppt.png";  
                                }elseif($fileExt == '.xlsx'){
                                  $filesExt = "excel.png";
                                }elseif($fileExt == '.xlsb'){
                                  $filesExt = "excel.png";
                                }elseif($fileExt == '.xls'){
                                  $filesExt = "excel.png";
                                }elseif($fileExt == '.xl'){
                                  $filesExt = "excel.png";
                                }elseif($fileExt == '.pdf'){
                                  $filesExt = "pdf.png";
                                }elseif($fileExt == '.zip'){
                                  $filesExt = "rar.png";
                                }elseif($fileExt == '.rar'){
                                  $filesExt = "rar.png";
                                }elseif($fileExt == '.txt'){
                                  $filesExt = "notepad.png";
                                }else{
                                  $filesExt = $rows['file'];
                                }
                                  ?>
			                	 	  		<tr>
			                	 	  			<td class="text-center"><img class="img-responsive" src="../upload/<?php echo $filesExt ?>" alt="<?php echo $rows['file'] ?>" style="width: 30px"></td>
			                	 	  			<td><?php echo $rows['date-uploaded']; ?></td>
			                	 	  			<td><?php echo $rows['code']; ?></td>
			                	 	  			<td><?php echo $rows['name']; ?></td>
			                	 	  			<td><?php echo $rows['type']; ?></td>
			                	 	  			<td><?php echo $rows['Doc_address']; ?></td>
			                	 	  			<td><?php echo $rows['file']; ?></td>
			                	 	  			
			                	 	  			<td class="text-center">
                             					 <div class="btn-group mr-2">
                              						<a href="#edit<?php echo $rows['id']; ?>" data-toggle="modal" data-tooltip="tooltip" title="Update <?php echo $row['name']; ?> Information" class="btn btn-sm btn-outline-primary"><span class="fa fa-edit"></span></a>
                              						<a href="#del<?php echo $rows['id']; ?>" data-toggle="modal" data-tooltip="tooltip" title="Archive document: <?php echo $row['name']; ?>" class="btn btn-sm btn-outline-primary"><span class="fa fa-archive"></span></a>
  					                            </div>
                        					</td>
                        					<td class="text-center"><a href="#addnewborrower<?php echo $rows['id']; ?>" data-toggle="modal" data-tooltip="tooltip" title="Add borrower document: <?php echo $rows['name']; ?>" class="btn btn-success rounded-circle btn-sm"><span class="fa fa-user-plus"></span></a></td>

                        					<?php 
                        						 include('modals/button.php'); 
                                		 include('modals/addborrower_modal.php');
                          						?>

			                	 	  		</tr>
			                	 	  	<?php	} ?>
			                	 	  </tbody>
			                	 	</table>
		                		</div>

					
				<?php
					}	              	

	              ?>  			

	              <?php
	              
	              if (isset($_GET['office']) && !empty($_GET['office'])) {
	                	$office = $_GET['office'];

	                if ($office == "all") {    			
	               $result = mysqli_query($conn, "
SELECT * FROM document 
INNER JOIN office ON document.office_id = office.office_id
INNER JOIN document_classification ON document.dc_id = document_classification.dc_id
INNER JOIN document_type ON document.dt_id = document_type.dt_id 
WHERE document.dc_id = 2 AND document.active = 1  
	              "); ?>  			
	            		<br>
	                			<div class="table-responsive">
                <div class="pull-left">
                  <button class="btn btn-sm btn-outline-secondary dropdown-toggle" data-toggle="dropdown" title="Print Document"><span class="fa fa-print"></span> Print Record<span class="caret"></span></button>
                        <ul class="dropdown-menu dropdown-menu-right">
                          <li class="dropdown-item"><a tabindex="-1" onclick="window.open('print/print_annual_external.php', '_blank', 'location=yes, height=470, width=740, scrollbars=yes, status=yes');">Annual Report</a></li>
                          <li class="dropdown-divider"></li>
                          <li class="dropdown-item dropdown-submenu">
                            <a class="test" tabindex="-1" href="#">Quarterly Report <span class="fa fa-toggle-right"></span></a>
                            <ul class="dropdown-menu">
                              <li class="dropdown-item ><a tabindex="-1" onclick="window.open('print/print_quarter1_external.php', '_blank', 'location=yes, height=470, width=740, scrollbars=yes, status=yes');">1st Quarter</a></li>
                              <li class="dropdown-item ><a tabindex="-1" onclick="window.open('print/print_quarter2_external.php', '_blank', 'location=yes, height=470, width=740, scrollbars=yes, status=yes');">2nd Quarter</a></li>
                              <li class="dropdown-item ><a tabindex="-1" onclick="window.open('print/print_quarter3_external.php', '_blank', 'location=yes, height=470, width=740, scrollbars=yes, status=yes');">3rd Quarter</a></li>
                              <li class="dropdown-item ><a tabindex="-1" onclick="window.open('print/print_quarter4_external.php', '_blank', 'location=yes, height=470, width=740, scrollbars=yes, status=yes');">4th Quarter</a></li>
                            </ul>
                          </li>  
                        </ul>                  
                </div>
                <br><br>                          
			                		<table id="myTables" class="table table-striped table-bordered table-sm">
			                		  <thead>
			                			<tr>
			                				<th class="text-center"></th>
				                            <th class="text-center">Date Uploaded</th>
			                            	<th class="text-center">Code</th>
			                            	<th class="text-center">Name</th>
			                            	<th class="text-center">Type</th>
			                            	<th class="text-center">Address</th>
			                            	<th class="text-center">File</th>
			                            	<th class="text-center">Action</th>
			                            	<th class="text-center">Add Borrower</th>
			                			</tr>
			                	 	  </thead>

			                	 	  <tbody>
			                	 	  		<?php while ($rows = mysqli_fetch_array($result)) { 
                    $files = $rows['file'];
                                $start = strpos($files, ".");
                                $fileExt = substr($files, $start);
                                $filesExt = '';

                                if ($fileExt == '.docx'){
                                  $filesExt = "word.png";
                                }elseif ($fileExt == '.doc'){
                                  $filesExt = "word.png";
                                }elseif ($fileExt == '.pptx'){
                                  $filesExt = "ppt.png";  
                                }elseif ($fileExt == '.pptm'){
                                  $filesExt = "ppt.png";  
                                }elseif ($fileExt == '.ppt'){
                                  $filesExt = "ppt.png";  
                                }elseif($fileExt == '.xlsx'){
                                  $filesExt = "excel.png";
                                }elseif($fileExt == '.xlsb'){
                                  $filesExt = "excel.png";
                                }elseif($fileExt == '.xls'){
                                  $filesExt = "excel.png";
                                }elseif($fileExt == '.xl'){
                                  $filesExt = "excel.png";
                                }elseif($fileExt == '.pdf'){
                                  $filesExt = "pdf.png";
                                }elseif($fileExt == '.zip'){
                                  $filesExt = "rar.png";
                                }elseif($fileExt == '.rar'){
                                  $filesExt = "rar.png";
                                }elseif($fileExt == '.txt'){
                                  $filesExt = "notepad.png";
                                }else{
                                  $filesExt = $rows['file'];
                                }
                                  ?>
			                	 	  		<tr>
			                	 	  			<td class="text-center"><img class="img-responsive" src="../upload/<?php echo $filesExt ?>" alt="<?php echo $rows['file'] ?>" style="width: 30px"></td>
			                	 	  			<td><?php echo $rows['date-uploaded']; ?></td>
			                	 	  			<td><?php echo $rows['code']; ?></td>
			                	 	  			<td><?php echo $rows['name']; ?></td>
			                	 	  			<td><?php echo $rows['type']; ?></td>
			                	 	  			<td><?php echo $rows['Doc_address']; ?></td>
			                	 	  			<td><?php echo $rows['file']; ?></td>
			                	 	  			
			                	 	  			<td class="text-center">
                             					 <div class="btn-group mr-2">
                              						<a href="#edit<?php echo $rows['id']; ?>" data-toggle="modal" data-tooltip="tooltip" title="Update <?php echo $row['name']; ?> Information" class="btn btn-sm btn-outline-primary"><span class="fa fa-edit"></span></a>
                              						<a href="#del<?php echo $rows['id']; ?>" data-toggle="modal" data-tooltip="tooltip" title="Archive document: <?php echo $row['name']; ?>" class="btn btn-sm btn-outline-primary"><span class="fa fa-archive"></span></a>
  					                            </div>
                        					</td>
                        					<td class="text-center"><a href="#addnewborrower<?php echo $rows['id']; ?>" data-toggle="modal" data-tooltip="tooltip" title="Add borrower document: <?php echo $rows['name']; ?>" class="btn btn-success rounded-circle btn-sm"><span class="fa fa-user-plus"></span></a></td>

                        					<?php 
                        						 include('modals/button.php'); 
                                		 include('modals/addborrower_modal.php');
                          						?>

			                	 	  		</tr>
			                	 	  	<?php	} ?>
			                	 	  </tbody>
			                	 	</table>
		                		</div>

		                		<?php }elseif ($office == $office) { 
 $result = mysqli_query($conn, "
 SELECT * FROM document 
INNER JOIN office ON document.office_id = office.office_id
INNER JOIN document_classification ON document.dc_id = document_classification.dc_id
INNER JOIN document_type ON document.dt_id = document_type.dt_id 
WHERE document.dc_id = 2 AND document.active = 1 AND document.office_id = {$office}  
	              "); ?>  			
	            		<br>
	                			<div class="table-responsive">
                <div class="pull-left">
                  <button class="btn btn-sm btn-outline-secondary dropdown-toggle" data-toggle="dropdown" title="Print Document"><span class="fa fa-print"></span> Print Record<span class="caret"></span></button>
                        <ul class="dropdown-menu dropdown-menu-right">
                          <li class="dropdown-item"><a tabindex="-1" onclick="window.open('print/print_annual_office_external.php?office=<?php echo $office ?>', '_blank', 'location=yes, height=470, width=740, scrollbars=yes, status=yes');">Annual Report</a></li>
                          <li class="dropdown-divider"></li>
                          <li class="dropdown-item dropdown-submenu">
                            <a class="test" tabindex="-1" href="#">Quarterly Report <span class="fa fa-toggle-right"></span></a>
                            <ul class="dropdown-menu">
                              <li class="dropdown-item ><a tabindex="-1" onclick="window.open('print/print_quarter1_office_external.php?office=<?php echo $office ?>', '_blank', 'location=yes, height=470, width=740, scrollbars=yes, status=yes');">1st Quarter</a></li>
                              <li class="dropdown-item ><a tabindex="-1" onclick="window.open('print/print_quarter2_office_external.php?office=<?php echo $office ?>', '_blank', 'location=yes, height=470, width=740, scrollbars=yes, status=yes');">2nd Quarter</a></li>
                              <li class="dropdown-item ><a tabindex="-1" onclick="window.open('print/print_quarter3_office_external.php?office=<?php echo $office ?>', '_blank', 'location=yes, height=470, width=740, scrollbars=yes, status=yes');">3rd Quarter</a></li>
                              <li class="dropdown-item ><a tabindex="-1" onclick="window.open('print/print_quarter4_office_external.php?office=<?php echo $office ?>', '_blank', 'location=yes, height=470, width=740, scrollbars=yes, status=yes');">4th Quarter</a></li>
                            </ul>
                          </li>  
                        </ul>                  
                </div>
                <br><br>                          

			                		<table id="myTables" class="table table-striped table-bordered table-sm">
			                		  <thead>
			                			<tr>
			                				<th class="text-center"></th>
				                            <th class="text-center">Date Uploaded</th>
			                            	<th class="text-center">Code</th>
			                            	<th class="text-center">Name</th>
			                            	<th class="text-center">Type</th>
			                            	<th class="text-center">Address</th>
			                            	<th class="text-center">File</th>
			                            	<th class="text-center">Action</th>
			                            	<th class="text-center">Add Borrower</th>
			                			</tr>
			                	 	  </thead>

			                	 	  <tbody>
			                	 	  		<?php while ($rows = mysqli_fetch_array($result)) { 
                    $files = $rows['file'];
                                $start = strpos($files, ".");
                                $fileExt = substr($files, $start);
                                $filesExt = '';

                                if ($fileExt == '.docx'){
                                  $filesExt = "word.png";
                                }elseif ($fileExt == '.doc'){
                                  $filesExt = "word.png";
                                }elseif ($fileExt == '.pptx'){
                                  $filesExt = "ppt.png";  
                                }elseif ($fileExt == '.pptm'){
                                  $filesExt = "ppt.png";  
                                }elseif ($fileExt == '.ppt'){
                                  $filesExt = "ppt.png";  
                                }elseif($fileExt == '.xlsx'){
                                  $filesExt = "excel.png";
                                }elseif($fileExt == '.xlsb'){
                                  $filesExt = "excel.png";
                                }elseif($fileExt == '.xls'){
                                  $filesExt = "excel.png";
                                }elseif($fileExt == '.xl'){
                                  $filesExt = "excel.png";
                                }elseif($fileExt == '.pdf'){
                                  $filesExt = "pdf.png";
                                }elseif($fileExt == '.zip'){
                                  $filesExt = "rar.png";
                                }elseif($fileExt == '.rar'){
                                  $filesExt = "rar.png";
                                }elseif($fileExt == '.txt'){
                                  $filesExt = "notepad.png";
                                }elseif($fileExt == '.txt'){
                                  $filesExt = "notepad.png";
                                }else{
                                  $filesExt = $rows['file'];
                                }
                                  ?>
			                	 	  		<tr>
			                	 	  			<td class="text-center"><img class="img-responsive" src="../upload/<?php echo $filesExt ?>" alt="<?php echo $rows['file'] ?>" style="width: 30px"></td>
			                	 	  			<td><?php echo $rows['date-uploaded']; ?></td>
			                	 	  			<td><?php echo $rows['code']; ?></td>
			                	 	  			<td><?php echo $rows['name']; ?></td>
			                	 	  			<td><?php echo $rows['type']; ?></td>
			                	 	  			<td><?php echo $rows['Doc_address']; ?></td>
			                	 	  			<td><?php echo $rows['file']; ?></td>
			                	 	  			
			                	 	  			<td class="text-center">
                             					 <div class="btn-group mr-2">
                              						<a href="#edit<?php echo $rows['id']; ?>" data-toggle="modal" data-tooltip="tooltip" title="Update <?php echo $row['name']; ?> Information" class="btn btn-sm btn-outline-primary"><span class="fa fa-edit"></span></a>
                              						<a href="#del<?php echo $rows['id']; ?>" data-toggle="modal" data-tooltip="tooltip" title="Archive document: <?php echo $rows['name']; ?>" class="btn btn-sm btn-outline-primary"><span class="fa fa-archive"></span></a>
  					                            </div>
                        					</td>
                        					<td class="text-center">
                                    <a href="#addnewborrower<?php echo $rows['id'] ?>" data-toggle="modal" data-tooltip="tooltip" title="Add borrower document: <?php echo $rows['name'] ?>" class="btn btn-success rounded-circle btn-sm"><span class="fa fa-user-plus"></span></a>
                                  </td>

                        					<?php 
                        						 include('modals/button.php'); 
                                		 include('modals/addborrower_modal.php');
                          						?>

			                	 	  		</tr>
			                	 	  	<?php	} ?>
			                	 	  </tbody>
			                	 	</table>
		                		</div>		                			
		                		

		                	
		                		<?php } ?>
		                		<?php } ?>
	                		</div>	                		
	                	</div>
                	</div>
                </div>			
</main>



<?php 
include 'htmlparts/footer.php';
include 'htmlparts/scripts.php';
?>

<script type="text/javascript">
function myFunction() {
    // Declare variables
    var input, filter, ul, li, a, i;
    input = document.getElementById('myInput');
    filter = input.value.toUpperCase();
    ul = document.getElementById("myUL");
    li = ul.getElementsByTagName('li');

    // Loop through all list items, and hide those who don't match the search query
    for (i = 0; i < li.length; i++) {
        a = li[i].getElementsByTagName("a")[0];
        if (a.innerHTML.toUpperCase().indexOf(filter) > -1) {
            li[i].style.display = "";
        } else {
            li[i].style.display = "none";
        }
    }
}

    $(document).ready(function() {
       	$('#myTable').dataTable();
       	$('#myTables').dataTable();

       	$(".nav-tabs a").click(function(){
        $(this).tab('show');
    });

     setTimeout(function(){
        $("#inner-meesage").hide();
     },4000);


     });
</script>

 <script type="text/javascript">
      $(document).ready(function(){
    var file = document.getElementById('files');

      file.onchange = function(e){
          var ext = this.value.match(/\.([^\.]+)$/)[1];
          switch(ext)
          {
              case 'jpg':
              case 'png':
              case 'tif':
              case 'docx':
              case 'txt':
              case 'pptx':
              case 'ppt':
              case 'doc':
              case 'xls':
              case 'xlsx':
              case 'pdf':
              case 'rar':
              case 'zip':
                  break;
              default:
                  alert('the file selected is not allowed');
                  this.value='';
          }
      };
      });
    </script>

    <script type="text/javascript">
$(document).ready(function(){
    $('.search-box input[type="text"][name="bname"]').on("keyup input", function(){
        /* Get input value on change */
        var inputVal = $(this).val();
        var resultDropdown = $(this).siblings(".result");
        if(inputVal.length){
            $.get("includes/search.php", {term: inputVal}).done(function(data){
                // Display the returned data in browser
                resultDropdown.html(data);
            });
        } else{
            resultDropdown.empty();
        }
    });
    
    // Set search input value on click of result item
    $(document).on("click", ".result p", function(){
        $(this).parents(".search-box").find('input[type="text"][name="bname"]').val($(this).text());
        $(this).parent(".result").empty();
    });
 // ==================================================================================================
     $('.search-boxs input[type="text"][name="code"]').on("keyup input", function(){
        /* Get input value on change */
        var inputVal = $(this).val();
        var resultDropdown = $(this).siblings(".result");
        if(inputVal.length){
            $.get("includes/search1.php", {term: inputVal}).done(function(data){
                // Display the returned data in browser
                resultDropdown.html(data);
            });
        } else{
            resultDropdown.empty();
        }
    });


});
</script>
