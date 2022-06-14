<?php 
	include('config.php');

	$messsage = "";
	$error = 0;
	$supplier = $_POST['supplier'];
	$brand = $_POST['brand'];
	$category = $_POST['category'];
	$iname = $_POST['iname'];
	$idescription = $_POST['idescription'];
	$location = $_POST['location'];
	$quantity = $_POST['quantity'];
	$status = $_POST['status'];

	$query = "INSERT INTO `tbl_items` (`supplier_id`, `brand_id`, `category_id`, `item_name`, `item_description`,`location_id`, `item_quantity`, `item_status`) VALUES ($supplier,$brand,$category,'$iname','$idescription','$location','$quantity',$status)";

	$result = $con->query($query);

	if($result){
		$messsage = "Data successfully added!";
		$error = 1;
		header("location:../items.php?messsage=$messsage&&error=$error");
	}else{
		$messsage = "All fields required";
		$error = 0;
		header("location:../items.php?messsage=$messsage&&error=$error");
	}
?>