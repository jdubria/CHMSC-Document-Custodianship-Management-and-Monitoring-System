<div class="modal fade" id="viewdata<?php echo $row['bor_id']; ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header bg-primary">
				<center><h5 class="modal-title text-light" id="myModalLabel"><b><?php echo $row['bname']; ?>  Details</b></h5></center>
 				<button type="button" class="close text-light" data-dismiss="modal" aria-hidden="true">&times;</button>
			</div>

			<div class="modal-body">
				<label>Name</label>
				<label class="form-control"><?php echo $row['bname']; ?></label>
				
				<br>
				<label>Address</label>
				<label class="form-control" rows="3"><?php echo $row['address']; ?></label>
				
				<br>
				<label>Contact Number</label>
				<label class="form-control"><?php echo $row['contact']; ?></label>
				
			</div>

			<div class="modal-footer bg-primary">
 				<button type="button" class="btn btn-sm btn-light" data-dismiss="modal">Close</button>
                				
			</div>
		</div>
	</div>
</div>