<?php 
$host="localhost";
$port="";
$socket="";
$user="root";
$password="";
$dbname="cplaneacion";

$mysqli = new mysqli($host, $user, $password, $dbname, $port, $socket)
	or die ('Could not connect to the database server' . mysqli_connect_error());
$mysqli -> set_charset("utf8");

 ?>