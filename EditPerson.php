
<!DOCTYPE html>
<html lang="en">
<head>
    <link href="css/button.css" rel="stylesheet">
    <meta charset="UTF-8">
    <title>Phone Book</title>
</head>
<body>

<?php
require_once 'Connection.php';
$id = $_POST["id"];
$name = $_POST["name"];
$surname = $_POST["surname"];
$number = $_POST["number"];


echo "<form action='Edit.php' method='post'>
                    <input type='hidden' name='id' value=" . $id . ">
                    <input type='text' name='name' value=" . $name . ">
                    <input type='text' name='surname' value=" . $surname . ">
                    <input type='text' name='number' value=" . $number . "> 
                    <input type='submit' class='button' value='редактировать'>                   
     </form>"

?>

</body>
</html>

