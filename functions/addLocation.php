<?php 
	include('config.php');

	$messsage = "";
	$error = 0;
	$locationName = $_POST['lname'];
	$locationDescription = $_POST['ldescription'];

	$query = "INSERT INTO `tbl_location` (`location_name`, `location_description`) VALUES ('$locationName','$locationDescription')";

	$result = $con->query($query);

	if($result){
		$messsage = "Data successfully added!";
		$error = 1;
		header("location:../locations.php?messsage=$messsage&&error=$error");
	}else{
		$messsage = "All fields required";
		$error = 0;
		header("location:../locations.php?messsage=$messsage&&error=$error");
	}
?>