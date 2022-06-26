<?php
	session_start();
	session_name();
	include 'confs.php';
	$PASS = DB_USERPASS;
	$USER = DB_USERNAME;
	$dbname = DB_NAME;
	// $connect = new PDO("mysql:host=localhost;dbname=accessremotejobs;", "root", "");
	$connect = new PDO("mysql:host=localhost;dbname=$dbname;", $USER, $PASS);
	$connect->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	include 'functions.php';
	ini_set("pcre.jit", "0");
?>