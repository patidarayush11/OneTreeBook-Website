<?php
	session_start();
	extract($_POST);
	$mysqli = new mysqli('localhost', 'root','', 'library');

	if($mysqli->connect_errno > 0){
   		die('Unable to connect to database [' . $db->connect_error . ']');
	}



	$query = "INSERT INTO user_login VALUES ('$firstname','$lastname','$email','$password','$dob','$sex','$department')";

	$insert_row = $mysqli->query($query);

	if($insert_row){
			$_SESSION['du']=$firstname;
			header("location:main.php");
	}
	else{
   		die('Error : ('. $mysqli->errno .') '. $mysqli->error);
	}
     ?>
