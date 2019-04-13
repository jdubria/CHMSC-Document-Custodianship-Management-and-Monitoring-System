<?php 
include 'htmlparts/header.php';
include("../connection/conn.php");
?>
<style type="text/css">
	body{
		background: url("../assets/src/img/bokeh.jpg");  
		padding:50px;
		background-repeat: no-repeat;
		background-size: 100%; 
	}
	#juan{
		margin-top: 80px;
	}
	h1{
		font-size: 100px;
	}

</style>

<div class="row" id="juan">
	<div class="col-sm-8">
		<div class="">
			<h1 class="w3-center w3-text-white">CHMSC DCMMSC</h1>
		</div>
	</div>
	<div class="col-sm-4">
		<div class="card w3-card-4 shadow">
			<div class="card-header text-center">
				<h6 class="h6">Log-in</h6>
			</div>
			<div class="card-body">
				<form>
					<div class="form-group">
						<label class="sr-only" for="exampleInputEmail2">Email address</label>
						<input type="email" class="form-control" id="exampleInputEmail2" placeholder="Email address" required>
					</div>

					<div class="form-group">
						<label class="sr-only" for="exampleInputPassword2">Password</label>
						<input type="password" class="form-control" id="exampleInputPassword2" placeholder="Password" required>
                    	<div class="help-block text-right"><a href="">Forget the password ?</a></div>
					</div>

					<div class="form-group">
						<button type="submit" class="btn btn-primary btn-block">Sign in</button>
					</div>
					
					<div class="checkbox">
						<label>
						<input type="checkbox"> keep me logged-in
						</label>
					</div>
				</form>
			</div>
		</div>
	</div>
</div>



<?php 
include 'htmlparts/footer.php';
include 'htmlparts/scripts.php';	
?>