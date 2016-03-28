<?php

// alert messages
function message($msg_code) {
	switch ($msg_code) {
	// index.php
	case 'index_1':
		return "Show Dircatinos";
		break;
	case 'index_2':
		return "The Royal Commission of Yanbu Colleges & Institutes Libraries & Learing Resources";
		break;
	case 'index_3':
		return "MEMBERSHIP FORM";
	case 'index_4':
		return "Signup For New Memebership";
		break;
	case 'index_5';
		return "Confirm Memebership";
		break;

	// login.php
	case 'login_1':
		return "Librarian login";
		break;
	case 'login_2':
		return "Please sign in";
		break;
	case 'login_3':
		return "Email address";
		break;
	case 'login_4':
		return "Password";
		break;
	case 'login_5':
		return "Register";
		break;

	// member_add.php
	case 'member_add_1':
		return "::CONFIRM::";
		break;
	case 'member_add_2':
		return "<strong>Warning!1</strong> Memeber ID exists in the database.";
		break;
	case 'member_add_3':
		return "<strong>Success!</strong> Confirmation is Done.";
		break;
	case 'member_add_4':
		return "<strong>Warning!2</strong> No Entry to save.";
		break;

	// member_info.php
	case 'member_info_1';
		return "Student Form";
		break;
	case 'member_info_2';
		return "Memeber ID";
		break;
	case 'member_info_3';
		return "GET INFORMATION";
		break;
	case 'member_info_4';
		return "Memeber Information";
		break;
	case 'member_info_5';
		return "Confirm Membership";
		break;

	// visit_add.php
	case 'visit_add_1';
		return "::CONFIRM::";
		break;
	case 'visit_add_2';
		return "<strong>Warning!</strong> Student College ID exists in our database please contact librayan.";
		break;
	case 'visit_add_3';
		return "<strong>Warning!</strong> Student National ID exists in our database please contact librayan.";
		break;
	case 'visit_add_4';
		return "<strong>Warning!</strong> Student Email exists in our database, please use another email or visit librayan";
		break;
	case 'visit_add_5';
		return "<strong>Success!</strong> you can visit library to confirm you registration ! bring picture with you";
		break;
	case 'visit_add_6';
		return "Failure.";
		break;
	case 'visit_add_7';
		return "Fill all fields.";
		break;
	case 'visit_add_8';
		return "Bad access";
		break;
	
	default:
		# code...
		break;
	}
}

?>