<!DOCTYPE html>
<html>
	<head>
		<title>PHP Request</title>
	</head>
	<body>
		<form method = "post" action = "<?php echo $_SERVER["PHP_SELF"]; ?>">Message to show <input type="text" name="fname"> <input type = "submit"></form>

		<?php
			if ($_SERVER["REQUEST_METHOD"] == "POST") {
				$toShow = $_REQUEST["fname"];

				if ($toShow != "") {
					echo "<h2>" . $toShow . "</h2>";
				}
			}
		?>
	</body>
</html>