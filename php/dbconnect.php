<?php
/*
	Author : Gary Fan
	Sourced from: public_html/project-space/includes/dbconnect.php @ Tuesday 8th September 2015
*/
	$dbHost = "localhost";
	$dbUsername = "precisionaudio";
	$dbPassword = "Um6#h3Qa";
	$dbName = "precisionaudio";

	$link = new mysqli($dbHost, $dbUsername, $dbPassword, $dbName); //connect to the server
	mysqli_set_charset($link,"utf8");
	if (!$link) {
		header ("Location: php/error.php");
	}
?>