<?php 
include 'htmlparts/header.php';
include("../connection/conn.php");
$error = FALSE;
$message =FALSE;
$messages =FALSE;
$messagess =FALSE;
$messagesss = FALSE;

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

if (isset($_GET["error"]) && !empty($_GET["error"])) {
    $error = TRUE;    
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

        <?php }elseif($error == TRUE){
        if($_GET['error'] == 1){ ?>
            <div id="dialogmessage">
              <div class="alert alert-danger fade show" id="inner-meesage" style="width: 30%;">
                <center>No User Added</center>
                <script type="text/javascript">
                  history.pushState('', document.title, window.location.pathname);
                </script>               
              </div>
            </div>
       <?php }elseif ($_GET['error'] == 2) { ?>
            <div id="dialogmessage">
              <div class="alert alert-danger fade show" id="inner-meesage" style="width: 30%;">
                <center>Incorrect Old Password</center>
                <script type="text/javascript">
                  history.pushState('', document.title, window.location.pathname);
                </script>               
              </div>
            </div>         
       <?php }
     }elseif($messagesss == TRUE){
        if($_GET['restore'] == 1){ ?>
            <div id="dialogmessage">
              <div class="alert alert-success fade show" id="inner-meesage" style="width: 30%;">
                <center>One User Restored</center>
                <script type="text/javascript">
                  history.pushState('', document.title, window.location.pathname);
                </script>
              </div>
            </div>          
       <?php }
        else if($_GET['restore'] == 2){ ?>
            <div id="dialogmessage">
              <div class="alert alert-danger fade show" id="inner-meesage" style="width: 30%;">
                <center>No User Restored</center>
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
                               <a class="nav-link" href="document_type.php">Add New Document Type</a>
                           </li>
                           <li class="nav-item">
                               <a class="nav-link active" href="user.php">User's Profile</a>
                           </li>
                        </ul> 
                    </div>
                    <div class="col-sm-9">
                    	<div class="card w3-card-4">
                    		<div class="card-header bg-success text-light">
                    			<center><strong>User Information</strong></center>
                    		</div>
                        <div class="container">
                          <div class="btn-group mr-2">
                            <div class="w3-margin">
                        <a href="#adduser" data-toggle="modal" data-tooltip="tooltip" title="Add User" class="btn btn-sm btn-outline-primary"><span class="fa fa-user-plus"></span> User</a> 
                        <?php
                          include "modals/add_usermodal.php";
                        ?>
                    </div>
                  </div>
                  </div>

                    		<div class="card-body">
                  <div class="w3-margin">
                    <div class="row">
                      <div class="col-sm-4">
                <input type="text" id="myInput" onkeyup="myFunction()" placeholder="Search for names.." class="list-group-item">

                <ul id="myUL" class="list-group box">
                  <?php
                  $result = mysqli_query($conn, "
        SELECT user.userid, user.user_level, user.user_name, user.password, user.register, user.office_id, user.name,
             user.address, user.contact, user.active, office.office_id, office.office_name
        FROM
            user, office
        WHERE
            user.office_id = office.office_id   
        HAVING
            user.active = 1
        ORDER BY 
            user.userid ASC
                    ");
                  while ($rows = mysqli_fetch_array($result)) { ?>
                  <li class="list-group-item" data-tooltip="tooltip" title="<?php echo $rows['name'] ?> of <?php echo $rows['office_name'] ?> "><a href="?id=<?php echo $rows['userid'] ?>"><?php echo $rows['name']; ?></a></li>
                  <?php
                  }
                   ?>                      
                </ul>                 
                      </div>
                      <div class="col-sm-8">

                        <?php if (isset($_GET['id'])) {
                          $id = $_GET['id'];
                          $result = mysqli_query($conn, "
SELECT user.userid, user.user_level, user.user_name, user.password, user.register, user.office_id, user.name,
     user.address, user.contact, user.active, office.office_id, office.office_name
FROM
    user, office
WHERE
    user.office_id = office.office_id
    AND
    user.userid = {$id}   
HAVING
    user.active = 1
ORDER BY 
    user.userid ASC
                            ");

                         while ($rows = mysqli_fetch_array($result)) { 
                          $userlevel = $rows['user_level'];
                          $userlvl = '';
                          if ($userlevel = 1) {
                           $userlvl = "Administrator";
                          }elseif ($userlevel = 2) {
                            $userlvl = "Office Administrator";
                          }elseif ($userlevel = 3) {
                            $userlvl = "Viewer";
                          }
                          ?>
                <div class="table-responsive">
                            <table id="ttable" class="table table-striped table-bordered table-sm w3-small">
                              <thead style="font-size: .750rem;">
                                <tr>
                                 <div class="col-sm-9">
                                        <strong><?php echo $rows['name']; ?></strong>

                                         <table class="table table-user-information">
                                                              <tbody>
                                                              <tr>
                                                                  <td>User level:</td>
                                                                  <td><?php echo $userlvl; ?></td>
                                                              </tr>
                                                              <tr>
                                                                  <td>Registered since:</td>
                                                                  <td><?php echo $rows['register']; ?></td>
                                                              </tr>
                                                               <tr>
                                                                  <td>Office:</td>
                                                                  <td><?php echo $rows['office_name']; ?></td>
                                                              </tr>
                                                              <tr>
                                                                  <td>Name:</td>
                                                                  <td><?php echo $rows['name']; ?></td>
                                                              </tr>
                                                               <tr>
                                                                  <td>Address:</td>
                                                                  <td><?php echo $rows['address']; ?></td>
                                                              </tr>
                                                               <tr>
                                                                  <td>Contact:</td>
                                                                  <td><?php echo $rows['contact']; ?></td>
                                                              </tr>
                                                            </tbody>
                                 <?php include 'modals/edit_usermodal.php'; ?>   
                                 <?php include 'modals/changeusermodal.php'; ?>
                                 
          
                            </table>
                            <div class="pull-left">
                            <div class="btn-group">  
                            <button type="button" class="btn btn-sm btn-success shadow" data-toggle="modal" data-target="#edit_user" data-tooltip="tooltip" title="Edit"><span class="fa fa-edit"></span> Edit</button>

                            <button type="button" class="btn btn-sm btn-success shadow" data-toggle="modal" data-target="#archive_user" data-tooltip="tooltip" title="Archive"><span class="fa fa-archive"></span> Archive</button>
                            </div>
                          </div>

                          <div class="pull-right">
                            <button type="button" class="btn btn-sm btn-warning" data-toggle="modal" data-target="#changeuser" data-tooltip="tooltip" title="Update User Information"><span class="fa fa-edit"></span> Change User Info</button>
                          </div>
                          </div>                          
                      </div>                           
                  <?php } 
                        }else{
                          echo "<center>
                                  <strong>
                                    Click on the names...
                                  </strong>
                                </center>";
                        } ?>



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
<style type="text/css">
#myInput {
    background-image: url('../assets/src/img/search.png'); /* Add a search icon to input */
    background-size: 28px;
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
}
.box{
  position:relative;
    top: inherit;
    width: 100%;
    overflow:auto;  
    height: 100%;  
}
</style>

<script>
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
</script>
<script type="text/javascript">
  $(document).ready(function(){
  $('.alert').alert();

       setTimeout(function(){
        $("#inner-meesage").hide();
     },4000);



  });
</script>
