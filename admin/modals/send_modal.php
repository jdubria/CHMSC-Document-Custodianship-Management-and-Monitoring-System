 
    <div class="modal fade" id="senddocument<?php echo $rows['id']; ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header bg-primary">
                    <center><h4 class="modal-title text-light" id="myModalLabel">Send Document</h4></center>
                    <button type="button" class="close text-light" data-dismiss="modal" aria-hidden="true">&times;</button>
                </div>
                <div class="modal-body">
                  <div class="row">
                    <div class="col-sm-6">
                      <div class="card">
                      <div class="card-header shadow bg-success text-light">
                        <div class="w3-margin text-center">
                        <?php echo $rows['name']; ?>     
                        </div>
                      </div>
                      
                        <div class="w3-margin">
                          <form method="POST" action="action/sent_doc.php">
                          <label><strong>Document Code:</strong></label>  
                          <input type="text" name="code" id="code" value="<?php echo $rows['code']; ?>" class="form-control"  readonly/>

                          <label><strong>Document Type:</strong></label>  
                          <input type="text" name="type" id="code" value="<?php echo $rows['type']; ?>" class="form-control"  readonly/>

                           <label><strong>Document Address:</strong></label>  
                          <input type="text" name="address" id="code" value="<?php echo $rows['Doc_address']; ?>" class="form-control"  readonly/>

                          <label><strong>File:</strong></label>  
                          <input type="text" name="file" id="code" value="<?php echo $rows['file']; ?>" class="form-control"  readonly/>
                          </div>
                      </div>    
                    </div>

                         

                    <div class="col-sm-6">
                      <fieldset>
                        <CENTER>
                        <strong>SELECT RECIPIENTS</strong>
                        </CENTER>
                        
                          <fieldset>
                            <?php
                            $result1 = mysqli_query($conn, "SELECT user_name FROM user WHERE active = 1 AND office_id = '{$_SESSION['office_id']}'");
                            $fetch = mysqli_fetch_assoc($result1);
                            $usered = $fetch['user_name'];

                            $result2 = mysqli_query($conn, "SELECT * FROM user INNER JOIN office ON user.office_id = office.office_id WHERE user.active = 1 AND user.user_name != '{$usered}'");
                             while ($rows = mysqli_fetch_assoc($result2)) { ?>
                            <div class="form-group form-check"> 
                           <input type="checkbox" class="form-check-input" name="recipients<?php echo $rows['userid'] ?>" value="<?php echo $rows['user_name'] ?>" />
                           <label class="form-check-label"><strong><?php echo $rows['name'] ?></strong> of <?php echo $rows['office_name'] ?></label>
                           </div> 
                          <?php } ?>
                          </fieldset>
                      </fieldset>
                    </div>
                  </div>
                  
                </div>
         
                <div class="modal-footer bg-primary">
                    <button type="button" class="btn btn-sm btn-light" data-tooltip="tooltip" data-dismiss="modal"><span class="fa fa-remove"></span> Cancel</button>
                    <button type="submit" name="send" class="btn btn-sm btn-dark"><span data-tooltip="tooltip" class="fa fa-send"></span> Send Document</a>
                    </form>  
                </div>
 
            </div>
        </div>
    </div>


