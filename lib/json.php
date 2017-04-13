<?php
/*
  function createHtmlTag($tag='')
  {
    # code...
    echo "<h1>$tag</h1>"."\n";
  }
  createHtmlTag("Hello");
  // serialize($value)
  createHtmlTag("JSON和serialize对比");
  $member = array("username","age");

  var_dump($member);

  $jsonObj = json_encode($member);
  echo "<br>";
  $a  = json_decode($jsonObj);
  print_r($a);
  $serializeObj = serialize($member);
  createHtmlTag($jsonObj);
  createHtmlTag($serializeObj);
*/

$number = "1234567890";
echo number_format($number,2);
echo "<br>";
// $str = '1234567890';
// echo substr(number_format($str,','),0,-2);
echo number_format("1234567890");
 ?>
