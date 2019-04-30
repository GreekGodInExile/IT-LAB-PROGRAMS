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
	echo "<br/>";
}
if ($_SERVER["REQUEST_METHOD"] == "POST") {
$name=$_POST['candidate1'];
echo $name ."<br/>";

$query="update candidate set vcount=vcount+1 where cid='$name'";
	mysqli_query($con, $query) or die  ("Error counting your vote!");
echo "Your  vote is successful"."<br/>";
}
?>
