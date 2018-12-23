<?php

error_reporting(0);

session_start();

session_unset(); 

// destroy the session 
session_destroy(); 

session_start();
$_SESSION["loggedInType"]="none";


header("location: home.php");

?>