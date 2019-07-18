<?php
	include'connect.php';
	
	// Check connection
	if (mysqli_connect_errno())
	{
		echo "Failed to connect to MySQL: " . mysqli_connect_error();
	}

	// Perform queries 
	$sql = "SELECT *  FROM orders";
	$result = $con->query($sql); 
	$row = mysqli_fetch_all($result,MYSQLI_ASSOC);
	echo "<table style='border:1px solid black'>"; 
	echo" <tr style='border:1px solid black'> <th style='border:1px solid black'>order ID</th> <th style='border:1px solid black'>order No</th> <th style='border:1px solid black'>Customer ID</th> <th style='border:1px solid black'>ART ID</th> <th style='border:1px solid black'>Order quantity</th></tr>";
	for($i=0;$i<sizeof($row);$i++) {
		
	echo "<tr style='border:1px solid black'><td style='border:1px solid black'>" . $row[$i]['order_id']. "</td><td style='border:1px solid black'>". $row[$i]['order_no']. "</td><td style='border:1px solid black'> ".$row[$i]['cust_id']."</td><td style='border:1px solid black'> ".$row[$i]['art_id']."</td><td style='border:1px solid black'> ".$row[$i]['order_quantity'] ."</td></tr>";
	}
	echo "</table>";
	mysqli_close($con);	
	
	
?>