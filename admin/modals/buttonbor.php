<!--edit-->
  <div class="modal fade" id="editbor<?php echo $row['bor_id']; ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header bg-primary">
                	<center><h4 class="modal-title text-white" id="myModalLabel">Update Borrower's Information </h4></center>
                    <button type="button" class="close text-white" data-dismiss="modal" aria-hidden="true">&times;</button>
                </div>
                <div class="modal-body">
				<?php
					$edit=mysqli_query($conn,"select * from borrowers where bor_id='".$row['bor_id']."'");
					$erow=mysqli_fetch_array($edit);
				?>
				<div class="container-fluid">
                <form method="POST" action="action/editbor.php">
                    <input type="hidden" name="id" value="<?php echo $erow['bor_id']; ?>"/>
                <!--form body -->
                <label>Name</label>
        <input type="text" name="bor_name" id="bor_name" class="form-control" value="<?php echo $erow['bname']; ?>" placeholder="Last Name, First Name MI" required />
        <br>
        <label>Address</label>
        <textarea class="form-control" rows="3" name="address"><?php echo $erow['address']; ?></textarea>
        <br>
        <label>Contact Number</label>
        <input type="text" name="contact" id="contact" class="form-control" value="<?php echo $erow['contact']; ?>" placeholder="+639" required />
            <!--close form body-->                  
                </div> 
                </div>
                <div class="modal-footer bg-primary">
                    <button type="button" class="btn btn-sm btn-light" data-dismiss="modal"><span class="fa fa-remove"></span> Cancel</button>
                    <button type="submit" name="update" class="btn btn-sm btn-warning"><span class="fa fa-check"></span> Save Changes</button>
                </div>
            </form>
            </div>
        </div>
    </div>
<!-- /.modal -->



<!-- Delete -->
    <div class="modal fade" id="delbor<?php echo $row['bor_id']; ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content modal-sm">
                <div class="modal-header bg-primary">
                    <center><h4 class="modal-title text-white" id="myModalLabel">Archive</h4></center>
                    <button type="button" class="close text-white" data-dismiss="modal" aria-hidden="true">&times;</button>
                </div>
                <div class="modal-body">
                    <p>Are you sure you want to archive:</p>

                <?php
                    $del=mysqli_query($conn,"select * from borrowers where bor_id='".$row['bor_id']."'");
                    $drow=mysqli_fetch_array($del);
                ?>
                <div class="container-fluid">
                    
                    <p><center>Borrower: <strong><?php echo $drow['bname']; ?> ?</strong></center></p> 
                    <form method="POST" action="action/deletebor.php">
                  <input type="hidden" name="id" value="<?php echo $drow['bor_id'] ?>">                      
                </div> 
                </div>
                <div class="modal-footer bg-primary">
                    <button type="button" class="btn btn-sm btn-light" data-dismiss="modal"><span class="fa fa-remove"></span> Cancel</button>
                    <button type="submit" name="delete" class="btn btn-sm btn-danger"><span class="fa fa-archive"></span> Archive</button>
                    </form>
                </div>
 
            </div>
        </div>
    </div>
<!-- /.modal --> 

  <script>
$('input[type="date"]').each(function(){  

    var now = $(this).attr('value').split("-");
    var today = now[1]+"/"+now[2]+"/"+now[0]; //mm/dd/yyyy        
    $(this).val(today);

});            
  </script>                 