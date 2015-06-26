<?php
$connection = mysql_connect("127.0.0.1","robo9176_teacher","2G05N0HUJi0n");
$db = mysql_select_db("robo9176_classbook", $connection);
if (mysqli_connect_errno())
  {
     echo "The connection failed with the error: " . mysqli_connect_error();
  }
 ?>