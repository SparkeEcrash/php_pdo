<?php

include_once 'Database.php';

try {
	//prepared the query
	$statement = $conn->prepare("INSERT INTO books (name, description, created_at) VALUES(:book_name, :description, now())");

	//bind the statement with params
	$statement->bindParam(":book_name", $name);
	$statement->bindParam(":description", $description);

	//create first record
	$name = "Objects and Patterns2";
	$description = "Software crafting2";
	$statement->execute();

	//create second record
	$name = "Complete SQL2";
	$description = "Structured Query Language2";
	$statement->execute();

	//create third record
	$name = "Complete UML2";
	$description = "Learn Software modelling2";
	$statement->execute();

	echo "record created with last ID being: " . $conn->lastInsertId();
} catch (PDOException $ex) {
	echo "An error occured " . $ex->getMessage();
}