<?php
require_once 'UserDAO.php';

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <link href="css/button.css" rel="stylesheet">
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>
<table border="1" bordercolor="#333333">
    <tr>
        <td>ID</td>
        <td>Имя</td>
        <td>Фамилия</td>
        <td>Номер Телефона</td>
        <td>Редактирование</td>
    </tr>
    <?php
for ($i = 0; $i < count($users); $i++) {

    $person = $users[$i];
    $name = $person->name;
    echo "<tr><td>" . $person->id . "</td>
               <td>" . $person->name . "</td>   
               <td>" . $person->surname . "</td>
               <td>" . $person->number . "</td>
               <td><form action='DeleteUser.php' method='post'>
                    <input type='hidden' name='id' value=" . $person->id . ">
                    <input type='submit' class='button' value='удалить'></td>
                    </form> 
                    <td>
                    <form action='EditPerson.php' method='post'>
                    <input type='hidden' name='id' value=" . $person->id . ">
                    <input type='hidden' name='name' value=" . $person->name . ">
                    <input type='hidden' name='surname' value=" . $person->surname . ">
                    <input type='hidden' name='number' value=" . $person->number . ">
                    <input type='submit' class='button' value='редактировать'></td>
                    
</form>
</td>
       </tr>";
}
?>
    <form action="AddPerson.php" method="post">
        <input type="submit" class="button" value="Добавить человека">
    </form>
</table>
</body>
</html>