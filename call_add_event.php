<?php 
include 'database.php';
include 'event_actions.php';
if(isset($_POST['submit'])) { 

	$reqObj= new StdClass;
	$reqObj->event_title   		= $_POST['event_title'];
	$reqObj->event_type   		= $_POST['event_type'];
	$reqObj->event_time    		= $_POST['event_time'];
	$reqObj->event_date    		= $_POST['event_date'];
	$reqObj->short_address 		= $_POST['short_address'];
	$reqObj->short_name 		= $_POST['short_name'];
	$reqObj->image_url 		   	= $_POST['image_url'];
	$reqObj->full_address 		= $_POST['full_address'];
	$reqObj->full_description 	= $_POST['full_description'];
	$reqObj->website 			= $_POST['website'];
	$reqObj->register 			= $_POST['register'];
	$conn = connect($config);
	add_event( $reqObj , $conn);
	
}
?>