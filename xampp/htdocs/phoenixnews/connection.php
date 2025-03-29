<?php
session_start();

$host="localhost";
$username='root';
$password='';
$db="phoenixnews";

$conn = mysqli_connect($host,$username,$password,$db);
if(!$conn){
    die("Database not connected");
}

?>