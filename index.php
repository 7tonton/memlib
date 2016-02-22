<html>
<head>
</head>
<body>
<?php
if(isset($_POST['student_college_id']) && isset($_POST['national_id']) && isset($_POST['cam']) && isset($_POST['first_name']) && isset($_POST['second_name']) && isset($_POST['last_name']) && isset($_POST['email']) && isset($_POST['address']) &&
isset($_POST['mobile'])) {
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
		// ....
	} else {
		// ....
	}
}
?>
<form action="index.php" method="POST">
	Student College ID:
	<br>
	<input type="text" name="student_college_id">
	<br>
	National ID / Iqama ID:
	<br>
	<input type="text" name="national_id">
	<br>
	Campus:
	<br>
	<input type="radio" name="cam" value="yic"> YIC
    <input type="radio" name="cam" value="yuc_male"> YUC Male
    <input type="radio" name="cam" value="yuc_female"> YUC Female
	<input type="radio" name="cam" value="yti"> YTI
	<br>
	First Name:
	<br>
	<input type="text" name="first_name">
	<br>
	Second Name:
	<br>
	<input type="text" name="second_name">
	<br>
	Last Name:
	<br>
	<input type="text" name="last_name">
	<br>
	Department:
	<br>
	<input type="text" name="department">
	<br>
	E-mail:
	<br>
	<input type="text" name="email">
	<br>
	Address:
	<br>
	<input type="text" name="address">
	<br>
	Mobile:
	<br>
	<input type="text" name="mobile">
	<br>
	<br>
	<input type="submit" value="Submit">
</form>
</body>
</html>