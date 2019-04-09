<?php
$db_host='localhost';
$db_user='root';
$db_passwd='root';

$con=mysqli_connect($db_host, $db_user, $db_passwd);
if(!$con){
	die("Error connectiong with database".mysqli_connect_error($con));
} else {
	echo "connection successfull";
}
$sql="CREATE DATABASE newDB";
if(mysqli_query($con, $sql)){
	echo "database created successfully with the name newDB";
} else {
	echo "Error creating database:".mysqli_error($con);
}
mysqli_close($con);
?>
