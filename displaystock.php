<?php
	include'connect.php';
	
	// Check connection
	if (mysqli_connect_errno())
	{
		echo "Failed to connect to MySQL: " . mysqli_connect_error();
	}

	// Perform queries 
	$sql = "SELECT *  FROM stock";
	$result = $con->query($sql); 
	$row = mysqli_fetch_all($result,MYSQLI_ASSOC);
	echo "<table style='border:1px solid black'>"; 
	echo" <tr style='border:1px solid black'> <th style='border:1px solid black'>Stock ID</th> <th style='border:1px solid black'>Stock No</th> <th style='border:1px solid black'>Art ID</th> <th style='border:1px solid black'>Stock in date</th> <th style='border:1px solid black'>Stock out date</th></tr>";
	for($i=0;$i<sizeof($row);$i++) {
		
	echo "<tr style='border:1px solid black'><td style='border:1px solid black'>" . $row[$i]['stock_id']. "</td><td style='border:1px solid black'>". $row[$i]['stock_no']. "</td><td style='border:1px solid black'> ".$row[$i]['art_id']."</td><td style='border:1px solid black'> ".$row[$i]['stock_in_date']."</td><td style='border:1px solid black'> ".$row[$i]['stock_out_date'] ."</td></tr>";
	}
	echo "</table>";
	mysqli_close($con);	
	
	
?>