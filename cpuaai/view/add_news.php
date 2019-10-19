<div class="container-fluid mt-0 mb-2">
    <div class="row">
    
    <div class="col-sm-4  col-md-offset-1" style="background-color:#030A28;font-size:22px;color:white;">
    <fieldset >
    <form enctype="multipart/form-data" action="index.php?page=add_news" name="form" method="post">

        <div class="form-group">
			<div class="input-group">
				<span class="input-group-addon">
				<i class="glyphicon glyphicon-user"></i>
				News Title:
				</span> 
            </div>
                                    
			<div>
                <input style="border:5px solid;border-color:black;" class="form-control text-center" placeholder="News Title" name="news_title" type="text" autofocus>
		    </div>
        </div>
                                
        <div class="form-group">
			<div class="input-group">
				<span class="input-group-addon">
				<i class="glyphicon glyphicon-user"></i>
				Date:
				</span> 
			</div>
		    <div>
				<input style="border:5px solid;border-color:black;" class="form-control text-center" name="news_date" type="date" autofocus>
			</div>
		</div>


        <div class="form-group">
			<div class="input-group">
				<span class="input-group-addon">
				<i class="glyphicon glyphicon-user">Article:</i>
				</span> 
                <textarea rows="4" cols="40" name="article"></textarea>
            </div>
		</div>

        <div class="form-group">
            
            <span class="input-group-addon">
				<i class="glyphicon glyphicon-user">Upload Photo:</i>
				</span> 
			<input type="file" name="photo" id="photo" />
	        <!--<input type="submit" name="submit" value="Upload Files">-->
	    </div>

        <div class="form-group">
			<input type="hidden" class="btn btn-lg btn-primary btn-block" name="register" value=1>
        </div>
                                
		<div class="form-group">
			<input type="submit" class="btn btn-lg btn-primary btn-block text-center bg-transparent" style="border:30px solid;border-color:black;" value="Submit">
		</div>
        </form>    
		</fieldset>
    </div>


<div class="col-sm-8  col-md-offset-1" style="background-color:#030A28;font-size:22px;color:white;">

<table class="table table-hover">
<thead>
	<tr class="bg-info text-light">
		
		<th class="text-center">News Title</th>
		<th class="text-center">News Date</th>
		<th class="text-center">Article</th>
		<th class="text-center">Upload</th>
	
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
			
				echo "<td class='text-center text-center  text-light'>". $Mymessage->news_title ."</td>";
				echo "<td class='text-center text-center  text-light'>". $Mymessage->news_date ."</td>";
				echo "<td class='text-center text-center  text-light'>". $Mymessage->article ."</td>";
				echo "<td class='text-center text-center  text-light'>". $Mymessage->upload ."</td>";
				
				echo "<td class='text-center text-center  text-light'> </td>";		
				echo "</tr>";
			}
	?>	
</tbody>
</table>

</div>
</div>

