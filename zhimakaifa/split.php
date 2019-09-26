<?php
/**
 * Created by PhpStorm.
 * User: TF
 * Date: 2019/9/5
 * Time: 22:31
 */
$str="我是王刚涛热狗黑哥哥让人讨厌是今天一天 晚饭也热热我是王刚涛热狗黑哥哥让人讨厌是今天一天 晚饭也热热我是王刚涛热狗黑哥哥让人讨厌是今天一天 晚饭也热热我是王刚涛热狗黑哥哥让人讨厌是今天一天 晚饭也热热";
function mb_str_split($str)
{
    return preg_split('/(?<!^)(?!$)/u', $str );
}
$arr2 = mb_str_split($str);
$i=count($arr2);
$m=18;
$a="";
for ($m = 0; $i > $m;)
{
    $a.=$arr2[$m++];
    if($m%18==0)
    {
        $str='</br>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp';
        $a.=$str;
    }
    var_dump($a);
}

//$arr2 = mb_split($str, 18*3);
//var_dump($arr2);