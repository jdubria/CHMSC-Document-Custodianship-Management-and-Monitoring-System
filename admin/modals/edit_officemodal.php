<!-- Add New -->
    <div class="modal fade" id="edit_office<?php echo $rows['office_id'] ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header bg-primary">
                    <center><h4 class="modal-title text-light" id="myModalLabel">Edit Office</h4></center>
                    <button type="button" class="close text-light" data-dismiss="modal" aria-hidden="true">&times;</button>
                </div>
                <div class="modal-body">
				
				<form method="POST" action="action/edit_office.php" id="edit_form">
          <div class="container-fluid">
                <input type="hidden" name="office_id" value="<?php echo $rows['office_id'] ?>"> 

                    <div class="form-group">
                    <label>Office Name:</label>  
                    <input type="text" name="office_name" id="office_name" value="<?php echo $rows['office_name'] ?>" class="form-control" required  />
                    </div>

                    <div class="form-group">
                    <label>Ofiice Document Code Default Value</label>  
                    <input type="text" name="default" id="default" value="<?php echo $rows['default'] ?>" class="form-control" required  />
                    </div>
                               

          </div>  				           
				
        </div>
                <div class="modal-footer bg-primary">
                    <button type="button" class="btn btn-sm btn-light" data-dismiss="modal"><span class="fa fa-remove"></span> Cancel</button>
                    <button type="submit" name="edit" class="btn btn-sm btn-dark"><span class="fa fa-check"></span> Save</button>
			   </form> 	
                </div>
 
            </div>
        </div>
    </div>


    <!-- Archive -->
<div class="modal fade" id="archive_office<?php echo $rows['office_id'] ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-sm">
        <div class="modal-content">
            <div class="modal-header bg-primary">
                <center><h4 class="modal-title text-light" id="myModalLabel">Archive User</h4></center>
                <button type="button" class="close text-light" data-dismiss="modal" aria-hidden="true">&times;</button>
            </div>

            <div class="modal-body">
                <center>
                    <p>Are you sure you want to archive? <br><strong><?php echo $rows['office_name']; ?></strong>?</p>
                </center>
            </div>

            <div class="modal-footer bg-primary">
                <form method="post" action="action/archive_office.php">
                 <input type="hidden" name="office_id" value="<?php echo $rows['office_id'] ?>">   
                <button type="button" class="btn btn-sm btn-light" data-dismiss="modal"><span class="fa fa-remove"></span> Cancel</button>
                <button type="submit" name="archive" class="btn btn-sm btn-dark"><span class="fa fa-save"></span> Save</button>
                </form>  
            </div>            
        </div>
    </div>
</div>
