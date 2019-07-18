<?php
	include'connect.php';

	if((
	isset($_POST['cid']) &&
	isset($_POST['cname']) &&
	isset($_POST['caddr']) &&
	isset($_POST['cphno']) &&
	isset($_POST['arid'])
	) && (
	!empty($_POST['cid']) &&
	!empty($_POST['cname']) &&
	!empty($_POST['caddr']) &&
	!empty($_POST['cphno']) &&
        !empty($_POST['arid'])
	))
	{
		$cid = $_POST['cid'];
		$cname = $_POST['cname'];
		$caddr = $_POST['caddr'];
		$cphno= $_POST['cphno'];
		$arid = $_POST['arid'];
		$query = "INSERT INTO `customer`(`cust_id`, `cust_name`, `cust_addr`, `cust_phone`, `art_bought`) VALUES ('$cid','$cname','$caddr','$cphno','$arid')";
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
