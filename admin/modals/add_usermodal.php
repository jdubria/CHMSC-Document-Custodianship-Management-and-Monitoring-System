<!-- Add New -->
<?php $_SESSION['default'] = "CHMSC-B-CC";  ?>
    <div class="modal fade" id="adduser" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header bg-primary">
                    <center><h4 class="modal-title text-light" id="myModalLabel">Add User</h4></center>
                    <button type="button" class="close text-light" data-dismiss="modal" aria-hidden="true">&times;</button>
                </div>
                <div class="modal-body">
				<div class="container-fluid">
				<form method="POST" action="action/adduser.php" enctype="multipart/form-data" id="add_form">
          <div class="container">
            <div class="row">
              <div class="col-sm-6">
                
                <div class="form-group">
                <label>Select User Level:</label>  
                <select name="user_level" id="user_level" class="form-control"  required  />
                    <option value="1">Administrator</option>
                    <option value="2">Office Administrator</option>
                    <option value="3">Viewer</option>
                </select>
                </div>

                <div class="form-group">
                <label>Office:</label>  
                <select class="form-control" id="office" name="office">
                    <option disabled selected>Select Office</option>
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
                <label>User Name:</label>  
                <input type="text" name="u_name" id="u_name" placeholder="User name" class="form-control" required />
                </div>


                <div class="form-group">
                <label>Password:</label>  
                <input type="password" name="password1" id="password1" placeholder="Password" class="form-control" required />
                </div>

                <div class="form-group">
                <label>Retype Password:</label>  
                <input type="password" name="password2" id="password2" placeholder="Retype Password" class="form-control" required />
                </div>

              </div>
              <div class="col-sm-6">

                               
                <div class="form-group">
                <label>Name:</label>  
                <input type="text" name="name" id="name" placeholder="First Name MI. Last Name" class="form-control" required  />
                </div>

                <div class="form-group">
                <label>Address:</label>  
                <textarea name="address" rows="4" class="form-control"></textarea>
                </div>

                <div class="form-group">
                <label>Contact:</label>  
                <input type="text" name="contact" id="contact" placeholder="+639..." class="form-control"  required />
                </div>                
                  
              </div>
            </div>
          </div>  				           
				</div>
        </div>
                <div class="modal-footer bg-primary">
                    <button type="button" class="btn btn-sm btn-light" data-dismiss="modal"><span class="fa fa-remove"></span> Cancel</button>
                    <button type="submit" class="btn btn-sm btn-dark"><span class="fa fa-save"></span> Save</button>
			   </form> 	
                </div>
 
            </div>
        </div>
    </div>