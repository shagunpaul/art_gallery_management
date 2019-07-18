<?php
	include'connect.php';
	
	// Check connection
	if (mysqli_connect_errno())
	{
		echo "Failed to connect to MySQL: " . mysqli_connect_error();
	}

	// Perform queries 
	$sql = "SELECT DISTINCT s.art_id, s.stock_in_date, s.stock_out_date FROM stock s WHERE EXISTS(SELECT art_id  FROM arts q WHERE q.art_id=s.art_id and q.artist_id LIKE '%23')";
	$result = $con->query($sql); 
	$row = mysqli_fetch_all($result,MYSQLI_ASSOC);
	echo "2. display the stock out and stock in date with respective art id of arts having artist id with no 23.";
	echo "<table style='border:1px solid black'>"; 
	echo" <tr style='border:1px solid black'> <th style='border:1px solid black'>Art ID</th> <th style='border:1px solid black'>Stock in date</th> <th style='border:1px solid black'>Stock out date</th></tr>";
	for($i=0;$i<sizeof($row);$i++) {
		
	echo "<tr style='border:1px solid black'><td style='border:1px solid black'>" . $row[$i]['art_id']. "</td><td style='border:1px solid black'>". $row[$i]['stock_in_date']. "</td><td style='border:1px solid black'>". $row[$i]['stock_out_date']. "</td></tr>";
	}
	echo "</table>";
	mysqli_close($con);	
	
	
?>