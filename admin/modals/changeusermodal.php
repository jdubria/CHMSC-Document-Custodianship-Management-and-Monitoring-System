
    <!-- Add New -->
<?php $_SESSION['default'] = "CHMSC-B-CC";  ?>
    <div class="modal fade" id="changeuser" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header bg-primary">
                    <center><h4 class="modal-title text-light" id="myModalLabel">Change User Information</h4></center>
                    <button type="button" class="close text-light" data-dismiss="modal" aria-hidden="true">&times;</button>
                </div>
                <div class="modal-body">
                <div class="container-fluid">
          <div class="container">

            <div class="row">
              <div class="col-sm-7">
                <div class="card shadow w3-card-4">
                <div class="row">
                    <div class="col-sm-4">
                        <div class="w3-margin">
                        <label>Name</label>
                        </div>
                        <div class="w3-margin">
                        <label>Date</label>
                        </div>
                        <div class="w3-margin">
                        <label>User Level</label>
                        </div>
                        <div class="w3-margin">
                        <label>User Name</label>
                        </div>
                        <div class="w3-margin">
                        <label>Office</label>
                        </div>
                    </div>
                    <div class="col-sm-8">
                        <div class="w3-margin">
                        <label><?php echo $rows['name']; ?></label>
                        </div>
                        <div class="w3-margin">
                        <label><?php echo $rows['register']; ?></label>
                        </div>
                        <div class="w3-margin">
                        <label><?php echo $userlvl; ?></label>
                        </div>
                        <div class="w3-margin">
                        <label><?php echo $rows['user_name'] ?></label>
                        </div>
                        <div class="w3-margin">
                        <label><?php echo $rows['office_name'] ?></label>
                        </div>
                    </div>
                </div>
                </div>
              </div>
              

              <div class="col-sm-5">

                <form method="POST" action="action/change_user.php">
                <input type="hidden" name="userid" value="<?php echo $rows['userid'] ?>">
                <input type="hidden" name="user_name" value="<?php echo $rows['user_name'] ?>">                               
                <div class="form-group">
                <label>Add New User:</label>  
                <input type="text" name="name" id="name" placeholder="First Name MI. Last Name" class="form-control" required  />
                </div>

                <div class="form-group">
                <label>Old Password:</label>  
               <input type="text" name="password" id="password" placeholder="Old Password" class="form-control" required  />
                </div>

                <div class="form-group">
                <label>New Password:</label>  
                <input type="text" name="password2" id="password2" placeholder="New Password" class="form-control"  required />
                </div>                
                
              </div>
            </div>
          </div>                           
                </div>
        </div>
                <div class="modal-footer bg-primary">
                    <button type="button" class="btn btn-sm btn-light" data-dismiss="modal"><span class="fa fa-remove"></span> Cancel</button>
                    <button type="submit" name="save" class="btn btn-sm btn-dark"><span class="fa fa-save"></span> Save</button>
               </form>  
                </div>
 
            </div>
        </div>
    </div>