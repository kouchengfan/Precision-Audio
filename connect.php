<?php
/*
	Author : Gary Fan
	Sourced from: public_html/project-space/includes/dbconnect.php @ Tuesday 8th September 2015
*/
	$dbHost = "localhost";
	$dbUsername = "root";
	$dbPassword = "";
	$dbName = "precisionaudio";

	$link = new mysqli($dbHost, $dbUsername, $dbPassword, $dbName); //connect to the server
	if (!$link) {
		header ("Location: php/error.php");
	}
?>