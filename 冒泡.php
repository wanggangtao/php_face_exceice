<?php
function bubble($arr) {
    $len = count($arr);
    for ($i = 0; $i < $len; ++$i)
    {
        for ($j = 0; $j < $len - $i - 1; ++$j) {
            if ($arr[$j] > $arr[$j + 1]) {
                list($arr[$j], $arr[$j + 1]) = array($arr[$j + 1], $arr[$j]);//list只能用于数字索引，将一组变量赋值
            }
        }
    }
    return $arr;
}