<?php
$server = 'localhost';
$user = 'root';
$password = '';
$db = 'coronadb';

$con = mysqli_connect($server, $user, $password, $db);

if(!$con) {
    die("Connection failed: " . mysqli_connect_error());
}
?>