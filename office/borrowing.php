<!DOCTYPE html>
<?php
include 'htmlparts/header.php';
$offices =  $_SESSION['office_id'];
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
                    <a class="nav-link" href="setings.php">
                      Settings
                    </a>
                  </li>
                  <li class="nav-item d-sm-block d-md-none text-nowrap">
                      <a class="nav-link" href="archives.php">
                      Archives
                    </a>
                  </li>
              <li class="nav-item dropdown text-nowrap">
                    <a href="#" class="dropdown-toggle btn btn-success" id="dropdownni" data-toggle="dropdown"><span class="label label-pill label-danger count" style="border-radius:10px;"></span> <span class="fa fa-envelope" style="font-size:18px;"></span></a>
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
                      <a class="nav-link active" href="borrowers.php">
                      Borrowers Management <span class="sr-only">(current)</span>
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
                <center>One Borrower Restored</center>
                <script type="text/javascript">
                  history.pushState('', document.title, window.location.pathname);
                </script>
              </div>
            </div>          
       <?php }
        else if($_GET['restore'] == 2){ ?>
            <div id="dialogmessage">
              <div class="alert alert-danger fade show" id="inner-meesage" style="width: 30%;">
                <center>No Borrower Restored</center>
                <script type="text/javascript">
                  history.pushState('', document.title, window.location.pathname);
                </script>               
              </div>
            </div>
       <?php } ?>       
        <?php }?>  

          <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
                <h1 class="h2">Returned Document List<span><br><p class="h6"><?php echo $_SESSION['office']; ?></p></span></h1>

              </div>
                
                <ol class="breadcrumb">
                  <a href="borrowers.php" class="breadcrumb-item">Borrowers Management</a> 
                  <a href="#" class="breadcrumb-item active">Returned Document List</a>
                </ol> 

               	<div class="table-responsive">
                  <br>
                        <button class="btn btn-sm btn-outline-secondary dropdown-toggle" data-toggle="dropdown"><span class="fa fa-print"></span> Print All Borrowing Record</button>
                        <ul class="dropdown-menu dropdown-menu-right">
                          <li class="dropdown-item"><a tabindex="-1" onclick="window.open('print/print_borrowing_annual.php?office=<?php echo $offices ?>', '_blank', 'location=yes, height=470, width=740, scrollbars=yes, status=yes');">Annual Report</a></li>
                          <li class="dropdown-divider"></li>
                          <li class="dropdown-item dropdown-submenu">
                            <a class="test" tabindex="-1" href="#">Quarterly Report <span class="fa fa-toggle-right"></span></a>
                            <ul class="dropdown-menu">
                              <li class="dropdown-item ><a tabindex="-1" onclick="window.open('print/print_borrowing_quarter1.php?office=<?php echo $offices ?>', '_blank', 'location=yes, height=470, width=740, scrollbars=yes, status=yes');">1st Quarter</a></li>
                              <li class="dropdown-item ><a tabindex="-1" onclick="window.open('print/print_borrowing_quarter2.php?office=<?php echo $offices ?>', '_blank', 'location=yes, height=470, width=740, scrollbars=yes, status=yes');">2nd Quarter</a></li>
                              <li class="dropdown-item ><a tabindex="-1" onclick="window.open('print/print_borrowing_quarter3.php?office=<?php echo $offices ?>', '_blank', 'location=yes, height=470, width=740, scrollbars=yes, status=yes');">3rd Quarter</a></li>
                              <li class="dropdown-item ><a tabindex="-1" onclick="window.open('print/print_borrowing_quarter4.php?office=<?php echo $offices ?>', '_blank', 'location=yes, height=470, width=740, scrollbars=yes, status=yes');">4th Quarter</a></li>
                            </ul>
                          </li>  
                        </ul>                      
                  <br><br>                  
               		<table class="table table-sm table-striped table-bordered" id="table">
               			<thead>
               				<tr class="bg-dark text-white">
               					<th>#</th>
               					<th>Date Borrowed</th>
               					<th>Date Returned</th>
               					<th>Doc Code</th>
               					<th>Doc Name</th>
               					<th>Borrower Name</th>
               					<th>Contact</th>
               					<th>Action</th>
               				</tr>
               			</thead>
               			<tbody>
                      <?php
                      $x = 1;
                      $result = mysqli_query($conn, "
                SELECT * FROM borrowing
                INNER JOIN borrowers ON borrowing.bor_id = borrowers.bor_id
                INNER JOIN document ON borrowing.code = document.code
                INNER JOIN document_type ON document.dt_id = document_type.dt_id
                INNER JOIN document_classification ON document.dc_id = document_classification.dc_id
                INNER JOIN office ON borrowing.office_id = office.office_id
                WHERE borrowing.remarks = 'returned' AND borrowing.active = 1 AND office.office_id = {$_SESSION['office_id']};                      
                        ");
                       while ($row = mysqli_fetch_array($result)) { ?>
               				<tr>
                        <td><?php echo $x++ ?></td>
               					<td><?php echo $row['date']; ?></td>
               					<td><?php echo $row['dates']; ?></td>
               					<td><?php echo $row['code']; ?></td>
               					<td><?php echo $row['name']; ?></td>
                        <td><?php echo $row['bname']; ?></td>
                        <td><?php echo $row['contact']; ?></td>
                        <td><a href="action/borrowingarchive.php?id=<?php echo $row['borrowing_id'] ?>" class="btn btn-sm btn-primary"><span class="fa fa-archive"></span> Archive</a></td>
               				</tr>
                      <?php } ?>
               			</tbody>
               		</table>
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

  setTimeout(function(){
  $("#inner-meesage").hide();
 },4000);

  });
</script>