<div class="modal fade" id="archive_dt<?php echo $row['dt_id'] ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-sm">
        <div class="modal-content">
            <div class="modal-header bg-primary">
                <center><h4 class="modal-title text-light" id="myModalLabel">Archive Document Type</h4></center>
                <button type="button" class="close text-light" data-dismiss="modal" aria-hidden="true">&times;</button>
            </div>

            <div class="modal-body">
                <center>
                    <p>Are you sure you want to archive? <br><strong><?php echo $row['type']; ?></strong>?</p>
                </center>
            </div>

            <div class="modal-footer bg-primary">
                <form method="post" action="action/archive_dt.php">
                 <input type="hidden" name="dt_id" value="<?php echo $row['dt_id'] ?>">   
                <button type="button" class="btn btn-sm btn-light" data-dismiss="modal"><span class="fa fa-remove"></span> Cancel</button>
                <button type="submit" name="archive" class="btn btn-sm btn-dark"><span class="fa fa-save"></span> Save</button>
                </form>  
            </div>            
        </div>
    </div>
</div>
