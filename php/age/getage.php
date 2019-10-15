<!DOCTYPE html>
<html>
	<head>
		<title>Age verification Page</title>
	</head>
	<body>
		<h1>Age verification Page</h1>
		<?php
			$a = $_GET['age'];
			$v = ($a/18 != 0)
			echo (float $v);
		?>
	</body>
</html>
