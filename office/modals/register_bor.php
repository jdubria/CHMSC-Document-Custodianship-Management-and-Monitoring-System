<div class="modal fade" id="register_new_bor" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header bg-primary">
				<center><h4 class="modal-title text-light" id="myModalLabel"><span class="fa fa-user-plus"></span> Register New Borrower</h4></center>
				<button type="button" class="close text-light" data-dismiss="modal" aria-hidden="true">&times;</button>
			</div>

			<div class="modal-body">
				<form method="POST" action="action/reg_bor.php">
				<label>Name</label>
				<input type="text" name="bor_name" id="bor_name" class="form-control" value="" placeholder="Last Name, First Name MI" required />
				<br>
				<label>Address</label>
				<textarea class="form-control" rows="3" name="address" required=""></textarea>
				<br>
				<label>Contact Number</label>
				<input type="text" name="contact" id="contact" class="form-control" value="+639" placeholder="+639" required />
				
			</div>

			<div class="modal-footer bg-primary">
				<button type="button" class="btn btn-sm btn-light" data-dismiss="modal"><span class="fa fa-remove"></span> Cancel</button>
                <button type="submit" class="btn btn-sm btn-dark" name="submit"><span class="fa fa-save"></span> Save</a>
                </form>	
			</div>
		</div>
	</div>
</div>