<!DOCTYPE html>
<html>
<head>
	<title> ::CONFIRM::</title>

	<!-- Bootstrap core CSS -->
    <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
	
	<!-- custom style -->
	<link rel="stylesheet" type="text/css" href="bootstrap/css/custom_add.css">
</head>
<body>
	<div class="container">

<?php

if(isset($_POST['student_college_id']) && isset($_POST['national_id']) && isset($_POST['cam']) && isset($_POST['first_name']) && isset($_POST['second_name']) && isset($_POST['last_name']) && isset($_POST['email']) && isset($_POST['address']) && isset($_POST['mobile'])) {

	$student_college_id = $_POST['student_college_id'];
	$national_id = $_POST['national_id'];
	$cam = $_POST['cam'];
	$first_name = $_POST['first_name'];
	$second_name = $_POST['second_name'];
	$last_name = $_POST['last_name'];
	$department = $_POST['department'];
	$email = $_POST['email'];
	$address = $_POST['address'];
	$mobile = $_POST['mobile'];
	
	if(!empty($student_college_id) && !empty($national_id) && !empty($cam) && !empty($first_name) && !empty($second_name) && !empty($last_name) && !empty($department) && !empty($email) && !empty($address) && !empty($mobile)) {

		// call Student API & connect.php
		require('db_API.inc.php');
		require('connect.inc.php');

		// check if user exists
		$student = mlf_stu_get_by_id($student_college_id);
		
		if($student != NULL) {
			mlf_db_close();
			die('<div class="alert alert-warning"><strong>Warning!</strong> Student College ID exists in our database please contact librayan. </div>');
		}

		$student = mlf_stu_get_by_nationalID($national_id);
		if($student != NULL) {
			mlf_db_close();
			die('<div class="alert alert-warning"><strong>Warning!</strong> Student National ID exists in our database please contact librayan. </div>');
		}

		$student = mlf_stu_get_by_email($email);
		if($student != NULL) {
			mlf_db_close();

			die('<div class="alert alert-warning"><strong>Warning!</strong> Student Email exists in our database, please use another email or visit librayan</div>');
		}

		// trim function will delete spaces before and after the string.
		$result = mlf_stu_add(trim($student_college_id), trim($national_id), trim($cam), trim($first_name), trim($second_name), trim($last_name), trim($department), trim($email), trim($address), trim($mobile));

		mlf_db_close();

		if($result) {
			die('<div class="alert alert-success"><strong>Success!</strong> you can visit library to confirm you registration ! bring picture with you </div>');
		} else {
			die('Failure.');
		}


	} else {
		die('Fill all fields.');
	}
} else {
	die('Bad access');
}

?>
		</div>
	</div>
</body>
</html>
