<?php 

// Student API ::


function mlf_stu_get($extra = '') {

		$query = sprintf("SELECT * FROM `stu_info` %s", $extra);
		$query_run = mysql_query($query);

		if(!@query_run)
			echo mysql_error();

		$mysql_num_rows = @mysql_num_rows($query_run);
		if($mysql_num_rows == 0)
			return NULL;

		$stu = array();
		for($i = 0; $i < $mysql_num_rows; $i ++)
			$stu[count($stu)] = mysql_fetch_object($query_run);

		@mysql_free_result($query_run);

		return $stu;
}

function mlf_stu_get_by_id($stu_id) {

	$check_stu_id = mysql_real_escape_string(strip_tags($stu_id));

	$result = mlf_stu_get("WHERE `stu_id` = '$check_stu_id'");
	if($result != NULL)
		$stu = $result;
	else
		return NULL;

	return $stu;
}

function mlf_stu_get_by_nationalID($stu_nid) {
	
	$check_stu_nationalID = mysql_real_escape_string(strip_tags($stu_nid));
	
	$result = mlf_stu_get("WHERE `stu_nid` = '$check_stu_nationalID'");
	
	if($result != NULL)
		$stu = $result;
	else
		return NULL;

	return $stu;
}

function mlf_stu_get_by_email($email) {

	$new_email = mysql_real_escape_string(strip_tags($email));
	$result = mlf_stu_get("WHERE `stu_email` = '$new_email'");
	
	if($result != NULL)
		$student = $result;
	else
		$student = NULL;
		
	return $student;
}

function mlf_stu_add($stu_id, $stu_nid, $stu_cam, $stu_fname, $stu_mname, $stu_lname, $stu_dep, $stu_email, $stu_address, $stu_mob) {
	if(empty($stu_id) || empty($stu_nid) || empty($stu_cam) || empty($stu_fname) || empty($stu_mname) || empty($stu_lname) || empty($stu_dep) || empty($stu_email) || empty($stu_address) || empty($stu_mob))
		return false;

	$stu_id     = mysql_real_escape_string(strip_tags($stu_id));
	$stu_nid    = mysql_real_escape_string(strip_tags($stu_nid));
	$stu_cam    = mysql_real_escape_string(strip_tags($stu_cam));
	$stu_fname  = mysql_real_escape_string(strip_tags($stu_fname));
	$stu_mname  = mysql_real_escape_string(strip_tags($stu_mname));
	$stu_lname  = mysql_real_escape_string(strip_tags($stu_lname));
	$stu_dep    = mysql_real_escape_string(strip_tags($stu_dep));
	$stu_email  = mysql_real_escape_string(strip_tags($stu_email));
	$stu_address= mysql_real_escape_string(strip_tags($stu_address));
	$stu_mob    = mysql_real_escape_string(strip_tags($stu_mob));

	$query = sprintf("INSERT INTO `stu_info`(`stu_id`, `stu_nid`, `stu_cam`, `stu_fname`, `stu_mname`, `stu_lname`, `stu_dep`, `stu_email`, `stu_address`, `stu_mob`, `stu_date`) VALUES ('%s', '%s', '%s', '%s', '%s', '%s', '%s', '%s', '%s', '%s', NULL)",
		$stu_id, $stu_nid, $stu_cam, $stu_fname, $stu_mname, $stu_lname, $stu_dep, $stu_email, $stu_address, $stu_mob);

	if(!mysql_query($query))
		echo 'You can\'t be added, please try again';
	
	@mysql_free_result($query);
	
	return true;
}
	
?>