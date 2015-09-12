<?php
include('db_config.php');



$num = rand(2,55);

mysql_query("SET NAMES 'utf8'");
mysql_query("SET CHARACTER SET 'utf8'");
$query = mysql_query("SELECT * FROM QUESTIONS WHERE TM_QID = '". $num ."'");

$numrows = mysql_num_rows($query);

if($numrows!=0){
  while($row=mysql_fetch_assoc($query)){
    $id = $row['TM_QID'];
    $gr = $row['TM_GR'];
    $en = $row['TM_ENG'];
  }

mysql_close($con);
}
 ?>
