<?php
$db_host='localhost';
$db_user='root';
$db_passwd='root';
$db_name="VOTEDB";
//Connect to sql database
$con=mysqli_connect($db_host, $db_user, $db_passwd, $db_name);
if(!$con){
	die("Error connection with database".mysqli_connect_error($con));
} else {
	echo "connection successfull";
}
//checks which methed is used POST or GET
if ($_SERVER["REQUEST_METHOD"] == "POST") {
	$uid=$_POST['uid'];
	$pwd=$_POST['pwd'];

	echo $uid;
	echo $pwd;
	$sql = "SELECT * FROM login  WHERE UID='$uid'";
	if ($res = mysqli_query($con, $sql)){
		if (mysqli_num_rows($res)>0) {
			while ($row = mysqli_fetch_array ($res)){
//Checks whether the given password is correct or not
				if($row['password']!=$pwd) echo "Incorrect password";
				else 
				{
//Checks whether the  user is an administrator or not
					if($row['profile']==1)
					{
//Syntax to jump to another page
						header('location:electionCANDIDATE.html');
					}
					if($row['profile']==0)
					{
//Syntax to jump to another page
						header('location:electionVOTE.php');
					}
				}
			}
			mysqli_free_result($res);	
		} else {
			echo "No Rows Selected";
		}
	} else {
		echo "inavlid Username!";
	}
}

/**  if (empty($_POST["uid"])) {
    $uidErr = "Name is required";
  } else {
    $uid = test_input($_POST["uid"]);
    // check if name only contains letters and whitespace
    if (!preg_match("/^[a-zA-Z ]*$/",$uid)) {
      $uidErr = "Only letters and white space allowed";
    }
  }

if (empty($_POST["pwd"])) {
    $pwdErr= "Name is required";
	 } else {
			$pwd = test_input($_POST["pwd"]);
	    // check if password only contains letters and whitespace
	if (!preg_match("/^[a-zA-Z ]*$/",$pwd)) {
		$pwdErr = "Only letters and white space allowed";
		}
  }
}**/
?>
