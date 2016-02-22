<?php 

$DB_host = 'localhost';
$DB_user = 'root';
$DB_pass = '';
$DB_name = 'libform';

if(!mysql_connect($DB_host, $DB_user, $DB_pass) || !mysql_select_db($DB_name)) {
	die('Connection refused');
} else {
	echo 'OK.';
}

?>