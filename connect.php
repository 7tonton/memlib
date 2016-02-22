<?php 

$mlf_host = 'localhost';
$mlf_user = 'tonton';
$mlf_pass = 'mostring';

$mlf_db_name = 'libform';

@$mlf_handle = mysql_connect($mlf_host, $mlf_user, $mlf_pass);
if(!$mlf_handle) {
	die('Connection problem ...');
}

$mlf_db_result = mysql_select_db($mlf_db_name);
if(!@mlf_db_result) {
	mysql_close($mlf_handle);
	die('Selection problem ...');
} 

@mysql_query("SET NAMES 'utf8'"); // set the inputs to be utf8 to accept all kind of letters

/*
tinyf_db_close() the use of this name because is categorize kind of.
				 tinyf: project name	
				 db:    categorize
				 close: operation
*/
function mlf_db_close() {
	global $mlf_handle;
	@mysql_close($mlf_handle);
}

/*
$DB_host = 'localhost';
$DB_user = 'tonton';
$DB_pass = 'mostring';
$DB_name = 'libform';

if(!mysql_connect($DB_host, $DB_user, $DB_pass) || !mysql_select_db($DB_name)) {
	die('Connection refused');
}

function mlf_db_close() {
	global $tf_handle;
	@mysql_close($tf_handle);
} */

?>
