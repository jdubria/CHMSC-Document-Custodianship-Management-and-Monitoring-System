
<!--edit-->
  <div class="modal fade" id="edit<?php echo $rows['id']; ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header bg-primary">
                	<center><h4 class="modal-title text-light" id="myModalLabel">Update Document Information </h4></center>
                    <button type="button" class="close text-light" data-dismiss="modal" aria-hidden="true">&times;</button>
                </div>
                <div class="modal-body">
				<?php
					$edit=mysqli_query($conn,"

 SELECT * FROM document 
INNER JOIN office ON document.office_id = office.office_id
INNER JOIN document_classification ON document.dc_id = document_classification.dc_id
INNER JOIN document_type ON document.dt_id = document_type.dt_id 
WHERE document.dc_id = 1 AND document.active = 1 AND document.id = ".$rows['id'].";

            ");
					$erow=mysqli_fetch_array($edit);
				?>
				<div class="container-fluid">
				<form method="POST" enctype="multipart/form-data" action="action/edit.php?id=<?php echo $erow['id']; ?>">
				<!--form body -->     
              
			<label>Document Code</label>  
                          <input type="text" name="code" placeholder="Enter document code" class="form-control" value="<?php echo $erow['code']; ?>" />
                          <br />  
                          <label>Document Name</label>  
                          <input type="text" name="name" placeholder="Enter document name" class="form-control" value="<?php echo $erow['name']; ?>">

                        <br />  
                          <label>Classification:</label>  
                          <select  name="classification" id="classification" class="form-control" required >
                          <option value="<?php echo $erow['dc_id'] ?>"><?php echo $erow['class'] ?></option>  
                              <?php 
                           $queryx = "SELECT * FROM document_classification";  
                           $resultx = mysqli_query($conn, $queryx);
                           while($rowx = mysqli_fetch_array($resultx)){ 
                               ?>
                              <option value="<?php echo $rowx['dc_id'] ?>"><?php echo $rowx['class'] ?></option>
                              
                              <?php } ?>  
                          </select>  



                          <br />  
                          <label>Select Document Type</label>  
                          <select  name="type" class="form-control" value="<?php echo $erow['type']; ?>">
                            <option value="<?php echo $erow['dt_id']; ?>"><?php echo $erow['type']; ?></option>  
                              <?php 
                           $querysss = "SELECT * FROM document_type";  
                           $resultsss = mysqli_query($conn, $querysss);
                           while($rowsss = mysqli_fetch_array($resultsss)){ 
                               ?>
                              <option value="<?php echo $rowsss['type'] ?>"><?php echo $rowsss['type'] ?></option>
                               <?php } ?> 
                          </select>  
                          <br />  
                          <label>Document Location</label>  
                          <input type="text" name="loc" placeholder="Enter document location" class="form-control" value="<?php echo $erow['Doc_address']; ?>" />  
                          <br />  
                          <label>Document File:</label>  
                          <input type="file" name="file" class="form-control-file" id="file" accept=".jpg, .png, .jpeg, .gif, .bmp, .tif, .tiff, .docx, .pdf, .xls, .txt|images/*|MIME_type" />
                          <input type="hidden" name="file_name" value="<?php echo $erow['file']; ?>">
                          <input type="hidden" name="file_destination" value="<?php echo $erow['file_destination']; ?>">
                          <span><p><?php echo $erow['file']; ?></p></span>
   
           
				<!--close form body-->					
					

                </div> 
            </div>
                <div class="modal-footer bg-primary">
                    <button type="button" class="btn btn-sm btn-light" data-dismiss="modal"><span class="fa fa-remove"></span> Cancel</button>
                    <button type="submit" class="btn btn-sm btn-warning"><span class="fa fa-check"></span> Save Changes</button>
                </div>
				</form>
            </div>
        </div>
    </div>
<!-- /.modal -->

<!--                        modal ni                     -->
<!-- Delete -->
    <div class="modal fade" id="del<?php echo $rows['id']; ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-sm">
            <div class="modal-content">
                <div class="modal-header bg-primary">
                    <center><p class="modal-title text-light" id="myModalLabel">Delete</p></center>
                    <button type="button" class="close text-light" data-dismiss="modal" aria-hidden="true">&times;</button>
                </div>
                <div class="modal-body">
				<?php
					$del=mysqli_query($conn,"select * from document where id='".$rows['id']."'");
					$drow=mysqli_fetch_array($del);
				?>
				
					<p>Are you sure you want to archive:</p>
					<p>Document Name: <strong><?php echo $drow['name']; ?></strong></p> 
          
				</div>
                <div class="modal-footer bg-primary">

                   
                    <form method="POST" action="action/delete.php?id=<?php echo $drow['id']; ?>">
                      <input type="hidden" name="id" value="<?php echo $drow['id']; ?>">
                     
                       <button type="button" class="btn btn-sm btn-light" data-dismiss="modal"><span class="fa fa-remove"></span> Cancel</button>
                      <button type="submit" name="delete" class="btn btn-sm btn-danger"><span class="fa fa-archive"></span> Archive</button>
                    </form>
                </div>
  
            </div>
        </div>
    </div>
<!-- /.modal -->
