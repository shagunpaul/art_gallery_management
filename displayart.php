<?php
	include'connect.php';
	
	// Check connection
	if (mysqli_connect_errno())
	{
		echo "Failed to connect to MySQL: " . mysqli_connect_error();
	}

	// Perform queries 
	$sql = "SELECT *  FROM arts";
	$result = $con->query($sql); 
	$row = mysqli_fetch_all($result,MYSQLI_ASSOC);
	echo "<table style='border:1px solid black'>"; 
	echo" <tr style='border:1px solid black'> <th style='border:1px solid black'>Art ID</th> <th style='border:1px solid black'>Art Name</th> <th style='border:1px solid black'>Art type</th> <th style='border:1px solid black'>artist name</th> <th style='border:1px solid black'>Artist ID</th> <th style='border:1px solid black'>price</th></tr>";
	for($i=0;$i<sizeof($row);$i++) {
		
	echo "<tr style='border:1px solid black'><td style='border:1px solid black'>" . $row[$i]['art_id']. "</td><td style='border:1px solid black'>". $row[$i]['art_name']. "</td><td style='border:1px solid black'> ".$row[$i]['art_type']."</td><td style='border:1px solid black'> ".$row[$i]['artist_name']."</td><td style='border:1px solid black'> ".$row[$i]['artist_id']."</td><td style='border:1px solid black'> ".$row[$i]['price'] ."</td></tr>";
	}
	echo "</table>";
	mysqli_close($con);	
	
	
?>