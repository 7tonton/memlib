<?php 

require('API_stu.php');

$result = mlf_stu_get_by_id('10110050');

$result = $result[0];
echo $result->stu_fname;

?>