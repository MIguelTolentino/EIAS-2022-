<?php 
	include('config.php');

	$messsage = "";
	$error = 0;
	$lid = $_POST['lid'];
	$location = $_POST['lname'];
	$location_description = $_POST['ldescription'];

	$query = "UPDATE `tbl_location` SET location_name='$location', location_description='$location_description' WHERE location_id=$lid";
	$result = $con->query($query);

	if($result){
		$messsage = "Data successfully updated!";
		$error = 1;
		header("location:../locations.php?messsage=$messsage&&error=$error");
	}else{
		$messsage = "Error Problems";
		$error = 0;
		header("location:../locations.php?messsage=$messsage&&error=$error");
	}
?>