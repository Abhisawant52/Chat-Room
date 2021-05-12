
<?php

$host = "localhost";
$user = "root";
$pass = "";
$db_name = "chatroom";
$con = new mysqli($host, $user, $pass, $db_name);
$db = new PDO('mysql:host=localhost;dbname=chatroom;charset=utf8','root','');
?>


