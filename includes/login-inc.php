<?php

if (isset($_POST["login-btn"])) {
	$username = $_POST["username"];
	$password = $_POST["password"];

	require_once 'databaseHandler-inc.php';
	require_once 'functions-inc.php';

	if (emptyImputLogin($username, $password) != false) {
		header("location: ../login.php?error=emptyImput");
		exit();
	}

	loginUser($connection, $username, $password);
} else {
	header("location: ../login.php?");
	exit();
}