<?php
	include'connect.php';

	if((
	isset($_POST['sid']) &&
	isset($_POST['sno']) &&
	isset($_POST['arid']) &&
	isset($_POST['sin']) &&
	isset($_POST['sout'])
	) && (
	!empty($_POST['sid']) &&
	!empty($_POST['sno']) &&
	!empty($_POST['arid']) &&
	!empty($_POST['sin']) &&
        !empty($_POST['sout'])
	))
	{
		$cid = $_POST['sid'];
		$cname = $_POST['sno'];
		$caddr = $_POST['arid'];
		$cphno= $_POST['sin'];
		$arid = $_POST['sout'];
		$query = "INSERT INTO `stock`(`stock_id`, `stock_no`, `art_id`, `stock_in_date`, `stock_out_date`) VALUES ('$sid','$sno','$arid','$sin','$sout')";
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
