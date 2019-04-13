<?php 
include 'htmlparts/header.php';
$office = 2;
$user_one = trim(mysqli_real_escape_string($conn, $_SESSION['userid']));
$user_two = trim(mysqli_real_escape_string($conn, $office));


if(isset($_GET['office'])){
$office = $_GET['office']; 

$user_one = trim(mysqli_real_escape_string($conn, $_SESSION['userid']));
$user_two = trim(mysqli_real_escape_string($conn, $office));

echo $user_one;
}
?>
        <style type="text/css">
            #myInput {
                background-image: url('../assets/src/img/search.png');
                background-size: 28px;
                background-position: 10px, 10px, 10px 12px;
                background-repeat: no-repeat; 
                padding: 12px 20px 12px 40px;
                border: 1px solid #ddd;
                margin-bottom: 12px;      
            }
          /*message*/
          .message-body{
              display: block;
              height: 400px;
              width: 100%;
              margin:0px auto;
              border:1px solid #ccc;
          }
          .message-left{
              display: block;
              height: 100%;
              width: 30%;
              float: left;
              overflow-y: scroll;
              border-right: 1px solid #ccc;
          }
          .message-right{
              display: block;
              height: 65%;
              width: 70%;
              float: left;
          }
          .message-left ul{
              list-style: none;
              margin: 0;
              padding: 0;
              width: 100%;
          }
          .message-left ul a{
              text-decoration: none;
          }
          .message-left ul a li{
              padding: 5px;
              border-bottom: 1px solid #ccc;
              font-weight: bold;
              color: black;
          }
          .message-left ul a li img{
              height: 50px;
              width: 50px;
          }
          .message-left ul a li:hover{
              background: #EBEDF5;
          }
          .message-left ul a li.active{
              background: #6B83B3;
          }
          .message-right .display-message{
              display: block;
              height: 68%;
              width: 100%;
              /*border-bottom: 1px solid #ccc;*/
              overflow-y:scroll;
          }
          .message-right .send-message{
              height: 15%;
                  background: #eee;
              padding: 10px;
          }
          .display-message .message{
              min-height: 60px;
              padding: 5px;
          }
          .message .img-con{
              width: 10%;
              float: left;
              height: inherit;
          }
          .message .img-con > img{
              height: 50px;
              width: 50px;
          }
          .message .text-con{
              width: 90%;
              float: left;
              height: inherit;
          }
          hr{
              margin-top: 0;
              margin-bottom: 0;
              border-top:1px solid #ccc;
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
                        <a class="nav-link active" href="dashboard.php">
                      Dashboard <span class="sr-only">(current)</span>
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
                      <a class="nav-link" href="archives.php">
                      Archives
                    </a>
                  </li>
            </ul>
          </div>  
        </nav>
        
        <main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-4" style="margin-top: 90px;">
          <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
                <h1 class="h2"><span class="fa fa-envelope-open-o"></span>Messages<span><br><p class="h6"><?php echo $_SESSION['office']; ?></p></span></h1>

              </div>
                
                <ol class="breadcrumb">
                  <a href="dashboard.php" class="breadcrumb-item">Dashboard</a> 
                  <a href="#" class="breadcrumb-item active">Messages</a>
                </ol> 
<div class="container">

   <div class="message-body">
  
        <div class="message-left">
      <div class="d-flex flex-wrap flex-md-nowrap pt-3 pb-2 mb-3 border-bottom w3-margin">
        <center><h4 class="text-center text-info"><span class="fa fa-inbox"></span> Inbox</h4></center>
      </div>           
            <ul class="list-group">
                       <?php
                    $q = mysqli_query($conn, "SELECT * FROM `user`
                      INNER JOIN office ON user.office_id = office.office_id
                     WHERE user.userid != '$user_one'");
                    while($row = mysqli_fetch_assoc($q)){
                        echo "<li class='list-group-item'><a href='?office={$row['userid']}'> {$row['name']} <span class='badge'>{$row['office_name']}</span></a></li>";
                    }
                ?>
            </ul>
        </div>
       
        <div class="message-right">
                <div class="d-flex flex-wrap flex-md-nowrap pt-3 pb-2 mb-3 border-bottom w3-margin">
                    <center><h4 class="text-center text-info">Conversation</h4></center>
                </div>            
            <div class="display-message">
  <?php
                if(isset($_GET['office'])){
                    $user_two = trim(mysqli_real_escape_string($conn, $_GET['office']));
                    $query = "SELECT userid FROM user WHERE userid = {$user_two} AND userid != {$user_one}";

                    $q = mysqli_query($conn, $query);
                    if(mysqli_num_rows($q) == 1){
                        $conver = mysqli_query($conn, "SELECT * FROM `conversation` WHERE (user_one='$user_one' AND user_two='$user_two') OR (user_one='$user_two' AND user_two='$user_one')");
 

                        if(mysqli_num_rows($conver) == 1){
                            
                            $fetch = mysqli_fetch_assoc($conver);
                            $conversation_id = $fetch['id'];
                        }else{ 

                            $q = mysqli_query($conn, "INSERT INTO `conversation` (`user_one`, `user_two`) VALUES ('{$office}', '{$user_two}');");
                            $conversation_id = mysqli_insert_id($conn);
                        }
                    }else{
                        die("Invalid $_GET ID.");
                    }
                }else {
                    echo "Click On the Person to start Chating.";
                }
            ?>
            </div>

                <div class="send-message">    
                <input type="hidden" id="conversation_id" value="<?php echo base64_encode($conversation_id); ?>">
                <input type="hidden" id="user_form" value="<?php echo base64_encode($user_one); ?>">
                <input type="hidden" id="user_to" value="<?php echo base64_encode($user_two); ?>">
                <div class="form-group">
                    <textarea class="form-control" id="message" placeholder="Enter Your Message"></textarea>
                </div>
                <button class="btn btn-outline-primary" id="reply"><span class="fa fa-send"></span> Send</button> 
                <span id="error"></span>
            </div>
                    </div>
 
        </div>
    </div>



</div>            

        </main>        
            </div>



<?php 
include 'htmlparts/footer.php';
include 'htmlparts/scripts.php';  
?>

<script type="text/javascript">
  
$(document).ready(function(){
    /*post message via ajax*/
    $("#reply").on("click", function(){
        var message = $.trim($("#message").val()),
            conversation_id = $.trim($("#conversation_id").val()),
            user_form = $.trim($("#user_form").val()),
            user_to = $.trim($("#user_to").val()),
            error = $("#error");
 
        if((message != "") && (conversation_id != "") && (user_form != "") && (user_to != "")){
            error.text("Sending...");
            $.post("includes/post_message_ajax.php",{message:message,conversation_id:conversation_id,user_form:user_form,user_to:user_to}, function(data){
                error.text(data);
                //clear the message box
                $("#message").val("");
            });
        }
    });
 
 
    //get message
    c_id = $("#conversation_id").val();
    //get new message every 2 second
    setInterval(function(){
        $(".display-message").load("includes/get_message_ajax.php?c_id="+c_id);
    }, 2000);
 
    $(".display-message").scrollTop($(".display-message")[0].scrollHeight);
});
</script>
