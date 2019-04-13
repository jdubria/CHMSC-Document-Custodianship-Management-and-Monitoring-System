<?php 
include 'htmlparts/header.php';
include("../connection/conn.php");
$edit_state = FALSE;
$id = '';
$type = '';
$message =FALSE;
$messages =FALSE;
$messagess = FALSE;
$messagesss = FALSE;

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


if (isset($_GET['dt_id'])){
  $id =  $_GET['dt_id'];
  $fetch = mysqli_fetch_assoc(mysqli_query($conn, "SELECT * FROM document_type WHERE dt_id = {$id}"));
  $type = $fetch['type'];
  $edit_state = TRUE;
?>
<script type="text/javascript">
  history.pushState('', document.title, window.location.pathname);
  </script>
<?php 
}


if (isset($_GET['added'])) {
     $message =TRUE;
?>
<script type="text/javascript">
        if (window.location.href.indexOf('?') > -1) {
        history.pushState('', document.title, window.location.pathname);
    }  
</script>
<?php       
}elseif (isset($_GET['success'])) {
   $messages =TRUE; ?>
<script type="text/javascript">
        if (window.location.href.indexOf('?') > -1) {
        history.pushState('', document.title, window.location.pathname);
    }  
</script>
<?php    
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
        <?php if($message == TRUE){ ?>
    
          <div id="dialogmessage">
            <div class="alert alert-primary fade show" id="inner-meesage" style="width: 30%;">
              <center>Successfully Added</center>
            </div>
          </div>
          <?php }elseif($messages == TRUE){?>
          <div id="dialogmessage">
            <div class="alert alert-success fade show" id="inner-meesage" style="width: 30%;">
              <center>Successfully updated</center>
            </div>
          </div>
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
                <center>One Document Type Restored</center>
                <script type="text/javascript">
                  history.pushState('', document.title, window.location.pathname);
                </script>
              </div>
            </div>          
       <?php }
        else if($_GET['restore'] == 2){ ?>
            <div id="dialogmessage">
              <div class="alert alert-danger fade show" id="inner-meesage" style="width: 30%;">
                <center>No Document Type Restored</center>
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
                               <a class="nav-link" href="settings.php">Office and Document Default</a>
                           </li>                
                           <li class="nav-item">
                               <a class="nav-link active" href="document_type.php">Add New Document Type</a>
                           </li>
                           <li class="nav-item">
                               <a class="nav-link" href="user.php">User's Profile</a>
                           </li>
                        </ul> 
                    </div>
                    <div class="col-sm-9">
                    	<div class="card w3-card-4">
                    		<div class="card-header bg-success text-light">
                    			<center><strong>Document Types</strong></center>
                    		</div>
                    		<div class="card-body">
                                                <div class="row">
                                                  <div class="col-sm-6">
                                                    <strong>Add New Document Type</strong>
                                                    <form method="POST" action="action/doc_type_action.php">
                                                        <div class="form-group row">
                                                            <label class="col-sm-4 col-form-label">Name Type:</label>
                                                            <div class="col-sm-8">
                                                              <input type="hidden" name="id" value="<?php echo $id; ?>" required>
                                                                <input type="text" class="form-control" name="type" placeholder="Input here..." value="<?php echo $type; ?>" required>
                                                            </div>
                                                        </div>
                                                        <br>
                                                        <div class="pull-right">
                                                          <div class="btn-group">
                                                            <button type="reset" class="btn btn-sm btn-outline-dark" value="reset">Clear</button>
                                                        <?php
                                                    if ($edit_state == FALSE) {                                            ?> 
                                                            <button type="submit" name="save" class="btn btn-sm btn-primary"><span class="fa fa-save"></span> Save</button>
                                                     <?php }else{  ?>      
                                                            <button type="submit" name="update" class="btn btn-sm btn-primary"><span class="fa fa-save"></span> Update</button>
                                                    <?php } ?>

                                                        </div>
                                                      </div>
                                                    </form>
                                                  </div>
                                                  <div class="col-sm-6">
                                                    <div class="table-responsive">
                                                      <table class="table table-sm table-striped">
                                                        <thead>
                                                          <tr>
                                                            <th>Document Types</th>
                                                            <th>Action</th>
                                                          </tr>
                                                        </thead>
                                                        <tbody>
                                                          <?php
                                                      $result = mysqli_query($conn, "SELECT * FROM document_type WHERE active = 1;");   
                                                      while ($row = mysqli_fetch_array($result)) { ?>
                                                          <tr>
                                                            <td><?php echo $row['type']; ?></td>
                                                            <td>
                                                              <div class="btn-group">
                                                                <a href="?dt_id=<?php echo $row['dt_id'] ?>" class="btn btn-sm btn-outline-primary"><span class="fa fa-edit"></span></a>
                                                                 <a href="#archive_dt<?php echo $row['dt_id'] ?>" data-toggle="modal" class="btn btn-sm btn-outline-success" title="Archive <?php echo $row['type']?>" data-tooltip="tooltip"><span class="fa fa-archive"></span></a>
                                                              </div>
                                                               <?php include 'modals/edit_newdocumenttype.php'; ?>
                                                            </td>
                                                          </tr>
                                                          <?php } ?>
                                                        </tbody>
                                                      </table>
                                                    </div>
                                                  </div>
                                                </div>                                                      
                    		</div>
                    		<div class="card-footer">
                    			
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
     setTimeout(function(){
        $("#inner-meesage").hide();
     },4000);

      // var myNewURL = refineURL();
      // window.history.pushState("object or string", "Title", "/" + myNewURL );

      // function refineURL(){
      //   var currURL= window.location.href;
      //   var afterDomain= currURL.substring(currURL.lastIndexOf('/') + 1);
      //   var beforeQueryString= afterDomain.split("?")[0];
      //   return beforeQueryString;
      // }
  });
</script>                          