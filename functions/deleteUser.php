<?php 
	include('config.php');

	$messsage = "";
	$error = 0;
	$uid = $_GET['userid'];

	$query = "DELETE FROM `tbl_users` WHERE user_id=$uid";
	$result = $con->query($query);

	if($result){
		$messsage = "Data successfully deleted!";
		$error = 1;
		header("location:../users.php?messsage=$messsage&&error=$error");
	}else{
		$messsage = "Error";
		$error = 0;
		header("location:../users.php?messsage=$messsage&&error=$error");
	}
?>