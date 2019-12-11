<?php
/**
 * Created by PhpStorm.
 * User: TF
 * Date: 2019/10/14
 * Time: 20:29
 */

function search($arr, $num) {
   $len = count($arr);//返回数组中元素的数目，mode=1时递归地计数数组中元素的数目
    var_dump($len);
    $b=9.99;
    var_dump(floor($b));
    $start = 0;
    $end = $len - 1;

    $mid = floor(($start + $end) / 2);//返回不大于 value 的最接近的整数，舍去小数部分取整,返回值仍然是float
    var_dump($mid);

    while($start <= $end)
    {
            echo $start, ':', $mid, ':', $end, '<br />'; //输出查找流程

        if ($num == $arr[$mid]) {
                return $mid;
        }elseif ($num > $arr[$mid]) {
                $start = $mid + 1;
        } elseif ($num < $arr[$mid]) {
                $end = $mid - 1;
        }
        $mid = floor(($start + $end) / 2);
    }
    return -1;
}

$search_arr = array(1, 2, 3, 4, 5, 6, 7, 8, 9, 10);
echo '4的索引值为:', search($search_arr, 4);