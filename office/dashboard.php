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
                <h1 class="h2">Dashboard<span><br><p class="h6"><?php echo $_SESSION['office']; ?></p></span></h1>
                <div class="btn-toolbar mb-2 mb-md-0">
                    <div class="btn-group mr-2">
                        <a href="messages.php" class="btn btn-sm btn-outline-secondary" title="View Messages"><span class="fa fa-envelope"></span> Messages</a>                       
                    </div>    
                </div>
              </div> 


<div class="table-responsive">
                      
              <table id="tabable" class="table table-striped table-sm">
              <thead>
                <tr>
                  <th></th>
                  <th>Document Code</th>
                  <th>Document Name</th>
                  <th>Document Location</th>
                  <th></th>
                </tr>
              </thead>
              <tbody>
             <?php
                 $result = mysqli_query($conn, "
          SELECT * FROM document 
          INNER JOIN office ON document.office_id = office.office_id
          INNER JOIN document_classification ON document.dc_id = document_classification.dc_id
          INNER JOIN document_type ON document.dt_id = document_type.dt_id 
          WHERE document.active = 1 AND office.office_id = {$_SESSION['office_id']}");

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
    
                    <td class="text-center"><img class="img-responsive" src="../upload/<?php echo $filesExt ?>" alt="<?php echo $rows['file'] ?>" style="width: 30px"></td>
                    <td><?php echo $rows['code'] ?></td>
                    <td><?php echo $rows['name'] ?></td>
                    <td><?php echo $rows['Doc_address'] ?></td>
                    <td class="text-center"><a href="#viewdata<?php echo $rows['id']; ?>" data-toggle="modal" data-tooltip="tooltip" title="View  Details" class="btn btn-outline-dark btn-sm"><span class="fa fa-search"></span> Read more details</a></td>                      
                  </tr>
                  <?php include('modals/viewdatabutton.php'); ?>
<?php
          }
             ?>   
                  <tr>                  
              </tbody>
            </table>
          </div>  





<?php 
include 'htmlparts/footer.php';
include 'htmlparts/scripts.php';	
?>
<script type="text/javascript">
  $(document).ready(function(){
    $("#tabable").dataTable();
  });
</script>