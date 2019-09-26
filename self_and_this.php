<?php
/**
 * Created by PhpStorm.
 * User: TF
 * Date: 2019/9/26
 * Time: 10:18
 */
//静态函数只能使用静态变量，静态函数和变量的引用是通过 self::函数名() 和 self::变量名。
//上述实例中，静态变量的引用是由类名(exampleClass::$foo)，或者 self:: (self::$foo)，
//当在这个类的静态方法[称为 静态函数()]里使用时。类的正则函数和变量需要一个对象上下文来引用，
//他们不能脱离对象上下文而存在。对象上下文由 $this 提供
//self 不使用前面的 $，因为 self 不意味着是一个变量而是类结构本身。而 $this 引用一个特定的变量，所以有前面的 $ 。
//1.self代表类，$this代表对象
//2.能用$this的地方一定使用self，能用self的地方不一定能用$this
//静态的方法中不能使用$this，静态方法给类访问的。
//静态变量和静态方法始终属于类，而非属于实例化后的对象，因此在静态方法中无法使用$this，
//因为此时所处的位置是类所在的指针，只能使用self调用静态方法或者静态变量。
class exampleClass
{
    public static $foo;
    public $bar;
    public function regularFunction() { echo $this->bar; }//在类中访问非静态属性，用this
    public static function staticFunction() { echo self::$foo; }//在类中访问静态属性，用self
    public static function anotherStatFn() { self::staticFunction();self::$foo++; }//在类中访问静态方法，用self
    public function regularFnUsingStaticVar() { echo self::$foo;}//在类中访问静态方法，用self

    // 注: PHP 5.3 使用 $this::$bar 代替 self::$bar 是允许的
}
//exampleClass::$foo = "Hello";
//$obj = new exampleClass();
//$obj->bar = "World!";
//exampleClass::staticFunction(); /* 打印 Hello */
//$obj->regularFunction(); /* 打印 World! */




$ob1 = new exampleClass();
$ob2 = new exampleClass();
$ob3 = new exampleClass();//同一个类的所有实例，共用同一个静态变量在内存中的备份
//exampleClass::$foo =1;
//var_dump(exampleClass::$foo);
exampleClass::anotherStatFn();
var_dump(exampleClass::$foo);
$ob3->anotherStatFn();
var_dump(exampleClass::$foo);
$ob2->anotherStatFn();
var_dump(exampleClass::$foo);//修改内存中仅一份静态变量的备份

