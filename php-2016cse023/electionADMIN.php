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
if(isset($_POST['cid'])&&isset($_POST['cname'])){	
	$cid=$_POST['cid'];
	$cname=$_POST['cname'];
	
	$sql = "insert into candidate (serial, cid, cname, vcount) values (1, '$cid', '$cname', 0)";
	if ($res = mysqli_query($con, $sql)){
		echo "Value added!!!";
	}	
	else 	echo"Value add error!";
	$can="update login set profile=2 where uid='$cid' ";
	if(mysqli_query($con, $can)) {
		echo "Login table updated successfully!";
	} else {
		echo "ERROR: Couldn't  execute $sql.".mysqli_error($con);
	}
}
}

?>
