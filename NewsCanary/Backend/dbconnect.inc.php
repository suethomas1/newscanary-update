<?php

//set connectoion variables to match DB details
$host = "localhost";
$username = "sue";
$password = "sueria67";
$database = "sueria";

//connect to database
$dbconnection = mysqli_connect($host, $username, $password, $database);

//check if connected, exit if not
if(!$dbconnection) {
	exit("Database could not be connected.");
}