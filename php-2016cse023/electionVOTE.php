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
	echo "</br>";
}
$sql= "select * from candidate";
$res=mysqli_query ($con, $sql) or die ("Error Querying the database!!");
echo '<form id="myform" action="updateVOTE.php" method="post">';
echo "<table>";
echo "<tr>";
echo "<th>select</th>";
echo "<th>candidate name</th>";
echo "</tr>";
echo "</table>";
while ($row=mysqli_fetch_array($res))
{	
	echo '<input type="radio" id="candidate1" name="candidate1"  value=" '. $row['cid'].'  " >'. $row['cname']. '  </input>';
	echo '</br>';
}
echo '<input type="submit" value= "Cast VOTE!" name="castVOTE!"> ';
echo  '</form>';
?>
