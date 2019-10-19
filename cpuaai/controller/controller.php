<?php
class Controller
{
	public $model=null;
	function __construct()
	{		
		require_once('Model/model.php');
		$this->model=new Model();
	}
	public function getLogin()
	{
		$username=$_REQUEST['username'];
		$password=$_REQUEST['password'];
		$this->model->getlogin($username,$password);
		//echo $_SESSION['user_id']. '  '. $_SESSION['firstname1'].'  '.$_SESSION['lastname1'].'  '.$_SESSION['username1'].'  '.$_SESSION['password1'];
	}
	public function getPage()
	{		
		if(isset($_SESSION['role'])){
			$page = null;
			if(isset($_GET['page'])){
				$page=$_GET['page'];
			}
			if($page == 'logout'){
				session_unset();
				session_destroy();
				header('Location:index.php');
				exit;
			}
			if($_SESSION['role']=='Admin')
			{
			//echo $_SESSION['user_id']. '  '. $_SESSION['firstname1'].'  '.$_SESSION['lastname1'].'  '.$_SESSION['username1'].'  '.$_SESSION['password1'];
			include('view/menu_admin.php');
			if($page == 'logout'){
				session_unset();
				session_destroy();
				header('Location:index.php');
				exit;
			}
			if($page==null){
				include('view/admin_home.php');
				//include('view/footer.php');
				//exit;
			}			
			if($page=='view_user'){
				if(isset($_REQUEST['year_graduated'])){
					$year_grad=$_REQUEST['year_graduated'];
					$result = $this->model->getAccounts2($year_grad);
					include 'view/accounts.php';
				}elseif(isset($_REQUEST['course_title'])){
					$course_title=$_REQUEST['course_title'];
					$result = $this->model->getAccounts3($course_title);
					include 'view/accounts.php';
				}elseif(isset($_REQUEST['college10'])){
					$college10=$_REQUEST['college10'];				
					$result = $this->model->getAccounts4($college10);
					include 'view/accounts.php';
				}elseif(isset($_REQUEST['searchlastfirst'])){
					$searchlastfirst=$_REQUEST['searchlastfirst'];
					$result = $this->model->getAccounts6($searchlastfirst);
					include 'view/accounts.php';
				}else{
					$result = $this->model->getAccounts();
					include 'view/accounts.php';
				}
			
				//exit;
			}
			if($page=='reports'){
				
				include 'view/reports.php';
				//exit;
			}
			
			if($page == 'delete_user'){
				$id = $_GET['id'];
				$this->model->delete_user($id);
				echo '<script> alert ("Successfully Deleted!")</script>';
				include('view/admin_home.php');
			}
			if($page=='create_events'){
				$result = $this->model->get_events();
				$result2 = $this->model->get_events2();
				include 'view/create_events.php';
				//exit;
			}
			if($page=='add_news'){
			if(isset($_REQUEST['news_title']) && ($_REQUEST['news_date']) && ($_REQUEST['article'])){
				$name=$_FILES['photo']['name'];
				$size=$_FILES['photo']['size'];
				$type=$_FILES['photo']['type'];
				$temp=$_FILES['photo']['tmp_name'];
			  move_uploaded_file($temp,"view/upload/".$name);
				
			  $news_title  = $_REQUEST['news_title'];
			  $news_date  = $_REQUEST['news_date'];
			  $article  = $_REQUEST['article'];
			  $result = $this->model->insert_news($news_title,$news_date,$article,$name);
	  
			}
					
					$result = $this->model->get_news();
				include 'view/add_news.php';
				//exit;
			}
			if($page=='add_events'){
				if(isset($_REQUEST['event_title']) && isset($_REQUEST['event_type'])){
					$event_title = $_REQUEST['event_title'];
					$event_type = $_REQUEST['event_type'];
					$event_date = $_REQUEST['event_date']; 
					$course_participants = $_REQUEST['course_participants'];
					$batch_participants = $_REQUEST['batch_participants'];
					$result = $this->model->insert_events($event_title,$event_type,$event_date,$course_participants,$batch_participants);
					echo "<script type='text/javascript'>alert('" .$result. "');</script>";
				}
				$result = $this->model->get_events();
				include 'view/add_events.php';
				//exit;
			}


			if($page=='create_election'){
				if(isset($_REQUEST['election_title']) && ($_REQUEST['election_date']) && ($_REQUEST['position1']) && ($_REQUEST['position1']) && ($_REQUEST['start_date']) && ($_REQUEST['due_date'])){
					$election_title = $_REQUEST['election_title'];
					$election_date = $_REQUEST['election_date'];
					$position1 = $_REQUEST['position1'];
					$nomination_start_date = $_REQUEST['start_date'];
					$nomination_due_date = $_REQUEST['due_date'];
					$result = $this->model->insert_election($election_title,$election_date,$position1,$nomination_start_date,$nomination_due_date);
					echo "<script type='text/javascript'>alert('" .$result. "');</script>";
				} 
				$result = $this->model->get_position();
				$result1 = $this->model->get_election();
				include 'view/create_election.php';
				//exit;
			}

			if($page=='approve_event'){
				$event_id = $_REQUEST['event_id'];
				$this->model->update_event($event_id);
				header('Location:index.php');
			}
				
			if($page=='nomination1'){
				include 'view/nomination1.php';
				//exit;
			}
			if($page=='approve'){
				$nominee_id = $_REQUEST['nominee_id'];
				$this->model->update_nom($nominee_id);
				include 'view/nomination1.php';
			}
			if($page=='decline'){
				$nominee_id = $_REQUEST['nominee_id'];
				$this->model->delete_nominee($nominee_id);
				include 'view/nomination1.php';
			}	
			if($page=='decline_event'){
				$event_id = $_REQUEST['event_id'];
				$this->model->delete_event($event_id);
				header('Location:index.php');
			}	
			if($page=='upload_csv'){
				include 'view/import/index.php';
			}	
			if($page=='position_entry'){
				if(isset($_REQUEST['position']) && ($_REQUEST['max_vote'])){
					$position = $_REQUEST['position'];
					$max_vote = $_REQUEST['max_vote'];

					$result = $this->model->insert_position($position,$max_vote);
					echo "<script type='text/javascript'>alert('" . $result	 . "');</script>";
				}
				$result = $this->model->get_position();
				include 'view/position_entry.php';	
				
			}	
					
		}elseif($_SESSION['role']=='User')
		{
		echo'<script>alert ("Change your pass")</script>';
		
			//echo $_SESSION['user_id']. '  '. $_SESSION['firstname1'].'  '.$_SESSION['lastname1'].'  '.$_SESSION['username1'].'  '.$_SESSION['password1'];
			include('view/menu_user.php');
			if($page == 'logout'){
				session_unset();
				session_destroy();
				header('Location:index.php');
				exit;
			}

			if($page=='create_user_events'){
				$result = $this->model->get_events();
				$result2 = $this->model->get_events2();
				include 'view/create_events2.php';
				//exit;
			}	
			if($page=='add_events'){
				if(isset($_REQUEST['event_title']) && isset($_REQUEST['event_type'])){
					$event_title = $_REQUEST['event_title'];
					$event_type = $_REQUEST['event_type'];
					$event_date = $_REQUEST['event_date']; 
					$course_participants = $_REQUEST['course_participants'];
					$batch_participants = $_REQUEST['batch_participants'];
					$result = $this->model->insert_events($event_title,$event_type,$event_date,$course_participants,$batch_participants);
					echo "<script type='text/javascript'>alert('" .$result. "');</script>";
				}
				$result = $this->model->get_events();
				include 'view/add_events.php';
				//exit;
			}

			if($page=='save_nominee'){
				$firstname=$_REQUEST['firstname'];
				$middlename=$_REQUEST['middlename'];
				$lastname=$_REQUEST['lastname'];
				$yeargraduated=$_REQUEST['yeargraduated'];
				$position=$_REQUEST['position'];
				$this->model->insert_nominee($firstname,$middlename,$lastname,$yeargraduated,$position); 
				header('Location:index.php');
			}
			if($page==null){
				include('view/admin_home.php');
				//include('view/footer.php');
				//exit;
			}			
			if($page=='select_nominee'){
				$nominee_id = $_REQUEST['nominee_id'];
				$result = $this->model->getnominee($nominee_id);
				include('view/nominee.php');
				//include('view/footer.php');
				//exit;
			}				
			if($page=='view_user'){
				$result = $this->model->getAccounts();
				include 'view/accounts.php';
				//exit;
			}
			if($page == 'delete_user'){
				$id = $_GET['id'];
				$this->model->delete_user($id);
				echo '<script> alert ("Successfully Deleted!")</script>';
				include('view/admin_home.php');
			}
			if($page=='nomination'){
				include('view/nomination.php');
				//include('view/footer.php');
				//exit;
			}
			if($page=='user_add_news'){
				$result = $this->model->get_news();
				include('view/user_add_news.php');
				//include('view/footer.php');
				//exit;
			}
			if($page=='user_add_news'){
				$result = $this->model->get_news();
				include('view/user_add_news.php');
				//include('view/footer.php');
				//exit;
			}
			if($page=='vote'){
				include('view/vote.php');
				//include('view/footer.php');
				//exit;
			}


		}

		}
		
		else
		{
			$command=null;
			if(isset($_REQUEST['command']))
				$command=$_REQUEST['command'];
			switch($command)	
			{
				case 0:
				{
					include('view/login.php');
					break;
				}
				case 1:
				{
					include('view/register.php');
					break;
				}
				case 2:
				{
					$firstname = $_REQUEST['firstname'];
					$middlename = $_REQUEST['middlename'];
					$lastname = $_REQUEST['lastname'];
					$addressline = $_REQUEST['addressline'];
					$city = $_REQUEST['city'];
					$spr = $_REQUEST['spr'];
					$zip = $_REQUEST['zip'];
					$country = $_REQUEST['country'];
					$yeargraduated = $_REQUEST['yeargraduated'];
					$course = $_REQUEST['course'];
					$college = $_REQUEST['college'];
					$sex = $_REQUEST['sex'];
					$email = $_REQUEST['email'];
					$contact = $_REQUEST['contact'];
					$social = $_REQUEST['social'];
					$username = $_REQUEST['username'];
					$password = $_REQUEST['password'];
					$role = $_REQUEST['role'];

					
						

					if ($firstname && $lastname && $username && $password ){

						$result = $this->model->get_csv($firstname);
						echo $result;
						if($result=='found'){
							$this->model->insert_user($firstname,$middlename,$lastname,$addressline,$city,$spr,$zip,$country,$yeargraduated,$course,$college,$sex,$email,$contact,$social,$username,$password,$role);
							echo '<script> alert ("Successfully Registered!")</script>';
							include('view/login.php');
						} elseif($result=='notfound'){
							echo '<script> alert ("You are not Graduated Yet!")</script>';
							include('view/login.php');
						}
					//$this->model->insert_user($firstname,$middlename,$lastname,$addressline,$city,$spr,$zip,$country,$yeargraduated,$course,$college,$sex,$email,$contact,$social,$username,$password,$role);
					//echo '<script> alert ("'.$result.'")</script>';
					//echo '<script> alert ("Successfully Registered!")</script>';
					//include('view/login.php');
					//exit;
					}else{
						echo '<script> alert ("Please Fill All the Fields!")</script>';
						include('view/login.php');
						//exit;
					}
					break;
				}

			}
		}
	}

}
?>