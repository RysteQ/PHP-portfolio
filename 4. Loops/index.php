<?php
    define("LIMIT", 10);
    define("MESSAGE_TO_PRINT", "Hello times ");

    for ($i = 0; $i < LIMIT; $i++) {
        echo MESSAGE_TO_PRINT . $i . "<br>";
    }
?>