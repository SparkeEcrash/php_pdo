<?php
include_once 'Database.php';

try {

	$name = "My Book";
	$description = "My book description";

	//begin a transaction
	$conn->beginTransaction();

	$sql1 = "INSERT INTO books (name, description, created_at) VALUES(:name, :desc, now())";
	$statement = $conn->prepare($sql1);
	$statement->execute([":name" => $name, ":desc" => $description]);
	echo 'record insert success' . '<br>';

	$sql2 = "DELETE FROM books WHERE id = :id";
	$statement = $conn->prepare($sql2);
	$statement->execute([":id" => 8]);

	$conn->commit();
	echo "Operation succeeded";

} catch (PDOException $ex) {
	$conn->rollBack();
	echo 'an error occcured' . '<br>' . $ex->getMessage();
}


?>