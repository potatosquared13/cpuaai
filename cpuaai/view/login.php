<div class="container col-sm-4 mt-4 mb-4" style="background-color:#030A28;border:10px solid;border-color:white;">
	<div class="row">
		<div class="col-sm-4">
		
		</div>
  	<div class="col-sm-12">
  		<div class="panel panel-default" >
			<div class="panel-heading text-center mt-3 mb-3 font-weight-bold" style="background-color:black;border:10px solid;border-color:white;color:white">
				Security Login
			</div>

    	<div class="panel-body">
			<form role="form"  method="post" action="index.php">
			<fieldset>
			<div class="form-group">
				<div class="input-group">
					<span class="input-group-addon"></span> 
					<input class="form-control text-center" placeholder="Username" name="username" type="text" autofocus>
				</div>
			</div>

        	<div class="form-group">
				<div class="input-group">
					<span class="input-group-addon"></span>
					<input class="form-control text-center" placeholder="Password" name="password" type="password">
				</div>
			</div>
								
			<div class="form-group">
				<input type="hidden" class="btn btn-lg btn-primary btn-block" name="login" value=1>
			</div>
							
			<div class="form-group">
				<input type="submit" class="btn btn-lg btn-primary btn-block" value="Login">
			</div>
			</form>

			<div class="form-group">
			<a class="btn btn-lg btn-primary btn-block" href="index.php?command=1">Sign up</a>
			</div>

			</fieldset>
    	</div>
  		</div>
  	</div>
	</div>
</div>