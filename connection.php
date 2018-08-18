<?php
$servername = "localhost";
$username = "id2746537_mailserver";
$password = "mailserver";
$dbname = "id2746537_mailserver";
global $con;

$con=new mysqli($servername, $username, $password, $dbname);

if ($con->connect_error) {
    die("Connection failed: " . $con->connect_error);
} 

?>