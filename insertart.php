<?php
	include'connect.php';

	if((
	isset($_POST['arid']) &&
	isset($_POST['arname']) &&
	isset($_POST['artype']) &&
	isset($_POST['aname']) &&
	isset($_POST['aid'])&&
        isset($_POST['price'])
	) && (
	!empty($_POST['arid']) &&
	!empty($_POST['arname']) &&
	!empty($_POST['artype']) &&
	!empty($_POST['aname']) &&
	!empty($_POST['aid'])&&
        !empty($_POST['price'])
	))
	{
		$arid = $_POST['arid'];
		$arname = $_POST['arname'];
		$artype = $_POST['artype'];
		$aname = $_POST['aname'];
		$aid = $_POST['aid'];
                $price = $_POST['price'];
		$query = "INSERT INTO `arts`(`art_id`, `art_name`, `art_type`, `artist_name`, `artist_id`, `price`) VALUES ('$arid','$arname','$artype','$aname','$aid','$price')";
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
