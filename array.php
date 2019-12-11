<?php
/**
 * Created by PhpStorm.
 * User: TF
 * Date: 2019/10/17
 * Time: 19:41
 */
$attr = array(1,2,3,4);       //数组里面总共4个元素

while(list($key,$value) = each($attr))        //  each方法会把指针往下调，如果最后了就停止了while循环是进不来的，所以只能输出4行

    {

        echo $key."=>".$value."<br>";

    }

while(list($key,$value) = each($attr))

{

    echo $key."=>".$value."<br>";

}