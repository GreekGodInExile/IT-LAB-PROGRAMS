<html><body>
<?php $array = array(1,2,3,4,5);
	foreach ($array as $value) {
		echo "value is $value<br/>";
	}
	define("MINSIZE", 50);
	echo MINSIZE;
	echo constant("MINSIZE");
	$salaries = array("james"=>1000, "shwetha"=>1500, "sunil"=>2000);
	echo ("sakaries of james is ".$salaries["james"]);
?>
</body>
</html>
