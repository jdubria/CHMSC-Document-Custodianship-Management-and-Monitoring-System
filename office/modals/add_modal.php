<!-- Add New -->
<style type="text/css">
    /* Formatting search box */
    .search-boxss{
        width: 100%;
        position: relative;
        display: inline-block;
        font-size: 14px;
    }
    .search-boxss input[type="text"]{
        width: 100%;
        height: 32px;
        padding: 5px 10px;
        border: 1px solid #CCCCCC;
        font-size: 14px;

    }
    .result{
        background-color: #fff;
        position: absolute;        
        z-index: 999;
        top: 100%;
        left: 0;
    }
    .search-boxss input[type="text"], .result{
        width: 100%;
        box-sizing: border-box;
    }
    /* Formatting result items */
    .result p{
        margin: 0;
        padding: 7px 10px;
        border: 1px solid #ffffff;
        border-top: none;
    }
    .result p:hover{
        color: #ffffff;
        background: #000000;
    }
</style>
    <div class="modal fade" id="addnew" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header bg-primary">
                    <center><h4 class="modal-title text-light" id="myModalLabel">Add New Document</h4></center>
                    <button type="button" class="close text-light" data-dismiss="modal" aria-hidden="true">&times;</button>
                </div>
                <div class="modal-body">
				<div class="container-fluid">
				<form method="POST" action="action/addnew.php" enctype="multipart/form-data" id="add_form">
				<!--form body -->
        <?php 
        $result = mysqli_query($conn, "SELECT * FROM office WHERE office_id = {$_SESSION['office_id']}");
        $fetch = mysqli_fetch_assoc($result);
        $default = $fetch['default'];
        ?>
						              <div class="search-boxss">
						              <label>Document Code:</label>
                          <input type="text" name="code" id="code" placeholder="Enter document code" class="form-control" value="<?php echo $default ?>-" required />
                        </div>
                          <br />  
                          <label>Document Name:</label>  
                          <input type="text" name="name" id="name" placeholder="Enter document name" class="form-control" required >  
                          <br />  
                          <label>Classification:</label>  
                          <select  name="classification" id="classification" class="form-control" required >  
                              <?php 
                           $query = "SELECT * FROM document_classification";  
                           $result = mysqli_query($conn, $query);
                           while($row = mysqli_fetch_array($result)){ 
                               ?>
                              <option value="<?php echo $row['dc_id'] ?>"><?php echo $row['class'] ?></option>
                              
                              <?php } ?>  
                          </select>
                          <br>
                          <label>Select Document Type:</label>  
                          <select  name="type" id="type" class="form-control" required >  
                              <?php 
                           $query = "SELECT * FROM document_type";  
                           $result = mysqli_query($conn, $query);
                           while($row = mysqli_fetch_array($result)){ 
                               ?>
                              <option value="<?php echo $row['dt_id'] ?>"><?php echo $row['type'] ?></option>
                          		
                              <?php } ?>  
                          </select>  
                          <br />  
                          <label>Document Address:</label>  
                          <input type="text" name="loc" id="loc" placeholder="Enter document location" class="form-control" required  />  
                          <br />  
                          <label>Document File:</label>  
                          <input type="file" name="file" id="files" class="form-control-file" accept=".jpg, .png, .jpeg, .gif, .bmp, .tif, .tiff, .docx, .pdf, .xls, .txt, .ppt, .pptx, .xlsx, xlsm|images/*|MIME_type" required  />

				
				<!--close form body-->
                </div> 
				</div>
                <div class="modal-footer bg-primary">
                    <button type="button" class="btn btn-sm btn-light" data-dismiss="modal"><span class="fa fa-remove"></span> Cancel</button>
                    <button type="submit" class="btn btn-sm btn-dark"><span class="fa fa-save"></span> Save</a>
				</form>
                </div>
 
            </div>
        </div>
    </div>

   
