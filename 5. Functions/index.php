<?php
    function fibonacci($times) {
        $previous = 0;
        $temp = 0;
        $toReturn = 1;

        for ($i = 1; $i < $times; $i++) {
            $temp = $toReturn;
            $toReturn += $previous;
            $previous = $temp;
        }

        return $toReturn;
    }

    function factorialNoRecursion($times) {
        $toReturn = 1;

        for ($i = 1; $i <= $times; $i++) {
            $toReturn *= $i;
        }

        return $toReturn;
    }

    function factorialWithRecursion($times) {
        if ($times > 0) {
            return $times * factorialWithRecursion($times - 1);
        }
        
        return 1;
    }
    
    echo fibonacci(10) . "<br>";
    echo factorialNoRecursion(5) . "<br>";
    echo factorialWithRecursion(5) . "<br>";
?>