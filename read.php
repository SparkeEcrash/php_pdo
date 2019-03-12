<?php

include_once 'Database.php';

$selectQuery = "SELECT * FROM books";

try {
	$statement = $conn->query($selectQuery);
	// $statement->setFetchMode(PDO::WHATEVER);

		// while($row = $statement->fetch()){
		// 	echo "Name: " . $row['name'] . " - " . $row['description']. '<br>';
		// }

		// while($row = $statement->fetch(PDO::FETCH_ASSOC)){
		// 	echo "Name: " . $row['name'] . " - " . $row['description']. '<br>';
		// 	print_r($row);
		// }

		// while($row = $statement->fetch(PDO::FETCH_NUM)){
		// 	echo "Name: " . $row[1] . " - " . $row[2]. '<br>';
		// 	print_r($row);
		// }

		// while($row = $statement->fetch(PDO::FETCH_BOTH)){
		// 	// echo "Name: " . $row[1] . " - " . $row[2]. '<br>';
		// 	print_r($row);
		// }

		// while($row = $statement->fetch(PDO::FETCH_OBJ)){
		// 	echo "Name: " . $row->name . " - " . $row->description . '<br>';
		// 	print_r($row);
		// }

		include_once "Book.php";
		$statement->setFetchMode(PDO::FETCH_CLASS, "Book");
		while($row = $statement->fetch()){
			echo "Name: " . $row->name . " - " . $row->description . "<br>";
			print_r($row);
		}


} catch (PDOException $ex) {
	echo "An error occured " . $ex->getMessage();
}

?>