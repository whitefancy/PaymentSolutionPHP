<?php
//PHP 有四种不同的变量作用域：
//
//local
//
//global
//
//static
//
//parameter
$x=5; // 全局变量

function myTest()
{
    $y=10; // 局部变量
    echo "<p>测试函数内变量:<p>";
    //当我们调用myTest()函数并输出两个变量的值, 函数将会输出局部变量 $y 的值
    //，但是不能输出 $x 的值，因为 $x 变量在函数外定义，无法在函数内使用，如果要在一个函数中访问一个全局变量，需要使用 global 关键字。
    global $x;
    echo "变量 x 为: $x";
    echo "<br>";
    echo "变量 y 为: $y";
}

myTest();

echo "<p>测试函数外变量:<p>";
echo "变量 x 为: $x";
echo "<br>";
//然后我们在myTest()函数外输出两个变量的值，函数将会输出全局部变量 $x 的值，
//但是不能输出 $y 的值，因为 $y 变量在函数中定义，属于局部变量。
//不会报错
echo "变量 y 为: $y";
?>
<?php
$x=5;
$y=10;
//同一个文件中function不可以重名
function myTest1()
{
    //函数里可以改变全局变量的值 是引用 不是值传递
    global $x,$y;
    $y=$x+$y;
}

myTest1();
echo $y;
?>
<?php
$x=5;
$y=11;

function myTest2()
{
    $GLOBALS['y']=$GLOBALS['x']+$GLOBALS['y'];
}

myTest2();
echo $y;
?>

<?php

function myTest3()
{
    //当一个函数完成时，它的所有变量通常都会被删除。然而，有时候您希望某个局部变量不要被删除。
    //
    //要做到这一点，请在您第一次声明变量时使用 static 关键字：
    static $x=0;
    echo $x;
    $x++;
}

myTest3();
myTest3();
myTest3();

?>
<?php
//参数是通过调用代码将值传递给函数的局部变量。
//
//参数是在参数列表中声明的，作为函数声明的一部分：
function myTest4($x)
{
    echo $x;
}

myTest4(5);

?>
<?php
//NULL 值表示变量没有值。NULL 是数据类型为 NULL 的值。
//
//NULL 值指明一个变量是否为空值。 同样可用于数据空值和NULL值的区别。
//
//可以通过设置变量值为 NULL 来清空变量数据：
$x="Hello world!";
$x=null;
var_dump($x);
//常量是一个简单值的标识符（名字）。常量值被定义后，在脚本的其他任何地方都不能被改变。
// 区分大小写的常量名 常量是全局的
//常量在定义后，默认是全局变量，可以在整个运行的脚本的任何地方使用。
define("GREETING", "欢迎访问 php.cn");
echo GREETING; // 输出 "欢迎访问 php.cn"
echo '<br>';
echo greeting; // 输出 "greeting"
?>
<?php
function myTest5() {
    echo GREETING;
}

myTest5();    // 输出 "欢迎访问 php.cn"

