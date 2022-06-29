<?php
// signup include 

//checking if the user actually submitted the login form the proper way, instead of typing it out on the url

if (isset($_POST["submit"])) {

	// setting data to variable from superglobals
	$name = $_POST["name"];
	$email = $_POST["email"];
	$username = $_POST["uid"];
	$pwd = $_POST["pwd"];
	$pwdRepeat = $_POST["pwdrepeat"];

	require_once 'dbh.inc.php';
	require_once 'functions.inc.php';

	// validating if any of the inputs were empty
	if (emptyInputSignup($name, $email, $username, 
		$pwd, $pwdRepeat) !== false) {
		header("location: ../signup.php?error=emptyinput");
		exit();
	} 

	// validating if the username is invalid
	if (invalidUid($username) !== false) {
		header("location: ../signup.php?error=invaliduid");
		exit();
	} 

	// validating if the email is invalid
	if (invalidEmail($email) !== false) {
		header("location: ../signup.php?error=invalidemail");
		exit();
	} 

	// validating if the passwords match
	if (pwdMatch($pwd, $pwdRepeat) !== false) {
		header("location: ../signup.php?error=passwordsdontmatch");
		exit();
	} 

	// validating if the username already exists
	if (uidExists($conn, $username, $email) !== false) {
		header("location: ../signup.php?error=usernametaken");
		exit();
	} 

	createUser($conn, $name, $email, $username, $pwd);
} 

else {
	// sending the user back to the sign up page
	header("location: ../signup.php");
	exit();
}

