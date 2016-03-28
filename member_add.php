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

session_start();

if(isset($_POST['confirmBtn']) && isset($_SESSION['s_id']) && !empty($_SESSION['s_id']) ) {

	// call Student API & connect.php
	require('include/db_API_MEM.inc.php');
	require('include/connect.inc.php');
	

	// check if user exists
	$member = mlf_mem_get_by_id($_SESSION['s_id']);

	if($member != NULL) {
		mlf_db_close();
		die('<div class="alert alert-warning"><strong>Warning!1</strong> Memeber ID exists in the database. </div>');
	}

	// trim function will delete spaces before and after the string.
	$result = mlf_mem_add(trim($_SESSION['s_id']), trim($_SESSION['s_nid']), trim($_SESSION['s_cam']),
	trim($_SESSION['s_fname']), trim($_SESSION['s_mname']), trim($_SESSION['s_lname']), trim($_SESSION['s_dep']),
	trim($_SESSION['s_email']), trim($_SESSION['s_address']), trim($_SESSION['s_mob']));

	mlf_db_close();
	session_destroy();	
	
	if($result) {
		die('<div class="alert alert-success"><strong>Success!</strong> Confirmation is Done</div>');
	} else {
		die('Failure.');
	}
	
} else {
	die('<div class="alert alert-warning"><strong>Warning!2</strong> No Entry to save</div>');
}

?>
	</div>
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
</body>
</html>
