<!-- view data modal content -->
 <div class="modal fade" id="viewdata<?php echo $rows['id']; ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
 	<div class="modal-dialog">
 		<div class="modal-content">
 			<div class="modal-header bg-primary">
 				<center><h5 class="modal-title text-light" id="myModalLabel"><b><?php echo $rows['name']; ?> Document Details</b></h5></center>
 				<button type="button" class="close text-light" data-dismiss="modal" aria-hidden="true">&times;</button>
 			</div>
 			<div class="modal-body">
 				<div class="text-justify">
 					<fieldset>
 						<div class="w3-margin">
 							<div class="row">
 								<div class="col-sm-6"><p><b>Office:</b></p></div>
 								<div class="col-sm-6"><p><?php echo $rows['office_name']; ?></p></div>
 							</div>
 							<div class="row">
 								<div class="col-sm-6"><p><b>Document Code:</b></p></div>
 								<div class="col-sm-6"><p><?php echo $rows['code']; ?></p></div>
 							</div>

 							<div class="row">
 								<div class="col-sm-6"><p><b>Document Name:</b></p></div>
 								<div class="col-sm-6"><p><?php echo $rows['name']; ?></p></div>
 							</div>

 							<div class="row">
 								<div class="col-sm-6"><p><b>Document Type:</b></p></div>
 								<div class="col-sm-6"><p><?php echo $rows['type']; ?></p></div>
 							</div>

 							<div class="row">
 								<div class="col-sm-6"><p><b>Document Location:</b></p></div>
 								<div class="col-sm-6"><p><?php echo $rows['Doc_address']; ?></p></div>
 							</div>

 							<div class="row">
 								<div class="col-sm-6"><p><b>File Name:</b></p></div>
 								<div class="col-sm-6"><p><?php echo $rows['file']; ?></p></div>
 							</div>
 							<div class="row">
 								<div class="col-sm-6"><p><b>Date Uploaded:</b></p></div>
 								<div class="col-sm-6"><p><?php echo $rows['date-uploaded']; ?></p></div>
 							</div>

 						</div>
 					</fieldset>
 				</div>
 			</div>

 			<div class="modal-footer bg-primary">
 				<button type="button" class="btn btn-sm btn-light" data-dismiss="modal"><span class="fa fa-remove"></span> Close</button>
                <a href="action/downloadFile.php?file=<?php echo urlencode($rows['file_destination']); ?>" class="btn btn-dark"><span class="fa fa-download"></span> Download document</a>
 			</div>
 		</div>
 	</div>
 </div>