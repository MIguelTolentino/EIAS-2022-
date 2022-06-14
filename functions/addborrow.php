<?php 
	include('config.php');

	$messsage = "";
	$error = 0;
	$bquantity = $_POST['bquantity'];
	$userid = $_POST['userid'];
	$itemid = $_POST['itemid'];

	$check = "SELECT * FROM `tbl_items` WHERE item_id=$itemid";

	$checkResult = $con->query($check);

	$itemQuantity = $checkResult->fetch_assoc();

	if($itemQuantity['item_quantity'] >= $bquantity){
		$updateQuantity = "UPDATE tbl_items SET item_quantity=item_quantity-$bquantity WHERE item_id=$itemid";

		if($con->query($updateQuantity)){
			$query = "INSERT INTO `tbl_add_item` (`borrow_quantity`, `user_id`, `item_id`) VALUES ($bquantity,$userid,$itemid)";

			$result = $con->query($query);

			if($result){
				$messsage = "Data successfully added!";
				$error = 1;
				header("location:../borrow.php?messsage=$messsage&&error=$error");
			}else{
				$messsage = "All fields required";
				$error = 0;
				header("location:../borrow.php?messsage=$messsage&&error=$error");
			}
		}
	}else{
		$messsage = "Not enought stock";
		$error = 2;
		header("location:../borrow.php?messsage=$messsage&&error=$error");
	}

?>