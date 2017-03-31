<?php
  $tid = $_GET['tid'];
  // echo "你想看".$tid."行留言";
  $fh = fopen('./msg.txt', 'r');

  $i = 1;

  while (($row = fgetcsv($fh)) != false) {
    # code...
    if ($i ==$tid) {
      # code...
      // print_r($row);
      echo "<h1>".$row[0]."</h1>";
      echo "<p>".$row[1]."</p>";
    }
    $i += 1;
  }
  // print_r(fgetcsv($fh));
  // print_r(fgetcsv($fh));

  echo "读取成功";
 ?>
