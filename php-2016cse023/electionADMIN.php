<?php
$db_host='localhost';
$db_user='root';
$db_passwd='root';
$db_name="VOTEDB";

$con=mysqli_connect($db_host, $db_user, $db_passwd, $db_name);
if(!$con){
	die("Error connection with database".mysqli_connect_error($con));
} else {
	echo "connection successfull";
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
	$cid=$_POST['cid'];
	$cname=$_POST['cname'];
	$sql = "insert into candidate (serial, cid, cname, vcount) values (1, '$cid', '$cname', 0)";
	if ($res = mysqli_query($con, $sql)){
		echo "Value added!!!";
	}	
	else 	echo"Value add error!";
}

?>
