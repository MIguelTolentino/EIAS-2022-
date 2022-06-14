<?php 
	include('config.php');

	$messsage = "";
	$error = 0;
	$brandName = $_POST['bname'];
	$brandDescription = $_POST['bdescription'];

	$query = "INSERT INTO `tbl_brands` (`brand_name`, `brand_desciption`) VALUES ('$brandName','$brandDescription')";

	$result = $con->query($query);

	if($result){
		$messsage = "Data successfully added!";
		$error = 1;
		header("location:../brands.php?messsage=$messsage&&error=$error");
	}else{
		$messsage = "All fields required";
		$error = 0;
		header("location:../brands.php?messsage=$messsage&&error=$error");
	}
?>