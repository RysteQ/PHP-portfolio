<!DOCTYPE html>
<html>
	<body>
		<?php
			define("TO_REPLACE", "/cockatiel/i");
			define("STRING", "This is a nice cockatiel");

			echo preg_replace(TO_REPLACE, "birb", STRING) . " !!!!!!";
		?>
	</body>
</html>