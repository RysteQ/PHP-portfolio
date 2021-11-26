<?php
    define("MAXIMUM", 10000);
    define("MINIMUM", 0);
    define("DATASIZE", 100);

    function fillAnArrayWithRandomNumbers($times) {
        $toReturn = array();

        for ($i = 0; $i < $times; $i++) {
            array_push($toReturn, rand(MINIMUM, MAXIMUM));
        }

        return $toReturn;
    }

    function printArray($arrayToPrint) {
        for ($i = 0; $i < count($arrayToPrint); $i++) {
            echo $arrayToPrint[$i] . " ";
        }
    }

    function bubbleSort($arrayToSort) {
        $temp;

        for ($i = 0; $i < count($arrayToSort) - 1; $i++) {
            for ($j = count($arrayToSort) - 1; $j > $i; $j--) {
                if ($arrayToSort[$i] > $arrayToSort[$j]) {
                    $temp = $arrayToSort[$i];
                    $arrayToSort[$i] = $arrayToSort[$j];
                    $arrayToSort[$j] = $temp;
                }
            }
        }

        return $arrayToSort;
    }

    $randomArray = fillAnArrayWithRandomNumbers(DATASIZE);
    $sortedArray = bubbleSort($randomArray);

    printArray($randomArray);
    echo "<br><br><br><br>";
    printArray($sortedArray);
?>