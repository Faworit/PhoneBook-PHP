<?php
require_once 'Connection.php';
require_once 'UserBuilder.php';
require_once 'User.php';

$query = 'select * from user';

$sql = mysqli_query($connection, 'select * from user');

$users = array();
while ($result = mysqli_fetch_array($sql)) {
    $builder = new UserBuilder();
    $person = $builder ->buildUser($result);
    $users[] = $person;

}


