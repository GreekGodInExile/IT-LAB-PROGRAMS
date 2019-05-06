<?php
//SESSION_START();
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
$s=$_SESSION['user'];
$ert="select * from candidate where cid='$s'";
if($res=mysqli_query($con, $ert)) 
{
	if(myslqi_num_rows($res)>0)
	{
		echo "<table>";
		echo "<tr>";
		echo "<th> CID</th>";
		echo "<th> CNAME</th>";
		echo "<th> VOTE COUNT</th>";
		echo "</tr>";
		while ($row = mysqli_fetch_array($res))
		{
			echo "<tr>";
			echo "<td>" .row['cid']."</td>";
			echo "<td>" .row['cname']."</td>";
			echo "<td>" .row['vcount']."</td>";
			echo "</tr>";
		}
		echo"</table>";
		mysqli_free_results($res);
	}
}

			
