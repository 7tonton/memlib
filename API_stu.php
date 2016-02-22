<?php 

// Student API ::

function memlib_stu_get($extra = '') {
	
	$mysql_query = sprintf("SELECT * FROM `stu_info` WHERE %s = ", )
	
}

function memlib_stu_add($stu_id, $stu_nid, $stu_cam, $stu_fname, $stu_mname, $stu_lname, $stu_dep, $stu_email, $stu_address, $stu_mob) {
	
	$mysql_query = sprintf("INSERT INTO `stu_info`(`stu_id`, `stu_nid`, `stu_cam`, `stu_fname`, `stu_mname`, `stu_lname`, `stu_dep`, `stu_email`, `stu_address`, `stu_mob`, `stu_date`) VALUES ([%s],[%s],[%s],[%s],[%s],[%s],[%s],[%s],[%s],[%s],[%s])",
	$stu_id, $stu_nid, $stu_cam, $stu_fname, $stu_mname, $stu_lname, $stu_dep, $stu_email, $stu_address, $stu_mob, NULL);
	
}
	
?>