<html>
<head>
<title>php1</title>
</head>
<body>
<?php
	$x = 5;
	$y = 10;
	function mytest() {
		global $x, $y;
		$y = $x+$y;
	}
	mytest();
	echo $y;
?>
</body>
</html>
