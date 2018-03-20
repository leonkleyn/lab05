<?php
	$userid = $_POST["userchoice"];
	$mysqli = new mysqli("mysql.eecs.ku.edu","l049k908","testpass","l049k908");
	
	if ($mysqli->connect_error) {
		printf("Connect failed: %\n", $mysqli->connect_error);
		exit();
	}
	echo "Connected successfully<br>";
	$query = "SELECT author_id FROM Posts WHERE author_id='$userid'";
	if ($result = $mysqli->query($query)) {
		while ($row = $result->fetch_assoc()) {
			echo "Post ID: " . $row["post_id"]. "<br>Content: " . $row["content"]. "<br>Author ID: " . $row["author_id"]. "<br>";
		}
		$result->free();
	} else {
		echo "0 results<br>";
	}
	$mysqli->close();
?>