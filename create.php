<?php

include_once 'Database.php';

$insertQuery = "INSERT INTO books(name, description, created_at)
	VALUES('Introduction to Java', 'Learn all about Java', now())";

$insertQuery2 = "INSERT INTO books(name, description, created_at)
	VALUES('Introduction to PHP', 'Learn all about Java', now())";
	
////////////////SEMI COLON/////////////////////////////

try {
	// build the query
	$insertQueryParams = "INSERT INTO books(name, description, created_at)
	VALUES(:book_name, :description, now())";

	// prepare the query
	$insertQuery3 = $conn->prepare($insertQueryParams);

	$name = "PHP PDO";
	$description = "Build a basic task list";

	// execute the statement
	$insertQuery3->execute([":book_name" => $name, ":description" => $description]);

	echo "record created";
} catch (PDOException $ex) {
	echo 'an error occcured' . '<br>' . $ex->getMessage();
}

////////////////QUESITON MARK/////////////////////////////


try {
	// build the query
	$insertQueryParams = "INSERT INTO books(name, description, created_at)
	VALUES(?, ?, now())";

	// prepare the query
	$insertQuery3 = $conn->prepare($insertQueryParams);

	$name = "PHP PDO2";
	$description = "Build a basic task list";

	// execute the statement
	$insertQuery3->execute([$name, $description]);
// depends on the order of the columns that matches VALUES(?, ?, now())

	echo "record created";
} catch (PDOException $ex) {
	echo 'an error occcured' . '<br>' . $ex->getMessage();
}