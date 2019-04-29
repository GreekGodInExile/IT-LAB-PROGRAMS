<?php 
//check if form was submitted
if($_SERVER["REQUEST_METHOD"]=="POST")
{
	//check if file was uploaded without errors
	if(isset($_FILES["fileUp"])&& $_FILES["fileUp"]["error"]==0)
	{
		$allowed_ext	=array("jpg"=>"image/jpg",
			"jpeg"=>"image/jpeg",
			"gif"=>"image/gif",
			"png"=>"image/png");
		$file_name=$_FILES["fileUp"]["name"];
		$file_type=$_FILES["fileUp"]["type"];
		$file_size=$_FILES["fileUp"]["size"];
	//verify file extension
		$ext=pathinfo($file_name,PATHINFO_EXTENSION);
		if(!array_key_exists($ext, $allowed_ext))
			die("Error: Please select a valid file format.");
	//Verify file size 2Mb max
		$maxsize=2*1024*1024;
		if($file_size>$maxsize)
			die("Error: File size larger than allowed limit.");
	//Verify MIME type opf file
		if(in_array($file_type, $allowed_ext))
		{
			//Check whether file exists before uploading it 
			if(file_exists("upload/".$_FILES["fileUp"]["name"]))
				echo $_FILES["fileUp"]["name"]."is already existing";
			else
			{
				move_uploaded_file($_FILES["fileUp"]["tmp_name"],
				"upload/".$_FILES["fileUp"]["name"]);
				echo "Your file was uploaded successfully!";
			}
		}
		else
		{
			echo "Error: Please try again later";
		}
	}
	else	
	{
		echo "Error:".$_FILES["fileUp"]["error"];
	}
}
?>
