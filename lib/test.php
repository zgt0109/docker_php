<?php
  /*
  PHP练习
  */
  // date_default_timezone_set("PRC");
  // $txt = "Hello World!";
  // $x = 5;
  // $y = 7;
  // $z = 10.5;
  // echo $txt."\n";
  // echo $x."\n";
  // echo $y."\n";
  // echo $z."\n";

  // $x=5;
  // function test(){
  //   global $x;
  //   $y=10;
  //   echo "x=$x";
  //   echo "<br>";
  //   echo "y=$y";
  // }
  // test();
  // echo "<br>";
  // echo "*************************";
  // echo "<br>";
  // echo "x=$x";
  // echo "<br>";
  // echo "y=$y";

  // function test(){
  //   static $x=0;
  //   echo $x;
  //   $x++;
  // }
  // test();
  // echo "<br>";
  // test();
  // echo "<br>";
  // test();

  // function test($x){
  //   echo $x;
  // }
  // test(3)

  // echo "<h2>PHP</h2>";
  // echo "a","b","c","d";
  // echo "<h2>PHP 很有趣!</h2>";
  // echo "Hello world!<br>";
  // echo "我要学 PHP!<br>";
  // echo "这是一个", "字符串，", "使用了", "多个", "参数。";
  // echo "<br>";
  // $txt1 = "Learning Php";
  // $txt2 = "adfafa";
  // $arrays = array("A","B","C");
  //
  // echo $txt1;
  // echo "<br>";
  // echo $txt2;
  // echo "<br>";
  // echo "{$arrays[0]}"

  // print "<h2>PHP 很有趣!</h2>";
  // print "Hello world!<br>";
  // print "我要学习 PHP!<br>";
  //
  // $txt1="学习 PHP";
  // $txt2="RUNOOB.COM";
  // $cars=array("Volvo","BMW","Toyota");
  //
  // print $txt1;
  // print "<br>";
  // print "在 $txt2 学习 PHP ";
  // print "<br>";
  // print "我车的品牌是 {$cars[0]}";

  // $x = "Hello world!";
  // echo $x;
  // echo "<br>";
  // var_dump($x);
  // echo "<br>";
  // $x = 'Hello world!';
  // echo $x;
  // echo "<br>";
  // $x = 5985;
  // var_dump($x);
  // echo "<br>";
  // echo $x;
  // echo "<br>";
  // $x = 59.85;
  // var_dump($x);
  // echo "<br>";
  // echo $x;
  // $cars = array("Volvo","BWM","Toyota");
  // var_dump($cars);
  // echo "<br>";
  // // echo $cars;
  // class Car{
  //   var $color;
  //   function Car($color){
  //     $this->color = $color;
  //     echo $color;
  //   }
  //   function what_color(){
  //     return $this->color;
  //   }
  // }
  //
  // $herbie = new Car("white");

  // $x="Hello world!";
  // var_dump($x);
  // echo "<br>";
  // $x=null;
  // var_dump($x);
  // echo "<br>";

  // define('red', '红色大');
  // echo red;
  // echo "<br>";
  //
  // $x = "红色小";
  // echo $x;
  // echo "<br>";
  //
  // function test(){
  //   global $x;
  //   echo red;
  //   echo "<br>";
  //   echo $x;
  // }
  // test()

  // $a1="Aaaaaaaaaaaa";
  // $s1="Ssssssssssss";
  // echo $a1 .  "-" . $s1;
  // echo "<br>";
  // echo strlen($a1);
  // echo "<br>";
  // echo strlen($s1);
  // echo "<br>";
  // echo strpos("hello world", "world");
  //
  // echo $a1   .    $s1;
  // echo "<br>";
  // $x=10;
  // echo ++$x; // 输出11
  //
  // $y=10;
  // echo $y++; // 输出10
  //
  // $z=5;
  // echo --$z; // 输出4
  //
  // $i=5;
  // echo $i--; // 输出5
  // if (5 == '5') {
  //   # code...
  //   echo "5";
  // } else {
  //   # code...
  //   echo "not 5";
  // }

  // $x=100;
  // $y="100";
  //
  // var_dump($x == $y); // returns true because values are equal
  // echo "<br>";
  // var_dump($x === $y); // returns false because types are not equal
  // echo "<br>";
  // var_dump($x != $y); // returns false because values are equal
  // echo "<br>";
  // var_dump($x !== $y); // returns true because types are not equal
  // echo "<br>";
  //
  // $a = 50;
  // $b = 90;
  // var_dump($a);
  // var_dump($b);
  // var_dump($a > $b);
  // echo "<br>";
  // var_dump($a <  $b);

  // $x = array("a" => "red", "b" => "green");
  // $y = array("c" => "blue", "d" => "yellow");
  // $z = $x + $y; // $x 和 $y 数组合并
  // var_dump($z);
  // var_dump($x == $y);
  // var_dump($x === $y);
  // var_dump($x != $y);
  // var_dump($x <> $y);
  // var_dump($x !== $y);

  // 三目运算符
  // $test = "aaa";
  // $username = isset($test) ? $test : 'no';
  // echo $username, PHP_EOL;
  //
  // $u = $test ?: 'nobody';
  // echo $u, PHP_EOL;
  // echo 213123, PHP_EOL;
  // echo 1111111111111111, PHP_EOL;
  //
  //
  // $a = $_GET['user'] ?: 'nobody';
  // echo $a, PHP_EOL;
  //
  // $b = isset($_GET['user']) ? $_GET['user'] : 'nobody';
  // echo $b, PHP_EOL;


  //
  // if (condition) {
  //   # code...
  //   if (condition) {
  //     # code...
  //   } else {
  //     # code...
  //   }
  //
  // } else {
  //   # code...
  // }
  // switch (variable) {
  //   case 'value':
  //     # code...
  //     break;
  //
  //   default:
  //     # code...
  //     break;
  // }
  // $favcolor="red";
  // switch ($favcolor)
  // {
  // case "red":
  //     echo "你喜欢的颜色是红色!";
  //     break;
  // case "blue":
  //     echo "你喜欢的颜色是蓝色!";
  //     break;
  // case "green":
  //     echo "你喜欢的颜色是绿色!";
  //     break;
  // default:
  //     echo "你喜欢的颜色不是 红, 蓝, 或绿色!";
  // }
  //
  // echo "<br>";
  // echo "I like " . $cars[0] . ", " . $cars[1] . " and " . $cars[2] . ".";
  // echo "<br>";
  // echo count($cars).count($cars[0]);
  // echo "<br>";
  // echo strlen($cars[0]);
  //
  // $cars=array("Volvo","BMW","Toyota");
  // $arrlength = count($cars);
  // echo $arrlength;
  // echo "<br>";
  // for($i=0;$i<$arrlength;$i++){
  //   echo $cars[$i];
  //   echo "<br>";
  // }
  // $age=array("Peter"=>"35","Ben"=>"37","Joe"=>"43");
  // // echo "Peter is " . $age['Peter'] . " years old.";
  // foreach ($age as $key => $value) {
  //   # code...
  //   echo "Key=" . $key .", Value=". $value;
  //   echo "<br>";
  // }

  // $cars=array("Volvo","BMW","Toyota");
  // rsort($cars);
  // print_r($cars)

  // $age=array("Peter"=>"35","Ben"=>"37","Joe"=>"43");
  // ksort($age);
  // print_r($age);

  // $x = 75;
  // $y = 25;
  // function add(){
  //   $GLOBALS['z'] = $GLOBALS['x'] + $GLOBALS['y'];
  // }
  // add();
  // echo $z;
  //
  // echo "<br>";
  //
  // echo $_SERVER['PHP_SELF'];
  // echo "<br>";
  // echo $_SERVER['SERVER_NAME'];
  // echo "<br>";
  // echo $_SERVER['HTTP_HOST'];
  // echo "<br>";
  // echo $_SERVER['HTTP_REFERER'];
  // echo "<br>";
  // echo $_SERVER['HTTP_USER_AGENT'];
  // echo "<br>";
  // echo $_SERVER['SCRIPT_NAME'];

  // $i=1;
  // while($i<=5){
  //   echo "The number is ". $i ."<br>";
  //   $i++;
  // }
  // echo "<br>";
  // // do{
  // //   $i++;
  // //   echo "The number is".$i."<br>";
  // // }
  // // while ($i<=5);
  // for ($i=0; $i <10 ; $i++) {
  //   # code...
  //   echo "The number is".($i+1)."<br>";
  // }
  // echo "<br>";
  // $x=array("one","two","three");
  // foreach ($x as $value)
  // {
  // echo $value . "<br>";
  // }
  namespace MyProject {
    class test {
      function add($x,$y)
      {
      $total=$x+$y;
      echo  '方法名为：' . __METHOD__ . "<br>";
      echo '类名为：'  . __CLASS__ . "<br>";
      echo  '函数名为：' . __FUNCTION__ ."<br>";
      return $total;
      }
    }
    $t= new test();
    echo '命名空间为："', __NAMESPACE__, '"'."<br>"; // 输出 "MyProject"
    // $t->add($x, $y)
    echo "1 + 16 = " . $t->add(1,16)."<br>";
    echo '这是第 " '  . __LINE__ . ' " 行'."<br>";
    echo '该文件位于 " '  . __FILE__ . ' " '."<br>";
    echo '该文件位于 " '  . __DIR__ . ' " '."<br>";
    echo "<br>";
    echo "<br>";
    echo "<br>";
  }


  // class Base {
  //   public function sayHello(){
  //     echo "Hello ";
  //   }
  // }
  // /**
  //  * 代码复用
  //  */
  // trait SayWorld
  // {
  //   public function sayHello()
  //   {
  //     # code...
  //     parent::sayHello();
  //     echo "World!";
  //   }
  // }
  // class MyHelloWorld extends Base{
  //   use SayWorld;
  // }
  //
  // $o = new MyHelloWorld();
  // $o->sayHello();

  // trait HelloWorld{
  //   public function sayHello(){
  //     echo "hello world!";
  //   }
  // }
  //
  // class TestAAA{
  //   use HelloWorld;
  //   public function sayHello(){
  //     echo "hello MAY";
  //   }
  // }
  // $o = new TestAAA();
  // $o->sayHello();

  // trait Drive {
  //       public $carName = 'trait';
  //       public function driving() {
  //         echo "driving {$this->carName}\n";
  //       }
  //   }
  //   class Person {
  //       public function eat() {
  //           echo "eat\n";
  //       }
  //   }
  //   class Student extends Person {
  //       use Drive;
  //       public function study() {
  //           echo "study\n";
  //       }
  //   }
  //   $student = new Student();
  //   $student->study();
  //   $student->eat();
  //   $student->driving();
  namespace T1\B1 {
    echo '命名空间为："', __NAMESPACE__, '"'."<br>"; // 输出 "MyProject"
    echo "2424214" . "<br>";
  }

  namespace duixiang{
    class Site {
    /* 成员变量 */
    var $url;
    var $title;

    // 构造函数
    function __construct($spar1, $spar2){
      $this->url = $spar1;
      $this->title = $spar2;
    }

    /* 成员函数 */
    function setUrl($par){
       $this->url = $par;
    }

    function getUrl(){
       echo $this->url . "<br>";
    }

    function setTitle($par){
       $this->title = $par;
    }

    function getTitle(){
       echo $this->title . "<br>";
    }
  }

  $runoob = new Site('www.runoob.com',"菜鸟教程1"  );
  $taobao = new Site('www.taobao.com', "淘宝1");
  $google = new Site('www.google.com', "Google 搜索1");

  // 调用成员函数，设置标题和URL
  // $runoob->setTitle( "菜鸟教程" );
  // $taobao->setTitle( "淘宝" );
  // $google->setTitle( "Google 搜索" );
  //
  // $runoob->setUrl( 'www.runoob.com' );
  // $taobao->setUrl( 'www.taobao.com' );
  // $google->setUrl( 'www.google.com' );

  // 调用成员函数，获取标题和URL
  $runoob->getTitle();
  $taobao->getTitle();
  $google->getTitle();

  $runoob->getUrl();
  $taobao->getUrl();
  $google->getUrl();
  }


  namespace xigouhanshu {
    class MyDestructableClass {
     function __construct() {
         print "构造函数<br>";
         $this->name = "MyDestructableClass";
     }

     function __destruct() {
         print "销毁 ".$this->name . "<br>";
     }
  }

  $obj = new MyDestructableClass();
  echo "<br>";
  echo "<br>";
  echo "<br>";

  // $t=date("H");
  // if ($t<"20")
  // {
  //     echo "Have a good day!". "<br>";
  // }
  }

  // namespace shuxing {
  //   class MyClass{
  //     public $public ="Public";
  //     protected $protected = "Protected";
  //     private $private = "Private";
  //     function printHello(){
  //       echo $this->public;
  //       echo $this->protected;
  //       echo $this->private;
  //     }
  //   }
  //   $obj = new MyClass();
  //   echo $obj->public;
  //   echo $obj->protected;
  //   echo $obj->private;
  //   $obj->printHello();
  // }

  namespace zgt{
    echo "<br>";
    echo "<br>";
    echo "<br>";
    
  }

 ?>
