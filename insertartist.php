<?php
	include'connect.php';

	if((
	isset($_POST['aid']) &&
	isset($_POST['aname']) &&
	isset($_POST['aaddr']) &&
	isset($_POST['phno']) &&
	isset($_POST['total'])
	) && (
	!empty($_POST['aid']) &&
	!empty($_POST['aname']) &&
	!empty($_POST['aaddr']) &&
	!empty($_POST['phno']) &&
	!empty($_POST['total'])
	))
	{
		$aid = $_POST['aid'];
		$aname = $_POST['aname'];
		$aaddr = $_POST['aaddr'];
		$phno = $_POST['phno'];
		$total = $_POST['total'];
		$query = "INSERT INTO `artist`(`artist_id`, `artist_name`, `art_addr`, `phone_no`, `total_painting`) VALUES ($aid,'$aname','$aaddr','$phno','$total');";
		if(mysqli_query($con,$query))
		{
                  echo "sucess";
}
		else
		{
			echo"not inserted";
		}
	}

	
	

?>