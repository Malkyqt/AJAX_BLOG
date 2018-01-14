<?php 

include('connect.php');

if($conn->connect_error){
	die("Connection failed: " . $conn->connect_error);
}


$query = "CREATE TABLE posts(
	id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
	topic VARCHAR(30) NOT NULL,
	body VARCHAR(255) NOT NULL
);";



if($conn->multi_query($query)){
	echo "Tables created successfully!";
	echo '<br>';
}else{
	echo "Error creating table " . $conn->error;
	echo '<br>';
}


$conn->close();
?>