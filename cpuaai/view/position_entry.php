<div class="container-fluid mt-2 mb-2">
  <div class="row">
   

<div class="col-sm-6">
		
<div class="panel panel-default text-center mt-3 mb-1" style="background-color:#030A28; border:20px solid;border-color:light;">				
				<div class="panel-body mt-2 " style="background-color:#030A28;font-size:22px;color:white;">

					<fieldset >
					<form role="form"  method="post" action="index.php?page=position_entry">
						<div class="row" style="background-color:#030A28;font-size:22px;color:white;">
							<div class="col-sm-12  col-md-offset-1" style="background-color:#030A28;font-size:22px;color:white;">

								<div class="form-group">
									<div class="input-group">
										<span class="input-group-addon">
											<i class="glyphicon glyphicon-user"></i>
											Position:
										</span> 
									</div>
									<div>
										<input style="border:5px solid;border-color:black;" class="form-control text-center" placeholder="Position" name="position" type="text" autofocus>
									</div>
								</div>
								
                                <div class="form-group">
										<div class="input-group">
											<span class="input-group-addon">
                                                <i class="glyphicon glyphicon-user"></i>
                                                Max Vote:
                                            </span> 
                                        </div>
                                        <div>
										    <select  class="form-control choice_type" name="max_vote">
                                                <option value=""></option>
												<option value="1">1</option>
												<option value="2">2</option>
                                                <option value="3">3</option>
                                                <option value="4">4</option>
												<option value="5">5</option>
                                                <option value="6">6</option>
                                                <option value="7">7</option>
												<option value="8">8</option>
                                                <option value="9">9</option>
                                                <option value="10">10</option>
						     				</select>
										</div>
									</div>

								
								<div class="form-group">
									<input type="submit" class="btn btn-lg btn-primary btn-block text-center bg-transparent" style="border:30px solid;border-color:black;" value="Add Position">
								</div>
								
							</div>

								
								</div>
							</fieldset>
						
						</div>
					</form>
			</div>
    </div>
    
	<div class="col-sm-6">

    <div class="container">

<table class="table table-hover">
	<thead>
		<tr class="bg-info text-light">
			
			<th class="text-center">Position</th>
			<th class="text-center">Max Vote</th>
		    <!--<th class="fit"><a href="index.php?page=accounts_entry" class="btn btn-sm btn-primary"><span class="glyphicon glyphicon-plus" ></span> Add</a></th>-->
		    <th class="fit"></th>
		</tr>
	</thead>
	<tbody>
		<?php 	
			$counter=0;
			foreach($result as $title=>$Mymessage)
				{
					echo "<tr>";
					$counter++;
					echo "<tr>";
				
					echo "<td class='text-center text-center text-dark'>". $Mymessage->position ."</td>";
					echo "<td class='text-center text-center text-dark'>". $Mymessage->max_vote ."</td>";
					echo "<td class='text-center text-center text-dark'> </td>";		
					echo "</tr>";
				}
		?>	
	</tbody>
</table>
</div>

	</div>

  </div>
</div>


