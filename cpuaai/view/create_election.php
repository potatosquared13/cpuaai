<div class="container-fluid mt-2 mb-2">
  <div class="row">
    

<div class="col-sm-6">
		

<div class="panel panel-default text-center mt-3 mb-1" style="background-color:#030A28; border:20px solid;border-color:light;">
				
			
				<div class="panel-body mt-2 " style="background-color:#030A28;font-size:22px;color:white;">

				
					<fieldset >
					<form role="form"  method="post" action="index.php?page=create_election">
						<div class="row" style="background-color:#030A28;font-size:22px;color:white;">
							<div class="col-sm-6  col-md-offset-1" style="background-color:#030A28;font-size:22px;color:white;">
							
							

								<div class="form-group">
									<div class="input-group">
										<span class="input-group-addon">
											<i class="glyphicon glyphicon-user"></i>
											Election Title:
										</span> 
									</div>
									<div>
										<input style="border:5px solid;border-color:black;" class="form-control text-center" placeholder="Election Title" name="election_title" type="text" autofocus>
									</div>
								</div>
								
                                <div class="form-group">
									<div class="input-group">
										<span class="input-group-addon">
											<i class="glyphicon glyphicon-user"></i>
											Election Date:
										</span> 
									</div>
									<div>
										<input style="border:5px solid;border-color:black;" class="form-control text-center" name="election_date" type="date" autofocus>
									</div>
								</div>


								<div class="form-group">
									<div class="input-group">
										<span class="input-group-addon">
											<i class="glyphicon glyphicon-user"></i>
										</span> Position:
										<a href="index.php?page=position_entry" class="btn btn-sm btn-primary ml-lg-auto"><span class="glyphicon glyphicon-plus" ></span>Add Position</a>

									</div>
									<div>
									<select  class="form-control choice_type" name="position1">
									<?php foreach($result as $title=>$Mymessage)
										{ ?>
											<option value="<?php 
												echo $Mymessage->position;
											?>"><?php 
											echo $Mymessage->position;
										?></option>
									
										<?php } ?>
										</select>
									</div>
								</div>

								</div>
								<div class="col-sm-6  col-md-offset-1" style="background-color:#030A28;font-size:22px;color:white;">
											
								<div class="form-group">
									<div class="input-group">
										<span class="input-group-addon">
											<i class="glyphicon glyphicon-user"></i>
											Nomination Date:
										</span> 
									</div>
									<div>
										<span class="input-group-addon">
											<i class="glyphicon glyphicon-user"></i>
											Start Date:
										</span> 
										<input style="border:5px solid;border-color:black;" class="form-control text-center" name="start_date" type="date" autofocus>
									</div>
									<div>
										<span class="input-group-addon">
											<i class="glyphicon glyphicon-user"></i>
											Due Date:
										</span> 
										<input style="border:5px solid;border-color:black;" class="form-control text-center" name="due_date" type="date" autofocus>
									</div>
								</div>

								
								<div class="form-group">
									<input type="hidden" class="btn btn-lg btn-primary btn-block" name="register" value=1>
								</div>
								<div class="form-group">
									<input type="submit" class="btn btn-lg btn-primary btn-block text-center bg-transparent" style="border:30px solid;border-color:black;" value="Submit">
								</div>
								
							</div>

								
								</div>
							</fieldset>
						
						</div>
					</form>
			</div>





	</div>

	

<div class="col-sm-6">

<div class="container-fluid">

<table class="table table-hover">
<thead>
	<tr class="bg-info text-light">
		
		<th class="text-center">Election Title</th>
		<th class="text-center">Election Date</th>
		<th class="text-center">Position</th>
		<th class="text-center">Nomination Start Date</th>
		<th class="text-center">Nomination Due Date</th>
		<!--<th class="fit"><a href="index.php?page=accounts_entry" class="btn btn-sm btn-primary"><span class="glyphicon glyphicon-plus" ></span> Add</a></th>-->
		<th class="fit"></th>
	</tr>
</thead>
<tbody class="bg-danger">
	<?php 	
		$counter=0;
		foreach($result1 as $title=>$Mymessage)
			{
				echo "<tr>";
				$counter++;
				echo "<tr>";
			
				echo "<td class='text-center text-center  text-light'>". $Mymessage->election_title ."</td>";
				echo "<td class='text-center text-center  text-light'>". $Mymessage->election_date ."</td>";
				echo "<td class='text-center text-center  text-light'>". $Mymessage->position1."</td>";
				echo "<td class='text-center text-center  text-light'>". $Mymessage->start_date ."</td>";
				echo "<td class='text-center text-center  text-light'>". $Mymessage->due_date."</td>";
				echo "<td class='text-center text-center  text-light'> </td>";		
				echo "</tr>";
			}
	?>	
</tbody>
</table>
</div>

</div>

</div>
</div>

