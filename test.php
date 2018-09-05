<!-- <?php
header('Content-type: text/html; charset=UTF8');


echo "string 汉字";
?> -->


<!-- 类的定义及构造函数的使用 -->
<!-- <?php
class Person {
    var $name;
    var $age;
    var $sex;

    //定义一个构造方法初始化赋值
    function __construct($name, $sex, $age = 16) {
        $this->name = $name;
        $this->sex = $sex;
        $this->age = $age;
    }
    function say() {
        echo "我的名字叫：".$this->name."<br />";
        echo "我的性别是：".$this->sex."<br />";
		echo "我的年龄是：".$this->age;
    }
}
$p1=new Person("张三", "male");
$p1->say();
?> -->


<!-- 参数设有默认值的情况 -->
<!-- <?php
function makecoffee($type = "cappuccino")
{
    return "Making a cup of $type.\n";
}
echo makecoffee();
echo makecoffee(null);
echo makecoffee("espresso");
?> -->


<!-- 键值对的设置=>采用的运算符 -->
<!-- <?php
$arr = array('apple'=>"苹果",'banana'=>"香蕉",'pineapple'=>"菠萝");
$arr0=$arr['apple'];
if(isset($arr0)) 
{
	print_r($arr0);
}
?> -->


<!-- PHP中可用的注释方式 -->
<!-- <?php
    echo "This is a test"; // This is a one-line c++ style comment
    /* This is a multi line comment
       yet another line of comment */
    echo "This is yet another test";
    echo 'One Final Test'; # This is a one-line shell-style comment
?>  -->



