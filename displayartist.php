<?php
	include'connect.php';
	
	// Check connection
	if (mysqli_connect_errno())
	{
		echo "Failed to connect to MySQL: " . mysqli_connect_error();
	}

	// Perform queries 
	$sql = "SELECT *  FROM artist";
	$result = $con->query($sql); 
	$row = mysqli_fetch_all($result,MYSQLI_ASSOC);
	echo "<table style='border:1px solid black'>"; 
	echo" <tr style='border:1px solid black'> <th style='border:1px solid black'>Artist ID</th> <th style='border:1px solid black'>Artist Name</th> <th style='border:1px solid black'>Artist Address</th> <th style='border:1px solid black'>Phone ID</th> <th style='border:1px solid black'>Total Painting</th></tr>";
	for($i=0;$i<sizeof($row);$i++) {
		
	echo "<tr style='border:1px solid black'><td style='border:1px solid black'>" . $row[$i]['artist_id']. "</td><td style='border:1px solid black'>". $row[$i]['artist_name']. "</td><td style='border:1px solid black'> ".$row[$i]['art_addr']."</td><td style='border:1px solid black'> ".$row[$i]['phone_no']."</td><td style='border:1px solid black'> ".$row[$i]['total_painting'] ."</td></tr>";
	}
	echo "</table>";
	mysqli_close($con);	
	
	
?>