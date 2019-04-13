<?php 
include 'htmlparts/header.php';
include("../connection/conn.php");
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
            <div class="row"  style="margin-top: 22px;">
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
                            <p style="margin-bottom
                            : 0px;"><b><span id="date"></span></b></p>
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
                    <a class="nav-link active" href="settings.php">
                      Settings<span class="sr-only">(current)</span>
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
                Successfully Added
                <script type="text/javascript">
                  history.pushState('', document.title, window.location.pathname);
                </script>
              </div>
            </div>          
       <?php }
        else if($_GET['added'] == 2){ ?>
            <div id="dialogmessage">
              <div class="alert alert-danger fade show" id="inner-meesage" style="width: 30%;">
                No Data Added
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
                Successfully Updated
                <script type="text/javascript">
                  history.pushState('', document.title, window.location.pathname);
                </script>
              </div>
            </div>          
       <?php }
        else if($_GET['update'] == 2){ ?>
            <div id="dialogmessage">
              <div class="alert alert-danger fade show" id="inner-meesage" style="width: 30%;">
                No Data Updated
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
                Successfully Archived
                <script type="text/javascript">
                  history.pushState('', document.title, window.location.pathname);
                </script>
              </div>
            </div>          
       <?php }
        else if($_GET['archive'] == 2){ ?>
            <div id="dialogmessage">
              <div class="alert alert-danger fade show" id="inner-meesage" style="width: 30%;">
                No Data Archived
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
               <h1 class="h2">Settings<span><br><p class="h6"><?php echo $_SESSION['office']; ?></p></span></h1>
            </div>
          <div class="container">
          	<div class="row">
          		<div class="col-sm-3 container">
                        <h6><b>Menu</b></h6>
                        <ul class="nav nav-pills nav-stacked">
                           <li class="nav-item">
                               <a class="nav-link active" href="Settings.php">Set Document Default</a>
                           </li>
                           <li class="nav-item">
                               <a class="nav-link" href="user.php">User's Profile</a>
                           </li>
                        </ul> 
                    </div>
                    <div class="col-sm-9">
                    	<div class="card w3-card-4">
                    		<div class="card-header bg-success text-light">
                    			<center><strong>Document Default</strong></center>
                    		</div>
        <?php 
        $result = mysqli_query($conn, "SELECT * FROM office WHERE office_id = {$_SESSION['office_id']}");
        $fetch = mysqli_fetch_assoc($result);
        $default = $fetch['default'];
        ?>                        
                    		<div class="card-body">
                    			<form>
                                    <div class="form-group row">
                                        <label class="col-sm-4 col-form-label">Default Document Code:</label>
                                            <div class="col-sm-8">
                                                <input type="text" class="form-control" name="default" value="<?php echo $default ?>" placeholder="Input here...">
                                            </div>
                                    </div>
                                                    
                    		</div>
                    		<div class="card-footer">
                    			<div class="pull-right">
                                    <button type="submit" name="save" class="btn btn-sm btn-primary"><span class="fa fa-save"></span> Save</button>
                                </div>
                                </form>
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

<?php 
if (isset($_GET['default']) && isset($_GET['save'])) {
  $office_id = $_SESSION['office_id'];
  $val = $_GET['default'];

  $query = mysqli_query($conn, "UPDATE `office` SET `default`='{$val}' WHERE  `office_id`={$office_id};");

  if ($query == TRUE) {
              die("<script>
                location.href = '?update=1'; 
            </script>");
}else{
            die("<script>
                location.href = '?update=2'; 
            </script>");
}
}
?>