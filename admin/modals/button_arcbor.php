<div class="modal" id="restorebor<?php echo $rows['bor_id']; ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header bg-primary">
                <center><h4 class="modal-title text-white" id="myModalLabel">Restore Borrower</h4></center>
                <button type="button" class="close text-white" data-dismiss="modal" aria-hidden="true">&times;</button>
            </div>
            
            <div class="modal-body">
                <p>Are you sure you want to restore borrower: <b><?php echo $rows['bname']; ?></b>?</p>       
            </div>
            
            <div class="modal-footer bg-primary">
                <form method="POST" action="action/restorebor.php">
                    <input type="hidden" name="id" value="<?php echo $rows['bor_id']; ?>">
                    <button type="button" class="btn btn-sm btn-light" data-dismiss="modal"><span class="fa fa-remove"></span> Cancel</button>
                    <button type="submit" name="restore" class="btn btn-success"><span class="fa fa-retweet"></span> Restore</button>
                </form>
            </div>
        </div>
    </div>
</div>