<div class="modal" id="restoredoc<?php echo $rows['id']; ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-sm">
        <div class="modal-content">
            <div class="modal-header bg-primary">
                <center><h4 class="modal-title text-white" id="myModalLabel">Restore Borrower</h4></center>
                <button type="button" class="close text-white" data-dismiss="modal" aria-hidden="true">&times;</button>
            </div>
            
            <div class="modal-body">
                <p>Are you sure you want to restore document: <b><?php echo $rows['name']; ?></b>?</p>       
            </div>
            
            <div class="modal-footer bg-primary">
                <form method="POST" action="action/restore_document.php">
                    <input type="hidden" name="id" value="<?php echo $rows['id']; ?>">
                    <button type="button" class="btn btn-sm btn-light" data-dismiss="modal"><span class="fa fa-remove"></span> Cancel</button>
                    <button type="submit" name="restore" class="btn btn-sm btn-success"><span class="fa fa-retweet"></span> Restore</button>
                </form>
            </div>
        </div>
    </div>
</div>

<!-- ====================================================================================================================== -->
<div class="modal" id="restoreborowing<?php echo $rows['borrowing_id']; ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-sm">
        <div class="modal-content">
            <div class="modal-header bg-primary">
                <center><h4 class="modal-title text-white" id="myModalLabel">Restore Borrowing</h4></center>
                <button type="button" class="close text-white" data-dismiss="modal" aria-hidden="true">&times;</button>
            </div>
            
            <div class="modal-body">
                <p>Are you sure you want to restore borrowing:<br> <b><?php echo $rows['bname']; ?></b>
                    <br><b><?php echo $rows['code']; ?></b>?</p>       
            </div>
            
            <div class="modal-footer bg-primary">
               
                    <button type="button" class="btn btn-sm btn-light" data-dismiss="modal"><span class="fa fa-remove"></span> Cancel</button>
                    <a href="action/restoreborrowing.php?id=<?php echo $rows['borrowing_id']; ?>" class="btn btn-sm btn-success"><span class="fa fa-retweet"></span> Restore</a>
               
            </div>
        </div>
    </div>
</div>