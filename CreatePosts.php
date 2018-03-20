<?php
	$userid = $_POST["userid"];
	$content = $_POST["content"];
	$mysqli = new mysqli("mysql.eecs.ku.edu","l049k908","testpass","l049k908");
	if ($mysqli->connect_error) {
		printf("Connect failed: %\n", $mysqli->connect_error);
		exit();
	}
	echo "Connected successfully<br>";
	//echo "The user ID is: " .$userid. " | The content is: " .$content. "<br>";
	$query1 = "SELECT user_id FROM Users WHERE user_id = '$userid'";
	$query2 = "INSERT INTO Posts (content, author_id) VALUES ('$content','$userid')";
	if ($result1 = $mysqli->query($query1)) {
		if ($result2 = $mysqli->query($query2)) {
			echo "The post has been successfuly added<br>";
		} else {
			echo "Error: " . $query2 . "<br>" . $mysqli->error;
		}
	} else {
		echo "Error: " . $query1 . "<br>" . $mysqli->error;
	}
	$mysqli->close();
?>