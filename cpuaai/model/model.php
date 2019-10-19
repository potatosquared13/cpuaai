<?php
class Model
{
	public $db=null;
	function __construct()
	{
		try
		{
			$this->db = new mysqli('localhost', 'root', '', 'cpuaai');
		}
		catch(mysqli_sql_exception $e)
		{
			exit('Database connection could not be established.');
		}
	}
	public function getlogin($username,$password){
		global $role;
		global $user_id;
		global $firstname1;
		global $lastname1;
		global $username1;
		global $password1;

		$result= mysqli_query($this->db,"SELECT * from users where username='".$username."' && password='".$password."'");
		while($getRow=mysqli_fetch_assoc($result))    		
			{    			
			  $user_id= $getRow['user_id'];
			  $firstname1= $getRow['firstname'];
			  $lastname1= $getRow['lastname'];
			  $username1= $getRow['username'];
			  $password1= $getRow['password'];
			  $role= $getRow['role'];
			}
			$_SESSION['user_id']=$user_id;
			$_SESSION['firstname1']=$firstname1;
			$_SESSION['lastname1']=$lastname1;
			$_SESSION['username1']=$username1;                                 
			$_SESSION['password1']=$password1;
			$_SESSION['role']=$role;
	}

	public function insert_user($firstname,$middlename,$lastname,$addressline,$city,$spr,$zip,$country,$yeargraduated,$course,$college,$sex,$email,$contact,$social,$username,$password, $role)
    {
    	$insertQuery="INSERT into users(firstname,middlename,lastname,addressline,city,spr,zip,country,yeargraduated,course,college,sex,email,contact,social,username,password,role) values('$firstname','$middlename','$lastname','$addressline','$city','$spr','$zip','$country','$yeargraduated','$course','$college','$sex','$email','$contact','$social','$username','$password','$role')";
		$result = mysqli_query($this->db,$insertQuery);
		if(!$result)
			return mysqli_error($this->db);
		else
			
			return  mysqli_insert_id($this->db);
	}
	
	
	                                                                                                
	public function insert_nominee($firstname,$middlename,$lastname,$yeargraduated,$position)
	{

		$insertQuery="INSERT into nominee(firstname,middlename,lastname,yeargraduated,position,status) values('$firstname','$middlename','$lastname','$yeargraduated','$position','Pending')";
		$result = mysqli_query($this->db,$insertQuery);
		if(!$result)
			return mysqli_error($this->db);
		else
			return  mysqli_insert_id($this->db);

	}




	public function getAccounts() 
    {
        $data = array();

		$queryGetcollege = mysqli_query($this->db,"SELECT * from users where role='User'");

		while($getRow=mysqli_fetch_object($queryGetcollege))    		
		{    			
		  $data[] = $getRow; // add the row in to the results (data) array
		}
		return $data;     
	}

	public function getAccounts2($year_grad)
    {
        $data = array();

		$queryGetcollege = mysqli_query($this->db,"SELECT * from users where role='User' and yeargraduated='$year_grad'");

		while($getRow=mysqli_fetch_object($queryGetcollege))    		
		{    			
		  $data[] = $getRow; // add the row in to the results (data) array
		}
		return $data;     
	}

	public function getAccounts3($course_title)
    {
        $data = array();

		$queryGetcollege = mysqli_query($this->db,"SELECT * from users where role='User' and course='$course_title'");

		while($getRow=mysqli_fetch_object($queryGetcollege))    		
		{    			
		  $data[] = $getRow; // add the row in to the results (data) array
		}
		return $data;     
	}

	public function getAccounts4($college1)
    {
        $data = array();

		$queryGetcollege = mysqli_query($this->db,"SELECT * from users where role='User' and college='$college1'");

		while($getRow=mysqli_fetch_object($queryGetcollege))    		
		{    			
		  $data[] = $getRow; // add the row in to the results (data) array
		}
		return $data;     
	}
	public function getAccounts6($searchlastfirst)
    {
        $data = array();

		$queryGetcollege = mysqli_query($this->db,"SELECT * from users where role='User' and firstname='$searchlastfirst' or lastname='$searchlastfirst'");

		while($getRow=mysqli_fetch_object($queryGetcollege))    		
		{    			
		  $data[] = $getRow; // add the row in to the results (data) array
		}
		return $data;     
	}


	public function getnominee($nominee_id)
    {
        $data = array();

		$queryGetcollege = mysqli_query($this->db,"SELECT * from users where id='$nominee_id'");

		while($getRow=mysqli_fetch_object($queryGetcollege))    		
		{    			
		  $data[] = $getRow; // add the row in to the results (data) array
		}
		return $data;     
	}



	public function delete_user($id)
    {
    	$deleteQuery="DELETE from users where id=$id";
		
		$result = mysqli_query($this->db,$deleteQuery);
		
		if(!$result)
			return mysqli_error($this->db);
		else
			return "Record Deleted";
	}
	public function update_nom($nominee_id)
    {
    	$updateQuery="UPDATE nominee SET status='Approve' where id='$nominee_id'";
		
		$result = mysqli_query($this->db,$updateQuery);
		
		if(!$result)
			return mysqli_error($this->db);
		else
			return "Record Updated";
	}
	public function update_event($event_id)
    {
    	$updateQuery="UPDATE events SET status='Approve' where id='$event_id'";
		
		$result = mysqli_query($this->db,$updateQuery);
		
		if(!$result)
			return mysqli_error($this->db);
		else
			return "Record Updated";
    }

