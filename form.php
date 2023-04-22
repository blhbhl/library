<?php
include "db.php";

$statement = $conn->prepare("INSERT INTO borrowers_record (book_title, author, customers_name) 
VALUES (:book_title, :author, :customers_name)");
$statement->bindParam(':book_title', $book_title);
$statement->bindParam(':author', $author);
$statement->bindParam(':customers_name', $customers_name);

$book_title = $_POST['book_title'];
$author = $_POST['author'];
$customers_name = $_POST['customers_name'];

$statement->execute();

header("Location: index.php");
?>