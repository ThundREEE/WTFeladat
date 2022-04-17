<?php

$serverName = 			"localhost";
$databaseUserName = 	"root";
$databasePaswwordName = "";
$databaseName = 		"phpProjekt";

$connection = mysqli_connect($serverName, $databaseUserName, $databasePasswordName, $databaseName);

if (!$connection) {
	die("A kapcsolat megszakadt: " . mysqli_connect_error());
}