<?php
	include('connect.php');

	$topic = $_GET['topic'];

	//$topic = 'values';

	$query = "SELECT * FROM posts WHERE topic='".$topic."' ORDER BY id DESC";
	$result = $conn->query($query);
	$result_rows = $result->num_rows;
	$count = 0;
	echo '[';
	while($row = $result->fetch_row()){
		echo '{"Message":"'.$row[2].'"}';
		$count += 1;
		if($count<$result_rows){
			echo ',';
		}
	}
	echo ']';
?>