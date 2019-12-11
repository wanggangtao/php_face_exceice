<?php
function foo(&$var)
{
    $var++;
}
function foo1($var)
{
    $var++;
}
$a=5;
foo($a);//引用传递
echo $a."\n";
foo1($a);//值传递
echo($a);
// $a is 6 here
?>