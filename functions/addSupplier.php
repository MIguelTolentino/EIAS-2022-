<?php 
	include('config.php');

	$messsage = "";
	$error = 0;
	$supplierName = $_POST['sname'];
	$supplierAddress = $_POST['saname'];

	$query = "INSERT INTO `tbl_suppliers` (`supplier_name`, `supplier_address`) VALUES ('$supplierName','$supplierAddress')";

	$result = $con->query($query);

	if($result){
		$messsage = "Data successfully added!";
		$error = 1;
		header("location:../supplier.php?messsage=$messsage&&error=$error");
	}else{
		$messsage = "All fields required";
		$error = 0;
		header("location:../supplier.php?messsage=$messsage&&error=$error");
	}
?>