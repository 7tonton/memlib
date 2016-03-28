<!DOCTYPE html>
<html>
<head>
	<?php require('include/lang.inc.php'); ?>
	<title> <?php echo message('visit_add_1'); ?> </title>

	<!-- Bootstrap core CSS -->
    <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
	
	<!-- custom style -->
	<link rel="stylesheet" type="text/css" href="bootstrap/css/custom_add.css">
</head>
<body>
	<div class="containerFotter">
		
		<button type="submit" onclick="window.location.href='http://localhost/memlib/index.php'" value="BACK" class="btn btn-default btn-lg" style="width: 100px;">
			<span class="glyphicon glyphicon-home" aria-hidden="true"></span>
			Home
		</button>
		
		<button type="submit" onclick="window.location.href='<?php echo $_SERVER['HTTP_REFERER']; ?>'" value="BACK" class="btn btn-default btn-lg " style="float: right ; width: 100px;">
			<span class="glyphicon glyphicon-arrow-left" aria-hidden="true"></span>
			Back
		</button>
	</div>
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
		require('include/db_API_VIS.inc.php');
		require('include/connect.inc.php');

		// check if user exists
		$student = mlf_stu_get_by_id($student_college_id);
		
		if($student != NULL) {
			mlf_db_close();
			die(message('visit_add_2'));
		}

		$student = mlf_stu_get_by_nationalID($national_id);
		if($student != NULL) {
			mlf_db_close();
			die(message('visit_add_3'));
		}

		$student = mlf_stu_get_by_email($email);
		if($student != NULL) {
			mlf_db_close();

			die(message('visit_add_4'));
		}

		// trim function will delete spaces before and after the string.
		$result = mlf_stu_add(trim($student_college_id), trim($national_id), trim($cam), trim($first_name), trim($second_name), trim($last_name), trim($department), trim($email), trim($address), trim($mobile));

		mlf_db_close();

		if($result) {
			die(message('visit_add_5'));
		} else {
			die(message('visit_add_6'));
		}


	} else {
		die(message('visit_add_7'));
	}
} else {
	die(message('visit_add_8'));
}

?>
		</div>
</body>
</html>
