  <?php
include 'htmlparts/header.php';
include("../connection/conn.php");

$message =FALSE;
$messages =FALSE;
$messagess =FALSE;
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

if (isset($_GET["sent"]) && !empty($_GET["sent"])) {
    $messagess = TRUE;    
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
        <?php } elseif($messagess == TRUE){
        if($_GET['sent'] == 1){ ?>
            <div id="dialogmessage">
              <div class="alert alert-success fade show" id="inner-meesage" style="width: 30%;">
                <center>Successfully sent</center>
                <script type="text/javascript">
                  history.pushState('', document.title, window.location.pathname);
                </script>
              </div>
            </div>          
       <?php }
        else if($_GET['sent'] == 2){ ?>
            <div id="dialogmessage">
              <div class="alert alert-danger fade show" id="inner-meesage" style="width: 30%;">
                <center>No Sender, No Document Sent</center>
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
            
    <div class="table-responsive">
      <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3">
          <div class="btn-toolbar mb-2 mb-md-0">
                <ol class="breadcrumb">
                  <a href="document.php" class="breadcrumb-item">Document Management</a> 
                  <a href="#" class="breadcrumb-item active">Recieved Messages</a>
                </ol> 	
                </div>
          		
      </div>      
			</div>

      <div class="table-responsive">
        <table id="myTable" class="table table-striped table-bordered table-sm">
            <thead>
             <tr>
               <th class="text-center"></th>
                     <th class="text-center">Date Uploaded</th>
                     <th class="text-center">Code</th>
                     <th class="text-center">Type</th>
                     <th class="text-center">Address</th>
                     <th class="text-center">File</th>
                     <th class="text-center">View Document</th>
             </tr>
            </thead>
          <tbody>
            <?php 
            $id = $_SESSION['office_id'];
           $result = mysqli_query($conn, "
SELECT * FROM document
INNER JOIN sent_document ON sent_document.code = document.code
INNER JOIN user ON sent_document.user_name = user.user_name
INNER JOIN office ON user.office_id = office.office_id
INNER JOIN document_type ON document.dt_id = document_type.dt_id
WHERE office.office_id = {$id}         
           "); 
            ?>
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
                 }else{
                   $filesExt = $rows['file'];
                 }
             ?>
            <tr>
              <td class="text-center"><img class="img-responsive" src="../upload/<?php echo $filesExt ?>" alt="<?php echo $rows['file'] ?>" style="width: 30px"></td>
              <td><?php echo $rows['date-uploaded']; ?></td>
              <td><?php echo $rows['code']; ?></td>
              <td><?php echo $rows['type']; ?></td>
              <td><?php echo $rows['Doc_address']; ?></td>
              <td><?php echo $rows['file']; ?></td>

              <td class="text-center">
                <button onclick="window.open('web/viewer.html?file=<?php echo $rows['file_destination'] ?>', '_blank', 'location=yes, height=500, width=1000, scrollbars=yes, status=yes');" class="btn btn-sm btn-outline-primary"><span class="fa fa-eye"></span> View PDF</button>
              </td>              
            </tr>

            <?php } ?>
          </tbody>
        </table>
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
    var file = document.getElementById('filess');

      file.onchange = function(e){
          var ext = this.value.match(/\.([^\.]+)$/)[1];
          switch(ext)
          {
              case 'pdf':
                  break;
              default:
                  alert('Only PDF File is allowed');
                  this.value='';
          }
      };

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