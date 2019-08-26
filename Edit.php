<?php
require_once "Connection.php";

$id = $_POST["id"];
$name = $_POST["name"];
$surname = $_POST["surname"];
$number = $_POST["number"];


$query = "UPDATE user SET name = '$name', surname = '$surname', number = '$number' WHERE user.id = '$id'";
$result = mysqli_query($connection, $query);


header("Location: index.php");