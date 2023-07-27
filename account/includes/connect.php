<?php
session_start();
$servername = "localhost";
$server_user = "atul1";
$server_pass = "atul1";
$dbname = "food";
$name = $_SESSION['name'];
$role = $_SESSION['role'];
$con = new mysqli($servername, $server_user, $server_pass, $dbname);
?>