<html>
<body>
<form action="<?php $_SERVER["PHP_SELF"]?>" method="post" enctype ="multipart/form-data">
Enter  The Image Name:<input type="text" name="image_name" id=""/><br/>
<input  name="image"  id ="image" accept ="image/jpg" type="file"><br/><br/>
<input type="submit" value="upload" name="submit"/>
</form>
<br/><br/>
<form action="<?php $_SERVER["PHP_SELF"]?>" method="post" enctype="multipart/ form-data">
retrive all  the images:
<input type="submit" value="submit" name="retrieve"/>
</form>
</body>
</html>
<?php
	$link=mysqli_connect("localhost", "root", "root", "VOTEDB");
	if(isset($_POST['retrieve']))
	{
		header("location:search.php");
	}
	if(isset($_POST['submit']))
	{
		if(isset($_FILES['image']))
		{	$name=$_POST['image_name'];
			$fp=addslashes(file_get_contents($_FILES['image']['tmp_image']));
		}
		$sql="insert into images(name, image) values('{$name}', '{$fp}');";
		mysqli_query($link, $sql) or die("ERROR in query  entry:".mysqli_error($link));
	}
?>			

