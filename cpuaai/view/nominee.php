
<?php
foreach($result as $title=>$getnominee)
{  
?>

<div class="container-fluid alert-warning" style="background-color:#030A28;">
<form action='index.php?page=save_nominee' method='post'>
						
<div class="container-fluid" style="margin-top:40px">

	<div class="row">

    <div class="col-sm-4">
    </div>
    
		<div class="col-sm-6 col-md-4 col-md-offset-4 ml-5">
			<div class="panel panel-default">
				<div class="panel-heading">
					<center><strong>Nominee Information</strong></center>
				</div>
				<div class="panel-body">
				<form role="form"  method="post" action="index.php?page=save_nominee1">
					<fieldset>
						<div class="row">
							<div class="center-block">
								<img class="profile-img" src="view/images/background/1.jpg" alt="">
							</div>
						</div>
						<div class="row">
							<div class="col-sm-12 col-md-10  col-md-offset-1 ">
							
								<div class="form-group">
									<div class="input-group">
										<span class="input-group-addon">
											Firstname:
										</span> 
										<input class="form-control text-center" readonly placeholder="First Name" name="firstname" type="text" value=<?php echo $getnominee->firstname; ?>        autofocus>
									</div>
								</div>
								
								<div class="form-group">
									<div class="input-group">
										<span class="input-group-addon">
											Middlename:
										</span> 
										<input class="form-control text-center" readonly placeholder="Middle Name" name="middlename" type="text"  value=<?php echo $getnominee->middlename; ?>   autofocus>
									</div>
								</div>
								
								<div class="form-group">
									<div class="input-group">
										<span class="input-group-addon">
											Lastname:
										</span> 
										<input class="form-control text-center" readonly placeholder="Last Name" name="lastname" type="text" value=<?php echo $getnominee->lastname; ?> autofocus>
									</div>
								</div>
								
                                <div class="form-group">
									<div class="input-group">
										<span class="input-group-addon">
											Year Graduated:
										</span> 
										<input class="form-control text-center" readonly placeholder="Year Graduated" name="yeargraduated" type="text" value=<?php echo $getnominee->yeargraduated; ?> autofocus>
									</div>
								</div>

                                <div class="form-group">
									<div class="input-group text-center">
										<span class="input-group-addon">
											Position:
										</span> 
                                        <select name="position" size="1">
					                    	<option value="President">President</option>
					                    	<option value="Vice President">Vice President</option>
					                    	<option value="Corporate Secretary">Corporate Secretary</option>
					                    	<option value="Corporate Treasurer">Corporate Treasurer</option>
                                        	<option value="Corporate Auditor">Corporate Auditor</option>
					                    	<option value="Board Of Trustees">Board Of Trustees</option>
											<option value="Regional Trustees">Regional Trustees</option>
					                    
				                        </select>
                                    </div>
								</div>
                                
						
						<input type="hidden" name="user_id" value=<?php echo $getnominee->id;?>><br>						
						<button type="submit" class="btn btn-sm btn-primary bg-dark text-center" name="subjects_update">
						<span class="glyphicon glyphicon glyphicon-check" ></span> Submit
						</button>
						</fieldset>
						</form>
					</div>
			</div>
		</div>
	</div>
</div>							
</div>				

<?php
}
?>
