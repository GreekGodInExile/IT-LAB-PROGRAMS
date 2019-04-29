<?php
$db_host='localhost';
$db_user='root';
$db_passwd='root';
$db_name="newDB";
$con=mysqli_connect($db_host, $db_user, $db_passwd, $db_name);
if(!$con){
	die("Error connection with database".mysqli_connect_error($con));
} else {
	echo "connection successfull";
}
//$sql="CREATE DATABASE newDB";
//if(mysqli_query($con, $sql)){
//	echo "database created successfully with the name newDB";
//} else {
//	echo "Error creating database:".mysqli_error($con);
//}
$sql="CREATE TABLE employees (
	id INT(2) PRIMARY KEY,
	firstname VARCHAR(30) NOT NULL,
	lastname VARCHAR(30) NOT NULL,
	email VARCHAR(50)
	)";
if(mysqli_query($con, $sql)){
	echo "Table employees created successfully!";
} else {
	echo "Error creating table:".mysqli_error($con);
}
mysqli_close($con);
?>
