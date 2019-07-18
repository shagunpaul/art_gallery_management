<?php
	include'connect.php';
	
	// Check connection
	if (mysqli_connect_errno())
	{
		echo "Failed to connect to MySQL: " . mysqli_connect_error();
	}

	// Perform queries 
	$sql = "SELECT o.order_id,o.order_no FROM orders o,arts q WHERE q.art_id=o.art_id AND q.art_name='deities' UNION SELECT o.order_id, o.order_no FROM orders o,arts q WHERE q.art_id=o.art_id AND q.art_name='woman'";
	$result = $con->query($sql); 
	$row = mysqli_fetch_all($result,MYSQLI_ASSOC);
	echo "1.find the order id and order no for the painting named as ‘dieties’and ‘woman’";
	echo "<table style='border:1px solid black'>"; 
	echo" <tr style='border:1px solid black'> <th style='border:1px solid black'>ORDER ID</th> <th style='border:1px solid black'>ORDER NO.</th></tr>";
	for($i=0;$i<sizeof($row);$i++) {
		
	echo "<tr style='border:1px solid black'><td style='border:1px solid black'>" . $row[$i]['order_id']. "</td><td style='border:1px solid black'>". $row[$i]['order_no']. "</td></tr>";
	}
	echo "</table>";
	mysqli_close($con);	
	
	
?>