<?php
session_start();
extract($_POST);

$mysqli = new mysqli('localhost','root','', 'library');

if($mysqli->connect_errno > 0) {
	die('Unable to Connect to Database [' . $db->connect_errno . ']');
}

$query = "SELECT * FROM user_login WHERE email='$firstname' AND pwd='$password'";
$result = $mysqli->query($query);

while($row = mysqli_fetch_array($result)) {
	  $success = true;
   }

if($success == true) {
        echo 'Success!';
				$_SESSION['du']=$firstname;
				header("Location: main.php");
	}

else {
        echo '<div class="alert alert-danger">Oops! It looks like your username and/or password are incorrect. Please try again.</div>';
    }


?>
