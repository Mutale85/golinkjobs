<?php
	session_start();
	session_name();
	$PASS = "MutaleMulenga@19@85";
	$USER = "root";
	$dbname = 'accessremotejobs';
	$connect = new PDO("mysql:host=localhost;dbname=accessremotejobs;", "root", "");
	// $connect = new PDO("mysql:host=localhost;dbname=$dbname;", $USER, $PASS);
	$connect->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	include 'functions.php';
	ini_set("pcre.jit", "0");
?>