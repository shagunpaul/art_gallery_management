<?php
	include'connect.php';
	
	// Check connection
	if (mysqli_connect_errno())
	{
		echo "Failed to connect to MySQL: " . mysqli_connect_error();
	}

	// Perform queries 
	$sql = "SELECT *  FROM customer";
	$result = $con->query($sql); 
	$row = mysqli_fetch_all($result,MYSQLI_ASSOC);
	echo "<table style='border:1px solid black'>"; 
	echo" <tr style='border:1px solid black'> <th style='border:1px solid black'>Customer ID</th> <th style='border:1px solid black'>Customer Name</th> <th style='border:1px solid black'>Customer Address</th> <th style='border:1px solid black'>Phone No</th> <th style='border:1px solid black'>art bought</th></tr>";
	for($i=0;$i<sizeof($row);$i++) {
		
	echo "<tr style='border:1px solid black'><td style='border:1px solid black'>" . $row[$i]['cust_id']. "</td><td style='border:1px solid black'>". $row[$i]['cust_name']. "</td><td style='border:1px solid black'> ".$row[$i]['cust_addr']."</td><td style='border:1px solid black'> ".$row[$i]['cust_phone']."</td><td style='border:1px solid black'> ".$row[$i]['art_bought'] ."</td></tr>";
	}
	echo "</table>";
	mysqli_close($con);	
	
	
?>