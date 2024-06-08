<?php

$host = "localhost:3342";
$user = "admin";
$password = "admin";
$database = "blog";


define('mysqli', new mysqli($host,$user,$password,$database));

//$mysqli = new mysqli("localhost","admin","admin","blog");


// Check connection
if (mysqli -> connect_errno) {
    echo "Failed to connect to MySQL: " . mysqli -> connect_error;
    exit();
}
?>