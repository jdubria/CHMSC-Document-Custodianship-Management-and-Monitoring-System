<!-- Add New -->
<?php $_SESSION['default'] = "CHMSC-B-CC";  ?>
    <div class="modal fade" id="edit_user" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header bg-primary">
                    <center><h4 class="modal-title text-light" id="myModalLabel">Edit User</h4></center>
                    <button type="button" class="close text-light" data-dismiss="modal" aria-hidden="true">&times;</button>
                </div>
                <div class="modal-body">
				<div class="container-fluid">
				<form method="POST" action="action/edit_user.php" id="edit_form">
          <div class="container">
                <input type="hidden" name="userid" value="<?php echo $rows['userid'] ?>"> 

                <div class="form-group">
                <label>Select User Level:</label>  
                <select name="user_level" id="user_level" class="form-control"  required  />
                    <option value="<?php echo $rows['user_level'] ?>"><?php echo $userlvl; ?></option>
                    <option value="1">Administrator</option>
                    <option value="2">Office Administrator</option>
                    <option value="3">Viewer</option>
                </select>
                </div>

                <div class="form-group">
                <label>Office:</label>  
                <select class="form-control" id="office" name="office">
                    <option value="<?php echo $rows['office_id'] ?>"><?php echo $rows['office_name'] ?></option>
                    <?php 
                      $result = mysqli_query($conn, "SELECT * FROM office WHERE active = 1");
                      while ($row = mysqli_fetch_array($result)) { ?>
                         <option value="<?php echo $row['office_id'] ?>"><?php echo $row['office_name'] ?></option>   
                    <?php       
                        }  
                    ?>
                </select>
                </div>

                <div class="form-group">
                <label>Name:</label>  
                <input type="text" name="name" id="name" placeholder="First Name MI. Last Name" value="<?php echo $rows['name'] ?>" class="form-control" required  />
                </div>

                <div class="form-group">
                <label>Address:</label>  
                <textarea name="address" rows="4" class="form-control"><?php echo $rows['address']; ?></textarea>
                </div>

                <div class="form-group">
                <label>Contact:</label>  
                <input type="text" name="contact" id="contact" placeholder="+639..." value="<?php echo $rows['contact'] ?>" class="form-control"  required />
                </div>                                 

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
<div class="modal fade" id="archive_user" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content modal-sm">
            <div class="modal-header bg-primary">
                <center><h4 class="modal-title text-light" id="myModalLabel">Archive User</h4></center>
                <button type="button" class="close text-light" data-dismiss="modal" aria-hidden="true">&times;</button>
            </div>

            <div class="modal-body">
                <center>
                    <p>Are you sure you want to archive <br><strong><?php echo $rows['name']; ?></strong>?</p>
                </center>
            </div>

            <div class="modal-footer bg-primary">
                <form method="post" action="action/archive_user.php">
                 <input type="hidden" name="userid" value="<?php echo $rows['userid'] ?>">   
                <button type="button" class="btn btn-sm btn-light" data-dismiss="modal"><span class="fa fa-remove"></span> Cancel</button>
                <button type="submit" name="archive" class="btn btn-sm btn-dark"><span class="fa fa-save"></span> Save</button>
                </form>  
            </div>            
        </div>
    </div>
</div>
