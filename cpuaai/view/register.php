<div class="container-fluid mt-2 mb-2">

  <div class="row">
   
	<div class="col-sm-12">
		
		<div class="panel panel-default">
				<div class="panel-heading mb-0 text-center" style="background-color:black;font-size:22px;color:white;">
					Create New Account
				</div>
				
				<div class="panel-body mt-0 " style="background-color:#030A28;font-size:22px;color:white;">

				
					<fieldset >
					<form role="form"  method="post" action="index.php?command=2">
						<div class="row" style="background-color:#030A28;font-size:22px;color:white;">
							<div class="col-sm-3  col-md-offset-1" style="background-color:#030A28;font-size:22px;color:white;">
							
							

								<div class="form-group">
								<span class="input-group-addon">
											<i class="glyphicon glyphicon-user">Firstname</i>
										</span> 
									<div class="input-group">
									
										<input style="border:5px solid;border-color:black;" class="form-control text-center" placeholder="First Name" name="firstname" type="text" autofocus>
									</div>
								</div>
								
								<div class="form-group">
								<span class="input-group-addon">
											<i class="glyphicon glyphicon-user">Middlename</i>
										</span> 
									<div class="input-group">
										
										<input style="border:5px solid;border-color:black;" class="form-control text-center" placeholder="Middle Name" name="middlename" type="text" autofocus>
									</div>
								</div>


								<div class="form-group">
								<span class="input-group-addon">
											<i class="glyphicon glyphicon-user">Lastname</i>
										</span> 
									<div class="input-group">
										
										<input style="border:5px solid;border-color:black;" class="form-control text-center" placeholder="Last Name" name="lastname" type="text" autofocus>
									</div>
								</div>
								
								<div class="form-group">
								<span class="input-group-addon">
											<i class="glyphicon glyphicon-user">Gender</i>
										</span>
									<div class="input-group">
										 
										<select name="sex" size="1" class="form-control text-center" >
											<option value=""></option>
											<option value="Male">Male</option>
											<option value="Female">Female</option>
										</select>									
									</div>
								</div>


								
							</div>
							
							<div class="col-sm-3  col-md-offset-1" style="background-color:#030A28;font-size:22px;color:white;">

							<div class="form-group">
							<span class="input-group-addon">
											<i class="glyphicon glyphicon-user">Address</i>
										</span> 
									<div class="input-group">
										Addressline:
										<input style="border:5px solid;border-color:black;" class="form-control text-center" placeholder="Addressline" name="addressline" type="text" autofocus>
									</div>
									<div class="input-group">
										City:
										<input style="border:5px solid;border-color:black;" class="form-control text-center" placeholder="City" name="city" type="text" autofocus>
									</div>
									<div class="input-group">
										SPR:
										<input style="border:5px solid;border-color:black;" class="form-control text-center" placeholder="SPR" name="spr" type="text" autofocus>
									</div>
									<div class="input-group">
										ZIP:
										<input style="border:5px solid;border-color:black;" class="form-control text-center" placeholder="Zip" name="zip" type="text" autofocus>
									</div>
									<div class="input-group">
										Country:
										<?php
										$result8 = $this->model->get_country();
										echo "<select name='country' size='1' class='form-control'>";
            							foreach($result8 as $title=>$getcountry){
											echo "<option value='$getcountry->country'>$getcountry->country</option>";	
										} 
										echo "</select>";
									?>				
									</div>
								</div>

								<div class="form-group">
										<span class="input-group-addon">
											<i class="glyphicon glyphicon-user">College</i>
										</span> 
									<div class="input-group">
									
									<?php
										$result3 = $this->model->get_college();
										echo "<select name='college' size='1' class='form-control'>";
            							foreach($result3 as $title=>$getcollege){
											echo "<option value='$getcollege->college10'>$getcollege->college10</option>";	
										} 
										echo "</select>";
									?>									
										
									</div>
								</div>

								</div>
								<div class="col-sm-3  col-md-offset-1" style="background-color:#030A28;font-size:22px;color:white;">


								<div class="form-group">
										<span class="input-group-addon">
											<i class="glyphicon glyphicon-user">Course</i>
										</span> 
									<div class="input-group">
									
									<?php
										$result2 = $this->model->getcourse();
										echo "<select name='course' size='1' class='form-control'>";
            							foreach($result2 as $title=>$getcourse){
											echo "<option value='$getcourse->course_title'>$getcourse->course_title</option>";	
										} 
										echo "</select>";
									?>									
										
									</div>
								</div>

								<div class="form-group">
										<span class="input-group-addon">
											<i class="glyphicon glyphicon-user">Year Graduated</i>
										</span> 
									<div class="input-group">
									
									<?php
										$result = $this->model->getyeargraduated();
										echo "<select name='yeargraduated' size='1' class='form-control'>";
            							foreach($result as $title=>$getyeargraduated){
											echo "<option value='$getyeargraduated->year_graduated'>$getyeargraduated->year_graduated</option>";	
										} 
										echo "</select>";
									?>									
										
									</div>
								</div>


								

								
								
								<div class="form-group">
								<span class="input-group-addon">
											<i class="glyphicon glyphicon-lock">Email Address</i>
										</span>
									<div class="input-group">
										
										<input style="border:5px solid;border-color:black;" class="form-control text-center" placeholder="Email Address" name="email" type="text">
									</div>
								</div>
								

								<div class="form-group">
								<span class="input-group-addon">
											<i class="glyphicon glyphicon-lock">Contact Number</i>
										</span>
									<div class="input-group">
										
										<input style="border:5px solid;border-color:black;" class="form-control text-center" placeholder="Contact Number" name="contact" type="text">
									</div>
								</div>


								</div>
								<div class="col-sm-3  col-md-offset-1" style="background-color:#030A28;font-size:22px;color:white;">
	


								<div class="form-group">
								<span class="input-group-addon">
											<i class="glyphicon glyphicon-lock">Social Media Account</i>
										</span>
									<div class="input-group">
										
										<input style="border:5px solid;border-color:black;" class="form-control text-center" placeholder="Social Media Account" name="social" type="text">
									</div>
								</div>

								
								
						<div class="form-group">
								<span class="input-group-addon">
											<i class="glyphicon glyphicon-user">Username</i>
										</span> 
									<div class="input-group">
										
										<input style="border:5px solid;border-color:black;" class="form-control text-center" placeholder="User Name" name="username" type="text" autofocus>
									</div>
								</div>	


								<div class="form-group">
								<span class="input-group-addon">
											<i class="glyphicon glyphicon-lock">Password</i>
										</span>
									<div class="input-group">
										
										<input style="border:5px solid;border-color:black;" class="form-control text-center" placeholder="Password" name="password" type="password">
									</div>
								</div>
								<div class="form-group">
								<input style="border:5px solid;border-color:black;" class="form-control text-center"  name="role" type="hidden" value="User">

								</div>

								
								<div class="form-group">
									<input type="hidden" class="btn btn-lg btn-primary btn-block" name="register" value=1>
								</div>

								<div class="form-group">
									<input type="hidden" class="btn btn-lg btn-primary btn-block" name="register" value=1>
								</div>
								<button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModal">Proceed</button>
							
								<a class="btn btn-lg btn-primary btn-block" href="index.php?command=0">Back to Login</a>	

								
								
							</div>
							</div>
							</fieldset>
						

							

							<div class="container">

  <!-- Modal -->
  <div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog">
								
      <!-- Modal content-->
      <div class="modal-content bg-danger">

        <div class="modal-header">
		Disclaimer
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          
        </div>
        <div class="modal-body text-center text-light">
          <p>
		  
		  <?php
										$result11 = $this->model->get_disclaimer();
									
            							foreach($result11 as $title=>$getdisclaimer){
											echo $getdisclaimer->disclaimer;	
										} 
									?>				
		  
		  </p>
        </div>
        <div class="modal-footer">

		<div class="form-group">
									<input type="submit" class="btn btn-lg btn-primary btn-block" value="Save">
								</div>
								</form>
        </div>
      </div>
      
    </div>
  </div>
  
</div>















						</div>
					
			</div>





	</div>
	

  </div>
</div>

