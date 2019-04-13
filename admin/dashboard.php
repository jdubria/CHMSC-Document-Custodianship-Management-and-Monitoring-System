<?php 
include 'htmlparts/header.php';
?>
<style>
.dropdown-submenu {
    position: relative;
}

.dropdown-submenu .dropdown-menu {
    top: 0;
    left: 100%;
    margin-top: -1px;
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
                <h1 class="h2">Dashboard<span><br><p class="h6"><?php echo $_SESSION['office']; ?></p></span></h1>
                <div class="btn-toolbar mb-2 mb-md-0">
                    <div class="btn-group mr-2">
                        <a href="messages.php" class="btn btn-sm btn-outline-secondary" title="View Messages"><span class="fa fa-envelope"></span> Messages</a>                      
                    </div>     
                </div>
              </div>

            <div class="container-fluid">
              <caption>CHMSC Documents</caption>
              <canvas class="my-4 w-100" id="myChart" width="900" height="345"></canvas>
            </div>



            <ul class="nav nav-tabs">
            	<li class="nav-item">
               		 <a class="nav-link active" href="#documents"><span class="fa fa-th-list"></span> All Documents</a>
            	</li>
            	<!-- <li class="nav-item">
              		<a class="nav-link" href="#office"><span class="fa fa-user-times"></span> Archived Borrowers</a>
            	</li> -->
          	</ul>
            
          	<div class="">
          		<div class="tab-content">
          			<div id="documents" class="tab-pane active">
          				<div class="w3-margin">
			              <div class="row">
			              	<div class="col-sm-3 fixed-box">
								<input type="text" id="myInput" onkeyup="myFunction()" placeholder="Search office" class="list-group-item">

								<ul id="myUL" class="list-group box">
                  <li class="list-group-item"><a href="?office=all">All Documents</a></li>
              <?php $result = mysqli_query($conn, "SELECT * FROM office WHERE active = 1");
                while ($row = mysqli_fetch_array($result)) { ?>
                      
                  <li class="list-group-item"><a href="?office=<?php echo $row['office_id'] ?>"><?php echo $row['office_name'] ?></a></li>
                <?php } ?>    			  					  
								</ul>              		
			              	</div>
			              	<div class="col-sm-9">
                <div class="table-responsive">                      
          <?php              
          if (empty($_GET["office"])) { 
                 $result = mysqli_query($conn, "
          SELECT * FROM document 
          INNER JOIN office ON document.office_id = office.office_id
          INNER JOIN document_classification ON document.dc_id = document_classification.dc_id
          INNER JOIN document_type ON document.dt_id = document_type.dt_id 
          WHERE document.dc_id = 1 AND document.active = 1    
                "); ?>    

                    				<table id="ttable" class="table table-striped table-bordered table-sm w3-small">
	                    				<thead style="font-size: .750rem;">
                                <tr>
                                  <th></th>
                                  <th>Document Code</th>
                                  <th>Office</th>
                                  <th>Document Name</th>
                                  <th>Document Location</th>
                                  <th></th>
                                </tr>
						                </thead>

						                <tbody>
                              <?php   
                          while ($rows = mysqli_fetch_array($result)) {
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
                                <td><?php echo $rows['code'] ?></td>
                                <td><?php echo $rows['office_name'] ?></td>
                                <td><?php echo $rows['name'] ?></td>
                                <td><?php echo $rows['Doc_address'] ?></td>
                                <td class="text-center"><a href="#viewdata<?php echo $rows['id']; ?>" data-toggle="modal" data-tooltip="tooltip" title="View <?php echo $rows['name']; ?> Details" class="btn btn-outline-dark btn-sm"><span class="fa fa-search"></span> Read more details</a></td>                                </tr>
                              <?php include('modals/viewdatabutton.php'); ?>
                            <?php
                              }    
                               ?> 						                	
						                </tbody>	
                    				</table>
                    			
                     <?php } ?> 
                <?php
                
                if (isset($_GET['office']) && !empty($_GET['office'])) {
                    $office = $_GET['office'];

                  if ($office == "all") {         
                 $result = mysqli_query($conn, "
SELECT * FROM document 
INNER JOIN office ON document.office_id = office.office_id
INNER JOIN document_classification ON document.dc_id = document_classification.dc_id
INNER JOIN document_type ON document.dt_id = document_type.dt_id 
WHERE document.active = 1    
                "); ?>        
                  <br>
               <table id="ttable" class="table table-striped table-bordered table-sm w3-small">
                              <thead style="font-size: .750rem;">
                                <tr>
                                  <th></th>
                                  <th>Document Code</th>
                                  <th>Office</th>
                                  <th>Document Name</th>
                                  <th>Document Location</th>
                                  <th></th>
                                </tr>
                            </thead>

                            <tbody>
                              <?php   
                          while ($rows = mysqli_fetch_array($result)) {
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
                                <td><?php echo $rows['code'] ?></td>
                                <td><?php echo $rows['office_name'] ?></td>
                                <td><?php echo $rows['name'] ?></td>
                                <td><?php echo $rows['Doc_address'] ?></td>
                                <td class="text-center"><a href="#viewdata<?php echo $rows['id']; ?>" data-toggle="modal" data-tooltip="tooltip" title="View <?php echo $rows['name']; ?> Details" class="btn btn-outline-dark btn-sm"><span class="fa fa-search"></span> Read more details</a></td>                                </tr>
                              <?php include('modals/viewdatabutton.php'); ?>
                            <?php
                              }    
                               ?>   
               </tbody>  
               </table>

                  <?php }elseif ($office == $office) { 
         $result = mysqli_query($conn, "
                  SELECT * FROM document 
        INNER JOIN office ON document.office_id = office.office_id
        INNER JOIN document_classification ON document.dc_id = document_classification.dc_id
        INNER JOIN document_type ON document.dt_id = document_type.dt_id 
        WHERE document.active = 1 AND document.office_id = {$office}   
                "); ?>
               <table id="ttable" class="table table-striped table-bordered table-sm w3-small">
                              <thead style="font-size: .750rem;">
                                <tr>
                                  <th></th>
                                  <th>Document Code</th>
                                  <th>Office</th>
                                  <th>Document Name</th>
                                  <th>Document Location</th>
                                  <th></th>
                                </tr>
                            </thead>

                            <tbody>
                              <?php   
                          while ($rows = mysqli_fetch_array($result)) {
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
                                <td><?php echo $rows['code'] ?></td>
                                <td><?php echo $rows['office_name'] ?></td>
                                <td><?php echo $rows['name'] ?></td>
                                <td><?php echo $rows['Doc_address'] ?></td>
                                <td class="text-center"><a href="#viewdata<?php echo $rows['id']; ?>" data-toggle="modal" data-tooltip="tooltip" title="View <?php echo $rows['name']; ?> Details" class="btn btn-outline-dark btn-sm"><span class="fa fa-search"></span> Read more details</a></td>                                </tr>
                              <?php include('modals/viewdatabutton.php'); ?>
                            <?php
                              }    
                               ?>   
               </tbody>  
               </table>

                  <?php } ?>
                  <?php } ?>                      
                         </div>   				              		
			              	</div>
			              </div>          					 
          				</div>
          			</div>

          			<div id="office" class="tab-pane fade"></div>
          		</div>
         	</div>  
      
        </main>
          </div>    
        </div>





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
    min-height: 5%;
}
.box{
	position:relative;
    top: inherit;
    width: 100%;
    overflow:auto;  
    height: 50%;	
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


<?php 
include 'htmlparts/footer.php';
include 'htmlparts/scripts.php';	
?>
<script type="text/javascript">
  $(document).ready(function(){
    $(".nav-tabs a").click(function(){
        $(this).tab('show');
    });
});
</script>

<script type="text/javascript">
    $(document).ready(function() {
        $('#ttable').dataTable();
    } );
</script>


<script type="text/javascript">
 var id = 1;

 $.ajax({
  url: "includes/getdatafromdb.php",
  method: "POST",
  dataType: "json",
  data: {id:id},
  success: function(data){
      console.log(data);
      var date = [];
      var count = [];
      var color = [];
      var legend = [];
      var i = 0;


    var dynamicColors = function() {
      var r = Math.floor(Math.random() * 255);
      var g = Math.floor(Math.random() * 255);
      var b = Math.floor(Math.random() * 255);
      return "rgb(" + r + "," + g + "," + b + ")";
    };      
            


      for(var i in data) {
        date.push(" " + data[i].date);
        legend.push("Student Progress in: " + data[i].date);
        count.push(data[i].num);
        color.push(dynamicColors());
      }

var chartdata = {
labels: date,

datasets : [
{
            label: "CHMSC Document Uploaded",
            lineTension: 0,
            // backgroundColor: color,
            // borderColor: color,
            backgroundColor: 'transparent',
            borderColor: '#007bff',
            borderWidth: 4,
            // pointBackgroundColor: color,
            pointBackgroundColor: '#007bff',
            data: count 

}

]
};
var ctx = $("#myChart");
    var barGraph = new Chart(ctx, {
        type: 'line',
        data: chartdata,
        options: {
          scales: {
            yAxes: [{
              ticks: {
                beginAtZero: false
              }
            }]
          },
          legend: {
            display: true,
          }
        }
      });

  },
      error: function(data) {
      console.log(data);
    }

 });  
</script>


<script type="text/javascript">
$(document).ready(function(){
setInterval(function(){
 
 var id = 1;

 $.ajax({
  url: "includes/getdatafromdb.php",
  method: "POST",
  dataType: "json",
  data: {id:id},
  success: function(data){
      console.log(data);
      var date = [];
      var count = [];
      var color = [];
      var legend = [];
      var i = 0;


    var dynamicColors = function() {
      var r = Math.floor(Math.random() * 255);
      var g = Math.floor(Math.random() * 255);
      var b = Math.floor(Math.random() * 255);
      return "rgb(" + r + "," + g + "," + b + ")";
    };      
            


      for(var i in data) {
        date.push(" " + data[i].date);
        legend.push("Student Progress in: " + data[i].date);
        count.push(data[i].num);
        color.push(dynamicColors());
      }

var chartdata = {
labels: date,

datasets : [
{
            label: "CHMSC Document Uploaded",
            lineTension: 0,
            // backgroundColor: color,
            // borderColor: color,
            backgroundColor: 'transparent',
            borderColor: '#007bff',
            borderWidth: 4,
            // pointBackgroundColor: color,
            pointBackgroundColor: '#007bff',
            data: count 

}

]
};
var ctx = $("#myChart");
    var barGraph = new Chart(ctx, {
        type: 'line',
        data: chartdata,
        options: {
          scales: {
            yAxes: [{
              ticks: {
                beginAtZero: false
              }
            }]
          },
          legend: {
            display: true,
          }
        }
      });

  },
      error: function(data) {
      console.log(data);
    }

 });


  }
  , 3000
  );

}); 
</script>
