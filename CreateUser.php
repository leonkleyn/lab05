<?php
	$userid = $_POST["userid"];
	$mysqli = new mysqli("mysql.eecs.ku.edu","l049k908","testpass","l049k908");
	
	if ($mysqli->connect_error) {
		printf("Connect failed: %\n", $mysqli->connect_error);
		exit();
	}
	echo "Connected successfully<br>";
	$query = "INSERT INTO Users (user_id) VALUES ('$userid')";
	if ($result = $mysqli->query($query)) {
		echo "New record created successfully.";
		echo "<br>";
	} else {
		echo "Error: " . $sql . "<br>" . $mysqli->error;
	}
	$mysqli->close();
?> 