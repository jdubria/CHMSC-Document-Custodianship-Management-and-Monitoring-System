<!-- Add New -->
<?php $_SESSION['default'] = "CHMSC-B-CC";  ?>
    <div class="modal fade" id="add_officemodal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header bg-primary">
                    <center><h4 class="modal-title text-light" id="myModalLabel">Add New Office</h4></center>
                    <button type="button" class="close text-light" data-dismiss="modal" aria-hidden="true">&times;</button>
                </div>
                <div class="modal-body">
				<div class="container-fluid">
				<form method="POST" action="action/add_office.php" enctype="multipart/form-data" id="add_form">
				<!--form body -->
						  
						              <label class="label-info">Office Name:</label>  
                          <input type="text" name="office_name" id="office_name" placeholder="Enter office name" class="form-control" required />
                          <br />  
                          <label>Ofiice Document Code Default Value:</label>  
                          <input type="text" name="default" id="default" placeholder="Enter document code value" class="form-control" required >  
                          <br />  
				
				<!--close form body-->
                </div> 
				</div>
                <div class="modal-footer bg-primary">
                    <button type="button" class="btn btn-sm btn-light" data-dismiss="modal"><span class="fa fa-remove"></span> Cancel</button>
                    <button type="submit" name="save" class="btn btn-sm btn-dark"><span class="fa fa-save"></span> Save</a>
				</form>
                </div>
 
            </div>
        </div>
    </div>
