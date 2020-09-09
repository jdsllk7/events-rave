<?php

$error_msg = 'Sorry could not connect to server...';
$servername = 'localhost';
$username = 'root';
$password = '';
$db = 'rave_db';

// CREATE CONNECTION
$conn = mysqli_connect($servername, $username, $password);

// CHECK CONNECTION
if (!$conn) {
    die($error_msg);
}

// CREATE THE DATABASE
// $sql = "DROP DATABASE IF EXISTS $db";
$sql = "CREATE DATABASE IF NOT EXISTS $db";
if (mysqli_query($conn, $sql)) {
    $conn = mysqli_connect($servername, $username, $password, $db);
} else {
    die($error_msg);
}

$sql = "CREATE TABLE IF NOT EXISTS users (
	userId BIGINT(20) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
	name VARCHAR(200) NOT NULL,
	email VARCHAR(200) NOT NULL,
	contact VARCHAR(200) NOT NULL,
	password VARCHAR(200) NOT NULL
	)";
// $sql = "DROP TABLE IF EXISTS users";
mysqli_query($conn, $sql);


$sql = "CREATE TABLE IF NOT EXISTS events (
	productId BIGINT(20) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
	type VARCHAR(255),
	name VARCHAR(255),
	description VARCHAR(255),
	address VARCHAR(255),
	dateTime TIMESTAMP,
	userId VARCHAR(255),
	email VARCHAR(255),
	companyName VARCHAR(255),
	contact VARCHAR(255)
	)";
// $sql = "DROP TABLE IF EXISTS events";
mysqli_query($conn, $sql);
