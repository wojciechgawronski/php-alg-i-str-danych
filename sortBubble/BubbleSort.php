<?php

class BubbleSort
{
    public function sort(array &$arr): void {
        $swappedCounter = 0;
        $loopCounter = 0;
        $arrLength = count($arr);
        $lastSwapIndex = $arrLength - 1;

        for ($i = 0; $i < $arrLength; $i++) {
            $newSwapIndex = 0;
            $swapped = false;

            for ($j = 0; $j < $lastSwapIndex; $j++) {
                if ($arr[$j] < $arr[$j + 1]) { 
                    $temp = $arr[$j];
                    $arr[$j] = $arr[$j + 1];
                    $arr[$j + 1] = $temp;
                    $newSwapIndex = $j;
                    $swapped = true;
                    $swappedCounter++;
                }
                $loopCounter++;
            }

            $lastSwapIndex = $newSwapIndex;

            if (!$swapped) {
                break; // No swaps mean the array is sorted
            }
        }

        // echo "Swap counter: $swappedCounter" . PHP_EOL;
        // echo "Loops: $loopCounter" . PHP_EOL;
    }

    public function sortNotEfficient(array &$arr): void
    {
        $swappedCounter = 0;
        $loopCounter = 0;
        for ($i=0; $i < count($arr); $i++) {
            for ($j=0; $j< count($arr)-1; $j++) {
                if ($arr[$j] < $arr[$j+1]) {
                    $temp = $arr[$j];
                    $arr[$j] = $arr[$j+1];
                    $arr[$j+1] = $temp;
                    $swappedCounter++;
                }
                $loopCounter++;
            }
        }
        // echo "Swap counter: $swappedCounter".EOL;
        // echo "loop Counter: $loopCounter".EOL;
    }
}
