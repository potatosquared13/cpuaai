<?php
session_start();

if(isset($_REQUEST['login'])){
		include_once("Controller/Controller.php");
		$ctrl = new Controller();
		$ctrl->getLogin();	
}
echo "<div>";
	include_once( 'view/header.php');
echo"</div>";
echo "<div>";				
	include_once("controller/controller.php");
	$controller = new Controller();
	$controller->getPage();	
echo "</div>";
echo "<div>";
include_once( 'view/footer.php');		
echo "</div>";
?>
