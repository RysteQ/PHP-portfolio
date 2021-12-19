<!DOCTYPE html>
<html>
	<head>
		<title>PHP Request</title>
	</head>
	<body>
		<?php
			define("TO_REPLACE", "/cockatiel/i");
			define("STRING", "This is a nice cockatiel");

			echo preg_replace(TO_REPLACE, "birb", STRING) . " !!!!!!";
		?>
	</body>
</html>