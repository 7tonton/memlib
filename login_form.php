<?php


if(isset($_POST['username']) && isset($_POST['password'])) {
	$username = $_POST['username'];
	$password = $_POST['password'];

	if(!empty($username) && !empty($password)) {
		
		header("Location: studentinfo.php");
		
	}
}

?>
