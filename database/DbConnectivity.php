<?php
	$host = 'localhost';
    $username = 'root';
    $password = '';
    $db = 'mydb';
    $con = mysqli_connect($host,$username,$password,$db) or  
    die(mysqli_error($con));
?>
