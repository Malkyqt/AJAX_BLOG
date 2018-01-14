<?php
	include('connect.php');

    $topic = $_POST['topic'];
 	$body = $_POST['body'];
 	$query = "INSERT INTO posts(topic,body) VALUES ('".$topic."','".$body."')";
 	$result = $conn->query($query);

?>