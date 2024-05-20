<?php 

class InsertionSort
{
    public function sort(array $arr): array
    {
        $length = count($arr);
        for ($i = 1; $i<$length; $i++) {
            $key = $arr[$i];
            $j = $i-1;
            while ($j >= 0 && $arr[$j] > $key) {
                $arr[$j+1] = $arr[$j];
                $j--;
            }
            $arr[$j+1] = $key;
        }
        return $arr;
    }
}