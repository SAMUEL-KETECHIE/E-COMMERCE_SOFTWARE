<?php
$server ="localhost";
$user ="root";
$password ="";
$dbase ="wenmart";

$conn = mysqli_connect($server,$user,$password,$dbase);

if(!$conn){
	die("Not connected" . mysqli_connect_error());
}
?>