	public function delete_nominee($nominee_id)
    {
    	$deleteQuery="DELETE from nominee where id=$nominee_id";
		
		$result = mysqli_query($this->db,$deleteQuery);
		
		if(!$result)
			return mysqli_error($this->db);
		else
			return "Record Deleted";
	}
	public function delete_event($event_id)
    {
    	$deleteQuery="DELETE from events where id=$event_id";
		
		$result = mysqli_query($this->db,$deleteQuery);
		
		if(!$result)
			return mysqli_error($this->db);
		else
			return "Record Deleted";
    }



	public function insert_position($position,$max_vote)
    {
    	$insertQuery="INSERT into position1(position,max_vote) values('$position','$max_vote')";
		$result = mysqli_query($this->db,$insertQuery);
		if(!$result)
			return mysqli_error($this->db);
		else
			return "Record Save";
	}
	public function get_position() 
    {
        $data = array();

		$queryGetposition = mysqli_query($this->db,"SELECT * from position1");

		while($getRow=mysqli_fetch_object($queryGetposition))    		
		{    			
		  $data[] = $getRow; // add the row in to the results (data) array
		}
		return $data;     
	}
	public function insert_election($election_title,$election_date,$position1,$nomination_start_date,$nomination_due_date)
	{
		$insertQuery="INSERT into election(election_title,election_date,position1,start_date,due_date) 
									values('$election_title','$election_date','$position1','$nomination_start_date','$nomination_due_date')";
		$result = mysqli_query($this->db,$insertQuery);
		if(!$result)
			return mysqli_error($this->db);
		else
			return "Record Save";
	}
	

	public function get_election() 
    {
        $data = array();

		$queryGetposition = mysqli_query($this->db,"SELECT * from election");

		while($getRow=mysqli_fetch_object($queryGetposition))    		
		{    			
		  $data[] = $getRow; // add the row in to the results (data) array
		}
		return $data;     
	}
	public function get_events() 
    {
        $data = array();

		$queryGetposition = mysqli_query($this->db,"SELECT * from events where status='Approve'");

		while($getRow=mysqli_fetch_object($queryGetposition))    		
		{    			
		  $data[] = $getRow; // add the row in to the results (data) array
		}
		return $data;     
	}
	public function get_events2() 
    {
        $data = array();

		$queryGetposition = mysqli_query($this->db,"SELECT * from events where status='Pending'");

		while($getRow=mysqli_fetch_object($queryGetposition))    		
		{    			
		  $data[] = $getRow; // add the row in to the results (data) array
		}
		return $data;     
	}



	public function insert_events($event_title,$event_type,$event_date,$course_participants,$batch_participants)
	{
		
		$insertQuery="INSERT into events(event_title,event_type,event_date,course_participants,batch_participants,status) 
									values('$event_title','$event_type','$event_date','$course_participants','$batch_participants','Pending')";
		$result = mysqli_query($this->db,$insertQuery);
		
		if(!$result)
			return mysqli_error($this->db);
		else
			return "Record Save";
	}

	public function insert_news($news_title,$news_date,$article,$name)
	{
		
		$insertQuery="INSERT into add_news(news_title,news_date,article,upload) 
									values('$news_title','$news_date','$article','$name')";
		$result = mysqli_query($this->db,$insertQuery);
		if(!$result)
			return mysqli_error($this->db);
		else
			return "Record Save";
	}

	public function get_news() 
    {
        $data = array();

		$queryGetposition = mysqli_query($this->db,"SELECT * from add_news");

		while($getRow=mysqli_fetch_object($queryGetposition))    		
		{    			
		  $data[] = $getRow; // add the row in to the results (data) array
		}
		return $data;     
	}
	public function getyeargraduated() 
    {
        $data = array();

		$queryGetposition = mysqli_query($this->db,"SELECT * from year_graduated");

		while($getRow=mysqli_fetch_object($queryGetposition))    		
		{    			
		  $data[] = $getRow; // add the row in to the results (data) array
		}
		return $data;     
	}
	public function getcourse() 
    {
        $data = array();

		$queryGetposition = mysqli_query($this->db,"SELECT * from course");

		while($getRow=mysqli_fetch_object($queryGetposition))    		
		{    			
		  $data[] = $getRow; // add the row in to the results (data) array
		}
		return $data;     
	}
	public function get_college() 
    {
        $data = array();

		$queryGetposition = mysqli_query($this->db,"SELECT * from college");

		while($getRow=mysqli_fetch_object($queryGetposition))    		
		{    			
		  $data[] = $getRow; // add the row in to the results (data) array
		}
		return $data;     
	}
	public function get_country() 
    {
        $data = array();

		$queryGetposition = mysqli_query($this->db,"SELECT * from country");

		while($getRow=mysqli_fetch_object($queryGetposition))    		
		{    			
		  $data[] = $getRow; // add the row in to the results (data) array
		}
		return $data;     
	}

	public function get_disclaimer() 
    {
        $data = array();

		$queryGetposition = mysqli_query($this->db,"SELECT * from disclaimer");

		while($getRow=mysqli_fetch_object($queryGetposition))    		
		{    			
		  $data[] = $getRow; // add the row in to the results (data) array
		}
		return $data;     
	}

	public function get_csv($firstname) 
    {
		$result = mysqli_query($this->db,"SELECT * FROM csv WHERE firstname='$firstname'") or die ("Could not search");
		
  // Return the number of rows in result set
  $rowcount=mysqli_num_rows($result);
  if($rowcount>0){
	  return 'found';
  }else{
	  return 'notfound';
  }
  printf("Result set has %d rows.\n",$rowcount);
  // Free result set
  mysqli_free_result($result);
	}
}	
?>