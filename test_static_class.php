<?php
/**
 * Created by PhpStorm.
 * User: TF
 * Date: 2019/9/26
 * Time: 9:24
 */
//hahha
//访问常量const用selfklkjkjlkjlk
//访问变量const用this
//类中的静态属性可以直接访问
//1.静态方法只能操作静态变量
//2.静态方法不能操作非静态变量.
//静态变量可以初始化，非静态变量不能初始化，只能在构造函数中生成
//static 修饰的类方法为静态方法，在静态方法中只能调用静态变量，不能调用普通变量
//在类的内部访问该类的静态方法 self::静态方法名
//在类的内部访问父类的静态方法 parent::静态方法名
//在类的外部访问静态方法 类名::静态方法名

class Repair_parts
{

    public function __construct()
    {

    }

    public static  $b="变量";
    public function getList()
    {
        echo"我是公有类";
        echo "</br>";
        Repair_parts::getList1();//公有类可以直接调用静态类
        echo "</br>";
        echo(Repair_parts::$b);//公有类可以直接调用静态类

    }
    public static function getList1()
    {
        echo"我是公有类静态类";
        echo "</br>";

    }

    static public  function part_num()//敬爱方法只能调用静态变量
    {

        echo"你好，我是静态类";
        echo "</br>";
        Repair_parts::getList1();//静态类可以直接调用，不用生成对象
        $new_a=new Repair_parts();//静态类不能直接调用非静态类，因为非静态类只只有在生成实例之后，才会分配内存，所以不能直接调用
        $new_a->getList();//调用非静态方法
    }
}
//Repair_parts::part_num();//
echo Repair_parts::$b;//调用静态属性
//$new_b=new Repair_parts();//生成实例
//$new_b->getList();

?>
