<?php
	include'connect.php';
	
	// Check connection
	if (mysqli_connect_errno())
	{
		echo "Failed to connect to MySQL: " . mysqli_connect_error();
	}

	// Perform queries 
	$sql = "SELECT DISTINCT c.cust_name FROM customer c,arts q, artist a WHERE c.art_bought=q.art_id and q.artist_id=a.artist_id and a.artist_name='B. prabha'";
	$result = $con->query($sql); 
	$row = mysqli_fetch_all($result,MYSQLI_ASSOC);
	echo "5.find the customers interested in  the paintings of B. prabha";
	echo "<table style='border:1px solid black'>"; 
	echo" <tr style='border:1px solid black'> <th style='border:1px solid black'>customer name</th></tr>";
	for($i=0;$i<sizeof($row);$i++) {
		
	echo "<tr style='border:1px solid black'><td style='border:1px solid black'>" . $row[$i]['cust_name']. "</td></tr>";
	}
	echo "</table>";
	mysqli_close($con);	
	
	
?>