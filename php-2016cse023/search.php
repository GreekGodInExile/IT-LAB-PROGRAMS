<?php
	$link=mysqli_connect("localhost", "root", "root", "VOTEDB");
	$msg="";
	$sql="select * from images";
	$query=mysqli_query($link, $sql);
	if($query)
	{
		$res=mysqli_query($link, $sql);
		while($row=mysqli_fetch_array($res))
		{
			$id=$row['id'];
			$name=$row['name'];
			$image=$row['image'];
		
			$msg.='<a href="search.php?id='.$id.' "> <img src="data:image/jpg;base64, '.base64_encode($row['image']).' "/>
			</a>';
		}
	}
	else
		$msg.="query failed";
?>
<div>
	<?php
	echo $msg;
	?>
</div>
