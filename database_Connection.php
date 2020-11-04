<?php

$host = "localhost";
$user = "root";
$password = "";
$db = "biologycrazequiz_db";

$connection = new mysqli($host, $user, $password, $db);

if($connection->connect_error){
    die("Database Connection Failed");
}

?>