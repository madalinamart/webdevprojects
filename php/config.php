<?php

$host = "localhost";
$user = "root";
$password = "";
$db = "cookingcontest";

$connection = new mysqli($host, $user, $password, $db);

if($connection === false) {
    die("Error while connecting: " . $connection->connect_error);
}

?>