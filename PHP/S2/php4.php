<?php
	if($_GET["name"]||$_GET["age"]) {
		echo "Welcome ". $_GET['name']. "<br/>";
		echo "You are ". $_GET['age']. "years old.";
		exit();
	}
	?>
<html>
<body>
<form action="<?php $_PHP_SELF?>" method="GET">
NAME: <input type="text" name="name"/>
AGE: <input tyoe="text" name="age"/>
<input type="submit"/>
</form>
</body>
</html>
