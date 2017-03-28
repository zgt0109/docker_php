<?php
  $conn = mysql_connect($_ENV['DB_HOST'], $_ENV['DB_USER'], '');
  if(!$conn){
    die('mysql connect error');
  }else{
    echo 'succes';
  }

?>
