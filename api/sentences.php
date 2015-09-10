<?php
include ('../db_config.php');

$num = rand(2,55);

mysql_query("SET NAMES 'utf8'");
mysql_query("SET CHARACTER SET 'utf8'");
$query = "SELECT * FROM QUESTIONS WHERE TM_QID = '". $num ."'";

      $get_sentences = mysql_query($query, $con);

      if(! $get_sentences)
      {
        die('Could not get data: ' . mysql_error());
      }
      $rows = array();
			while($row = mysql_fetch_array($get_sentences, MYSQL_ASSOC))
			{
              $rows[] = $row;

				}
        print json_encode($rows);
?>
