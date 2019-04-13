<div class="modal" id="restorebor<?php echo $rows['bor_id']; ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-sm">
        <div class="modal-content">
            <div class="modal-header bg-primary">
                <center><h4 class="modal-title text-white" id="myModalLabel">Restore Borrower</h4></center>
                <button type="button" class="close text-white" data-dismiss="modal" aria-hidden="true">&times;</button>
            </div>
            
            <div class="modal-body">
                <p>Are you sure you want to restore document: <b><?php echo $rows['bname']; ?></b>?</p>       
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



<!-- ================================================================================================= -->

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
                    <a href="action/restoreborrowing.php?id=<?php echo $rows['borrowing_id']; ?>" class="btn btn-success"><span class="fa fa-retweet"></span> Restore</a>
               
            </div>
        </div>
    </div>
</div>

<!-- ================================================================================================= -->

<div class="modal" id="restoreoffice<?php echo $rows['office_id']; ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-sm">
        <div class="modal-content">
            <div class="modal-header bg-primary">
                <center><h4 class="modal-title text-white" id="myModalLabel">Restore Borrowing</h4></center>
                <button type="button" class="close text-white" data-dismiss="modal" aria-hidden="true">&times;</button>
            </div>
            
            <div class="modal-body">
                <p>Are you sure you want to restore office:<br> <b><?php echo $rows['office_name']; ?></b>?</p>       
            </div>
            
            <div class="modal-footer bg-primary">
               
                    <button type="button" class="btn btn-sm btn-light" data-dismiss="modal"><span class="fa fa-remove"></span> Cancel</button>
                    <a href="action/restore_office.php?id=<?php echo $rows['office_id']; ?>" class="btn btn-success"><span class="fa fa-retweet"></span> Restore</a>
               
            </div>
        </div>
    </div>
</div>
<!-- ================================================================================================= -->

<div class="modal" id="restore_type<?php echo $rows['dt_id'] ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-sm">
        <div class="modal-content">
            <div class="modal-header bg-primary">
                <center><h4 class="modal-title text-white" id="myModalLabel">Restore Document Type</h4></center>
                <button type="button" class="close text-white" data-dismiss="modal" aria-hidden="true">&times;</button>
            </div>
            
            <div class="modal-body">
                <p>Are you sure you want to restore document type:<br> <center><b><?php echo $rows['type']; ?></b>?</center></p>       
            </div>
            
            <div class="modal-footer bg-primary">
               
                    <button type="button" class="btn btn-sm btn-light" data-dismiss="modal"><span class="fa fa-remove"></span> Cancel</button>
                    <a href="action/restore_dt.php?id=<?php echo $rows['dt_id']; ?>" class="btn btn-sm btn-success"><span class="fa fa-retweet"></span> Restore</a>
               
            </div>
        </div>
    </div>
</div>
<!-- ================================================================================================= -->

<div class="modal" id="restore_user<?php echo $rows['userid'] ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-sm">
        <div class="modal-content">
            <div class="modal-header bg-primary">
                <center><h4 class="modal-title text-white" id="myModalLabel">Restore Document Type</h4></center>
                <button type="button" class="close text-white" data-dismiss="modal" aria-hidden="true">&times;</button>
            </div>
            
            <div class="modal-body">
                <p>Are you sure you want to restore document type:<br> <center><b><?php echo $rows['name']; ?></b>?</center></p>       
            </div>
            
            <div class="modal-footer bg-primary">
               
                    <button type="button" class="btn btn-sm btn-light" data-dismiss="modal"><span class="fa fa-remove"></span> Cancel</button>
                    <a href="action/restore_user.php?id=<?php echo $rows['userid']; ?>" class="btn btn-sm btn-success"><span class="fa fa-retweet"></span> Restore</a>
               
            </div>
        </div>
    </div>
</div>