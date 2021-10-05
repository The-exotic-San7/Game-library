<?php 

	// connect to the database
	$conn = mysqli_connect('localhost', 'sayantan', 'yes123', 'game_library');

	// check connection
	if(!$conn){
		echo 'Connection error: '. mysqli_connect_error();
	}

?>