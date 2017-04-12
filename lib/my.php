<?php
  // $str = "_111.11";
  // $b = 123;
  // echo $str + $b ."\n";
  //
  // $arrayName = array("A", "1" => "B", "3" => "C");
  // print_r($arrayName);

  // print_r($_GET);
  // echo "<br>";
  // $fh = fopen('./msg.txt', 'a');
  // fwrite($fh, "Hello World"."\n");
  // fclose($fh);
  // echo "OK";
  // print_r($_POST);
  // $str = $_POST['title'].",".$_POST['content']."\n";
  //
  // $fh = fopen('./msg.txt', 'a');
  // fwrite($fh, $str);
  // fclose($fh);
  echo "留言成功"."\n";
  $a ="aa";
  $aa = "bb";
  echo $$a."\n";
  echo "<br>";

  function print_A(){
    $A = "AAAAAA";
    echo "A值为:".$A."<p>";
    // return($A);
  }
  // print_A();
  $B = print_A();
  echo "B的值是：".$B."<p>";
  echo "<br>";

  $attr = array("0"=> "aa", "1"=>"bb","2"=>"cc");
  echo $attr['2'];
  echo "<br>";

  $x =1;
  ++$x;
  $y = $x++;
  echo $y;
  echo "<br>";

  $a = array("0"=> "aa", "1"=>"bb","2"=>"cc");
  echo implode('-', $a);
  echo "<br>";

  $str = 'hello,world,heiheihei,php';
  $arr = explode(',', $str);
  print_r($arr);

  echo "<br>";

  date_default_timezone_set('asia/shanghai');
  echo date("Y-m-d H:i:s");
  echo "<br>";
  echo time("Y-m-d H:i:s")."<br>";

  $attr = array(1,2,3,4);
  while(list($key,$value) = each($attr)){
     echo $key."=>".$value."<br>";
  }
  while(list($key,$value) = each($attr)){
     echo $key."=>".$value."<br>";
  }
 ?>
