<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "donation";
$conn = new mysqli($servername, $username, $password, $dbname);
$conn->set_charset("utf8mb4");
if(!$conn){
die('Could not Connect MySql:' );
}
?>