<div class="container-fluid mt-0 mb-2">
    <div class="row">
        <div class="col-sm-12">
            <div class="panel panel-default text-center mt-3 mb-1" style="background-color:#030A28; border:20px solid;border-color:light;">
				<div class="panel-body mt-2 " style="background-color:#030A28;font-size:22px;color:white;">
					<fieldset >
					<form role="form"  method="post" action="index.php?page=add_events">
                        <div class="row" style="background-color:#030A28;font-size:22px;color:white;">                    

                            <div class="col-sm-4  col-md-offset-1" style="background-color:#030A28;font-size:22px;color:white;">
                            	<div class="form-group">
									<div class="input-group">
										<span class="input-group-addon">
											<i class="glyphicon glyphicon-user"></i>
											Event Title:
										</span> 
                                    </div>
                                    
								    <div>
                                        <input style="border:5px solid;border-color:black;" class="form-control text-center" placeholder="Event Title" name="event_title" type="text" autofocus>
									</div>
                                </div>
                                
                                <div class="form-group">
									<div class="input-group">
										<span class="input-group-addon">
											<i class="glyphicon glyphicon-user"></i>
											Event Type:
										</span> 
									</div>
									<div>
										<input style="border:5px solid;border-color:black;" class="form-control text-center" placeholder="Event Type" name="event_type" type="text" autofocus>
									</div>
								</div>

								
                                <div class="form-group">
									<div class="input-group">
										<span class="input-group-addon">
											<i class="glyphicon glyphicon-user"></i>
											Event Date:
										</span> 
									</div>
									<div>
										<input style="border:5px solid;border-color:black;" class="form-control text-center" name="event_date" type="date" autofocus>
									</div>
								</div>


								<div class="form-group">
                                    <div class="input-group">
										<span class="input-group-addon">
											<i class="glyphicon glyphicon-user"></i>
											Participants:
										</span> 
									</div>
                                    
                                    <div>
										<input style="border:5px solid;border-color:black;" class="form-control text-center" placeholder="Course" name="course_participants" type="text" autofocus>
                                    </div>
                                    
                                    <div>
										<input style="border:5px solid;border-color:black;" class="form-control text-center" placeholder="Batch" name="batch_participants" type="text" autofocus>
									</div>
                                </div>

                                <div class="form-group">
									<input type="hidden" class="btn btn-lg btn-primary btn-block" name="register" value=1>
                                </div>
                                
								<div class="form-group">
									<input type="submit" class="btn btn-lg btn-primary btn-block text-center bg-transparent" style="border:30px solid;border-color:black;" value="Submit">
								</div>
                            </div>
                            
                            <div class="col-sm-8  col-md-offset-1" style="background-color:#030A28;font-size:22px;color:white;">
                            	<div class="form-group">
                                <div class="container-fluid">

<table class="table table-hover">
<thead>
	<tr class="bg-info text-light">
		
		<th class="text-center">Event Title</th>
		<th class="text-center">Event Type</th>
		<th class="text-center">Event Date</th>
		<th class="text-center">Course Participants</th>
		<th class="text-center">Batch Participants</th>
		<!--<th class="fit"><a href="index.php?page=accounts_entry" class="btn btn-sm btn-primary"><span class="glyphicon glyphicon-plus" ></span> Add</a></th>-->
		<th class="fit"></th>
	</tr>
</thead>
<tbody class="bg-danger">
	<?php 	
		$counter=0;
		foreach($result as $title=>$Mymessage)
			{
				echo "<tr>";
				$counter++;
				echo "<tr>";
			
				echo "<td class='text-center text-center  text-light'>". $Mymessage->event_title ."</td>";
				echo "<td class='text-center text-center  text-light'>". $Mymessage->event_type ."</td>";
				echo "<td class='text-center text-center  text-light'>". $Mymessage->event_date ."</td>";
				echo "<td class='text-center text-center  text-light'>". $Mymessage->course_participants ."</td>";
				echo "<td class='text-center text-center  text-light'>". $Mymessage->batch_participants ."</td>";
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
                    </form>    
					</fieldset>
						
				</div>
			</div>
	    </div>
    </div>
</div>
