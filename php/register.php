<?php

require_once('config.php');
$firstname = $connection->real_escape_string($_POST['fname']);
$lastname = $connection->real_escape_string($_POST['lname']);
$email = $connection->real_escape_string($_POST['email']);
$mobile = $connection->real_escape_string($_POST['mobile']);

$sql = "INSERT INTO users (firstname, lastname, email, mobile ) VALUES ('$firstname', '$lastname', '$email', '$mobile')";

if($connection->query($sql) === true) {    
   header("location: ./complete.php");
} else {    
    header("location: ./complete.php");
}