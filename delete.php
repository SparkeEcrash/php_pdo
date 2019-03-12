<?php

include_once 'Database.php';

$deleteQuery = "DELETE FROM books WHERE id = 1";

try {
	$result = $conn->exec($deleteQuery);
	echo "record deleted";
} catch (PDOException $ex) {
	echo "an error occured" . '<br>' . $ex->getMessage();
}

?>