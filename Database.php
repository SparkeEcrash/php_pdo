<?php

// print_r(PDO::getAvailableDrivers());

// PDO has built-in PDOException class for Error Handling
// PDO uses prepared statements to prevent SQL or XSS injections
// PDO uses Ordinal or Named Parameters which uses ('?') and (':')
// PDO alows for rollback functionality which can be used to ensure that the databse is always consistent (Database Transaction)
// PDO has SPL (Standard PHP Library) - acollection of classess and interfaces for solving common problems
// PDO can be combine with SPL iterators for last loading of huge datasets

define("DSN", "mysql:host=localhost;dbname=php_pdo");
//localhost --> host
//database --> php_pdo
define("USERNAME", "root");
define("PASSWORD", "");
$options = [PDO::ATTR_PERSISTENT => true];

try {
	$conn = new PDO(DSN, USERNAME, PASSWORD, $options);
	$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	//set ATTR_MERRMODE to PDO::ERRMODE_EXCEPTION
} catch (PDOException $ex) {
	echo "A database error occured" . '<br>' . $ex->getMessage();
}

// PDO has three error handling modes
// PDO::ERRMODE_SILENT
// PDO::ERRMODE_WARNING throws PHP Warnings
// PDO::ERRMODE_EXCEPTION throws PDOException



?>