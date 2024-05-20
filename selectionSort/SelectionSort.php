<?php

class SelectionSort
{
    public function sort(array $arr): array
    {
        $len = count($arr);
        $przejsc = 0;
        $zamian = 0;
        for ($i = 0; $i < $len; $i++) {
            $min = $i;
            $przejsc++;
            for ($j=$i+1; $j<$len; $j++) {
                if ($arr[$j] < $arr[$min]) {
                    $min = $j;
                }
            }
            
            if ($min != $i) {
                $temp = $arr[$i];
                $arr[$i] = $arr[$min];
                $arr[$min] = $temp;
                $zamian++;
            }
        }
        // echo "przejsc: ".$przejsc.EOL;
        // echo "zamian: ".$zamian.EOL;
        return $arr;
    }
}