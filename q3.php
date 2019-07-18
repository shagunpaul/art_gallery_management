<?php
	include'connect.php';
	
	// Check connection
	if (mysqli_connect_errno())
	{
		echo "Failed to connect to MySQL: " . mysqli_connect_error();
	}

	// Perform queries 
	$sql = "SELECT c.cust_name,c.cust_addr FROM customer c INNER JOIN arts q  ON c.art_bought=q.art_id and q.price>500000";
	$result = $con->query($sql); 
	$row = mysqli_fetch_all($result,MYSQLI_ASSOC);
	echo "3.find the customers address and name who ordered paintings costing more than 200000";
	echo "<table style='border:1px solid black'>"; 
	echo" <tr style='border:1px solid black'> <th style='border:1px solid black'>Customer Name</th> <th style='border:1px solid black'>Customer Addr</th></tr>";
	for($i=0;$i<sizeof($row);$i++) {
		
	echo "<tr style='border:1px solid black'><td style='border:1px solid black'>" . $row[$i]['cust_name']. "</td><td style='border:1px solid black'>". $row[$i]['cust_addr']. "</td></tr>";
	}
	echo "</table>";
	mysqli_close($con);	
	
	
?>