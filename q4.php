<?php
	include'connect.php';
	
	// Check connection
	if (mysqli_connect_errno())
	{
		echo "Failed to connect to MySQL: " . mysqli_connect_error();
	}

	// Perform queries 
	$sql = "SELECT o.order_id,o.order_quantity FROM orders o,arts q  WHERE o.art_id=q.art_id and q.art_type like 'watercolour%'";
	$result = $con->query($sql); 
	$row = mysqli_fetch_all($result,MYSQLI_ASSOC);
	echo "4.display the order id and order quantity of paintings made up of watercolour";
	echo "<table style='border:1px solid black'>"; 
	echo" <tr style='border:1px solid black'> <th style='border:1px solid black'>order id</th> <th style='border:1px solid black'>order quantity</th></tr>";
	for($i=0;$i<sizeof($row);$i++) {
		
	echo "<tr style='border:1px solid black'><td style='border:1px solid black'>" . $row[$i]['order_id']. "</td><td style='border:1px solid black'>". $row[$i]['order_quantity']. "</td></tr>";
	}
	echo "</table>";
	mysqli_close($con);	
	
	
?>