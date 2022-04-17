<?php

if (isset($_POST['singup-btn'])) {
	$name = $_POST['name'];
	$username = $_POST['username'];
	$email = $_POST['email'];
	$password = $_POST['password'];
	$password2 = $_POST['password2'];

	require_once "databaseHandler-inc.php";
	require_once "functions-inc.php";


	if (emptyImputSignup($name, $email, $username, $password, $password2) != false) {
		header("location: ../signup.php?error=emptyImput");
		exit();
	}

	if (invalidUsername($username) != false) {
		header("location: ../signup.php?error=invalidUsername");
		exit();
	}

	if (invalidEmail($email) != false) {
		header("location: ../signup.php?error=invalidEmail");
		exit();
	}

	if (passwordMatch($password, $password2) != false) {
		header("location: ../signup.php?error=passwordsDontMatch");
		exit();
	}

	if (usernameExists($connection, $username, $email) != false) {
		header("location: ../signup.php?error=usernameTaken");
		exit();
	}

	createUser($connection, $name, $username, $email, $password);

} else {
	header("location: ../signup.php");
	exit();
}