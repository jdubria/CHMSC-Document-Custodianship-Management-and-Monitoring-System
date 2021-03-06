<?php 
include 'htmlparts/header.php';
?>
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
                    <a class="nav-link" href="dashboard.php">
                      Dashboard
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
                      <a class="nav-link active" href="archives.php">
                      Archives <span class="sr-only">(current)</span>
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
        <div class="row"  style="margin-top: 22px;">
        <nav class="col-md-2 d-none d-md-block sidebar" style="margin-top: 22px;">
            <div class="sidebar-sticky">
                <ul class="nav flex-column">
                    <div class="container border-bottom bg-primary">
                        <div class="text-center">
                            <br>
                            <div class="img-responsive">
                            <img src="../assets/src/img/admin.png" class="img" style="width: 50%;">
                            <a class="w3-text-white"><br>
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
                      <a class="nav-link" href="document.php">
                      Document Management
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
                      <a class="nav-link active" href="archives.php">
                      Archives <span class="sr-only">(current)</span>
                    </a>
                  </li>
            </ul>
          </div>  
        </nav>
              
            
            
        
        <main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-4" style="margin-top: 90px;">
            <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
                <h1 class="h2"><span class="fa fa-archive"></span> Archives<span><br><p class="h6"><?php echo $_SESSION['office']; ?></p></span></h1>
                <div class="btn-toolbar mb-2 mb-md-0">
                    <div class="btn-group mr-2">
                        <a href="messages.php?office=Office of the Information Technology" class="btn btn-sm btn-outline-secondary" title="View Messages"><span class="fa fa-envelope"></span> Messages</a>                      
                    </div>     
                </div>
              </div>

            <div class="container-fluid">
            	<div class="row">
            		<div class="col-sm-3">
		                	<ul class="nav nav-pills nav-stacked">
		                		<li class="nav-item text-nowrap">
		                    		<a class="nav-link active" href="archives.php">
		                    			<span class="fa fa-list-ul"></span>
		                      		CHMSC Document Archives<span class="sr-only">(current)</span>
		                    		</a>
		                  		</li>
		                  		<li class="nav-item text-nowrap">
		                      		<a class="nav-link" href="archive_central.php">
		                      			<span class="fa fa-home"></span>
		                      			Central Office Document Archives
		                    		</a>
		                  		</li>
		                  		<li class="nav-item text-nowrap">
		                      		<a class="nav-link" href="archive_documentborrower.php">
		                      			<span class="fa fa-users"></span>
		                      			Borrower Archives
		                    		</a>
		                  		</li>
                          <li class="nav-item text-nowrap">
                              <a class="nav-link" href="archive_borrowing.php">
                                <span class="fa fa-list-ul"></span>
                                Borrowing Record Archives
                            </a>
                          </li>
		                  		<li class="nav-item text-nowrap">
		                      		<a class="nav-link" href="archive_office.php">
		                      			<span class="fa fa-home"></span>
		                      			Office Archives
		                    		</a>
		                  		</li>
		                  		<li class="nav-item text-nowrap">
		                      		<a class="nav-link" href="archive_documenttype.php">
		                      			<span class="fa fa-list-ul"></span>
		                      			Document Type Archives
		                    		</a>
		                  		</li>
		                  		<li class="nav-item text-nowrap">
		                      		<a class="nav-link" href="archive_user.php">
		                      			<span class="fa fa-users"></span>
		                      			User Archives
		                    		</a>
		                  		</li>
		                	</ul>
            		</div>
            		<div class="col-sm-9">
                  <div class="card">
                    <div class="card-header bg-success text-light">
                      <center><h5><strong>CHMSC Document</strong></h5></center>
                    </div>
                    <div class="card-body">
                      
                      <div class="table-responsive">
                  <br>
                <div class="pull-left">
                  <button class="btn btn-sm btn-outline-secondary dropdown-toggle" data-toggle="dropdown" title="Print Document"><span class="fa fa-print"></span> Print Record<span class="caret"></span></button>
                        <ul class="dropdown-menu dropdown-menu-right">
                          <li class="dropdown-item"><a tabindex="-1" onclick="window.open('print/print_annual_archive.php', '_blank', 'location=yes, height=470, width=740, scrollbars=yes, status=yes');">Annual Report</a></li>
                          <li class="dropdown-divider"></li>
                          <li class="dropdown-item dropdown-submenu">
                            <a class="test" tabindex="-1" href="#">Quarterly Report <span class="fa fa-toggle-right"></span></a>
                            <ul class="dropdown-menu">
                              <li class="dropdown-item ><a tabindex="-1" onclick="window.open('print/print_quarter1_archive.php', '_blank', 'location=yes, height=470, width=740, scrollbars=yes, status=yes');">1st Quarter</a></li>
                              <li class="dropdown-item ><a tabindex="-1" onclick="window.open('print/print_quarter2_archive.php', '_blank', 'location=yes, height=470, width=740, scrollbars=yes, status=yes');">2nd Quarter</a></li>
                              <li class="dropdown-item ><a tabindex="-1" onclick="window.open('print/print_quarter3_archive.php', '_blank', 'location=yes, height=470, width=740, scrollbars=yes, status=yes');">3rd Quarter</a></li>
                              <li class="dropdown-item ><a tabindex="-1" onclick="window.open('print/print_quarter4_archive.php', '_blank', 'location=yes, height=470, width=740, scrollbars=yes, status=yes');">4th Quarter</a></li>
                            </ul>
                          </li>  
                        </ul>                  
                </div>
                           <br><br><br>                        
                        <table class="table table-sm table-inverse" id="table">
                        <thead class="thead-inverse">
                            <th class="text-center">Date Archived</th>
                            <th class="text-center">Office</th>
                             <th class="text-center">Code</th>
                             <th class="text-center">Name</th>
                             <th class="text-center">Classification</th>
                             <th class="text-center">Type</th>
                             <th class="text-center">Restore</th>
                              </thead>
                              <tbody>
                          <?php 
                          $query = mysqli_query($conn, "
                            SELECT * FROM document
                            INNER JOIN document_type ON document.dt_id = document_type.dt_id
                            INNER JOIN document_classification ON document.dc_id = document_classification.dc_id
                            INNER JOIN office ON document.office_id = office.office_id
                            WHERE document.active = 0");
                          while ($row = mysqli_fetch_array($query)) { ?>
                            <tr>
                                <td><?php echo $row['date_archive']; ?></td>
                                <td><?php echo $row['office_name']; ?></td>
                                <td><?php echo $row['code']; ?></td>
                                <td><?php echo $row['name']; ?></td>
                                <td><?php echo $row['class']; ?></td>
                                <td><?php echo $row['type']; ?></td>
                                      
                                  <td class="text-center">
                                        <a href="#restoredoc<?php echo $row['id']; ?>" data-toggle="modal" data-tooltip="tooltip" title="Restore document: " class="btn btn-sm btn-outline-primary"><span class="fa fa-recycle "></span></a>
                                  </td>
                                 
                                  <?php  
                                  include 'modals/restoredocmodal.php';
                                  ?>

                                </tr>
                          <?php 
                          }
                          ?>
                         </tbody>
                         </table>
                         </div>

                    </div>

                  </div>
            		 </div>
            	</div>
            </div>
        </main>
    </div>
</div>


<?php 
include 'htmlparts/footer.php';
include 'htmlparts/scripts.php';	
?>
<script type="text/javascript">
  $(document).ready(function(){
    $("#table").dataTable();
  });
</script>