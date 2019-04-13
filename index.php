<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<?php 
//include 'login.php';
include 'connection/session.php';
if(!empty($_SESSION['uname'])){
	header("Location: admin/dashboard.php");
}

//naga check kun may unod or wala ang error nga gina kwa sang GET ok??

     
if (isset($_GET["error"]) && !empty($_GET["error"])) {
    //naga check sang value sang error
    if($_GET['error'] == 1){
    	$_SESSION['msgs'] = "Invalid Username or Password";
    }
    else if($_GET['error'] == 2){
    	$_SESSION['msgs'] = "Please Login First!";
    }    
}else{  
    echo "";
}

if (isset($_GET["logout"]) && !empty($_GET["logout"])) {
    if($_GET['logout'] == 1){
    	$_SESSION['msgs'] = "You've been logged out!";
    }   
}else{  
   echo "";
}

?>
<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="shortcut icon" type="image/x-icon" href="assets/src/img/favicon.ico">
        <!-- CSS -->
        <link rel="stylesheet" href="assets/src/css/bootstrap.min.css">
        <link rel="stylesheet" type="text/css" href="assets/src/css/w3.css">
        <link rel="stylesheet" type="text/css" href="assets/src/fa-font/css/font-awesome.min.css">
        <link rel="stylesheet" type="text/css" href="assets/src/css/cover.css">
        <!-- JavaScript -->
        <script src="assets/src/js/jquery.min.js"></script>
        <script src="assets/src/js/popper.min.js"></script>
        <script src="assets/src/js/bootstrap.min.js"></script>
        <script src="assets/src/js/holder.min.js"></script>
        <title>CHMSC DCMMS</title>
        <style>
  .img_1{
        background-image: url('assets/src/img/ged.jpg');
        min-width: 100%;
        min-height: 250px;
        background-repeat: no-repeat;
        background-position: center;
        background-size: cover;
    }
    .form-control{
    background-color: transparent;
    color: #fff;   
    text-align: center;       
    } 

    .form-control::-webkit-input-placeholder{
        /*color:#6c757d;*/
        color:#D3D3D3;
        opacity:1
        text-align: center;
        
    }

        </style>
    </head>
    <body class="img_1 bg-dark" style="font-size: .875rem;">
      <div class="cover-container d-flex w-100 h-100 p-3 mx-auto flex-column">
      <header class="masthead mb-auto">
        <div class="inner">
          <a class="masthead-brand"><img class="img img-responsive" src="assets/src/img/chmsc logo.png" style="width: 50px;">CHMSC DCMMS</a>
          <nav class="nav nav-masthead justify-content-center">
            <a class="nav-link active" href="#HOME">Home</a>
            <a class="nav-link" href="#signin"><span class="fa fa-sign-in"></span> Sign-in</a>
          </nav>
        </div>
      </header>

      <main role="main" class="inner cover">
        <div class="tab-content">
            <div id="HOME" class="w3-margin tab-pane active">
                <h1 class="cover-heading h2">CHMSC-BINALBAGAN<br><span class="p">Document Custodianship, Management and Monitoring System</span></h1>
                <p>With SMS Notification</p>
            </div>
            
          
            
            <div id="signin" class="w3-margin tab-pane fade">
                <div class="text-center">
                     <form class="form-signin" method="POST" action="login.php">
                        <h1 style="margin-bottom: 0px;">CHMSC DCMMS</h1>
                            <p>With SMS Notification</p>
                        <h1 class="h3 mb-3 font-weight-normal">Please sign in</h1>
                        <label for="userName" class="sr-only">User Name</label>
                        <input type="text" id="userName" name="user_name" class="form-control" placeholder="User name" required autofocus>
                        <label for="inputPassword" class="sr-only">Password</label>
                        <input type="password" id="inputPassword" name="user_pass" class="form-control" placeholder="Password" required>
                        <br>
                        <button class="btn btn-lg btn-outline-light btn-block" type="submit" name="signin">Sign in</button>
                      </form>
                </div>
            </div>
        </div>
                
        
      </main>

      <footer class="mastfoot mt-auto">
        <div class="inner">
            <p class="text-secondary text-center">CHMSC Document Custodianship Management and Monitoring System <br> &copy; 2017-2018</p>
        </div>
      </footer>
    </div> 
        <?php if(isset($_SESSION['msgs'])):?>
        <div>
            <script type="text/javascript">alert('<?php echo $_SESSION['msgs'];?>')</script>
            <?php 
                
                unset($_SESSION['msgs']);
            ?>
            
        </div>
        <?php endif;?>        
    </body>
</html>
</script>
<script type="text/javascript">
  $(document).ready(function(){
    $(".nav-masthead a").click(function(){
        $(this).tab('show');
    });
});
</script>