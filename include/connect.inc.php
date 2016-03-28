<?php 

require('config.inc.php');

$mlf_host = $hostname;
$mlf_user = $username;
$mlf_pass = $password;
$mlf_db_name = $database_name;

@$mlf_handle = mysql_connect($mlf_host, $mlf_user, $mlf_pass);
if(!$mlf_handle) {
	// exit('Connection problem ...');
	echo 'Connection problem ...';
}

$mlf_db_result = mysql_select_db($mlf_db_name);
if(!@mlf_db_result) {
	mysql_close($mlf_handle);
	// exit('Selection problem ...');
	echo 'Selection problem ...';
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

?>
