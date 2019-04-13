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
            <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
               <h1 class="h2">Settings<span><br><p class="h6"><?php echo $_SESSION['office']; ?></p></span></h1>
            </div>
          <div class="container">
          	<div class="row">
          		<div class="col-sm-3 container">
                        <h6><b>Menu</b></h6>
                        <ul class="nav nav-pills nav-stacked">
                           <li class="nav-item">
                               <a class="nav-link" href="Settings.php">Set Document Default</a>
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
                    		<div class="card-body">
                    			
                  		          <strong><?php echo $_SESSION['name']; ?></strong><br>
                  		          <table class="table table-user-information">
                  		              <tbody>
                  		              <tr>
                  		                  <td>User level:</td>
                  		                  <td><?php echo $_SESSION['user_level']; ?></td>
                  		              </tr>
                  		              <tr>
                  		                  <td>Registered since:</td>
                  		                  <td><?php echo $_SESSION['date']; ?></td>
                  		              </tr>
                  		              <tr>
                  		                  <td>Office:</td>
                  		                  <td><?php echo $_SESSION['office']; ?></td>
                  		              </tr>
                  		              <tr>
                  		                  <td>Name:</td>
                  		                  <td><?php echo $_SESSION['name']; ?></td>
                  		              </tr>
                  		              <tr>
                  		                  <td>Address:</td>
                  		                  <td><?php echo $_SESSION['address']; ?></td>
                  		              </tr>
                  		              <tr>
                  		                  <td>Contact:</td>
                  		                  <td><?php echo $_SESSION['contact']; ?></td>
                  		              </tr>
                  		              </tbody>
                  		          </table>
                  		                           
                    		</div>
                    		<div class="card-footer">
                    			
<!--                                                 
                                                  <span class="pull-right">
                                                      <button class="btn btn-sm btn-warning" type="button"
                                                              title="Edit this user"><i class="fa fa-edit"></i>
                                                      </button>
                                                      <button class="btn btn-sm btn-danger" type="button"
                                                              title="Remove this user">
                                                          <i class="fa fa-remove"></i>
                                                      </button>
                                                  </span>
                                              -->
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
