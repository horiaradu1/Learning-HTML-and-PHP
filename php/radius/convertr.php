<!DOCTYPE html>
<html>
	<head>
		<title>Area and circumference of a circle Page</title>
	</head>
	<body>
		<h1>Area and circumference of a circle Page</h1>
		<?php
			$r = $_GET['rad'];
			$a = $r * $r * 3.14;
			$c = $r * 2 * 3.14;
			echo ("For the circle with the radius " . $r . " the area is " . $a . " and the circumference is " . $c);
		?>
	</body>
</html>
