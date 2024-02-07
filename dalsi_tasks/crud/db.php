<?php
// shell.hamk.fi >>> localhost
$servername = "localhost";
$username = "dalsi23000";
$password = "6Ad3ICbv";
$dbname = "wp_dalsi23000";
// create database connection
$conn = new mysqli($servername,$username,$password,$dbname);
//check connection
if ($conn->connect_error){

    die("Connection Failed:" . $conn->connect_error);
}

?>