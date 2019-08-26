<?php
require_once "Connection.php";

$name = $_POST["name"];
$surname = $_POST["surname"];
$number = $_POST["number"];
$query = "INSERT INTO user (name, surname, number) VALUES ('$name', '$surname', $number)";
$result = mysqli_query($connection, $query);
header("Location: index.php");
