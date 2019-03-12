<?php

include_once 'Database.php';

include_once 'Database.php';

$updateQuery = "UPDATE books SET
	name = :name, description = :desc
	WHERE id = :id";

try {
	$statement = $conn->prepare($updateQuery);
	$statement->execute([":name" => "Python for newbies", ":desc" => "Introduction to software development", ":id" => 7]);
	echo $statement->rowCount() . " record updated";
}catch (PDOException $ex) {
	echo "An error occured " . $ex->getMessage();
}

?>