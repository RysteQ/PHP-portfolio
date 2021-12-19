<!DOCTYPE html>
<html>
    <head>
        <title>GLOBALS</title>
    </head>
    <body>
        <?php
            function usingGlobals($value) {
				$GLOBALS['globalValue'] = $value;
			}

			usingGlobals(10);

			echo "$globalValue";
        ?>
    </body>
</html>