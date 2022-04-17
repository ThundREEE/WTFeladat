<?php

function emptyImputSignup($name, $email, $username, $password, $password2) {
	$results;
	if (empty($name) || empty($email) || empty($username) || empty($password) || empty($password2)) {
		$results = true;
	} else {
		$results = false;
	}
	return $results;
}

function invalidUsername($username) {
	$results;
	if (!preg_match("/^[a-zA-Z0-9]*$/", $username)) {
		$results = true;
	} else {
		$results = false;
	}
	return $results;
}

function invalidEmail($email) {
	$results;
	if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
		$results = true;
	} else {
		$results = false;
	}
	return $results;
}

function passwordMatch($password, $password2) {
	$results;
	if ($password != $password2) {
		$results = true;
	} else {
		$results = false;
	}
	return $results;
}

function usernameExists($connection, $username, $email) {
	$sql = "SELECT * FROM users WHERE usersname = ? OR usersEmail = ?;";
	$stmt = mysqli_stmt_init($connection);
	if (!mysqli_stmt_prepare($stmt, $sql)) {
		header("location: ../signup.php?error=stmtFailed");
		exit();
	}

	mysqli_stmt_bind_param($stmt, "ss", $username, $email);
	mysqli_stmt_execute($stmt);

	$resultData = mysqli_stmt_get_result($stmt);

	if ($row = mysqli_fetch_assoc($resultData)) {
		return $row;
	} else {
		$result = false;
		return $result;
	}
	mysqli_stmt_close($stmt);
}

function createUser($connection, $name, $username, $email, $password) {
	$sql = "INSERT INTO users (usersName, usersEmail, usersUsername, usersPassword) VALUES (?, ?, ?, ?)";
	$stmt = mysqli_stmt_init($connection);
	if (!mysqli_stmt_prepare($stmt, $sql)) {
		header("location: ../signup.php?error=stmtFailed");
		exit();
	}

	$hashedPassword = password_hash($password, PASSWORD_DEFAULT)

	mysqli_stmt_bind_param($stmt, "ssss", $name, $username, $email, $hashedPassword);
	mysqli_stmt_execute($stmt);
	mysqli_stmt_close($stmt);
	echo "Sikeresen regisztráltál!"
	header("location: ../signup.php?error=none");
	exit();
}

function emptyImputLogin($username, $password) {
	$results;
	if (empty($username) || empty($password)) {
		$results = true;
	} else {
		$results = false;
	}
	return $results;
}

loginUser($connection, $username, $password) {
	$usernameExists = usernameExists($connection, $username, $username);

	if ($usernameExists === false) {
		header("location: ../login.php?error=wrongLogin");
		exit();
	}

	$passwordHashed = $usernameExists["usersPassword"];
	$checkPassword = password_verify($password, $passwordHashed)
	if ($checkPassword  === false) {
		header("location: ../login.php?error=wrongLogin");
		exit();
	} elseif ($checkPassword === true) {
		session_start();
		$_SESSION["userId"] = $usernameExists["usersId"];
		$_SESSION["userName"] = $usernameExists["usersName"];
		header("location: ../index.php?");
		exit();
	}
}