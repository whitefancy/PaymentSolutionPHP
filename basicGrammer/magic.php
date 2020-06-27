<?php
//PHP 向它运行的任何脚本提供了大量的预定义常量。
//不过很多常量都是由不同的扩展库定义的，只有在加载了这些扩展库时才会出现，
//或者动态加载后，或者在编译时已经包括进去了。
//__NAMESPACE__
//当前命名空间的名称（区分大小写）。此常量是在编译时定义的（PHP 5.3.0 新增）。

namespace MyProject;
echo '命名空间为："', __NAMESPACE__, '"'; // 输出 "MyProject"

//__LINE__
//文件中的当前行号。

echo '这是第 “ ' . __LINE__ . ' ” 行';
//__FILE__
//文件的完整路径和文件名。如果用在被包含文件中，则返回被包含的文件名。
//自 PHP 4.0.2 起，__FILE__ 总是包含一个绝对路径（如果是符号连接，则是解析后的绝对路径），而在此之前的版本有时会包含一个相对路径。

echo '该文件位于 “ ' . __FILE__ . ' ” ';
//__DIR__
//文件所在的目录。如果用在被包括文件中，则返回被包括的文件所在的目录。

echo '该文件位于 “ ' . __DIR__ . ' ” ';
//__FUNCTION__
//函数名称（PHP 4.3.0 新加）。自 PHP 5 起本常量返回该函数被定义时的名字（区分大小写）。在 PHP 4 中该值总是小写字母的。

function test()
{
    echo '函数名为：' . __FUNCTION__;
}

test();
//__CLASS__
//类的名称（PHP 4.3.0 新加）。自 PHP 5 起本常量返回该类被定义时的名字（区分大小写

class test
{
    function _print()
    {
        echo '类名为：' . __CLASS__ . "<br>";
        echo '函数名为：' . __FUNCTION__;
    }
}

$t = new test();
$t->_print();
//__TRAIT__
//Trait 名包括其被声明的作用区域（例如 Foo\Bar）。
//
//从基类继承的成员被插入的 SayWorld Trait 中的 MyHelloWorld 方法所覆盖。其行为 MyHelloWorld 类中定义的方法一致。优先顺序是当前类中的方法会覆盖 trait 方法，而 trait 方法又覆盖了基类中的方法。

class Base
{
    public function sayHello()
    {
        echo 'Hello ';
    }
}

trait SayWorld
{
    public function sayHello()
    {
        parent::sayHello();
        echo 'World!';
    }
}

class MyHelloWorld extends Base
{
    use SayWorld;
}

$o = new MyHelloWorld();
$o->sayHello();
//__METHOD__
//类的方法名（PHP 5.0.0 新加）。返回该方法被定义时的名字（区分大小写）。
//情况一:
//    __FUNCTION__与__METHOD__ 同处于“类外”的函数体中,他们的返回值是一样一样滴.
//情况二:
//    __FUNCTION__与__METHOD__ 同处于“类内”的函数体中,__METHOD__ 比 __FUNCTION__前面多了个“类名::”

function test2()
{
    echo '函数名为：' . __METHOD__;
}

test2();

