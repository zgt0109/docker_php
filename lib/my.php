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
  print_r($_POST);
  $str = $_POST['title'].",".$_POST['content']."\n";

  $fh = fopen('./msg.txt', 'a');
  fwrite($fh, $str);
  fclose($fh);
  echo "留言成功";
 ?>
