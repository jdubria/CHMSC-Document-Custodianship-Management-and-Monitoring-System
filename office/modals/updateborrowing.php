<div class="modal fade" id="editborrowing<?php echo $rows['borrowing_id']; ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header bg-primary">
				<center><h5 class="modal-title text-white" id="myModalLabel">Action: Update/Archive Borrowing</h5></center>
                    <button type="button" class="close text-white" data-dismiss="modal" aria-hidden="true">&times;</button>
			</div>

			<div class="modal-body">
				<div class="text-center">
						<h6 class="text-danger"><b>Document Code: <span><?php echo $rows['code']; ?></span></b></h6>
						<p class="text-danger"><b>Document Name: <span><?php echo $rows['name']; ?></span></b></p>
						<p class="text-danger"><b>Borrower Name: <span><?php echo $rows['bname']; ?></span></b></p>
				</div>
				<form method="POST" action="action/editborrowing.php">
					<input type="hidden" name="borrowing_id" value="<?php echo $rows['borrowing_id']; ?>">
			        <div class="form-group row">
			            <label class="col-sm-4 col-form-label">Deadline of Return</label>
			           <div class="col-sm-8">
			          <input type="date" class="form-control" id="dt" name="deadline" value="<?php echo $rows['deadline'] ?>" required>     
			           </div> 
			        </div>
			        
			        <div class="form-group row">
			            <label class="col-sm-4 col-form-label">Purpose</label>
			            <div class="col-sm-8">
			                <textarea name="purpose" class="form-control" rows="1" placeholder="Purpose here.." required=""><?php echo $rows['purpose']; ?></textarea>
			            </div>
			        </div>					
			</div>

			<div class="modal-footer bg-primary">
				<span class="text-left">
				<button type="button" class="btn btn-sm btn-light" data-dismiss="modal"><span class="fa fa-remove"></span> Cancel</button>
				</span>
				
                 <button type="submit" name="edit" class="btn btn-sm btn-warning"><span class="fa fa-check"></span> Save and Update</a>
                </form>
			</div>
		</div>
	</div>
</div>

<div class="modal fade" id="addreturnborrowing<?php echo $rows['borrowing_id']; ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header bg-primary">
                    <button type="button" class="close text-white" data-dismiss="modal" aria-hidden="true">&times;</button>
			</div>
		

			<div class="modal-body">
					<p class="text-center"><strong>Add Return</strong></p>
				<div class="row">
					<div class="col-sm-6">
						<p class="text-center">Document Code:</p>
					</div>
					<div class="col-sm-6">
						<?php echo $rows['code']; ?>
					</div>						
				</div>

				<div class="row">
					<div class="col-sm-6">
						<p class="text-center">Document Name:</p>
					</div>
					<div class="col-sm-6">
						<?php echo $rows['name']; ?>
					</div>						
				</div>

				<div class="row">
					<div class="col-sm-6">
						<p class="text-center">Borrower:</p>
					</div>
					<div class="col-sm-6">
						<?php echo $rows['bname']; ?>
					</div>						
				</div>



				<div class="row">
					<div class="col-sm-6">
						<p class="text-center">Date Borrowed:</p>
					</div>
					<div class="col-sm-6">
						<?php echo $rows['date']; ?>
					</div>						
				</div>
			</div>

			<div class="modal-footer bg-primary">
				<span class="text-left">
				<button type="button" class="btn btn-sm btn-light" data-dismiss="modal"><span class="fa fa-remove"></span> Cancel</button>
				</span>
				
                 <a href="action/addreturn.php?id=<?php echo $rows['borrowing_id']; ?>&&idd=<?php echo $id ?>" name="return" class="btn btn-sm btn-warning"><span class="fa fa-check"></span> Save</a>
			</div>

		</div>
	</div>
</div>