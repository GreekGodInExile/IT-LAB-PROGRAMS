<?php
$name=$_GET['q'];
$con=mysqli_connect("localhost", "root", "root", "VOTEDB");

$query="select * from namelist where name like '$name%'";
$res=mysqli_query($con, $query);
if(mysqli_num_rows($res))
{
	while($row=mysqli_fetch_array($res))
	{
		echo $row['name']."</br>";
	}
}
else
	echo "No Suggestions!";
?>
