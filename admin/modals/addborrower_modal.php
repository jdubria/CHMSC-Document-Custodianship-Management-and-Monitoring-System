<!-- Add New -->
<style type="text/css">
    /* Formatting search box */
    .search-box{
        width: 300px;
        position: relative;
        display: inline-block;
        font-size: 14px;
    }
    .search-box input[type="text"]{
        height: 32px;
        padding: 5px 10px;
        border: 1px solid #CCCCCC;
        font-size: 14px;
    }
    .result{
        background-color: #fff;
        position: absolute;        
        z-index: 999;
        top: 100%;
        left: 0;
    }
    .search-box input[type="text"], .result{
        width: 100%;
        box-sizing: border-box;
    }
    /* Formatting result items */
    .result p{
        margin: 0;
        padding: 7px 10px;
        border: 1px solid #ffffff;
        border-top: none;
        cursor: pointer;
    }
    .result p:hover{
        color: #ffffff;
        background: #000000;
    }
</style>
    <div class="modal fade" id="addnewborrower<?php echo $rows['id']; ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header bg-primary">
                    <center><h5 class="modal-title text-white" id="myModalLabel">Add New Document Borrower</h5></center>
                    <button type="button" class="close text-white" data-dismiss="modal" aria-hidden="true">&times;</button>
                </div>
                <div class="modal-body">
				<div class="container-fluid">
				<form method="POST" action="action/addnewbor.php">
				<!--form body -->
        <div class="form-group row">
            <label for="code" class="col-sm-4 col-form-label">Document Code:</label>
          <div class="col-sm-8">
            <label class="form-control" style="color: #C00000;"><?php echo $rows['code'] ?></label>
            <input type="hidden" id="code" name="code" value="<?php echo $rows['code'] ?>" required>
          </div>
        </div>

        <div class="form-group row">
            <label for="name" class="col-sm-4 col-form-label" >Document Name:</label>
           <div class="col-sm-8">
            <label class="form-control" style="color: #C00000;"><?php echo $rows['name'] ?></label>
             <input type="hidden" id="name" name="name" value="<?php echo $rows['name'] ?>" required>
           </div> 
        </div>

        <div class="form-group row">
            <label class="col-sm-4 col-form-label" for="type">Document Type:</label>
           <div class="col-sm-8">
              <label class="form-control" style="color: #C00000;"><?php echo $rows['type'] ?></label>
             <input type="hidden" id="type" name="type" value="<?php echo $rows['type'] ?>" required>
           </div> 
        </div>

        <div class="border-bottom" style="color: #000000;"></div>
        <p>Please Provide the Borrower's Information</p>
        <br>

        <div class="form-group row">
            <label class="col-sm-4 col-form-label" for="bname">Borrower's Name:</label>
           <div class="col-sm-8 search-box">
             <input type="text" class="form-control" id="bname" name="bname" autocomplete="off" placeholder="Last Name, First Name MI" required>
             <div class="result"></div>
           </div> 
        </div>

        <div class="form-group row">
            <label class="col-sm-4 col-form-label">Deadline of Return</label>
           <div class="col-sm-8">
          <input type="date" class="form-control" id="dt" name="deadline" required>     
           </div> 
        </div>
        
        <div class="form-group row">
            <label class="col-sm-4 col-form-label">Purpose</label>
            <div class="col-sm-8">
                <textarea name="purpose" class="form-control" rows="1" placeholder="Purpose here.." required=""></textarea>
            </div>
        </div>

				
				<!--close form body-->
                </div> 
				</div>
                <div class="modal-footer bg-primary">
                    <button type="button" class="btn btn-sm btn-light" data-dismiss="modal"><span class="fa fa-remove"></span> Cancel</button>
                    <button type="submit" name="save" class="btn btn-sm btn-dark"><span class="fa fa-save"></span> Save</a>
				</form>
                </div>
 
            </div>
        </div>
    </div>