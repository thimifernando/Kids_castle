<?php

if (!isset($_SESSION)) { session_start(); }

define( "BASEURL" , "http://localhost/kids_castle" );




$servername="localhost";
$username="root";
$password="";
$db="kids_castle";

//create connection
$conn=new mysqli($servername,$username,$password,$db);

//chech connection
if($conn->connect_error) {
    die("Connection failed.".$conn->connect_error);
}
?>