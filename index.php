<?php
//минимальный элемент одномерного массива
$arr = [45,2,4,3,54,21,4,22,35,442];
echo min($arr).'<br>'; 
//сумма всех элементов двумерного массива
$arr1 = [[45,2,4,3,54],[21,4,22,35,442]];
function array_multisum(array $arr1): float {
    $sum = array_sum($arr1);
    foreach($arr1 as $child) {
        $sum += is_array($child) ? array_multisum($child) : 0;
    }
    return $sum;
}
echo array_multisum($arr1);
?>