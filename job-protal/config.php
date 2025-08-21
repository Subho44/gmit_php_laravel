<?php
$host = "localhost";
$user ="root";
$pass = "";
$db = "jobdb";

$conn = mysqli_connect($host,$user,$pass,$db);

if(!$conn) {
    echo("connection error: ".mysqli_connect_error());
}
?>