<?php
include('db_config.php');
header('Content-Type: text/html; charset=utf-8');
$file = fopen('btl.csv', 'r');

while (($line = fgetcsv($file)) !== FALSE) {
      //$line is an array of the csv elements
      $greek = $line[1];
      $eng = $line[0];
      echo "INSERT INTO QUESTIONS (TM_ENG,TM_GR) VALUES('$eng','$greek');" . "<br>";


}

fclose($file);

 ?>
