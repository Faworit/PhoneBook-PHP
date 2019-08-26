<?php
require_once 'Connection.php';
require_once 'index.php';

$id = $_POST["id"];

echo $id;

$query = "delete from user where id= '$id'";
$result = mysqli_query($connection, $query);
$var = "http://phone.ru/"; ?>
<script>
    setTimeout(function(){
        document.location.href="<?= $var ?>";
    },0);
</script>