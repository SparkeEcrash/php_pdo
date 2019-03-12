<?php

include_once 'Database.php';

$updateQuery = "UPDATE books SET name = 'Introduction to Java 2' WHERE id = 1";

try {
	$result = $conn->exec($updateQuery);
	echo "record updated";
} catch (PDOException $ex) {
	echo "an error occured" . '<br>' . $ex->getMessage();
}

?>