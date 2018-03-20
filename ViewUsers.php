<?php
	$mysqli = new mysqli("mysql.eecs.ku.edu","l049k908","testpass","l049k908");
	if ($mysqli->connect_error) {
		printf("Connect failed: %\n", $mysqli->connect_error);
		exit();
	}
	echo "Connected successfully<br>";
	echo "<table border=1px><th>Users</th><tr>";
	$query = "SELECT user_id FROM Users";
	if ($result = $mysqli->query($query)) {
		while ($row = $result->fetch_assoc()) {
			echo "<tr>";
			echo "<td>" . $row["user_id"]. "</td></n>";
			echo "</tr>";
		}
		$result->free();
	} else {
		echo "0 results<br>";
	}
	echo "</tr></table>";
	
?>