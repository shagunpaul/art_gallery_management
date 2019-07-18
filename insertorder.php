<?php
	include'connect.php';

	if((
	isset($_POST['oid']) &&
	isset($_POST['ono']) &&
	isset($_POST['cid']) &&
	isset($_POST['arid']) &&
	isset($_POST['oqua'])
	) && (
	!empty($_POST['oid']) &&
	!empty($_POST['ono']) &&
	!empty($_POST['cid']) &&
	!empty($_POST['arid']) &&
	!empty($_POST['oqua'])
	))
	{
		$oid = $_POST['oid'];
		$ono = $_POST['ono'];
		$cid = $_POST['cid'];
		$arid = $_POST['arid'];
		$oqua = $_POST['oqua'];
		$query = "INSERT INTO `orders`(`order_id`, `order_no`, `cust_id`, `art_id`, `order_quantity`) VALUES ('$oid','$ono','$cid','$arid','$oqua')";
		if(mysqli_query($con,$query))
		{
			echo"success";
		}
		else
		{
			echo"not inserted";
		}
	}

	
	

?>
